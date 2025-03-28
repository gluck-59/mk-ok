<?php

ini_set('display_errors', 'on');
error_reporting(E_ERROR);


use Okay\Core\QueryFactory;
use Okay\Core\Database;

require_once 'configure.php';

if (!$managers->access('sales_chart', $manager)) {
    exit();
}

/** @var QueryFactory $queryFactory */
$queryFactory = $DI->get(QueryFactory::class);

/** @var Database $db */
$db = $DI->get(Database::class);

$results = [];


// категории

$selectCategories = $queryFactory->newSelect();
$selectCategories->cols([
    'COUNT(*) AS qty',  'c.name categoryName'
])->from('__user_browsed_products ubp')
//    ->where('o.closed ')
    ->join('left', '__products p', 'p.id = ubp.product_id')
//    ->join('left', '__lang_products lp', 'p.id = lp.product_id AND lp.lang_id = 1')
    ->join('left', '__categories c', 'c.id = p.main_category_id')
//    ->join('left', '__manufacturers m', 'm.id = p.manufacturer_id')
//    ->join('left', '__brands b', 'b.id = p.brand_id')
    ->groupBy(['c.id'])
    ->limit(5)
//    ->debugPrint()
;

$db->query($selectCategories);
$data = $db->results();
$result = [];
foreach($data as $d) {
    $result['y'] = $d->qty;
    $result['name'] = $d->categoryName;
    $results['category'][] = $result;
}


 // производители
$selectManufacturers = $queryFactory->newSelect();
$selectManufacturers->cols([
    'COUNT(*) AS qty',  'm.name manufacturerName'
])->from('__user_browsed_products ubp')
//    ->where('o.closed ')
    ->join('left', '__products p', 'p.id = ubp.product_id')
//    ->join('left', '__lang_products lp', 'p.id = lp.product_id AND lp.lang_id = 1')
//    ->join('left', '__categories c', 'c.id = p.main_category_id')
    ->join('left', '__manufacturers m', 'm.id = p.manufacturer_id')
//    ->join('left', '__brands b', 'b.id = p.brand_id')
    ->groupBy(['m.id'])
    ->limit(5)
//    ->debugPrint()
;

$db->query($selectManufacturers);
$data = $db->results();
$result = [];
foreach($data as $d) {
    $result['y'] = $d->qty;
    $result['name'] = $d->manufacturerName;
    $results['manufacturers'][] = $result;
}



// марки
$selectBrands = $queryFactory->newSelect();
$selectBrands->cols([
    'COUNT(*) AS qty',  'b.name brandName'
])->from('__user_browsed_products ubp')
//    ->where('o.closed ')
    ->join('left', '__products p', 'p.id = ubp.product_id')
//    ->join('left', '__lang_products lp', 'p.id = lp.product_id AND lp.lang_id = 1')
//    ->join('left', '__categories c', 'c.id = p.main_category_id')
//    ->join('left', '__manufacturers m', 'm.id = p.manufacturer_id')
    ->join('left', '__brands b', 'b.id = p.brand_id')
    ->groupBy(['b.id'])
    ->limit(5)
//    ->debugPrint()
;

$db->query($selectBrands);
$data = $db->results();
$result = [];
foreach($data as $d) {
    $result['y'] = $d->qty;
    $result['name'] = $d->brandName;
    $results['brands'][] = $result;
}


$response->setContent(json_encode($results, JSON_NUMERIC_CHECK), RESPONSE_JSON);
$response->sendContent();
