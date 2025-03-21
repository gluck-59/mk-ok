<?php


namespace Okay\Controllers;


use Okay\Core\Design;
use Okay\Core\SmartyPlugins\Plugins\CheckoutPaymentForm;
use Okay\Core\TemplateConfig;
use Okay\Entities\PaymentsEntity;
use Okay\Entities\ProductsEntity;
use Okay\Helpers\CartHelper;
use Okay\Helpers\CouponHelper;
use Okay\Helpers\MetadataHelpers\CartMetadataHelper;
use Okay\Requests\CartRequest;
use Okay\Core\Notify;
use Okay\Core\Router;
use Okay\Entities\DeliveriesEntity;
use Okay\Entities\CurrenciesEntity;
use Okay\Entities\CouponsEntity;
use Okay\Entities\OrdersEntity;
use Okay\Core\Request;
use Okay\Core\Cart;
use Okay\Core\Languages;
use Okay\Helpers\DeliveriesHelper;
use Okay\Helpers\PaymentsHelper;
use Okay\Helpers\ValidateHelper;
use Okay\Helpers\OrdersHelper;
use Okay\Modules\Gluck\Tochka\Entities\TochkaEntity;
use Okay\Core\Config;

class CartController extends AbstractController
{
    /*Отображение заказа*/
    public function render(
        DeliveriesEntity   $deliveriesEntity,
        OrdersEntity       $ordersEntity,
        CouponsEntity      $couponsEntity,
        CurrenciesEntity   $currenciesEntity,
        Languages          $languages,
        Request            $request,
        Notify             $notify,
        Cart               $cart,
        DeliveriesHelper   $deliveriesHelper,
        PaymentsHelper     $paymentsHelper,
        OrdersHelper       $ordersHelper,
        CartRequest        $cartRequest,
        CartHelper         $cartHelper,
        ValidateHelper     $validateHelper,
        CouponHelper       $couponHelper,
        CartMetadataHelper $cartMetadataHelper,
        TochkaEntity       $tochkaEntity,
        Config             $config
    ) {

        // Если передан id варианта, добавим его в корзину
        if ($variantId = $request->get('variant', 'integer')) {
            $cart->addItem($variantId, $request->get('amount', 'integer'));
            $this->response->redirectTo(Router::generateUrl('cart', [], true), 301);
        }

        // Если нам запостили amounts, обновляем их
        if ($amounts = $request->post('amounts')) {
            foreach ($amounts as $variantId => $amount) {
                $cart->updateItem($variantId, $amount);
            }
        }
        
        $this->setMetadataHelper($cartMetadataHelper);
        
        $cart = $cart->get();
        /*Оформление заказа*/
        if (isset($_POST['checkout'])) {
            $order = $cartRequest->postOrder();
            $order = $ordersHelper->attachUserIfLogin($order, $this->user);

            if ($error = $validateHelper->getCartValidateError($order)) {
                $this->design->assign('error', $error);
            } else {
                // Добавляем заказ в базу
                $order->lang_id = $languages->getLangId();

// временный костыль для СБП, здесь не должно быть больше 1 записи в ok_tochka_settings
$paymentMethods = $paymentsHelper->getCartPaymentsList($cart);

if (!is_dir($config->get('qrcodes_dir'))) {
    mkdir($config->get('qrcodes_dir'), 0777);
}

foreach ($paymentMethods as $method) {
    if ($method->module == 'Gluck/Tochka') {
        $param = new \StdClass();
        $param->id = 1; // пока костыль
        $param->amount = round($cart->total_price);
        $param->paymentPurpose = 'Оплата заказа в Motokofr'; // в этом месте еще нет order ID

        $tochkaResponse = $tochkaEntity->generateQR($param);
        if ($tochkaResponse || !empty($tochkaResponse->Data->qrcId)) {
            file_put_contents($config->get('qrcodes_dir').$tochkaResponse->Data->qrcId.'.png', base64_decode($tochkaResponse->Data->image->content));
            unset($tochkaResponse->Data->image);
            unset($tochkaResponse->Links);
            unset($tochkaResponse->Meta);

            $order->payment_details = json_encode($tochkaResponse);
        } else {
            $this->design->assign('error', 'Ошибка НСПК: QR-код не создан. Свяжитесь с нами.');
        }
    }
}

                $preparedOrder  = $ordersHelper->prepareAdd($order);
                $orderId        = $ordersHelper->add($preparedOrder);

                if (isset($_SESSION['coupon_code'])){
                    $couponHelper->registerUseIfExists($_SESSION['coupon_code']);
                }

                $preparedCart = $cartHelper->prepareCart($cart, $orderId);
                $preparedCart = $cartHelper->cartToOrder($preparedCart, $orderId);
                $preparedCart = $cartHelper->prepareDiscounts($preparedCart, $orderId);
                $cartHelper->discountsToDB($preparedCart);

                $order = $ordersEntity->get((int) $orderId);
                if (!empty($order->delivery_id)) {
                    $delivery          = $deliveriesEntity->get((int) $order->delivery_id);
                    $deliveryPriceInfo = $deliveriesHelper->prepareDeliveryPriceInfo($delivery, $order);
                    $deliveriesHelper->updateDeliveryPriceInfo($deliveryPriceInfo, $order);
                }

                $ordersEntity->updateTotalPrice($order->id);
                $ordersHelper->finalCreateOrderProcedure($order);
                
                // Отправляем письмо пользователю
                $notify->emailOrderUser($order->id);

                // Отправляем письмо администратору
                $notify->emailOrderAdmin($order->id);

                $cart->clear();

                // Перенаправляем на страницу заказа или отправляем форму для автосабмита или урл заказа
                if ($this->request->post('ajax')) {
                    $content = $cartHelper->getAjaxOrderContent($order);
                    return $this->response->setContent(json_encode($content, JSON_UNESCAPED_SLASHES), RESPONSE_JSON);
                } else {
                    $this->response->redirectTo(Router::generateUrl('order', ['url' => $order->url], true));
                }
            }
        } else { // нету ['checkout'] в $_POST
            if ($request->post('amounts')) {
                $couponCode = $cartRequest->postCoupon();
                if (empty($couponCode)) {
                    $cart->applyCoupon('');
                    $this->response->redirectTo(Router::generateUrl('cart', [], true));
                } else {
                    $coupon = $couponsEntity->get((string)$couponCode);
                    if (empty($coupon) || !$coupon->valid) {
                        $cart->applyCoupon($couponCode);
                        $this->design->assign('coupon_error', 'invalid');
                    } else {
                        $cart->applyCoupon($couponCode);
                        $this->response->redirectTo(Router::generateUrl('cart', [], true));
                    }
                }
            }

            // Данные пользователя по умолчанию
            $this->design->assign('request_data', $cartHelper->getDefaultCartData($this->user));
        }

        // Способы доставки и оплаты
        $paymentMethods = $paymentsHelper->getCartPaymentsList($cart);
        $deliveries     = $deliveriesHelper->getCartDeliveriesList($cart, $paymentMethods);
        $activeDelivery = $deliveriesHelper->getActiveDeliveryMethod($deliveries, $this->user);
        $activePayment  = $paymentsHelper->getActivePaymentMethod($paymentMethods, $activeDelivery, $this->user);

        $this->design->assign('all_currencies', $currenciesEntity->mappedBy('id')->find());
        $this->design->assign('currencyEuro', $currenciesEntity->findOne(['code' => 'EUR'])); // для расчета пошлин
        $this->design->assign('deliveries', $deliveries);
        $this->design->assign('payment_methods', $paymentMethods);

        // это влияет только на галочку, а в корзину передаются все методы
        $this->design->assign('active_delivery', $activeDelivery);
        $this->design->assign('active_payment', $activePayment);

        if ($couponsEntity->count(['valid'=>1])>0) {
            $this->design->assign('coupon_request', true);
        }

        $this->design->assign('noindex_follow', true);
        $this->response->setContent('cart.tpl');
    }
    
    public function cartAjax(
        CouponsEntity    $couponsEntity,
        CurrenciesEntity $currenciesEntity,
        Request          $request,
        Cart             $cart,
        DeliveriesHelper $deliveriesHelper,
        PaymentsHelper   $paymentsHelper,
        CartHelper       $cartHelper
    ) {
        $action     = $request->get('action');
        $variantId  = $request->get('variant_id', 'integer');
        $amount     = $request->get('amount', 'integer');
        
        switch ($action) {
            case 'update_citem':
                $cart->updateItem($variantId, $amount);
                break;
            case 'remove_citem':
                $cart->deleteItem($variantId);
                break;
            case 'add_citem':
                $cart->addItem($variantId, $amount);
                break;
            default:
                break;
        }

        $cart = $cart->get();
        $this->design->assign('cart', $cart);

        $this->design->assign('all_currencies', $currenciesEntity->mappedBy('id')->find());

        /*Рабтаем с товарами в корзине*/
        if ($cart->isEmpty === false) {
            if (isset($_GET['coupon_code'])) {
                $couponCode = trim($request->get('coupon_code', 'string'));
                if (empty($couponCode)) {
                    $cart->applyCoupon('');
                    if ($this->request->get('action') == 'coupon_apply') {
                        $this->design->assign('coupon_error', 'empty');
                    }
                } else {
                    $coupon = $couponsEntity->get((string)$couponCode);
                    if (empty($coupon) || !$coupon->valid) {
                        $cart->applyCoupon($couponCode);
                        $this->design->assign('coupon_error', 'invalid');
                    } else {
                        $cart->applyCoupon($couponCode);
                    }
                }
            }

            if ($couponsEntity->count(['valid'=>1])>0) {
                $this->design->assign('coupon_request', true);
            }

            $cart = $cart->get();
        }

        $paymentMethods = $paymentsHelper->getCartPaymentsList($cart);
        $deliveries = $deliveriesHelper->getCartDeliveriesList($cart, $paymentMethods);
        
        $result = $cartHelper->getAjaxCartResult($cart, $this->currency, $paymentMethods, $deliveries, $action, $variantId, $amount);
        
        $this->response->setContent(json_encode($result), RESPONSE_JSON);
    }

    public function removeItem(Cart $cart, $variantId)
    {
        $cart->deleteItem($variantId);
        $this->response->redirectTo(Router::generateUrl('cart', [], true));
    }

    public function addItem(Cart $cart, $variantId)
    {
        $cart->addItem($variantId);
        $this->response->redirectTo(Router::generateUrl('cart', [], true));
    }

    public function cartAjaxValidate(
        Cart $cart,
        Design $design,
        TemplateConfig $templateConfig,
        ProductsEntity $productsEntity
    )
    {
        $cart = $cart->get();

        $design->assign('cart', $cart);
        if (is_file('design/' . $templateConfig->getTheme() . '/html/cart_purchases.tpl')) {
            $result['cart_purchases'] = $design->fetch('cart_purchases.tpl');
        }
        $postPurchases = $this->request->post('stok');

        foreach ($cart->purchases as $p){
            if ($p->variant->stock < 1 && $postPurchases[$p->variant_id] >0){
                $pNotStock[$p->variant_id] = $p->variant_id;
            }
        }
        if ($pNotStock){
            $result['product_empty'] =  $pNotStock;
        }else{
            $result['product_empty'] = 0;
        }
        foreach ($cart->purchases as $p){
            if (empty($p->variant->name)){
                $p->variant->name = $productsEntity->col('name')->findOne(['id'=>$p->product_id]);
            }
        }
        if (is_file('design/' . $templateConfig->getTheme() . '/html/popup_validate_purcases.tpl')) {
            $result['cart_popup_validate_stok_purcases'] = $this->design->fetch('popup_validate_purcases.tpl');
        }
        $this->response->setContent(json_encode($result), RESPONSE_JSON);
    }
}