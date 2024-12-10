<?php


namespace Okay\Controllers;


use Okay\Core\Router;
use Okay\Core\Routes\RouteFactory;
//use Okay\Helpers\ManufacturersHelper;
use Okay\Helpers\ManufacturersHelper;
use Okay\Helpers\CatalogHelper;
use Okay\Helpers\FilterHelper;
use Okay\Helpers\MetadataHelpers\AllManufacturersMetadataHelper;

class ManufacturersController extends AbstractController
{
    /*Отображение страницы всех manufacturers */
    public function render(
//        ManufacturersHelper            $manufacturersHelper,
        ManufacturersHelper     $manufacturersHelper,
        FilterHelper            $filterHelper,
        AllManufacturersMetadataHelper $allManufacturersMetadataHelper,
        RouteFactory            $routeFactory,
        CatalogHelper           $catalogHelper,
                                $filtersUrl = ''
    ) {
        $allManufacturersRouteParams = $routeFactory->create('manufacturers')->generateRouteParams();
        $this->design->assign('url', $allManufacturersRouteParams->getSlug(), true);
        $this->design->assign('filtersUrl', !empty($filtersUrl) ? $filtersUrl : '');
        $this->design->assign('filtersUrl', !empty($filtersUrl) ? $filtersUrl : '', true);
        $this->design->assign('ajax_filter_route', 'manufacturers_features', true);

        $catalogFeatures = $manufacturersHelper->getCatalogFeatures();

        $filterHelper->setFiltersUrl($filtersUrl);
        $filterHelper->setFeatures($catalogFeatures);
        $filterHelper->setFeaturesValuesFilter(['manufacturer' => true]);

        $page = $manufacturersHelper->getManufacturersPage();
        $this->design->assign('page',$page);

        if (($productsFilter = $manufacturersHelper->getProductsFilter(null, $filtersUrl)) === null) {
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

        $isFilterPage = $manufacturersHelper->isFilterPage($productsFilter);
        $this->design->assign('is_filter_page', $isFilterPage);

        if (!$this->settings->get('deferred_load_features') || $this->request->get('ajax','boolean')) {
            $manufacturersHelper->assignManufacturersFilterProcedure(
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

        $manufacturersFilter = $manufacturersHelper->getManufacturersFilter($productsFilter);

        if (!$manufacturersHelper->paginateManufacturers(
            $this->settings->get('products_num'),
            $currentPage,
            $manufacturersFilter,
            $this->design
        )) {
            return false;
        }

        $manufacturers = $manufacturersHelper->getList(
            $manufacturersFilter,
            $manufacturersHelper->getCurrentSort()
        );

        $this->design->assign('manufacturers', $manufacturers);

        if ($this->request->get('ajax','boolean')) {
            $this->design->assign('ajax', 1);
            $result = $manufacturersHelper->getManufacturersAjaxFilterData();
            $this->response->setContent(json_encode($result), RESPONSE_JSON);
            return true;
        }

        $this->design->assign('canonical', Router::generateUrl('manufacturers', [], true));

        if ($isFilterPage) {
            $this->design->assign('noindex_nofollow', true);
        }

        $allManufacturersMetadataHelper->setUp(
            $productsFilter['keyword'] ?? null
        );

        $this->setMetadataHelper($allManufacturersMetadataHelper);

        $this->response->setContent('manufacturers.tpl');
    }

    public function getFilter(
        FilterHelper $filterHelper,
        ManufacturersHelper $manufacturersHelper,
                     $filtersUrl = ''
    ) {
        // Если ленивая отложенная загрузка фильтра отключена, этот метод должен давать 404
        if (!$this->settings->get('deferred_load_features')) {
            return false;
        }

        $catalogFeatures = $manufacturersHelper->getCatalogFeatures();

        $filterHelper->setFiltersUrl($filtersUrl);
        $filterHelper->setFeatures($catalogFeatures);
        $filterHelper->setFeaturesValuesFilter(['manufacturer' => true]);

        if (($productsFilter = $manufacturersHelper->getProductsFilter(null, $filtersUrl)) === null) {
            return false;
        }

        $this->design->assign('is_filter_page', $manufacturersHelper->isFilterPage($productsFilter));

        $manufacturersHelper->assignManufacturersFilterProcedure(
            $productsFilter,
            $catalogFeatures
        );

        $this->design->assign('furlRoute', 'manufacturers');

        $response = [
            'features' => $this->design->fetch('features.tpl', true),
            'selected_features' => $this->design->fetch('selected_features.tpl', true),
        ];

        $this->response->setContent(json_encode($response), RESPONSE_JSON);
    }
}
