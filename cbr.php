<?php
	/**
	 * вызывается из крона
	 *
	 * ходит на ссайт цетробанка (или kovalut.ru)
	 * тянет курсы доллара и евро
	 * пишет в базу
	 */


//	ini_set('display_errors', 1);
//	error_reporting(E_ERROR);

//	chdir(__DIR__);
	require __DIR__.'/vendor/autoload.php';

	$currency = new \Okay\Entities\CurrenciesEntity();
	$usd_old = $currency->findOne(['code' => 'usd']);
	$eur_old = $currency->findOne(['code' => 'eur']);
	$rur_old = $currency->findOne(['code' => 'rur']);

	$message = '';

// готовим мыло
//$headers = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//$headers .= ('<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd"><html><body>');
//$to = 'support@motokofr.com';
//$subject = 'Курсы валют';


// берем с kovalut.ru ?
$kovalut = false;
// kovalut сейчас не нужен, берем с центробанка

//	берем с центробанка
    if (!$kovalut) 	{
		$cbr = simplexml_load_file('http://www.cbr.ru/scripts/XML_daily.asp?d=0');
		if (empty($cbr))
	  	{
	  		$message .= ('<p><span style="background:#fdd">cbr.ru в дауне, ничего не пишем</span></p>');
	  		$isDown = true;
	  	}
	  	else
	  	{	  	
    		foreach ($cbr->Valute as $item) 
    		{
				// usd
    			if ($item->NumCode=="840")  {
    				$usd = $item->Value;
    			}
				 // eur
    			if ($item->NumCode=="978")  {
    				$eur = $item->Value;
    			}
    		}
    		// математика для ЦБРФ
			// нужна чтобы привести курс в соответствие к сбербанку
			$coeff = 1.1;
    		$usd = round($usd * $coeff, 4);
    		$eur = round($eur * $coeff, 4);
		}
  	} else { //	берем с kovalut
    	error_reporting(E_ALL ^ E_NOTICE);
    	foreach ($kovalut->Actual_Rates->Bank as $bank) 
    	{
    		if ($bank->Name=="Сбербанк России")  
    		    {
    		       $usd = $bank->USD->Sell;
    		       $eur = $bank->EUR->Sell;
    		}
    	}
    	if (!$usd or !$eur) // смотрим старые курсы
    	{
    	  $message .= ('<p><span style="background:#fdd">Новых курсов нет, используем старые</span></p>');
    	  foreach ($kovalut->Not_Actual_Rates->Bank as $bank) 
    		{
    		if ($bank->Name=="Сбербанк России")  
    		    	{
    		       $usd = $bank->USD->Sell;
    		       $eur = $bank->EUR->Sell;
    			}
    		}
    	}

		$rurUsd = str_replace(",", ".", $usd);
		$eurUsd = str_replace(",", ".", $eur);
	} // if kovalut или цетробанк

	$message .= '<p style="margin-bottom: 5px;"><span style="padding: 2px 5px; font-size:16pt; ';
	if ($usd < $rur_old->rate_from) $message .= 'background:#dfd';
	if ($usd > $rur_old->rate_from) $message .= 'background:#fdd';

	$message .= '"><strong>$ ' .$usd.'</strong></span>';

	$message .= '<p style="margin: 0"><span style="font-size:16pt; padding: 2px 5px;';
	if ($eur < round($eur_old->rate_from * $rur_old->rate_from, 4)) $message .= 'background:#dfd';
	if ($eur > round($eur_old->rate_from * $rur_old->rate_from, 4)) $message .= 'background:#fdd';
	$message .= '"><strong>€ ' .$eur.'</strong></span></p>';

$message .='</p><p>Старые курсы:<br>$ ';
$message .= round($rur_old->rate_from, 1);
$message .='<br>€ ';
$message .= round($rur_old->rate_from * $eur_old->rate_from, 1);
$message .='</p>';

/* блок записи в базу -- ДЛЯ ОТЛАДКИ ОТКЛЮЧАТЬ ЗДЕСЬ */
	if (!$isDown) {
		$rurUpdate = $currency->update($rur_old->id, ['rate_from' => $usd]);
		$eurUpdate = $currency->update($eur_old->id, ['rate_from' => $usd / $eur]);
	}

//	printr($eurUpdate);

	if (!$rurUpdate) {
		$message .= ('<p><span style="background:#fdd">не удалось записать курс доллара в базу</span></p>');
	} elseif (!$eurUpdate) {
		$message .= ('<p><span style="background:#fdd">не удалось записать курс евро в базу</span></p>');
	} else {
		$message .= "<br>Запись в базу ОК";
	}
/* блок записи в базу */

	$message .= ('</body></html>');
//	mail($to, $subject, $message, $headers);

echo $message;

?>

