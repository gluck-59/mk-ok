<?php

namespace Okay\Modules\Gluck\EbayUpdater\Helpers;

ini_set('display_errors', 'on');
error_reporting(E_ERROR);

use Okay\Core\Modules\Extender\ExtensionInterface;
use Okay\Entities\ManagersEntity;
use Okay\Entities\VariantsEntity;
use Okay\Modules\Gluck\EbayUpdater\Entities\EbayUpdaterEntity;
use Okay\Entities\ProductsEntity;
use Okay\Admin\Controllers\EbayAdmin;
use Okay\Modules\Gluck\EbayUpdater\Init\Init;
use Okay\Core\Settings;


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

    public function cronEbayUpdater(VariantsEntity $variantsEntity, EbayUpdaterEntity $ebayUpdaterEntity, Settings $settings) {
//print_r($settings); die();
        $managersEntity = new ManagersEntity();
        $ebayAdmin = new EbayAdmin($managersEntity->findOne(['login' => 'gluck']), '', '');

        $variantsToUpd = $variantsEntity->getVariantsToUpdate(7);
        foreach ($variantsToUpd as $variant) {
            $report = new \stdClass();
            $report->variant_id = $variant->variant_id;
            $report->old_price = $variant->price;
            $currency_id = 1; // USD? EUR? еще?

            $variantModel = $variantsEntity->findOne(['id' => $variant->variant_id]);
print_r($variant);
            // ищем по партномеру из модели Variant, иначе по ID лота из модели Product
            if (!empty($variant->sku)) {
                echo 'ищем по SKU'.PHP_EOL.PHP_EOL;
print_r($ebayAdmin->parse(['keyword' => $variant->sku]));

die();
                $report->new_price = 22.22;
                $report->success = 1;
            } elseif (!empty($variant->ebayItemNo)) {
                echo 'ищем по ebayItemNo'.PHP_EOL.PHP_EOL;
                $report->newEbayItem_id = 9999999;
                $report->new_price = 22.22;
                $report->success = 1;
            } else {
                echo '=== не ищем? ==='.PHP_EOL.PHP_EOL;
                $report->success = 0;
                $report->description = 'описание';
            }

$variantsEntity->update($variantModel->id, ['price' => $report->new_price, 'currency_id' => $currency_id /*'price_updated' => "NOW()"*/]);
$res = $ebayUpdaterEntity->add($report);
var_dump($res);
        }


//$this->ebayUpdaterEntity->success = 0;



/*
'variant_id',
'newEbayItem_id',
'old_price',
'new_price',
'updated',
'success',
 */


//        $report = new EbayUpdaterEntity();
//        $result = $report->add([
//            'variant_id' => 111,
//            'newEbayItem_id' => 'newEbayItem_id',
//            'old_price' => 1.1,
//            'new_price' => 2.22,
//            'success' => 0
//        ]);

//        print_r($report->getAllFields());
//        var_dump($result);
//        return $variantsToUpd;
    }






}