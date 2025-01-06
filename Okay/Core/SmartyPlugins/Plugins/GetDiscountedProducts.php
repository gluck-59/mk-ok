<?php


namespace Okay\Core\SmartyPlugins\Plugins;


use Okay\Core\EntityFactory;
use Okay\Entities\ProductsEntity;
use Okay\Helpers\ProductsHelper;
use Okay\Core\SmartyPlugins\Func;
use Okay\Core\Settings;

class GetDiscountedProducts extends Func
{
    protected $tag = 'get_discounted_products';
    
    /**
     * @var ProductsEntity
     */
    private $productsEntity;
    
    /**
     * @var ProductsHelper
     */
    private $productsHelper;



    public function __construct(EntityFactory $entityFactory, ProductsHelper $productsHelper, Settings $settings)
    {
        $this->productsEntity = $entityFactory->get(ProductsEntity::class);
        $this->productsHelper = $productsHelper;
        $this->settings = $settings;
    }

    public function run($params, \Smarty_Internal_Template $smarty)
    {
        if (!isset($params['visible'])) {
            $params['visible'] = 1;
        }
        $params['discounted'] = 1;
        $params['isPseudoDiscount'] = 1;

        if (!empty($params['var'])) {
            $sort = isset($params['sort']) ? $params['sort'] : null;
            $params['pseudoDiscountIds'] = explode(',', $this->settings->get('pseudoDiscountProducts'));
            $products = $this->productsHelper->getList($params, $sort); // ориг

            $smarty->assign($params['var'], $products);
        }
    }
}