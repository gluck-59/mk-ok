<?php

namespace Okay\Admin\Controllers;

use Okay\Admin\Helpers\BackendCategoriesHelper;
use Okay\Admin\Helpers\BackendFeaturesHelper;
use Okay\Admin\Helpers\BackendProductsHelper;
use Okay\Admin\Helpers\BackendSpecialImagesHelper;
use Okay\Admin\Helpers\BackendValidateHelper;
use Okay\Admin\Helpers\BackendVariantsHelper;
use Okay\Admin\Requests\BackendProductsRequest;
use Okay\Entities\BrandsEntity;
use Okay\Entities\CurrenciesEntity;
use Okay\Entities\RouterCacheEntity;

class EbayAdmin extends IndexAdmin
{
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
        print_r($this);
//prettyDump($backendCategoriesHelper->getCategoriesTree(), 1);
        $this->design->assign('ebayRequest', $_POST); // $this->request->post('ПОЛЕ') может брать только с ПОЛЕ
        $this->design->assign('parsedLot', 'parsedLot');
        $this->design->assign('categories', $backendCategoriesHelper->getCategoriesTree());
        $this->response->setContent('product.tpl');
    }
}