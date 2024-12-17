<?php
require __DIR__.'/vendor/autoload.php';
$ini_array = parse_ini_file("config/config.local.php");

try {
    $conn = new PDO('mysql:dbname='.$ini_array['db_name'].';host=localhost', $ini_array['db_user'],$ini_array['db_password']);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo PHP_EOL.date('d.m.Y', time())." Database error: " . $e->getMessage().PHP_EOL;
}

$sql = "SELECT p.id product_id, p.name, p.ebayItemNo, p.partNumber,v.product_id prod_id, v.id variant_id, v.sku, v.name, v.price, v.currency_id
FROM ok_products p
JOIN ok_variants v ON v.product_id = p.id
ORDER BY v.price_updated";
$res = $conn->query($sql)->fetchAll();



$productsEntity = new \Okay\Entities\ProductsEntity();
$products = $productsEntity->find(['visible' => 1]);




print_r(sizeof($products));

foreach ($products as $product) {
    print_r($product);
    continue;
}


echo PHP_EOL.PHP_EOL;


die();
