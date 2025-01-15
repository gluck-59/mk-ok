<?php


namespace Okay\Modules\Gluck\Tochka\Entities;


use Okay\Core\Entity\Entity;


class TochkaEntity extends Entity
{
    protected static $fields = [
        'id',
        'rs_url',
        'api_version',
        'merchantId',
        'legalId',
        'customerCode',
        'accountId',
        'accesstoken_hybrid'
    ];

    protected static $langFields = [
    ];

    protected static $defaultOrderFields = [
    ];

    protected static $table = '__tochka_settings';
    protected static $langTable = 'tochka_settings';
    protected static $langObject = 'tochka_settings';
    protected static $tableAlias = 'ts';


    public function generateQR($param = null) {
        $tochkaSettings = self::findOne(['id' => $param->id]);

        $settings = ['Data' => [
            'merchantId' => $tochkaSettings->merchantId,
            'legalId' => $tochkaSettings->legalId,
            'customerCode' => $tochkaSettings->customerCode,
            'amount' => $param->amount * 100,
            'currency' => "RUB",
            'paymentPurpose'=> $param->paymentPurpose,
            'qrcType' => '02',
            'imageParams' => ['width' => 400, 'height' => 400, 'mediaType' => 'image/png'],
            'sourceName' => 'string'
            ]];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $tochkaSettings->rs_url.'/sbp/'.$tochkaSettings->api_version.'/qr-code/merchant/'.$tochkaSettings->merchantId.'/'.$tochkaSettings->accountId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode((object) $settings),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer '.$tochkaSettings->accesstoken_hybrid
            ),
        ));

//        prettyDump( curl_getinfo($curl, CURLINFO_EFFECTIVE_URL) );
        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }
}