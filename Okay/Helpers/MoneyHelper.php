<?php


namespace Okay\Helpers;


use Okay\Core\EntityFactory;
use Okay\Core\Settings;
use Okay\Entities\CurrenciesEntity;
use Okay\Core\Modules\Extender\ExtenderFacade;

class MoneyHelper
{
    private $entityFactory;
    private $settings;
    
    private static $currencies;

    public function __construct(EntityFactory $entityFactory, Settings $settings)
    {
        $this->entityFactory = $entityFactory;
        $this->settings = $settings;
    }

    public function convertVariantsPriceToMainCurrency(array $variants = [])
    {
        if (empty($variants)) {
            return ExtenderFacade::execute(__METHOD__, $variants, func_get_args());
        }
        
        foreach ($variants as &$variant) {
            $variant = $this->convertVariantPriceToMainCurrency($variant);
        }

        return ExtenderFacade::execute(__METHOD__, $variants, func_get_args());
    }

    public function convertVariantPriceToMainCurrency($variant)
    {
        if (empty($variant)) {
            return ExtenderFacade::execute(__METHOD__, $variant, func_get_args());
        }

        // Если скидкидочная цена меньше или равна обычной цене, такую скидку не выводим
//         if ($this->settings->get('hide_equal_compare_price') && $variant->compare_price <= $variant->price) // ориг
//         {
//             $variant->compare_price = null;
//         }

// pseudoDiscount
if ( in_array($variant->product_id, explode(',', $this->settings->get('pseudoDiscountProducts'))) ) {
    $variant->compare_price = round($variant->price * 1.11115);
} else $variant->compare_price = null;
        
        $currencies = $this->getCurrenciesList();
        if (!isset($currencies[$variant->currency_id])) {
            return ExtenderFacade::execute(__METHOD__, $variant, func_get_args());
        }

        $variantCurrency = $currencies[$variant->currency_id];
        if (!empty($variant->currency_id) && $variantCurrency->rate_from != $variantCurrency->rate_to) {
            $variant->price = round($variant->price * $variantCurrency->rate_to / $variantCurrency->rate_from, 2);
            if (!empty($variant->compare_price)) {
                $variant->compare_price = round($variant->compare_price * $variantCurrency->rate_to / $variantCurrency->rate_from, 2);
            }
        }

        return ExtenderFacade::execute(__METHOD__, $variant, func_get_args());
    }
    
    private function getCurrenciesList()
    {
        if (empty(self::$currencies)) {
            /** @var CurrenciesEntity $currenciesEntity */
            $currenciesEntity = $this->entityFactory->get(CurrenciesEntity::class);
            self::$currencies = $currenciesEntity->mappedBy('id')->find();
        }
        
        return self::$currencies;
    }
}