<?php

namespace Okay\Modules\Gluck\Tochka\Helpers;

ini_set('display_errors', 'on');
error_reporting(E_ERROR);

use Okay\Core\Modules\Extender\ExtensionInterface;
use Okay\Entities\ManagersEntity;
use Okay\Entities\VariantsEntity;
use Okay\Entities\ProductsEntity;
use Okay\Entities\CurrenciesEntity;
use Okay\Core\Settings;
use Okay\Core\Config;


class TochkaHelper implements ExtensionInterface
{
    private ProductsEntity $productsEntity;
    private ManufacturersEntity $manufacturersEntity;



} // class