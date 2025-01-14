<?php


namespace Okay\Modules\Gluck\Tochka\Entities;


use Okay\Core\Entity\Entity;
use Okay\Entities\ManagersEntity;
use Okay\Entities\ProductsEntity;
use Okay\Entities\VariantsEntity;


class TochkaEntity extends Entity
{
    protected static $fields = [
        'id',
        'rs_url',
        'api_version',
        'merchantId',
        'legalId',
        'customerCode',
        'accountId',
        'accesstoken_hybrid'
    ];

    protected static $langFields = [
    ];

    protected static $defaultOrderFields = [
    ];

    protected static $table = '__tochka_settings';
    protected static $langTable = 'tochka_settings';
    protected static $langObject = 'tochka_settings';
    protected static $tableAlias = 'ts';
}