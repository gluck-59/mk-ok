<?php
ini_set('display_errors', 'on');
error_reporting(E_ERROR);

// насколько курсы цифра-банка отличаются от ЦБРФ (цифра-банк — рекомендация от миши)
//$sxUsd =  file_get_contents('https://rub.rate.sx/1usdt');
//echo $sxUsd * 0.983 * 1.02;
//die();


const GENERAL_COEFF = 1.02;
const USD_COEFF = 1.069;
const EUR_COEFF = 1.066;
const GBP_COEFF = 1.01;

    $ini_array = parse_ini_file("config/config.php");

    $cbr = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp?d=0');

if (!$cbr) {
    echo date('d.m.Y', time()).': cbr в дауне?, '.PHP_EOL;
    die();
}
    foreach ($cbr->Valute as $item) {
        if ($item->NumCode=="840")  {
            $currency['usd'] = round($item->Value * GENERAL_COEFF * USD_COEFF, 2);
        }
        if ($item->NumCode=="978")  {
            $currency['eur'] = round($item->Value * GENERAL_COEFF * EUR_COEFF, 2);
        }
        if ($item->NumCode=="826")  {
            $currency['gbp'] = round($item->Value * GENERAL_COEFF * GBP_COEFF, 2);
        }
    }


//print_r($currency); die;


try {
    $conn = new PDO('mysql:dbname='.$ini_array['db_name'].';host=localhost', $ini_array['db_user'],$ini_array['db_password']);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo PHP_EOL.date('d.m.Y', time())." Database error: " . $e->getMessage().PHP_EOL;
}

$sql = 'UPDATE ok_currencies SET rate_to = CASE code WHEN "USD" THEN '.$currency["usd"].' WHEN "EUR" THEN '.$currency["eur"].' WHEN "GBP" THEN '.$currency["gbp"].' WHEN "RUB" THEN 1 END';
$res = $conn->exec($sql);
//var_dump($res);

echo date('d.m.Y', time()).': USD = '.$currency['usd'].', EUR = '.$currency['eur'].', GBP = '.$currency['gbp'].', обновлено строк в базе: '.$res.PHP_EOL;

