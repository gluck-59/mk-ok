<?php

namespace Okay\Modules\Gluck\Tochka\Controllers;

use Okay\Core\Database;
use Okay\Core\QueryFactory;
use Okay\Controllers\AbstractController;
use Okay\Entities\OrdersEntity;


class TochkaController extends AbstractController
{
    /** @var QueryFactory */
    protected $queryFactory;


    /** @var Database */
    protected $database;


    public function decodeIncomingWebhook(QueryFactory $queryFactory, Database $database, OrdersEntity $ordersEntity) {
//        ini_set('display_errors', 'On');
//        error_reporting(E_ERROR);

        $entityBody = file_get_contents("php://input");
//        $entityBody = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJvcGVyYXRpb25JZCI6ICJBMjIwMDExMDAyNjM4MjAxMDAwMDA1MzNFNjI1RkNCMyIsICJxcmNJZCI6ICJBUzEwMDA2RFBSVEVGUEZTOUhKOVNRU0RTVlJISkQzTCIsICJhbW91bnQiOiAiMC4zMyIsICJwYXllck1vYmlsZU51bWJlciI6ICIrOTk5OTEyMzQ1NjciLCAicGF5ZXJOYW1lIjogIlx1MDQxOFx1MDQzMlx1MDQzMFx1MDQzZCBcdTA0MThcdTA0MzJcdTA0MzBcdTA0M2RcdTA0M2VcdTA0MzJcdTA0MzhcdTA0NDcgXHUwNDE4LiIsICJicmFuZE5hbWUiOiAiXHUwNDFhXHUwNDNlXHUwNDQ0XHUwNDM1XHUwNDM5XHUwNDNkXHUwNDRmIFx1MDQ0MyBcdTA0MTBcdTA0NDBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0MzAiLCAibWVyY2hhbnRJZCI6ICJNRjAwMDAwMDAwMDEiLCAicHVycG9zZSI6ICJcdTA0MWVcdTA0M2ZcdTA0M2JcdTA0MzBcdTA0NDJcdTA0MzAgXHUwNDNmXHUwNDNlIFx1MDQ0MVx1MDQ0N1x1MDQzNVx1MDQ0Mlx1MDQ0MyBcdTIxMTYgMSBcdTA0M2VcdTA0NDIgMDEuMDEuMjAyMS4gXHUwNDExXHUwNDM1XHUwNDM3IFx1MDQxZFx1MDQxNFx1MDQyMSIsICJ3ZWJob29rVHlwZSI6ICJpbmNvbWluZ1NicFBheW1lbnQiLCAiY3VzdG9tZXJDb2RlIjogIjMwMDEyMzEyMyJ9.qYHCSEgNAWJFKKZBKDFLh6Cpw0GMPM9RPmRiThjZwZnDGut7JqDU0RPKZkpiBJpbPgg949Zm2mCGtD5NG2gqRH0NB1f_Fi7f2vFP8hvZyAXaDE9FAJvjwBL95H0jODYCxBaGFufdDqxug_sgsYctpqWz9ynfbO-k17C9VeF5bSRreoVLVjvz7BOe5E7EFOs_cZxyGYdmTpRMZ00TMSxyvuOnYiF1iLE8ZxKQWjtM5Ov_vx7B1cizirohaDVbctzjRjzKacggJrWmlq-03gSdX9-7rC6a2SSDAK0kCZFazAu8_M6c_afK4ib-BLIlDYfFriqoozMXFwuGKPx0UZnoHVF22zwWcNruKthZ_pn-S6OP_6j48w4S-dz34NxdfO4kcyKEgo31JRUH015AmQhGihxGKJLTc7rLL72sm1lM9sOybqICTrmf6fvTumMCL7TnXXRJiyjsdW5vhszrqXYiQkKHSFrokR_ebxAlCoL3l-l-Emr1XPOdLRwaUPYJyQJx';

        $webhookData = self::decodeToken($entityBody);

        if ($webhookData->webhookType == 'incomingSbpPayment') {
            $query = $queryFactory->newSqlQuery();
            $sql = "SELECT id, payment_details FROM ok_orders WHERE JSON_EXTRACT(payment_details, '$.Data.qrcId') = '$webhookData->qrcId'";

            $query->setStatement($sql);
            $database->query($query);
            $order = $query->result();

            // изменения в заказе: paid = 1 + дополним payment_details
            $payment_details = json_decode($order->payment_details);
            $payment_details->webhook = $webhookData;
            $payment_details = json_encode($payment_details);
            $orderId = $order->id;

            $query = $queryFactory->newSqlQuery();
            $sql = "update ok_orders set paid = 1, payment_details = '$payment_details' where id = $orderId";
            $query->setStatement($sql);
            $database->query($query);
            $query->result();
        }

file_put_contents('test.log', '$orderId: '. $orderId. PHP_EOL .print_r($webhookData, 1).PHP_EOL.PHP_EOL, FILE_APPEND);
die();
    }


    private function decodeToken($token) {
        list(, $base64UrlPayload, ) = explode('.', $token);
        $payload = self::base64UrlDecode($base64UrlPayload);
        return json_decode($payload);
    }


    private function base64UrlDecode($data) {
        $base64 = strtr($data, '-_', '+/');
        $base64Padded = str_pad($base64, strlen($base64) % 4, '=', STR_PAD_RIGHT);
        return base64_decode($base64Padded);
    }
}