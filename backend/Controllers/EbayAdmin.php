<?php

namespace Okay\Admin\Controllers;

use DiDom\Document;
use Okay\Admin\Helpers\BackendCategoriesHelper;
use Okay\Admin\Helpers\BackendFeaturesHelper;
use Okay\Admin\Helpers\BackendProductsHelper;
use Okay\Admin\Helpers\BackendSpecialImagesHelper;
use Okay\Admin\Helpers\BackendValidateHelper;
use Okay\Admin\Helpers\BackendVariantsHelper;
use Okay\Admin\Requests\BackendProductsRequest;
use Okay\Core\Import;
use Okay\Core\QueryFactory;
use Okay\Entities\BrandsEntity;
use Okay\Entities\CurrenciesEntity;
use Okay\Entities\RouterCacheEntity;



class EbayAdmin extends IndexAdmin
{
    private $userAgent;
    private $parsedLot;
    private $banlist = array();
    private $sellerMinPositive = 97;
    private $sellerMinFeedback = 1000;
    private $min_prib = 10;
    private $max_prib = 100000;
    private $nacenka_percent = 100; // в процентах %% — учитываются миша, армяне и я

    public $debug;

    /**
     * @var QueryFactory
     */
    private static $queryFactory;



    /**
     * пробелы в запросе заменить на +
     * _fcid=186 — испания
     * _stpos=03560 — El Campello (Alicante) 03560 Ausias March, 30, 1C
     * _sacat=6000 и _osacat=6000 —  motors
     * LH_ItemCondition=3 - новый
     * &rt=nc&LH_BIN - BIN
     * &_sop=15 - сортировка Price + Shipping:lowers first
     * &_udlo= мин цена
     * &_udhi= макс цена
     */
    const EBAY_MOTOR_LIST_URL = 'https://www.ebay.com/sch/i.html?_stpos=03560&_fcid=186&LH_ItemCondition=3&rt=nc&LH_BIN=1&_stpos=03000&_fcid=186&_osacat=6000&_sacat=6000&_sop=15&_nkw=';
    const EBAY_ITEM_URL = 'https://www.ebay.com/itm/';


    public function fetch(
        BackendCategoriesHelper    $backendCategoriesHelper,
        BrandsEntity               $brandsEntity,
        CurrenciesEntity           $currenciesEntity,
        BackendProductsRequest     $productRequest,
        BackendProductsHelper      $backendProductsHelper,
        BackendVariantsHelper      $backendVariantsHelper,
        BackendFeaturesHelper      $backendFeaturesHelper,
        BackendSpecialImagesHelper $backendSpecialImagesHelper,
        BackendValidateHelper      $backendValidateHelper,
        RouterCacheEntity          $routerCacheEntity
    ) {
        if ($this->request->method('post')) {
            $this->parsedLot = self::parse($_POST);
            $this->design->assign('ebayRequest', $_POST); // $this->request->post('ПОЛЕ') может брать только с ПОЛЕ
            $this->design->assign('product', $this->parsedLot);
//$this->design->assign('ebayBrand', $this->parsedLot);
        }

        $brandsCount = $brandsEntity->count();
        $brands = $brandsEntity->find(['limit' => $brandsCount]);
        $this->design->assign('brands',     $brands);

        $this->design->assign('ebayMotorListUrl', self::EBAY_MOTOR_LIST_URL);
        $this->design->assign('categories', $backendCategoriesHelper->getCategoriesTree());
        $this->response->setContent('product.tpl');
    }


    function parse($request) {
        if (!$request['keyword']) {
            $this->parsedLot->error = 'В запросе для Ebay нет keyword';
            return $this->parsedLot;
        }
        require_once __DIR__.'/../../thirdParty/DiDom/Document.php';
        require_once __DIR__.'/../../thirdParty/DiDom/Encoder.php';
        require_once __DIR__.'/../../thirdParty/DiDom/Errors.php';
        require_once __DIR__.'/../../thirdParty/DiDom/Query.php';
        require_once __DIR__.'/../../thirdParty/DiDom/Node.php';
        require_once __DIR__.'/../../thirdParty/DiDom/Element.php';

        // если на входе номер лота — сразу идем за ним
        if (strlen($request['keyword']) == 12 && is_numeric($request['keyword'])) {
            $this->parsedLot = self::getitemDetails($request['keyword']);
        } else {
            $this->userAgent = self::getRandomUseragent();
            $curl = self::request($request, 1);
            if (!empty($this->debug['errors'])) {
                return $curl;
            }

            $document = new Document($curl['response']);
            // https://github.com/Imangazaliev/DiDOM/blob/master/README-RU.md
            $arr = $document->find('.s-item__wrapper'); //s-item__link

            $lots = [];
            foreach ($arr as $item) {
                // парсер выдает пару пустых итемов, пропустим их
                $link = $item->first('.s-item__link');
                $itm = parse_url($link->getAttribute('href'), PHP_URL_PATH);
                preg_match('/\d{12}/', $itm, $itemNo);
                if (!$itemNo) {
//                prettyDump('пропускаем левый итем в строке '.__LINE__);
                    continue;
                }
                // если селлер не соответсвует нашим критериям — пропускаем
                if ($sellerBlock = $item->first('.s-item__seller-info-text')) {
                    $sellerArray = explode(' ', $sellerBlock->text());
                    if (intval($sellerArray[2]) < $this->sellerMinPositive) continue;
                    if (preg_replace('/\D/', '', $sellerArray[1]) < $this->sellerMinFeedback) continue;
                    if (!empty($this->banlist) && in_array($sellerArray[0], $this->banlist)) continue;
                } else {
//                prettyDump('пропускаем '.$itemNo[0].' в строке '.__LINE__);
                    continue;
                }
                // если валюта не бакс-евро — пропускаем
                if ($priceBlock = $item->first('.s-item__price')) {
                    preg_match('/\$|EUR/', $priceBlock->text(), $currency);
                    $lot['currency'] = $currency;
                    $lot['price'] = $priceBlock->text();
                    if (empty($currency)) {
//                    prettyDump('пропускаем '.$itemNo[0].' в строке '.__LINE__);
                        continue;
                    }
                }
                // если shipping не определен — пропускаем
                if ($shippingBlock = $item->first('.s-item__shipping.s-item__logisticsCost')) {
                    $shipping = preg_replace('/[a-zA-Z\$\s+]/', '', $shippingBlock->text());
                    $lot['shipping'] = $shipping;
                    if (empty($shipping)) {
//                    prettyDump('пропускаем '.$itemNo[0].' в строке '.__LINE__);
                        continue;
                    }
                }
                // item name для отладки
                if ($nameBlock = $item->first('.s-item__info .s-item__title span')) {
                    $lot['name'] = $nameBlock->text();
                }


                // на выходе будет массив номеров лотов, который мы обработаем позже
                $lot['itemNo'] = $itemNo[0];
                $lots[] = $lot;
            } // foreach
//prettyDump($lots, 1);

            // в выдаче Ebay много мусора и сортировать по цене нельзя
            //        usort($lots, function($a,$b){
            //            return ($a['ebayPrice']-$b['ebayPrice']);
            //        });

            // берем второй элемент из массива $lots[1] и обрабатываем его
            // второй элемент — чтобы случайно не попал левый лот с другим товаром, который будет самым дешевым
            if (sizeof($lots) > 1) {
                $this->parsedLot = self::getitemDetails($lots[1]['itemNo']);
            } elseif (sizeof($lots) == 1) {
                $this->parsedLot = self::getitemDetails($lots[0]['itemNo']);
            } else {
                die('массив $lots пуст. не подключен VPN?');
                return $this->parsedLot;
            }
//prettyDump($this->parsedLot, 1);
        }

        if (1 || $_POST['export']) {
            self::export($this->parsedLot, 'csv');
            return;
        } else {
            return $this->parsedLot;
//            return ['parsedLot' => $this->parsedLot, 'debug' => $this->debug];
        }
    } // parse





    /**
     *
     * возвращает данные о лоте
     *
     * @param int $itemNo
     * @return array
     */
    public function getitemDetails($itemNo) {
        $itemDetails = self::request(['request' => $itemNo], 2);

        // лот протух или ebay вернул хуйню
        if($itemDetails['debug']['errors']) {
            return $itemDetails['debug'];
        }

//        $numberFormat = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
        $document = new Document($itemDetails['response']);

        /** сборка массива с данными о лоте */
        $lot['ebayItemNo'] = $itemNo;

        // селлер
        $lot['storeName'] = $document->first('.x-sellercard-atf__info__about-seller span.ux-textspans--BOLD')->text(); // sellerName
        $storeUrl = parse_url($document->first('div.x-sellercard-atf a.ux-action')->attr('href'));
        parse_str($storeUrl['query'], $store);
        $lot['supplier'] = $store['_ssn'];

        if ($positive = $document->first('a[href*=#STORE_INFORMATION]')) {
            $lot['positive'] = floatval($positive->text());
        }
        if ($feedback = $document->first('.x-sellercard-atf__about-seller .ux-textspans--SECONDARY')) {
            $lot['feedback'] = preg_replace('/[()]/', '', $feedback->text());
        }

        // товар
        $lot['name'] = preg_replace('/[|"\'`]/', '', $document->first('.x-item-title__mainTitle span')->text());
        $lot['url'] = preg_replace('/[ .,;:|!?\/\'\"\`]/', '-', strtolower($lot['name']));
        $images = explode(',', self::getEbayImages($document));
        if (sizeof($images) > 0) {
            $lot['image'] = implode(',', $images);
        }
        $lot['categories'] = $_POST['parseToCategories'];

        // валюта и цены
        // здесь непонятно почему не работает NumberFormatter, извращаемся
        if ($priceWrapper = $document->first('.x-price-primary .ux-textspans')){
            $price = $priceWrapper->text();
            preg_match('/US|EUR/', $price, $currency);
            $price = preg_replace('/[A-Z$€ ]/', '', $price);
            $price = (double) str_replace(',', '', $price);
        }

        if ($shippingWrapper = $document->first('.ux-labels-values--shipping .ux-labels-values__values-content .ux-textspans--BOLD')) {
            $shipping = preg_replace('/[A-Z$€ ]/', '', $shippingWrapper->text());
            $shipping = (double)str_replace(',', '', $shipping);
        }

        $dutiesWrapper = $document->first('.ux-labels-values--importCharges .ux-textspans--BOLD');
        if ($dutiesWrapper) {
            $duties = preg_replace('/[A-Z$€ ]/', '', $dutiesWrapper->text());
        }

        if (in_array($currency[0], ['US', 'EUR']) && is_double($price) && is_double($shipping)) {
            $lot['currency'] = $currency[0];
            $lot['price'] = $price;
            $lot['shipping'] = $shipping;
            $lot['duties'] = $duties;
            $lot['ebayPrice'] = $price + $shipping + $duties; // просто сумма всего

            // manufacturer пока не используем для импорта
            $manufacturerWrapper = $document->first('.ux-labels-values.ux-labels-values--brand .ux-labels-values__values-content span');
            if ($manufacturerWrapper) {
                $lot['manufacturer'] = $manufacturerWrapper->text();
            }

//            if ($partNumberWrapper = $document->first('//*[@id="viTabs_0_is"]/div/div[2]/div/div[2]/div[2]/dl/dd/div/div/span', \DiDom\Query::TYPE_XPATH))
            if ($partNumberWrapper = $document->first('.ux-labels-values--manufacturerPartNumber .ux-labels-values__values-content span')) {
                $lot['partNumber'] = $lot['manufacturer'] . ' ' . $partNumberWrapper->text();
            }
            if ($epidWrapper = $document->first('//*[@id="s0-1-26-7-17-1-93[1]-2-3-tabpanel-0"]/div/div/div/div[4]/div/div[2]/div[2]/div[2]/div[1]/div/div[2]/div/div/span', \DiDom\Query::TYPE_XPATH)) {
                $lot['epid'] = $epidWrapper->text();
            }
            $lot['compatibility'] = '';
            $table = $document->first('.motors-compatibility-table table');
            if ($table) {
                $tr = $table->find('th');
                $td = $table->find('td');
                $lot['compatibility'] .= 'Подходит для:';
                for ($i = 0; $i < sizeof($td); $i++) {
                    if ($i == 0 || ($i % sizeof($tr) == 0)) $lot['compatibility'] .= '<br>' . $td[$i]->text() . ' ';
                    else $lot['compatibility'] .= $td[$i]->text() . ' ';
                }
            }
            $lot['outPrice'] = self::calculateProfit($lot);
        } else {
            // если валюта кривая или вместо доставки херня, то покажем все это и закончим формирование лота
            $lot = [];
            echo ($currency[0] == 'US' ? 'price = '.$price : '---- цена в ' . (!empty($currency) ? $currency[0] : 'неизвестной валюте') . ' shpping = '.$shipping);
        }
        return (object) $lot;
    } //getItemDetails


    /**
     * обрабатывает картинки в переданном объекте $document
     *
     * @param $document
     * @return string
     */
    private function getEbayImages($document) {
        $imagesPath = [];
        $imgElem = $document->find('.filmstrip img');
        if (sizeof($imgElem) > 0) {
            for ($i = 0; $i < sizeof($imgElem); $i++) {
                if (!is_null($imgElem[$i])) {
                    $imgPath = pathinfo($imgElem[$i]->getAttribute('src'));
                    if ($imgPath['basename']) {
                        if (empty($imagesPath && strpos($imgPath['dirname'], 'thumbs'))) {
                            $imagesPath[] = $imgPath['dirname'] . '/s-l1600.' . $imgPath['extension'];
                        } elseif (!empty($imagesPath && !strpos($imgPath['dirname'], 'thumbs'))) {
                            $imagesPath[] = $imgPath['dirname'] . '/s-l1600.' . $imgPath['extension'];
                        }
                    }
                }
            }
        }
        return implode(',', $imagesPath);
    }


    /**
     * возвращает рандомный UserAgent
     *
     * @return string
     */
    private static function getRandomUseragent()
    {
        $useragents = [
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36 Edg/119.0.0.0",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/119.0",
            "Mozilla/5.0 (iPhone; CPU iPhone OS 16_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1",
            "Mozilla/5.0 (iPad; CPU OS 16_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.5 Mobile/15E148 Safari/604.1",
            "Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Mobile Safari/537.36"
        ];
        return rand(0, sizeof($useragents) - 1);
    }




    /**
     * ходит на ебей курлом
     * принимает запрос: а) массив б) инт
     * возвращает массив данных
     *
     * @param string $request
     * @return array
     */
    private function request($request, $type)
    {
        switch ($type) {
            case 1: // запрос списка лотов
                $url = self::EBAY_MOTOR_LIST_URL . str_ireplace(' ', '+', $request['keyword']);
                $setCookie = true;
                break;
            case 2: // запрос одного лота
                $url = self::EBAY_ITEM_URL . $request['request'];
                $setCookie = false;
                break;
        }

        if ($type == 1 && $_POST['minprice']) $url = $url . '&_udlo=' . $_POST['minprice'];
        if ($type == 1 && $_POST['maxprice']) $url = $url . '&_udhi=' . $_POST['maxprice'];

        $curl = curl_init();
        // если это первый запрос то надо установить страну доставки &shipToCountryCode=ESP&shippingZipCode=03560
        if ($setCookie) {
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://www.ebay.com/itemmodules/196433866393?module_groups=GET_RATES_MODAL&co=0&isGetRates=1&rt=nc&quantity=&shipToCountryCode=ESP&shippingZipCode=03560',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_NOBODY => true, // сама страница, для отладки
                CURLOPT_FAILONERROR => true,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_USERAGENT => $this->userAgent,
                CURLOPT_HTTPHEADER, 'Accept-Language: en-US;q=0.6,en;q=0.4',
                CURLOPT_VERBOSE => true
            ));
            curl_exec($curl); // здесь ответ не нужен
        }


        curl_setopt_array($curl, array(
//            CURLOPT_URL => 'https://motokofr.com', // дебаг
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_HEADER =>true, // заголовки ответа
            CURLOPT_NOBODY => false, // сама страница, для отладки
            CURLOPT_FAILONERROR => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_USERAGENT => $this->userAgent,
            CURLOPT_HTTPHEADER, 'Accept-Language: en-US;q=0.6,en;q=0.4',
            CURLOPT_VERBOSE => true
        ));
        $this->debug['curl_effective_url'] = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
        $response = curl_exec($curl);

        $curlError = curl_error($curl);
        if (!empty($curlError)) {
            $this->debug['errors'] = $curlError;
        }
        curl_close($curl);
        return ['debug' => $this->debug, 'response' => $response];
    }



    /**
     * принимет общую цену в $ (лот+доставка)
     * считает прибыль, возвращает цену товара в $
     *
     * @param float $ebayPrice
     * @return int
     */
    public function calculateProfit($lot) {
        $nacenka_percent = ($_POST['nacenka_percent'] ? (float) $_POST['nacenka_percent'] : $this->nacenka_percent);
//        $nacenka = $ebayPrice * (1 + $nacenka_percent / 100);
        $ebayPrice = (double) $lot['price'] + (double) $lot['shipping'] + (double) $lot['duties'];
        return ceil($ebayPrice * (1 + $nacenka_percent / 100));
    }




    private static function getCategories()
    {
        $categories = '';
        foreach ($_POST['parseToCategories'] as $category) {
            /*@TODO посмотреть как в системе разбираются с select multiple */
        }
        return $categories;
    }



    private function export($lot, $format) {
//prettyDump($lot, 1);
        $cur = new CurrenciesEntity();

        switch ($lot->currency) {
            case 'US': $currentCurrency = 'USD'; break;
            case 'EUR': $currentCurrency = 'EUR'; break;
            default: $currentCurrency = 'EUR';
        }
        $currency = $cur->findOne(['code' => $currentCurrency, 'enabled' => 1]);
        $import = new Import();

        // заголовки таблицы
        $tableHeaders = ['Category',
            'Brand',
            'Product',
            'Variant',
//            'SKU',
            'Price',
//            'Old price',
            'Currency ID',
            'Weight',
            'Stock',
//            'Units',
            'Visible',
//            'Featured',
            'Meta title','Meta keywords','Meta description','Annotation','Description','Images','ebayItemNo','supplier','partNumber','epid'/*, 'lotPrice', 'lotShipping', 'duties'*/];
        // содержимое таблицы
        $list = array (
            $tableHeaders,
            [
                implode($import->getCategoryDelimiter(), $_POST['parseToCategories']),                          // Category
                $_POST['forBrand'], //$lot->manufacturer,                                                       // Brand
                $lot->name,                                                                                     // Product
                ' ',                                                                                            // Variant
//                ' ',                                                                                            // SKU
                $lot->outPrice,                                                                                 // Price
//                '',                                                                                             // Old price
                $currency->id,                                                                                  // Currency ID
                2,                                                                                              // Weight
                2,                                                                                              // Stock
//                '',                                                                                             // Units
                1,                                                                                              // Visible
//                0,                                                                                              // Featured
                $lot->name,                                                                                     // Meta title
                $lot->name.' '.$lot->partNumber. ' '.implode(', ', $_POST['parseToCategories']),              // Meta keywords
                $lot->name,                                                                                     // Meta description
                'Производство: '.$lot->manufacturer,                                                                                             // Annotation
                ($lot->manufacturer ? 'Производство: '.$lot->manufacturer.'<br>' : '').$lot->compatibility,     // Description
                $lot->image,                                                                                     // Images
                $lot->ebayItemNo,
                $lot->supplier,
                $_POST['keyword'],// $lot->partNumber,
                $lot->epid,
//                $lot->price,
//                $lot->shipping,
//                $lot->duties,
            ]
        );

        // csv
        if ($format == 'csv') {
            $file = __DIR__.'/../files/export/_import_'.date('d-m_G-i', time()).'.csv';
            $fp = fopen($file, 'w');
            foreach ($list as $fields) {
                fputcsv($fp, $fields, ';');
            }
            fclose($fp);

            if (file_exists($file)) {
                ob_end_clean();
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($file).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file));

                readfile($file);
                unlink($file);
            } else {
                echo '<br>нет файла на диске<br>';
                var_dump($file);
            }
        }
    }


    public function updatePrices() {
        echo PHP_EOL.PHP_EOL.'updatePrices'.PHP_EOL;
//        return 'test';
    }


}
