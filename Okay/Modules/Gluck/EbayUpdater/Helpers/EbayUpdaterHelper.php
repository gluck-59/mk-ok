<?php

namespace Okay\Modules\Gluck\EbayUpdater\Helpers;

ini_set('display_errors', 'on');
error_reporting(E_ERROR);

use Cassandra\Set;
use Okay\Core\Modules\Extender\ExtensionInterface;
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



    /**
     * обновялет цены Ebay по крону
     * вызывается так: php ok scheduler:run -f
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

        foreach ($variantsToUpd as $variant) {
            $this->sleep = rand(5, 20);

            $report = new \stdClass();
            $report->success = 0;
            $report->variant_id = $variant->variant_id;
            $report->old_price = $variant->price;
            echo PHP_EOL.'===================================='.PHP_EOL;
            echo 'sleep '.$this->sleep.' сек'.PHP_EOL;
            sleep($this->sleep);

            // 1. у варианта есть SKU — ищем по SKU
            if (!empty($variant->sku)) {
                $product = $productsEntity->findOne(['id' => $variant->product_id]);
                $manufacturer = $manufacturersEntity->findOne(['id' => $product->manufacturer_id]);
                echo 'ищем по SKU '.$manufacturer->name.' '.$variant->sku.PHP_EOL;

                $newLot = $ebayAdmin->parse(['keyword' => $manufacturer->name.' '.$variant->sku]);
                if (is_array($newLot) && $newLot['errors']) {
                    echo 'поиск по SKU '.$manufacturer->name.' '.$variant->sku.' неудачно'.PHP_EOL;
                    $report->description = 'поиск по SKU '.$manufacturer->name.' '.$variant->sku.' неудачно<br><a href="'.$newLot['curl_effective_url'].'" target="_blank"">curl_effective_url</a>';
                } else {
                    echo 'нашли товар '.$variant->product_id.' по SKU '.$manufacturer->name.' '.$variant->sku.', пишемся'.PHP_EOL;
                    $report->success = 1;
                    $report->description = 'поиск по SKU '.$manufacturer->name.' '.$variant->sku.' OK';
                    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                    continue;
                }
            } // 1.



            // 2. у варианта есть ebayItemNo, проверим не протух ли
            if (!empty($variant->ebayItemNo) && strlen($variant->ebayItemNo) == 12) {
                echo 'ищем по ebayItemNo '.$variant->ebayItemNo.PHP_EOL;
                $newLot = $ebayAdmin->parse(['keyword' => $variant->ebayItemNo]);

                // 2а. лот протух — не пишемся, сразу ищем по partNumber
                if (is_array($newLot) && $newLot['debug']['error']) {
                    echo 'поиск по ebayItemNo '.$variant->ebayItemNo.' неудачно, ищем по partNumber '.$variant->partNumber.PHP_EOL;
                    }
                // 2б. не протух
                else {
                    echo __LINE__ . ' нашли товар ' . $variant->product_id . ' по ebayItemNo ' . $variant->ebayItemNo . ', пишемся' . PHP_EOL;
                    $report->success = 1;
                    $report->description = 'поиск по ebayItemNo ' . $variant->ebayItemNo . ' OK';
                    self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                    continue;
                }
            } // 2


            // 3. ebayItemNo протух, но у варианта есть partNumber
            $newLot = $ebayAdmin->parse(['keyword' => $variant->partNumber]);
            //print_r($newLot);
            if (is_array($newLot) && $newLot['debug']['error']) {
                echo __LINE__.' поиск по partNumber '.$variant->partNumber.' снова неудачно, пишемся'.PHP_EOL;
                $report->success = 0;
                $report->description = 'поиск по ebayItemNo <b>'.$variant->ebayItemNo.'</b> и затем по partNumber <b>'.$variant->partNumber.'</b> неудачно<br><b>ТОВАР ОТКЛ</b> <a href="'.$newLot['curl_effective_url'].'" target="_blank"">curl_effective_url</a>';
                self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                continue;
            } else {
                echo __LINE__. ' нашли товар ' . $variant->product_id . ' по partNumber ' . $variant->partNumber . ', пишемся' . PHP_EOL;
                $report->success = 1;
                $report->description = 'поиск по partNumber ' . $variant->partNumber . ' OK';
                self::updatePrice($newLot, $variant, $report, $currenciesEntity, $productsEntity, $variantsEntity, $ebayUpdaterEntity);
                continue;
            } // 3


            // 4. если у товара нет ничего — обновляем дату и пишем репорт
            echo 'у варианта '.$variant->variant_id.' нет ни SKU ни ebayItemNo — не обновляем';
            $report->success = 0;
            $report->description = 'у product_id '.$variant->product_id.' ('.$variant->product_name.') нет SKU и нет ebayItemNo — не обновляли';
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

            if ($report->new_price == 0) $report->success = 0;

            $productsUpd = $productsEntity->update($variant->product_id, ['ebayItemNo' => $newLot->ebayItemNo, 'supplier' => $newLot->supplier, 'visible' => 1]);
            $variantsUpd = $variantsEntity->update($variant->variant_id, ['price_updated' => "NOW()", 'price' => $newLot->outPrice, 'compare_price' => $newLot->ebayPrice,'currency_id' => $currencyModel->id]);
        } else {
            $variantsUpd = $variantsEntity->update($variant->variant_id, ['price_updated' => "NOW()"]);
            $productsUpd = $productsEntity->update($variant->product_id, ['visible' => 0]);
        }
        $report->updated = "NOW()";

        $ebayUpdaterUpd = $ebayUpdaterEntity->add($report);
        echo PHP_EOL.'$productsUpd: '; var_dump($productsUpd);

        return ['productsUpd' => $productsUpd, 'variantsUpd' => $variantsUpd, 'ebayUpdaterUpd' => $ebayUpdaterUpd, 'currencyModel' => $currencyModel];
    }


} // class