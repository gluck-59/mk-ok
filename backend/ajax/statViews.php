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

$groupBy = 'c.id';

$select = $queryFactory->newSelect();
$select->cols([
    'COUNT(*) AS qty', 'lp.name productName', 'c.name categoryName', 'm.name manufacturerName', 'b.name brandName'
])->from('__user_browsed_products ubp')
//    ->where('o.closed ')
    ->join('left', '__products p', 'p.id = ubp.product_id')
    ->join('left', '__lang_products lp', 'p.id = lp.product_id AND lp.lang_id = 1')
    ->join('left', '__categories c', 'c.id = p.main_category_id')
    ->join('left', '__manufacturers m', 'm.id = p.manufacturer_id')
    ->join('left', '__brands b', 'b.id = p.brand_id')
    ->groupBy([
        $groupBy
    ])
    ->limit(5)
//    ->debugPrint()
;

$db->query($select);
$data = $db->results();

//print_r($data);

$results = [];
foreach($data as $d) {
    $result['y'] = $d->qty;
    $result['name'] = $d->categoryName;
//    $result['categoryName'] = $d->productName;
//    $result['manufacturerName'] = $d->manufacturerName;
    $results[] = $result;
}

$response->setContent(json_encode($results, JSON_NUMERIC_CHECK), RESPONSE_JSON);
$response->sendContent();
