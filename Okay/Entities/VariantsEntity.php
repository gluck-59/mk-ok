<?php


namespace Okay\Entities;


use Okay\Core\Entity\Entity;
use Okay\Core\Modules\Extender\ExtenderFacade;

class VariantsEntity extends Entity
{

    protected static $fields = [
        'id',
        'product_id',
        'sku',
        'weight',
        'price',
        'compare_price',
        'price_updated',
        'stock',
        'position',
        'external_id',
        'currency_id',
    ];

    protected static $additionalFields = [
        '(v.stock IS NULL) as infinity',
        'c.rate_from',
        'c.rate_to',
    ];

    protected static $langFields = [
        'name',
        'units',
    ];

    protected static $defaultOrderFields = [
        'position',
        'id',
    ];

    protected static $table = '__variants';
    protected static $langObject = 'variant';
    protected static $langTable = 'variants';
    protected static $tableAlias = 'v';

    public function get($id)
    {
        if (empty($id)) {
            return ExtenderFacade::execute([static::class, __FUNCTION__], null, func_get_args());
        }

        $this->select->join('left', '__currencies AS c', 'c.id=v.currency_id');

        $variant = parent::get($id);

        return $this->resetInfo($variant);
    }

    public function find(array $filter = [])
    {
        $this->select->join('left', '__currencies AS c', 'c.id=v.currency_id');
        $variants = parent::find($filter);

        if (is_object(reset($variants))) {
            foreach ($variants as &$variant) {
                $variant = $this->resetInfo($variant);
            }
        }

        return $variants;
    }

    public function pricesToMainCurrencyByCurrencyId($id)
    {
        /** @var CurrenciesEntity $currenciesEntity */
        $currenciesEntity = $this->entity->get(CurrenciesEntity::class);

        $currency         = $currenciesEntity->get((int) $id);
        $mainCurrency     = $currenciesEntity->getMainCurrency();
        $mainCurrencyCoef = $this->getMainCurrencyCoef($currency);

        $sql = $this->queryFactory->newSqlQuery();
        $sql->setStatement("UPDATE ".self::getTable()." SET price=price*{$mainCurrencyCoef}, compare_price=compare_price*{$mainCurrencyCoef}, currency_id=:main_currency_id WHERE currency_id=:currency_id")
            ->bindValue('currency_id', $id)
            ->bindValue('main_currency_id', $mainCurrency->id);
        $this->db->query($sql);

        ExtenderFacade::execute([static::class, __FUNCTION__], null, func_get_args());
    }

    protected function customOrder($order = null, array $orderFields = [], array $additionalData = [])
    {

        switch ($order) {
            case 'in_stock_first' :
                $orderFields = [
                    'IF(stock=0, 0, 1) DESC',
                    'position',
                    'id',
                ];
                break;
        }

        return ExtenderFacade::execute([static::class, __FUNCTION__], $orderFields, func_get_args());
    }

    protected function resetInfo($variant)
    {
        if (empty($variant)) {
            return $variant;
        }
        if (property_exists($variant, 'compare_price') && $variant->compare_price == 0) {
            $variant->compare_price = null;
        }

        if (property_exists($variant, 'stock') && $variant->stock === null) {
            $variant->stock = $this->settings->max_order_amount;
        }

        if (property_exists($variant, 'units') && $variant->units === null) {
            $variant->units = $this->settings->units;
        }

        return $variant;
    }

    protected function filter__in_stock()
    {
        if (empty($this->settings->get('is_preorder')) || ($this->settings->get('is_preorder') != 1)) {
            $this->select->where('(v.stock > 0 OR v.stock IS NULL)');
        }
    }

    protected function filter__not_id($id)
    {
        $this->select->where("id!=:not_id");
        $this->select->bindValue('not_id', (int)$id);
    }

    protected function filter__has_price()
    {
        $this->select->where("price > 0");
    }

    private function getMainCurrencyCoef($currency)
    {
        return $currency->rate_to / $currency->rate_from;
    }


    public function getVariantsToUpdate($days = 7) {
//        /* дебаг sql dbDebug debug */
//        $select = $this->getSelect()->debug();
        $sql = $this->queryFactory->newSqlQuery();

        $sql->setStatement("delete from ok_ebayupdater_report where TIMESTAMPDIFF(DAY, updated, NOW()) > 5");
        $this->db->query($sql);

        $sql->setStatement("SELECT v.price_updated, p.id product_id, v.id variant_id, v.price_updated, p.name product_name, p.ebayItemNo, p.partNumber, v.name variant_name, v.sku, v.price, v.currency_id
FROM ok_products p
JOIN ok_variants v ON v.product_id = p.id
WHERE DATEDIFF(date(NOW()), date(v.price_updated)) > $days
AND p.visible = 1 
and p.manufacturer_id not in (0,4,5)
ORDER BY v.price_updated
LIMIT 0,50
");

        $this->db->query($sql);

//        $select =  $this->getResults();
//        print_r($select);
//        /* дебаг debug */

//        $count = $this->db->result('count');
        return $this->getResults();
    }
}