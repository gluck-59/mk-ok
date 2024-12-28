<?php


namespace Okay\Modules\Gluck\EbayUpdater\Entities;


use Okay\Core\Entity\Entity;
use Okay\Admin\Controllers\EbayAdmin;
use Okay\Entities\ManagersEntity;
use Okay\Entities\ProductsEntity;
use Okay\Entities\VariantsEntity;


class EbayUpdaterEntity extends Entity
{
    protected static $fields = [
//        'id',
        'variant_id',
        'newEbayItem_id',
        'currency_id',
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



    public function getUpdated() {
        $productsEntity = new ProductsEntity();
        $variantssEntity = new VariantsEntity();

        $sql = $this->queryFactory->newSqlQuery();
        $sql->setStatement("SELECT variant_id, newEbayItem_id, old_currency_id, new_currency_id, old_price, new_price, DATE_FORMAT(updated, '%d.%m.%Y в %H:%i') upd_date, success, description FROM ".self::getTable()." ORDER BY updated DESC");
        $this->db->query($sql);

        $fieldsTemp = $this->db->results();
        foreach ($fieldsTemp as $field) {
            $variant = $variantssEntity->findOne(['id' => $field->variant_id]);
            $product = $productsEntity->findOne(['id' => $variant->product_id]);
            unset($field->variant_id);

            $field->productId = $product->id;
            $field->productName = $variant->name ? $product->name.' ('.$variant->name.')': $product->name;
            $fields[] = $field;
        }
        return $fields;
    }




}