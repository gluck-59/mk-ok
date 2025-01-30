<?php

namespace Okay\Modules\Gluck\EbayUpdater\Controllers;

use Okay\Admin\Controllers\EbayAdmin;
use Okay\Core\Database;
use Okay\Core\QueryFactory;
use Okay\Controllers\AbstractController;
use Okay\Core\Response;
use Okay\Entities\CurrenciesEntity;
use Okay\Entities\ManagersEntity;
use Okay\Entities\ProductsEntity;
use Okay\Entities\VariantsEntity;


class EbayUpdaterController extends AbstractController
{
    /**
     * уточняет цену с Ebay аяксом для одного Variant
     *
     * @param ProductsEntity $productsEntity
     * @param VariantsEntity $variantsEntity
     * @param Response $response
     * @return void
     */
    function ebayPriceCheck(ProductsEntity $productsEntity, VariantsEntity $variantsEntity,  Database $database, QueryFactory $queryFactory, Response $response, CurrenciesEntity $currenciesEntity) {
        $managersEntity = new ManagersEntity();
        $ebayAdmin = new EbayAdmin($managersEntity->findOne(['login' => 'gluck']), '', '');

        $sql = $queryFactory->newSqlQuery();
        $sql->setStatement('SELECT v.id variant_id, p.ebayItemNo, p.partNumber, p.manufacturer_id, v.sku, v.price, v.compare_price, v.currency_id, m.name manufacturerName  FROM ok_products p JOIN ok_variants v ON v.product_id = p.id JOIN ok_manufacturers m ON m.id = p.manufacturer_id WHERE v.id = '.$this->request->post('variantId'));
        $database->query($sql);
        $forUpdate = $variantsEntity->getResult();

        // алгоритм обновления цены:: 1) sku, 2) ebayItemNo, 3) partNumber
        if ($forUpdate->sku) $request = $forUpdate->manufacturerName. ' '.$forUpdate->sku;
        elseif ($forUpdate->ebayItemNo) $request = $forUpdate->ebayItemNo;
        elseif ($forUpdate->partNumber) $request = $forUpdate->partNumber;

        if ($request) {
            $newLot = $ebayAdmin->parse(['keyword' => $request], true);
        }

        $newLot->искали = $request;

        if (!$newLot->debug->errors) {
            $cur = new CurrenciesEntity();
            switch ($newLot->currency) {
                case 'US': $currentCurrency = 'USD'; break;
                case 'EUR': $currentCurrency = 'EUR'; break;
                default: $currentCurrency = 'USD';
            }
            $currency = $cur->findOne(['code' => $currentCurrency, 'enabled' => 1]);
            $newLot->currency = $currency->sign;
        }

//print_r($forUpdate);

        $response->setContent(json_encode($newLot), RESPONSE_JSON);
    }


}