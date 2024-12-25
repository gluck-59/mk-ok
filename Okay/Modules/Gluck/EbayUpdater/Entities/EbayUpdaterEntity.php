<?php


namespace Okay\Modules\Gluck\EbayUpdater\Entities;


use Okay\Core\Entity\Entity;
use Okay\Admin\Controllers\EbayAdmin;
use Okay\Entities\ManagersEntity;
use Okay\Entities\UsersEntity;


class EbayUpdaterEntity extends Entity
{
    protected static $fields = [
        'id',
        'variant_id',
        'newEbayItem_id',
        'old_price',
        'new_price',
        'updated',
        'success',
        'description',
    ];

    protected static $langFields = [
    ];

    protected static $defaultOrderFields = [
    ];

    protected static $table = '__ebayUpdater_report';
    protected static $langTable = 'ebayUpdater_report';
    protected static $langObject = 'ebayUpdater_report';
    protected static $tableAlias = 'er';

    public function add($object)
    {
        $object->updated = "NOW()";
        return parent::add($object);
    }

    public function test() {
        $managersEntity = new ManagersEntity();
        $contr = new EbayAdmin($managersEntity->findOne(['login' => 'gluck']), '', '');
//        return $contr->parse(['keyword' => ])
//        return __CLASS__.' test()';
    }

}