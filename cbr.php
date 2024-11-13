<?php

if (in_array($_SERVER['SERVER_ADDR'], ['127.0.0.1', '::1', '0.0.0.0', 'localhost'])) {
    $ini_array = parse_ini_file("config/config.local.php");
} else {
    $ini_array = parse_ini_file("config/config.php");
}


echo '<pre>';
//print_r($ini_array);
//die();


    $cbr = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp?d=0');
    foreach ($cbr->Valute as $item) {
        if ($item->NumCode=="840")  {
            $currency['usd'] = $usd = round($item->Value * $ini_array['general_coeff'] * $ini_array['usd_coeff'], 2);
        }
        if ($item->NumCode=="978")  {
            $currency['eur'] = $usd = round($item->Value * $ini_array['general_coeff'] * $ini_array['eur_coeff'], 2);
        }
    }
//print_r($currency);
//die();

try {
    $conn = new PDO('mysql:dbname='.$ini_array['db_name'].';host=localhost', $ini_array['db_user'],$ini_array['db_password']);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}

//$sql = "select * from ok_currencies";
//$a = $conn->query($sql)->fetchAll();
//print_r($a);

file_put_contents('resize.log', $currency["usd"].' '.PHP_EOL,FILE_APPEND);

$sql = 'UPDATE ok_currencies SET rate_to = CASE code WHEN "usd" THEN '.$currency["usd"].' WHEN "eur" THEN '.$currency["eur"].' WHEN "rub" THEN 1 END';
$res = $conn->exec($sql);
var_dump($res);


