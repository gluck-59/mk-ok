<?php


namespace Okay\Modules\Gluck\EbayUpdater\Entities;


use Okay\Core\Entity\Entity;

class EbayUpdaterEntity extends Entity
{
    protected static $fields = [
        'id',
        'variant_id',
        'newEbayItem_id',
        'old_price',
        'new_price',
        'updated',
    ];

    protected static $langFields = [
    ];

    protected static $defaultOrderFields = [
    ];

    protected static $table = '__EbayUpdater_report';
    protected static $langTable = 'EbayUpdater_report';
    protected static $langObject = 'EbayUpdater_report';
    protected static $tableAlias = 'er';
}