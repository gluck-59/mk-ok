<?php
// насколько курсы моего банка отличаются от ЦБРФ
const GENERAL_COEFF = 1.153;
const USD_COEFF = 1.049;
const EUR_COEFF = 1.017;


if (in_array($_SERVER['SERVER_ADDR'], ['127.0.0.1', '::1', '0.0.0.0', 'localhost'])) {
    $ini_array = parse_ini_file("config/config.local.php");
} else {
    $ini_array = parse_ini_file("config/config.php");
}

    $cbr = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp?d=0');
    foreach ($cbr->Valute as $item) {
        if ($item->NumCode=="840")  {
            $currency['usd'] = $usd = round($item->Value * GENERAL_COEFF * USD_COEFF, 2);
        }
        if ($item->NumCode=="978")  {
            $currency['eur'] = $usd = round($item->Value * GENERAL_COEFF * EUR_COEFF, 2);
        }
    }
echo '<pre>';
//print_r($ini_array);
print_r($currency);




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

$sql = 'UPDATE ok_currencies SET rate_to = CASE code WHEN "usd" THEN '.$currency["usd"].' WHEN "eur" THEN '.$currency["eur"].' WHEN "rub" THEN 1 END';
$res = $conn->exec($sql);
var_dump($res);

