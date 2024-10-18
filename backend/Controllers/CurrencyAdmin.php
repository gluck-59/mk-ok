<?php


namespace Okay\Admin\Controllers;


use Okay\Admin\Helpers\BackendCurrenciesHelper;
use Okay\Admin\Requests\BackendCurrenciesRequest;


class CurrencyAdmin extends IndexAdmin
{

    public function fetch(
        BackendCurrenciesHelper  $backendCurrenciesHelper,
        BackendCurrenciesRequest $currenciesRequest
    ){
        // Обработка действий
        if ($this->request->method('post')) {
            $currencies = $currenciesRequest->postCurrencies();
            $currencies = $backendCurrenciesHelper->prepareUpdateCurrencies($currencies);
            $currencies = $backendCurrenciesHelper->updateCurrencies($currencies);

            $wrongIso = $backendCurrenciesHelper->checkWrongIso($currencies);
            if (count($wrongIso) > 0) {
                $this->design->assign('message_error', 'wrong_iso');
                $this->design->assign('wrong_iso', $wrongIso);
            }

            $backendCurrenciesHelper->recalculateCurrencies($currencies);
            $backendCurrenciesHelper->sortCurrencies($currencies);
            
            // Действия с выбранными
            $action = $currenciesRequest->postAction();
            $id     = $currenciesRequest->postactionId();
            if (!empty($action) && !empty($id)) {
                switch ($action) {
                    case 'disable': {
                        $backendCurrenciesHelper->disable($id);
                        break;
                    }
                    case 'enable': {
                        $backendCurrenciesHelper->disable($id);
                        break;
                    }
                    case 'show_cents': {
                        $backendCurrenciesHelper->showCents($id);
                        break;
                    }
                    case 'hide_cents': {
                        $backendCurrenciesHelper->hideCents($id);
                        break;
                    }
                    case 'delete': {
                        $backendCurrenciesHelper->delete($id);
                        break;
                    }
                }
            }
        }

        $currencies = $backendCurrenciesHelper->findAllCurrencies();
        $currency   = $backendCurrenciesHelper->getMainCurrency();
        $this->design->assign('currency', $currency);
        $this->design->assign('currencies', $currencies);
$this->design->assign('updateCurrencies', self::updateCbr());

        $this->response->setContent($this->design->fetch('currency.tpl'));
    }



    public function updateCbr() : ?array {
//        echo '__FILE__';

//$cbr = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp?d=0');
//print_r($cbr);
//        return $cbr;

//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, 'https://api.novaposhta.ua/v2.0/json/');
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
//        curl_setopt($ch, CURLOPT_HEADER, 0);
//        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestParams));
//        curl_setopt($ch, CURLOPT_POST, 1);
//        $response = curl_exec($ch);
//        curl_close($ch);


        return ['123'];
    }
}
