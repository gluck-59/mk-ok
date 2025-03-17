<?php


namespace Okay\Controllers;


use Okay\Core\Router;
use Okay\Core\Routes\RouteFactory;
use Okay\Helpers\BrandsHelper;
use Okay\Helpers\CatalogHelper;
use Okay\Helpers\FilterHelper;
use Okay\Helpers\MetadataHelpers\AllBrandsMetadataHelper;

class BrandsController extends AbstractController
{
    /*Отображение страницы всех брендов*/
    public function render(
        BrandsHelper            $brandsHelper,
        FilterHelper            $filterHelper,
        AllBrandsMetadataHelper $allBrandsMetadataHelper,
        RouteFactory            $routeFactory,
        CatalogHelper           $catalogHelper,
                                $filtersUrl = ''
    ) {
        $allBrandsRouteParams = $routeFactory->create('brands')->generateRouteParams();
        $this->design->assign('url', $allBrandsRouteParams->getSlug(), true);
        $this->design->assign('filtersUrl', !empty($filtersUrl) ? $filtersUrl : '');
        $this->design->assign('filtersUrl', !empty($filtersUrl) ? $filtersUrl : '', true);
        $this->design->assign('ajax_filter_route', 'brands_features', true);

        $catalogFeatures = $brandsHelper->getCatalogFeatures();

        $filterHelper->setFiltersUrl($filtersUrl);
        $filterHelper->setFeatures($catalogFeatures);
        $filterHelper->setFeaturesValuesFilter(['brand' => true]);

        $page = $brandsHelper->getBrandsPage();
        $this->design->assign('page',$page);

        if (($productsFilter = $brandsHelper->getProductsFilter(null, $filtersUrl)) === null) {
            return false;
        }

        if (($currentPage = $filterHelper->getCurrentPage($filtersUrl)) === false) {
            return false;
        }

        $filterHelper->changeLangUrls($filtersUrl);

        $metaArray = $filterHelper->getMetaArray($filtersUrl);

        // Если в строке есть параметры которые не должны быть в фильтре, либо параметры с другой категории, бросаем 404
        if (!empty($metaArray['features_values'])
            && array_intersect_key($metaArray['features_values'], $catalogFeatures) !== $metaArray['features_values']
        ) {
            return false;
        }

        $isFilterPage = $brandsHelper->isFilterPage($productsFilter);
        $this->design->assign('is_filter_page', $isFilterPage);

        if (!$this->settings->get('deferred_load_features') || $this->request->get('ajax','boolean')) {
            $brandsHelper->assignBrandsFilterProcedure(
                $productsFilter,
                $catalogFeatures
            );
        } else {
            // если включена отложенная загрузка фильтров, установим отдельно возможные значения свойств
            $baseFeaturesValues = $catalogHelper->getBaseFeaturesValues(null, $this->settings->get('missing_products'));

            if (!empty($baseFeaturesValues)) {
                foreach ($baseFeaturesValues as $values) {
                    foreach ($values as $value) {
                        if (isset($catalogFeatures[$value->feature_id])) {
                            $catalogFeatures[$value->feature_id]->features_values[$value->id] = $value;
                        }
                    }
                }
            }
            foreach ($catalogFeatures as $k => $feature) {
                if (!property_exists($feature, 'features_values') || empty($feature->features_values)) {
                    unset($catalogFeatures[$k]);
                }
            }
        }

        $brandsFilter = $brandsHelper->getBrandsFilter($productsFilter);

        if (!$brandsHelper->paginateBrands(
            $this->settings->get('products_num'),
            $currentPage,
            $brandsFilter,
            $this->design
        )) {
            return false;
        }

        $brands = $brandsHelper->getList(
            $brandsFilter,
            $brandsHelper->getCurrentSort()
        );

        $this->design->assign('brands', $brands);

//if ($filtersUrl == 'filter-discounted') {
//    $this->design->assign('isPseudoDiscount', 1);
//}

        if ($this->request->get('ajax','boolean')) {
            $this->design->assign('ajax', 1);
            $result = $brandsHelper->getBrandsAjaxFilterData();
            $this->response->setContent(json_encode($result), RESPONSE_JSON);
            return true;
        }

        $this->design->assign('canonical', Router::generateUrl('brands', [], true));

        if ($isFilterPage) {
            $this->design->assign('noindex_nofollow', true);
        }

        $allBrandsMetadataHelper->setUp(
            $productsFilter['keyword'] ?? null
        );

        $this->setMetadataHelper($allBrandsMetadataHelper);

        $this->response->setContent('brands.tpl');
    }

    public function getFilter(
        FilterHelper $filterHelper,
        BrandsHelper $brandsHelper,
                     $filtersUrl = ''
    ) {
        // Если ленивая отложенная загрузка фильтра отключена, этот метод должен давать 404
        if (!$this->settings->get('deferred_load_features')) {
            return false;
        }

        $catalogFeatures = $brandsHelper->getCatalogFeatures();

        $filterHelper->setFiltersUrl($filtersUrl);
        $filterHelper->setFeatures($catalogFeatures);
        $filterHelper->setFeaturesValuesFilter(['brand' => true]);

        if (($productsFilter = $brandsHelper->getProductsFilter(null, $filtersUrl)) === null) {
            return false;
        }

        $this->design->assign('is_filter_page', $brandsHelper->isFilterPage($productsFilter));

        $brandsHelper->assignBrandsFilterProcedure(
            $productsFilter,
            $catalogFeatures
        );

        $this->design->assign('furlRoute', 'brands');

        $response = [
            'features' => $this->design->fetch('features.tpl', true),
            'selected_features' => $this->design->fetch('selected_features.tpl', true),
        ];

        $this->response->setContent(json_encode($response), RESPONSE_JSON);
    }



    public function oldBrands()
    {
        $oldSupplierId = $this->request->get('id_supplier','int');
var_dump($oldSupplierId);
        switch ($oldSupplierId) {
            case 0: $this->response->redirectTo(Router::generateUrl('main', []), 301); break;
            case 5: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'honda']), 301); break;
            case 8: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'kawasaki']), 301); break;
            case 9: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'suzuki']), 301); break;
            case 10: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'yamaha']), 301); break;
            case 11: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'harley-davidson']), 301); break;
            case 12: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'universalnoe']), 301); break;
            case 15: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'ktm']), 301); break;
            case 16: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'victory']), 301); break;
            case 20: $this->response->redirectTo(Router::generateUrl('brand', ['url' => 'bmw']), 301); break;

            default: $this->response->redirectTo(Router::generateUrl('brands', []), 301); break;
        }
    }
}
