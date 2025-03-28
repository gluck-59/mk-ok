<?php


namespace Okay\Controllers;


use Okay\Entities\CouponsEntity;
use Okay\Entities\CurrenciesEntity;
use Okay\Entities\OrdersEntity;
use Okay\Entities\OrderStatusEntity;
use Okay\Helpers\MetadataHelpers\OrderMetadataHelper;
use Okay\Helpers\OrdersHelper;
use Okay\Entities\UsersEntity;

class OrderController extends AbstractController
{
    
    public function render(
        OrdersEntity        $ordersEntity,
        CouponsEntity       $couponsEntity,
        OrderStatusEntity   $orderStatusEntity,
        CurrenciesEntity    $currenciesEntity,
        OrdersHelper        $ordersHelper,
        OrderMetadataHelper $orderMetadataHelper,
        UsersEntity         $UsersEntity,
        $url
    ) {
        $order = $ordersEntity->get((string)$url);
        if (empty($order)) {
            return false;
        }

        $purchases = $ordersHelper->getOrderPurchasesList(intval($order->id));
        if (!$purchases) {
            return false;
        }

        if (!empty($order->coupon_code)) {
            $order->coupon = $couponsEntity->get((string)$order->coupon_code);
            if ($order->coupon && $order->coupon->valid && $order->total_price >= $order->coupon->min_order_price) {
                if ($order->coupon->type == 'absolute') {
                    // Абсолютная скидка не более суммы заказа
                    $order->coupon->coupon_percent = round(100 - ($order->total_price * 100) / ($order->total_price + $order->coupon->value), 2);
                } else {
                    $order->coupon->coupon_percent = $order->coupon->value;
                }
            }
        }

        if (!empty($order->shipping_number)) {
            $shipping_numbers = explode("\r\n", $order->shipping_number);
        }
        $order->shipping_number = $shipping_numbers;

        // точка tochka
        if (!empty($order->payment_details)) {
            $order->payment_details = json_decode($order->payment_details);
        }
        $this->design->assign('is_mobile',  $this->design->isMobile());
        $this->design->assign('is_tablet',  $this->design->isTablet());

        $this->design->assign('order', $order);

        $orderMetadataHelper->setUp($order);
        $this->setMetadataHelper($orderMetadataHelper);
        
        /*Выбор другого способа оплаты*/
        if ($this->request->method('post')) {
            if ($paymentMethodId = $this->request->post('payment_method_id', 'integer')) {
                $ordersEntity->update($order->id, ['payment_method_id'=>$paymentMethodId]);
                $order = $ordersEntity->get((int)$order->id);
            } elseif ($this->request->post('reset_payment_method')) {
                $ordersEntity->update($order->id, ['payment_method_id'=>null]);
                $order = $ordersEntity->get((int)$order->id);
            }
        }

        // user
        $user = $UsersEntity->findOne(['id' => $order->user_id]);
        $this->design->assign('user', $user);

        // Способ доставки
        $delivery = $ordersHelper->getOrderDelivery($order);
        $this->design->assign('delivery', $delivery);
        $orderStatuses = $orderStatusEntity->get(intval($order->status_id));
        $this->design->assign('order_status', $orderStatuses);
        $this->design->assign('purchases', $purchases);
        
        // Способ оплаты
        if (!empty($order->payment_method_id)) {
            $paymentMethod = $ordersHelper->getOrderPaymentMethod($order);
            $this->design->assign('payment_method', $paymentMethod);
        }
        
        // Варианты оплаты
        $paymentMethods = $ordersHelper->getOrderPaymentMethodsList($order);
        $this->design->assign('payment_methods', $paymentMethods);
        
        // Все валюты
        $this->design->assign('all_currencies', $currenciesEntity->mappedBy('id')->find());

        // Скидки
        $discounts = $ordersHelper->getDiscounts($order->id);
        $this->design->assign('discounts', $discounts);

        $this->design->assign('noindex_nofollow', true);
        
        // Выводим заказ
        $this->response->setContent('order.tpl');
    }
    
}
