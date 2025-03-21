<?php

namespace Okay\Controllers;

use Okay\Core\Router;
use Okay\Core\Routes\RouteFactory;
use Okay\Entities\BrandsEntity;
use Okay\Entities\ManufacturersEntity;
use Okay\Entities\ProductsEntity;
use Okay\Entities\CategoriesEntity;
use Okay\Helpers\CanonicalHelper;
use Okay\Helpers\CatalogHelper;
use Okay\Helpers\CategoriesHelper;
use Okay\Helpers\FilterHelper;
use Okay\Helpers\MetadataHelpers\CategoryMetadataHelper;
use Okay\Helpers\MetaRobotsHelper;
use Okay\Helpers\ProductsHelper;

class CategoryController extends AbstractController
{
    public function render(
        BrandsEntity           $brandsEntity,
        ManufacturersEntity    $manufacturersEntity,
        CategoriesEntity       $categoriesEntity,
        CatalogHelper          $catalogHelper,
        ProductsHelper         $productsHelper,
        FilterHelper           $filterHelper,
        ProductsEntity         $productsEntity,
        CategoryMetadataHelper $categoryMetadataHelper,
        CanonicalHelper        $canonicalHelper,
        MetaRobotsHelper       $metaRobotsHelper,
        RouteFactory           $routeFactory,
        CategoriesHelper       $categoriesHelper,
                               $url,
                               $filtersUrl = ''
    ) {
        $categoryRoute = $routeFactory->create('category');
        $this->design->assign('url', $categoryRoute->generateSlugUrl($url), true);
        $this->design->assign('filtersUrl', !empty($filtersUrl) ? '/'.$filtersUrl : '', true);
        $this->design->assign('ajax_filter_route', 'category_features', true);

        $category = $categoriesEntity->get((string)$url);

        if (empty($category) || (!$category->visible && empty($_SESSION['admin']))) {
            return false;
        }

        //метод можно расширять и отменить дальнейшую логику работы контроллера
        if (($setCategory = $categoriesHelper->setCatalogCategory($category)) !== null) {
            return $setCategory;
        }

        $catalogFeatures = $categoriesHelper->getCatalogFeatures($category);

        $filterHelper->setFiltersUrl($filtersUrl);
        $filterHelper->setFeatures($catalogFeatures);
        $filterHelper->setFeaturesValuesFilter(['category_id' => $category->children]);

        if (($productsFilter = $categoriesHelper->getProductsFilter($category, $filtersUrl)) === null) {
            return false;
        }
        
        if (($currentPage = $filterHelper->getCurrentPage($filtersUrl)) === false) {
            return false;
        }

        $filterHelper->generateCacheKey("category-{$category->id}");

        $filterHelper->changeLangUrls($filtersUrl);

        $productsSort = $catalogHelper->getProductsSort($filtersUrl);

        //  добавляем оглавление в описании категории блога
        if ($category->show_table_content && !empty($category->description)) {
            $result = $categoriesHelper->getTableOfContent($category->description);
            $category->description = $result[0];

            // Выводим оглавление только если там более трех пунктов
            if (count($result[1]) >= 2) {
                $this->design->assign('table_of_content', $result[1]);
            }
        }

        $this->design->assign('category', $category);
        $this->design->assign('sort', $productsSort);

        $catalogBrands = $brandsEntity->mappedBy('id')->find([
            'category_id' => $category->children,
            'visible' => 1,
            'product_visible' => 1,
        ]);

        $catalogManufacturers = $manufacturersEntity->mappedBy('id')->find([
            'category_id' => $category->children,
            'visible' => 1,
            'product_visible' => 1,
        ]);

        $metaArray = $filterHelper->getMetaArray($filtersUrl);

        // Если в строке есть параметры которые не должны быть в фильтре, либо параметры с другой категории, бросаем 404
        if (!empty($metaArray['features_values'])
            && array_intersect_key($metaArray['features_values'], $catalogFeatures) !== $metaArray['features_values']
            || !empty($metaArray['brand'])
            && array_intersect_key($metaArray['brand'], $catalogBrands) !== $metaArray['brand']
            && array_intersect_key($metaArray['manufacturer'], $catalogManufacturers) !== $metaArray['manufacturer']
        ) {
            return false;
        }

        $isFilterPage = $categoriesHelper->isFilterPage($productsFilter);
        $this->design->assign('is_filter_page', $isFilterPage);

        if (!$this->settings->get('deferred_load_features') || $this->request->get('ajax','boolean')) {
            $categoriesHelper->assignFilterProcedure(
                $productsFilter,
                $catalogFeatures,
                $category
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
            
            $metaRobotsHelper->setAvailableFeatures($catalogFeatures);
        }

        $productsFilter = $filterHelper->getCategoryProductsFilter($productsFilter);

        if (!$catalogHelper->paginate(
            $this->settings->get('products_num'),
            $currentPage,
            $productsFilter,
            $this->design
        )) {
            return false;
        }

        // Товары
        $products = $productsHelper->getList($productsFilter, $productsSort);
        $products = $productsHelper->attachDescriptionByTemplate($products);
        $this->design->assign('products', $products);

        if ($this->request->get('ajax','boolean')) {
            $this->design->assign('ajax', 1);
            $result = $catalogHelper->getAjaxFilterData();
            $this->response->setContent(json_encode($result), RESPONSE_JSON);
            return true;
        }

        //lastModify
        $lastModify = $productsEntity->cols(['last_modify'])
            ->order('last_modify_desc')
            ->find([
                'category_id' => $productsFilter['category_id'],
                'limit' => 1,
            ]);
        $lastModify[] = $category->last_modify;
        if ($this->page) {
            $lastModify[] = $this->page->last_modify;
        }
        $this->response->setHeaderLastModify(max($lastModify));
        //lastModify END

        if (isset($productsFilter['keyword'])) {
            $this->design->assign('noindex_nofollow', true);
        } else {
            switch ($metaRobotsHelper->getCatalogRobots(
                $currentPage,
                $productsFilter['other_filter'] ?? [],
                $metaArray['features_values'] ?? [],
                $productsFilter['brand_id'] ?? [])
            ) {
                case ROBOTS_NOINDEX_FOLLOW:
                    $this->design->assign('noindex_follow', true);
                    break;
                case ROBOTS_NOINDEX_NOFOLLOW:
                    $this->design->assign('noindex_nofollow', true);
                    break;
            }
        }

        if (!empty($metaArray['features_values'])) {
            $canonicalFeaturesValues = array_combine(
                array_map(function ($featureId) use ($catalogFeatures) {
                    return $catalogFeatures[$featureId]->url;
                }, array_keys($metaArray['features_values'])),
                $metaArray['features_values']
            );
        } else {
            $canonicalFeaturesValues = [];
        }

        $canonicalData = $canonicalHelper->getCatalogCanonicalData(
            $currentPage,
            $productsFilter['other_filter'] ?? [],
            $canonicalFeaturesValues,
            $productsFilter['brand_id'] ?? []
        );

        if ($canonicalData) {
            $canonical = Router::generateUrl('category', ['url' => $category->url], true);
            $chpuUrl = $filterHelper->filterChpuUrl($canonicalData);
            $chpuUrl = ltrim($chpuUrl, '/');
            if (!empty($chpuUrl)) {
                $canonical = rtrim($canonical, '/') . '/' . $chpuUrl;
            }
            
            $this->design->assign('canonical', $canonical);
        }
        
        $relPrevNext = $this->design->fetch('products_rel_prev_next.tpl');
        $this->design->assign('rel_prev_next', $relPrevNext);

        $categoryMetadataHelper->setUp(
            $category,
            $isFilterPage,
            $this->design->getVar('is_all_pages'),
            $this->design->getVar('current_page_num'),
            $productsFilter['features'] ?? [],
            $metaArray,
            $productsFilter['keyword'] ?? null
        );

        $this->design->assign('brands', $catalogBrands);
        $this->design->assign('manufacturers', $catalogManufacturers);

        $this->setMetadataHelper($categoryMetadataHelper);

        $this->response->setContent('products.tpl');
    }

    public function getFilter(
        CategoriesEntity $categoriesEntity,
        FilterHelper     $filterHelper,
        CategoriesHelper $categoriesHelper,
                         $url,
                         $filtersUrl = ''
    ) {

        // Если ленивая отложенная загрузка фильтра отключена, этот метод должен давать 404
        if (!$this->settings->get('deferred_load_features')) {
            return false;
        }

        $isFilterPage = false;
        $filter['visible'] = 1;

        $filterHelper->setFiltersUrl($filtersUrl);

        $category = $categoriesEntity->get((string)$url);

        if (empty($category) || (!$category->visible && empty($_SESSION['admin']))) {
            return false;
        }

        $catalogFeatures = $categoriesHelper->getCatalogFeatures($category);

        $filterHelper->setFiltersUrl($filtersUrl);
        $filterHelper->setFeatures($catalogFeatures);
        $filterHelper->setFeaturesValuesFilter(['category_id' => $category->children]);

        if (($productsFilter = $categoriesHelper->getProductsFilter($category, $filtersUrl)) === null) {
            return false;
        }

        $this->design->assign('is_filter_page', $categoriesHelper->isFilterPage($productsFilter));

        $categoriesHelper->assignFilterProcedure(
            $productsFilter,
            $catalogFeatures,
            $category
        );

        $this->design->assign('furlRoute', 'category');
        $this->design->assign('category', $category);

        $response = [
            'features' => $this->design->fetch('features.tpl', true),
            'selected_features' => $this->design->fetch('selected_features.tpl', true),
        ];

        $this->response->setContent(json_encode($response), RESPONSE_JSON);
    }



    /**
     *  редиректит со старого урла /category.php?id_category= на соотв новый
     *
     * @return void
     */
    public function oldCategories() {
        $oldCategoryId = $this->request->get('id_category','int');

        switch ($oldCategoryId) {
            case 0: $this->response->redirectTo(Router::generateUrl('main', []), 301); break;
            case 1: $this->response->redirectTo(Router::generateUrl('main', []), 301); break;
            case 5: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'bokovye-kofry']), 301); break;
            case 7: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'batony-na-vilku']), 301); break;
            case 8: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'bokovye-kofry']), 301); break;
            case 9: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'zadnie-sissy-bar-kofry']), 301); break;
            case 10: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'ruchki-stojki-ruli-rychagi']), 301); break;
            case 11: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'bokovye-kofry']), 301); break;
            case 12: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'sidenya-spinki-i-bagazhniki']), 301); break;
            case 13: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'ramki-dlya-kofrov']), 301); break;
            case 14: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'zapchasti-i-spetszakazy']), 301); break;
            case 15: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'nakladki-i-galstuki']), 301); break;
            case 17: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'sidenya-spinki-i-bagazhniki']), 301); break;
            case 18: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'zadnie-sissy-bar-kofry']), 301); break;
            case 24: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'dugi-i-slajdery']), 301); break;
            case 25: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'lobovye-stekla-i-batvingi']), 301); break;
            case 27: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'moto-nishtyaki']), 301); break;
            case 28: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'lyustry-fary-optika']), 301); break;
            case 29: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'podnozhki-platformy-i-vynosy']), 301); break;
            case 30: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'signaly-i-dudelki']), 301); break;
            case 63: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'zapchasti-i-spetszakazy']), 301); break;
            case 64: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'pribory-i-paneli']), 301); break;
            case 65: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'zapchasti-i-spetszakazy']), 301); break;
            case 77: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'krylya-i-bugeli']), 301); break;
            case 82: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'enduro-zaschita-i-lyzhi']), 301); break;
            case 88: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'glushiteli']), 301); break;
            case 89: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'zerkala']), 301); break;
            case 90: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'nakladki-i-galstuki']), 301); break;
            case 93: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'glushiteli']), 301); break;
            case 94: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'glushiteli']), 301); break;
            case 96: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'sidenya-spinki-i-bagazhniki']), 301); break;
            case 97: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'black']), 301); break;
            case 98: $this->response->redirectTo(Router::generateUrl('category', ['url' => 'krylya-i-bugeli']), 301); break;

            default: $this->response->redirectTo(Router::generateUrl('main', []), 301); break;
        }
    }
}
