<?php

namespace Okay\Modules\OkayCMS\CurrrencyRates\Backend\Controllers;


use Okay\Admin\Controllers\IndexAdmin;

//use Psr\Log\LoggerInterface;
//use Symfony\Component\Console\Logger\ConsoleLogger;


//use Okay\Core\Settings;


class CurrrencyRatesAdmin extends IndexAdmin
{
    private string $lastCallError = '';

//    public function __construct(
////        Settings $settings,
//        LoggerInterface $logger
//    ) {
////        $this->settings = $settings;
//        $this->logger = $logger;
//
////        ini_set('display_errors', 'on');
////        error_reporting(E_ALL);
//    }



     public function fetch() {
//         $this->design->assign('updateCurrencies', self::updateCbr());
         $this->response->setContent($this->design->fetch('currencyRates.tpl'));
     }


//    public function updateCbr() : ?array {
//echo '__FILE__';
//
////$cbr = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp?d=0');
////print_r($cbr);
////        return $cbr;
//
////        $ch = curl_init();
////        curl_setopt($ch, CURLOPT_URL, 'https://api.novaposhta.ua/v2.0/json/');
////        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
////        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
////        curl_setopt($ch, CURLOPT_HEADER, 0);
////        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
////        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestParams));
////        curl_setopt($ch, CURLOPT_POST, 1);
////        $response = curl_exec($ch);
////        curl_close($ch);
//
//
//        return ['123'];
//    }
}