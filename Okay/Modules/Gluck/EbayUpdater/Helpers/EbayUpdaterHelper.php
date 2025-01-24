<?php

namespace Okay\Modules\Gluck\EbayUpdater\Helpers;

ini_set('display_errors', 'on');
error_reporting(E_ERROR);

use Cassandra\Set;
use Okay\Core\Modules\Extender\ExtensionInterface;
use Okay\Core\Response;
use Okay\Entities\ManagersEntity;
use Okay\Entities\VariantsEntity;
use Okay\Entities\ProductsEntity;
use Okay\Entities\ManufacturersEntity;
use Okay\Modules\Gluck\EbayUpdater\Entities\EbayUpdaterEntity;
use Okay\Admin\Controllers\EbayAdmin;
use Okay\Entities\CurrenciesEntity;
use Okay\Core\Settings;
use Okay\Core\Config;



class EbayUpdaterHelper implements ExtensionInterface
{
    private ProductsEntity $productsEntity;
    private EbayUpdaterEntity $ebayUpdaterEntity;
    private ManufacturersEntity $manufacturersEntity;

    private $sleep;

    private EbayAdmin $ebayAdmin;
    /** @var Response */
    protected $response;



    /**
     * обновялет цены Ebay по крону
     * вручную вызывается так: php ok scheduler:task 1 -f | tee ./_ebay
     * --- continue пишем во всех случаях ---
     *
     * @param VariantsEntity $variantsEntity
     * @param ProductsEntity $productsEntity
     * @param EbayUpdaterEntity $ebayUpdaterEntity
     * @param CurrenciesEntity $currenciesEntity
     * @param Settings $settings
     * @param Config $config
     * @return void
     */
    public function cronEbayUpdater(VariantsEntity $variantsEntity, ProductsEntity $productsEntity, ManufacturersEntity $manufacturersEntity, EbayUpdaterEntity $ebayUpdaterEntity, CurrenciesEntity $currenciesEntity, Settings $settings, Config $config) {
        $managersEntity = new ManagersEntity();
        $ebayAdmin = new EbayAdmin($managersEntity->findOne(['login' => 'gluck']), '', '');

        $variantsToUpd = $variantsEntity->getVariantsToUpdate(7);
        $remain = sizeof($variantsToUpd);
        $this->sleep = 0;

        foreach ($variantsToUpd as $variant) {
            $report = new \stdClass();
            $report->success = 0;
            $report->variant_id = $variant->variant_id;
            $report->old_price = $variant->price;
            echo PHP_EOL.'========== осталось '.$remain--.' =========='.PHP_EOL.'sleep '.gmdate("i:s", $this->sleep);
            sleep($this->sleep);

            // 1. у варианта есть SKU — ищем по SKU
            if (!empty($variant->sku)) {
                $product = $productsEntity->findOne(['id' => $variant->product_id]);
                $manufacturer = $manufacturersEntity->findOne(['id' => $product->manufacturer_id]);
                echo PHP_EOL.'ищем по SKU '.$manufacturer->name.' '.$variant->sku;

                $newLot = $ebayAdmin->parse(['keyword' => $manufacturer->name.' '.$variant->sku]);
                if (is_array($newLot) && $newLot['debug']['errors']) {
                    echo PHP_EOL.'поиск по SKU '.$manufacturer->name.' '.$variant->sku.' неудачно';
                    $report->description = 'поиск по SKU '.$manufacturer->name.' '.$variant->sku.' неудачно<br><a href="'.$newLot['debug']['curl_effective_url'].'" target="_blank"">curl_effective_url</a>';

                    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                    continue;
                } else {
                    echo PHP_EOL.'нашли товар '.$variant->product_id.' по SKU '.$manufacturer->name.' '.$variant->sku.', выход = '.$newLot->currency.' '.$newLot->outPrice.PHP_EOL;
                    $report->success = 1;
                    $report->description = 'нашли по SKU <a href="'.EbayAdmin::EBAY_MOTOR_LIST_URL.$manufacturer->name.'%20'.$variant->sku.'" target="_blank">'.$manufacturer->name.' '.$variant->sku.'</a>';

                    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                    continue;
                }
            } // 1.



            // 2. у варианта есть ebayItemNo, проверим не протух ли
            if (!empty($variant->ebayItemNo) && $variant->ebayItemNo > 0 && strlen($variant->ebayItemNo) == 12) {
                echo PHP_EOL.'ищем товар '.$variant->product_id.' по ebayItemNo '.$variant->ebayItemNo;
                $newLot = $ebayAdmin->parse(['keyword' => $variant->ebayItemNo]);

                // 2а. лот протух — не пишемся, сразу ищем по partNumber
                if (is_array($newLot) && $newLot['debug']['errors']) {
echo PHP_EOL.'поиск по ebayItemNo '.$variant->ebayItemNo.' неудачно, ищем по partNumber '.$variant->partNumber;
$newLot = $ebayAdmin->parse(['keyword' => $variant->partNumber]);
if (is_array($newLot) && $newLot['debug']['errors']) {
    $report->success = 0;
    echo PHP_EOL . __LINE__ . ': не нашли по partNumber ' . $variant->partNumber . ', не пишем'. PHP_EOL;
    $report->description = 'не нашли по partNumber ' . $variant->partNumber;
    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
    continue;
} else {
    $report->success = 1;
    echo PHP_EOL . __LINE__ . ': нашли товар ' . $variant->product_id . ' по partNumber ' . $variant->partNumber . ', выход = ' . $newLot->currency . ' ' . $newLot->outPrice;
    $report->description = 'нашли по partNumber ' . $variant->partNumber;
    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
    continue;
}
                } else { // 2б. не протух
                    // нет цены или доставки
                    if (!$newLot->outPrice || !$newLot->currency) {
                        echo PHP_EOL . __LINE__ . ': нашли товар ' . $variant->product_id . ' по ebayItemNo ' . $variant->ebayItemNo . ', нет цены/валюты/доставки?'. PHP_EOL;
                        $report->success = 0;
                        $report->description = 'лот <a href="https://www.ebay.com/itm/' . $variant->ebayItemNo . '">' . $variant->ebayItemNo . '</a>, нет цены/валюты/доставки?';
                        self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                        continue;
                    } else {
                        // все норм
                        echo PHP_EOL . __LINE__ . ': нашли товар ' . $variant->product_id . ' по ebayItemNo ' . $variant->ebayItemNo . ', выход = ' . $newLot->currency . ' ' . $newLot->outPrice . PHP_EOL;
                        $report->success = 1;
                        $report->description = 'нашли по ebayItemNo <a href="https://www.ebay.com/itm/' . $variant->ebayItemNo . '">' . $variant->ebayItemNo . '</a>';
                        self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                        continue;
                    }
                }
            }
            // 2


            // 3. ebayItemNo протух, но у варианта есть partNumber
            if (!empty($variant->partNumber)) {
                $newLot = $ebayAdmin->parse(['keyword' => $variant->partNumber]);

                if (is_array($newLot) && $newLot['errors']) {
                    echo PHP_EOL.'поиск по partNumber '.$variant->partNumber.' снова неудачно, пишемся';
                    $report->success = 0;
                    $report->description = 'поиск по ebayItemNo <b>'.$variant->ebayItemNo.'</b> и затем по partNumber <b>'.$variant->partNumber.'</b> неудачно<br><a href="'.$newLot['debug']['curl_effective_url'].'" target="_blank"">curl_effective_url</a>';
                    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                    continue;
                } else {
                    echo PHP_EOL.__LINE__.': нашли товар ' . $variant->product_id . ' по partNumber ' . $variant->partNumber . ', выход = '.$newLot->currency.' '.$newLot->outPrice.PHP_EOL;
                    $report->success = 1;
                    $report->description = 'нашли по partNumber <b>' . $variant->partNumber . '</b>';
                    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                    continue;
                }
            } // 3


            // 4. если у товара нет ничего — обновляем дату и пишем репорт
            echo PHP_EOL.'у варианта '.$variant->variant_id.' нет SKU / ebayItemNo / partNumber — не обновляем';
            $report->success = 0;
            $report->description = 'у product_id <b>'.$variant->product_id.'</b> нет SKU / ebayItemNo / partNumber — не обновляли';
            // 4
        } // foreach
    } // cronEbayUpdater



    /**
     * пишем обновления цены итд
     *
     * @param $newLot
     * @param $variant
     * @return array
     */
    private function updatePrice($newLot, $variant, $report, CurrenciesEntity $currenciesEntity, ProductsEntity $productsEntity, VariantsEntity $variantsEntity, EbayUpdaterEntity $ebayUpdaterEntity) {
        if ($report->success == 1) {
            switch ($newLot->currency) {
                case 'US':
                    $currencyModel = $currenciesEntity->findOne(['code' => 'USD']);
                    break;
                case 'EUR':
                    $currencyModel = $currenciesEntity->findOne(['code' => 'EUR']);
                    break;
                default:
                    $currencyModel = $currenciesEntity->findOne(['code' => 'USD']);
            }
            $report->newEbayItem_id = $newLot->ebayItemNo;
            $report->old_currency_id = $variant->currency_id;
            $report->new_currency_id = $currencyModel->id;
            $report->old_price = $variant->price;
            $report->new_price = $newLot->outPrice;

            $toUpdateVariant = [
                'price' => ceil($newLot->outPrice),
                'compare_price' => ceil($newLot->ebayPrice),
                'currency_id' => $currencyModel->id,
                'price_updated' => "NOW()",
                'stock' => null
            ];

            if ($report->new_price == 0) {
                $toUpdateVariant = [
                    'compare_price' => $newLot->ebayPrice,
                    'currency_id' => $currencyModel->id,
                    'price_updated' => "NOW()",
                    'stock' => 0
                    ];
                $report->success = 0;
            }

            // предохранитель от левого лота — если новая цена отличается от старой больше чем на 10% — пишем только репорт
            if (is_null($variant->price)) $variant->price = 0;
            if (is_null($newLot->outPrice)) {
                $newLot->outPrice = 0;
                $this->sleep = rand(40, 60);
            } else {
                $this->sleep = rand(5, 20);
            }

            $priceCompare = round(abs(round($variant->price) / round($newLot->outPrice) * 100 - 100));

            if ($priceCompare > 10) {
                unset($toUpdateVariant);
                $report->success = 0;
                $report->description = 'разница <b>'.$priceCompare.'%</b>, не обновили';
            }

            if (isset($toUpdateVariant)) {
                $productsUpd = $productsEntity->update($variant->product_id, ['ebayItemNo' => $newLot->ebayItemNo, 'supplier' => $newLot->supplier, 'visible' => 1]);
                $variantsUpd = $variantsEntity->update($variant->variant_id, $toUpdateVariant);
            }
        } else {
            $this->sleep = rand(200, 300);
            $variantsUpd = $variantsEntity->update($variant->variant_id, ['price_updated' => "NOW()", 'stock' => 0]);
        }
        $report->updated = "NOW()";
        $ebayUpdaterUpd = $ebayUpdaterEntity->add($report);

        return ['productsUpd' => $productsUpd, 'variantsUpd' => $variantsUpd, 'ebayUpdaterUpd' => $ebayUpdaterUpd, 'currencyModel' => $currencyModel];
    }
} // class