<?php

namespace Okay\Modules\Gluck\EbayUpdater\Helpers;

ini_set('display_errors', 'on');
error_reporting(E_ERROR);

use Okay\Core\Modules\Extender\ExtensionInterface;
use Okay\Entities\ManagersEntity;
use Okay\Entities\VariantsEntity;
use Okay\Entities\ProductsEntity;
use Okay\Modules\Gluck\EbayUpdater\Entities\EbayUpdaterEntity;
use Okay\Admin\Controllers\EbayAdmin;
use Okay\Entities\CurrenciesEntity;
use Okay\Core\Settings;
use Okay\Core\Config;



class EbayUpdaterHelper implements ExtensionInterface
{
    private ProductsEntity $productsEntity;
    private EbayUpdaterEntity $ebayUpdaterEntity;

    private EbayAdmin $ebayAdmin;


    public function __construct(
//        Settings $settings
    ) {
//        parent::__construct();
//        $this->settings = $settings;
    }


    /**
     * обновялет цены Ebay по крону
     * вызывается так: php ok scheduler:run -f
     *
     * @param VariantsEntity $variantsEntity
     * @param ProductsEntity $productsEntity
     * @param EbayUpdaterEntity $ebayUpdaterEntity
     * @param Settings $settings
     * @param Config $config
     * @return void
     *
     *
     */
    public function cronEbayUpdater(VariantsEntity $variantsEntity, ProductsEntity $productsEntity, EbayUpdaterEntity $ebayUpdaterEntity, CurrenciesEntity $currenciesEntity, Settings $settings, Config $config) {
        $managersEntity = new ManagersEntity();
        $ebayAdmin = new EbayAdmin($managersEntity->findOne(['login' => 'gluck']), '', '');

        $variantsToUpd = $variantsEntity->getVariantsToUpdate(7);
        foreach ($variantsToUpd as $variant) {
//print_r($variant);
            $report = new \stdClass();
            $report->variant_id = $variant->variant_id;
            $report->old_price = $variant->price;

            // variant не обновляем, т.к. по SKU не ищем — нужен производитель
            if (!empty($variant->sku)) {
                $report->success = 0;
                $report->description = 'искать по SKU — нужен manufacturer';
            } elseif (!empty($variant->ebayItemNo)) {
                echo PHP_EOL.PHP_EOL.'=== ищем по ebayItemNo '.$variant->ebayItemNo.', если неудачно, тогда по partNumber'.PHP_EOL.PHP_EOL;

                // попытка 1 — ищем по ebayItemNo
                $newLot = $ebayAdmin->parse(['keyword' => $variant->ebayItemNo]);
//echo '$newLot 1:'.PHP_EOL;
//print_r($newLot);

                // попытка 2 — если лот протух, ищем по partNumber
                if (is_array($newLot) && $newLot['errors']) {
                    echo PHP_EOL.PHP_EOL.'=== поиск по ebayItemNo '.$variant->ebayItemNo.' неудачно, ищем по SKU '.$variant->sku.' или partNumber '.$variant->partNumber.PHP_EOL.PHP_EOL;
                    $newLot = $ebayAdmin->parse(['keyword' => $variant->sku ? $variant->sku : $variant->partNumber]);
//echo '$newLot 2:'.PHP_EOL;
//print_r($newLot);
                    if (is_array($newLot) && $newLot['errors']) {
                        $report->success = 0;
                        $report->description = $newLot['errors'].'<br><a href="'.$newLot['curl_effective_url'].'" target="_blank"">curl_effective_url</a>';
                    } else {
                        // лот найден в попытке 2, пишемся
                        switch ($newLot->currency) {
                            case 'US': $currencyModel = $currenciesEntity->findOne(['code' => 'USD']); break;
                            case 'EUR': $currencyModel = $currenciesEntity->findOne(['code' => 'EUR']); break;
                            default: $currencyModel = $currenciesEntity->findOne(['code' => 'USD']);
                        }
                        $productModel = $productsEntity->findOne(['id' => $variant->product_id]);
                        $variantModel = $variantsEntity->findOne(['id' => $variant->variant_id]);

                        $report->newEbayItem_id = $newLot->ebayItemNo;
                        $report->old_currency_id = $variantModel->currency_id;
                        $report->new_currency_id = $currencyModel->id;
                        $report->new_price = $newLot->outPrice;
                        $report->success = 1;
                        $report->description = $variant->sku ? 'SKU '.$variant->sku : 'partNumber '.$variant->partNumber;
                        }
                } else {
//                echo PHP_EOL.PHP_EOL.__LINE__.PHP_EOL.PHP_EOL;
                    // лот найден в попытке 1, пишемся
                    switch ($newLot->currency) {
                        case 'US': $currencyModel = $currenciesEntity->findOne(['code' => 'USD']); break;
                        case 'EUR': $currencyModel = $currenciesEntity->findOne(['code' => 'EUR']); break;
                        default: $currencyModel = $currenciesEntity->findOne(['code' => 'USD']);
                    }
                    $productModel = $productsEntity->findOne(['id' => $variant->product_id]);
                    $variantModel = $variantsEntity->findOne(['id' => $variant->variant_id]);

                    $report->newEbayItem_id = $newLot->ebayItemNo;
                    $report->old_currency_id = $variantModel->currency_id;
                    $report->new_currency_id = $currencyModel->id;
                    $report->new_price = $newLot->outPrice;
                    $report->success = 1;
                    $report->description = 'ebayItemNo '.$variant->ebayItemNo;
                }
            } else {
//            echo PHP_EOL.PHP_EOL.__LINE__.PHP_EOL.PHP_EOL;
                $report->success = 0;
                $report->description = 'у варианта '.$variant->variant_id.' нет SKU и нет ebayItemNo — не обновляли';
            }
            $report->updated = "NOW()";

            if ($report->success) {
                $productsUpd = $productsEntity->update($productModel->id, ['ebayItemNo' => $report->newEbayItem_id, 'supplier' => $newLot->supplier]);
                $variantsUpd = $variantsEntity->update($variantModel->id, ['price' => $report->new_price, 'compare_price' => $newLot->ebayPrice,'currency_id' => $currencyModel->id, 'price_updated' => "NOW()"]);
            } else {
                $variantsUpd = $variantsEntity->update($variantModel->id, ['price_updated' => "NOW()"]); // если в $report->success мы поставили 0, то отметим "обновлено" в вариантах, иначе неудачные будут лезть каждый запуск
            }
            $ebayUpdaterUpd = $ebayUpdaterEntity->add($report);
            echo '$productsUpd = '.var_dump($productsUpd).'; '.'$variantsUpd = '.var_dump($variantsUpd).'; $ebayUpdaterUpd = '.var_dump($ebayUpdaterUpd);

            if ($config->get('env') == 'production')
                sleep(rand(5, 20));
        }
    }

} // class