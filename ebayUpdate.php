<?php
/** всё хуйня, переписать в модуль */
require __DIR__.'/vendor/autoload.php';
$ini_array = parse_ini_file("config/config.local.php");

try {
    $conn = new PDO('mysql:dbname='.$ini_array['db_name'].';host=localhost', $ini_array['db_user'],$ini_array['db_password']);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo PHP_EOL.date('d.m.Y', time())." Database error: " . $e->getMessage().PHP_EOL;
}

$sql = "SELECT p.id product_id, p.name, p.ebayItemNo, p.partNumber, v.id variant_id, v.sku, v.name, v.price, v.price_updated, DATEDIFF(now(), v.price_updated) date_diff
FROM ok_products p
JOIN ok_variants v ON v.product_id = p.id
WHERE p.visible = 1 AND DATEDIFF(now(), v.price_updated) > 7
ORDER BY v.price_updated

LIMIT 0,2";
$products = $conn->query($sql)->fetchAll();

print_r(sizeof($products));
echo PHP_EOL;

foreach ($products as $product) {
    print_r($product);
}

$ebayAdmin = new \Okay\Admin\Controllers\EbayAdmin();

print_r($ebayAdmin);

echo PHP_EOL.PHP_EOL;


die();
