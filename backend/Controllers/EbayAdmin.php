<?php

namespace Okay\Admin\Controllers;

//use Okay\Admin\Controllers\IndexAdmin;
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
    private $minProfit = 50; // в долларах
    private $maxProfit = 1000; // в долларах
    private $profit_percent = 30; // наценка в процентах — учитываются миша, армяне и я

    public $debug;
    public $isAjax;

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


    function parse($request, $isAjax = false) {
        $this->isAjax = $isAjax;
echo PHP_EOL.'parse request: '.$request['keyword'];
        if (!$request['keyword']) {
            $itemDetails['debug']['errors'] = 'В запросе для Ebay нет keyword';
echo PHP_EOL.'return из стр '.__LINE__;
            return $itemDetails;
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
            if (!empty($this->debug['errors']) || is_bool($curl['response'])) {
echo PHP_EOL.'return из стр '.__LINE__;
                return $this->debug;
            }


            $document = new Document($curl['response']);
            // https://github.com/Imangazaliev/DiDOM/blob/master/README-RU.md
            $arr = $document->find('.s-item__wrapper'); //s-item__link

            $lots = [];
            foreach ($arr as $item) {
                // парсер выдает пару пустых итемов, пропустим их
                $link = $item->first('.s-item__link');
                if (!$link) continue;
                $itm = parse_url($link->getAttribute('href'), PHP_URL_PATH);
                preg_match('/\d{12}/', $itm, $itemNo);
                if (!$itemNo) {
                    //echo ('пропускаем левый итем в строке '.__LINE__);
                    continue;
                }
                // если селлер не соответсвует нашим критериям — пропускаем
                if ($sellerBlock = $item->first('.s-item__seller-info-text')) {
                    $sellerArray = explode(' ', $sellerBlock->text());
                    if (intval($sellerArray[2]) < $this->sellerMinPositive) continue;
                    if (preg_replace('/\D/', '', $sellerArray[1]) < $this->sellerMinFeedback) continue;
                    if (!empty($this->banlist) && in_array($sellerArray[0], $this->banlist)) continue;
                } else {
//continue; непонятно зачем ?
                }
                // если валюта не бакс-евро — пропускаем
                if ($priceBlock = $item->first('.s-item__price')) {
                    preg_match('/\$|EUR/', $priceBlock->text(), $currency);
                    $lot['currency'] = $currency;
                    $lot['price'] = $priceBlock->text();
                    if (empty($currency)) {
//                        echo 'пропускаем '.$itemNo[0].' по валюте';
                        continue;
                    }
                }
                // если shipping не определен — пропускаем
                if ($shippingBlock = $item->first('.s-item__shipping.s-item__logisticsCost')) {
                    $shipping = preg_replace('/[a-zA-Z\$\s+]/', '', $shippingBlock->text());
                    $lot['shipping'] = $shipping;
                    if (empty($shipping)) {
//                        echo 'пропускаем '.$itemNo[0].' — нет доставки';
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





            /** в итоге мы имеем массив $lots с номерами подходящих лотов
             * берем подходящий и отправляем на подробный анализ
            */

            // берем второй элемент из массива $lots[1] и обрабатываем его
            // второй элемент — чтобы случайно не попал левый лот с другим товаром, который будет самым дешевым
            if (sizeof($lots) > 1) {
                $this->parsedLot = self::getitemDetails($lots[1]['itemNo']);
            } elseif (sizeof($lots) == 1) {
                $this->parsedLot = self::getitemDetails($lots[0]['itemNo']);
            } else {
                $itemDetails['debug']['errors'] = 'искали '.$request['keyword'].', массив $lots пуст. не подключен VPN?';
                echo PHP_EOL.'искали '.$request['keyword'].', массив $lots пуст. не подключен VPN?';

                if ($this->isAjax) ob_end_clean();
                return $itemDetails;
            }
        }

        if ($request['export']) {
            self::export($this->parsedLot, 'csv');
            return;
        } else {
//            prettyDump($this->parsedLot);
            if ($this->isAjax) ob_end_clean();
            return $this->parsedLot;
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
echo PHP_EOL.'getitemDetails: '.$itemNo;
        $itemDetails = self::request(['request' => $itemNo], 2);
        // лот протух? или еще какая хуйня?
        if (is_array($itemDetails) && $itemDetails['debug']['errors']) {
            return $itemDetails;
        }
        if (empty($itemDetails['response'])) {
            $itemDetails['debug']['errors'] = 'лот не найден?';
            return $itemDetails;
        }
        $document = new Document($itemDetails['response']);
        // ??
        // ebay вернул ошибку
        if($itemDetails['debug']['errors']) {
            return $itemDetails;
        }
        //  ended
        if ($endedBlock = $document->first('.d-statusmessage')) {
            $itemDetails['debug']['errors'] = 'лот '.$itemNo.' протух';
            return $itemDetails;
        }
        // ??




        /** сборка массива с данными о лоте */
        $lot['ebayItemNo'] = $itemNo;

        //  store
        if ($storeName = $document->first('.x-sellercard-atf__info__about-seller span.ux-textspans--BOLD')) {
            $lot['storeName'] = $storeName->text();
        }

        // seller
        if ($storeUrlWrapper = $document->first('div.x-sellercard-atf a.ux-action')) {
            $storeUrl = parse_url($storeUrlWrapper->attr('href'));
            parse_str($storeUrl['query'], $store);
            $lot['supplier'] = $store['_ssn'];
        }

        if ($positive = $document->first('a[href*=#STORE_INFORMATION]')) {
            $lot['positive'] = floatval($positive->text());
        }
        if ($feedback = $document->first('.x-sellercard-atf__about-seller .ux-textspans--SECONDARY')) {
            $lot['feedback'] = preg_replace('/[()]/', '', $feedback->text());
        }

        // товар
        if ($nameWrapper = $document->first('.x-item-title__mainTitle span')) {
            $lot['name'] = preg_replace('/[|"\'`]/', '', $nameWrapper->text());
            $lot['url'] = preg_replace('/[ .,;:|!?\/\'\"\`]/', '-', strtolower($lot['name']));
        }

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
$isEnded = false; // добавить определение $isEnded
        if (!$isEnded && in_array($currency[0], ['US', 'EUR']) && is_double($price) && is_double($shipping)) {
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
            $err = ($currency[0] == 'US' ? ' price = '.$price : ' ---- цена в ' . (!empty($currency) ? $currency[0] : ' неизвестной валюте: ') . 'price = '.$price.', shpping = '.$shipping).($isEnded ? ' лот протух? ' : '').PHP_EOL;

echo PHP_EOL.'$currency: ';
print_r($currency);

echo '$price: '.$price;
echo ' $shipping: '.$shipping;

echo $err;
            $lot['debug']['errors'] = $err;
        }

        $lot['manufacturer'] = '';
        if ($this->isAjax) ob_end_clean();
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
        return $useragents[rand(0, sizeof($useragents) - 1)];
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

        if ($type == 1 && isset($_POST['minprice'])) $url = $url . '&_udlo=' . $_POST['minprice'];
        if ($type == 1 && isset($_POST['maxprice'])) $url = $url . '&_udhi=' . $_POST['maxprice'];

        $curlOptions = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_HEADER =>true, // заголовки ответа
            CURLOPT_NOBODY => false, // сама страница, для отладки
            CURLOPT_FAILONERROR => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_USERAGENT => $this->userAgent,
            CURLOPT_VERBOSE => false // для обновлятеля надо TRUE ?
        ];
        $curl = curl_init();
        // если это первый запрос то отдельным запросом надо установить страну доставки &shipToCountryCode=ESP&shippingZipCode=03560
        if ($setCookie) {
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://www.ebay.com/itemmodules/196433866393?module_groups=GET_RATES_MODAL&co=0&isGetRates=1&rt=nc&quantity=&shipToCountryCode=ESP&shippingZipCode=03560',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_NOBODY => true, // сама страница, для отладки
                CURLOPT_FAILONERROR => true,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_USERAGENT => $this->userAgent,
                CURLOPT_VERBOSE => false
            ));
            curl_exec($curl); // здесь ответ не нужен
        }

        $this->debug = [];
        curl_setopt_array($curl, $curlOptions);

// не работает ?
//        if ($type == 2) {
//            curl_setopt($curl, CURLOPT_COOKIE, "__deba=sZtrRJL1jGhnglTERuUOmjojHYU48SZZ70JncK3irP1AKIjQAvTA96y2fumGaVWbXR8UW1J2_XMwSXzXGqPFGLOkJ8jeCfY2fF-7A5Lz8WlqMVoEmRAcn7r3JiZJU1C3sfBavT0NFY8x_gKeoYqEXA==; domain=.ebay.com; path=/'"); // доставка в испанию
//        }

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
     * @return double
     */
    public function calculateProfit($lot) {
echo PHP_EOL.'calculateProfit: '.(double) $lot['price'] .'+'. (double) $lot['shipping'] .'+'. (double) $lot['duties'];
        $profit_percent = ($_POST['profit_percent'] ? (float) $_POST['profit_percent'] : $this->profit_percent);
        $ebayPrice = (double) $lot['price'] + (double) $lot['shipping'] + (double) $lot['duties'];
        $profit = $ebayPrice * ($profit_percent / 100);

        if ($profit < $this->minProfit) $profit = $this->minProfit;
        if ($profit > $this->maxProfit) $profit = $this->maxProfit;

        $out = $ebayPrice + $profit;
        return $out;
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
        $cur = new CurrenciesEntity();

        switch ($lot->currency) {
            case 'US': $currentCurrency = 'USD'; break;
            case 'EUR': $currentCurrency = 'EUR'; break;
            default: $currentCurrency = 'USD';
        }
        $currency = $cur->findOne(['code' => $currentCurrency, 'enabled' => 1]);
        $import = new Import();

        // заголовки таблицы
        $tableHeaders = ['Category',
            'Brand',
            'Manufacturer',
            'Product',
            'Variant',
//            'SKU',
            'Price',
            'Old price',
            'Currency ID',
            'Weight',
//            'Stock',
//            'Units',
            'Visible',
//            'Featured',
            'Meta title','Meta keywords','Meta description','Description','Images','ebayItemNo','supplier','partNumber','epid'/*, 'lotPrice', 'lotShipping', 'duties'*/];
        // содержимое таблицы
        $list = array (
            $tableHeaders,
            [
                implode($import->getCategoryDelimiter(), $_POST['parseToCategories']),                          // Category
                $_POST['forBrand'],                                                                            // Brand
                $_POST['forManufacturer'],                                                                     // Manufacturer
                $lot->name,                                                                                     // Product
                ' ',                                                                                            // Variant
//                ' ',                                                                                            // SKU
                $lot->outPrice,                                                                                 // Price
                (double) $lot->price + (double) $lot->shipping + (double) $lot->duties,                         // Old Price
//                '',                                                                                             // Old price
                $currency->id,                                                                                  // Currency ID
                2,                                                                                              // Weight
//                2,                                                                                              // Stock
//                '',                                                                                             // Units
                1,                                                                                              // Visible
//                0,                                                                                              // Featured
                $lot->name,                                                                                     // Meta title
                $lot->name.' '.$lot->partNumber. ' '.implode(', ', $_POST['parseToCategories']),       // Meta keywords
                $lot->name,                                                                                     // Meta description
//                'Производство: '.$lot->manufacturer,                                                          // Annotation
                $lot->compatibility,                                                                             // Description
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
                fputcsv($fp, $fields, ','); // ';'
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
}
