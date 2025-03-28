<!-- Order page -->

<div class="block">
    <div class="block__header block__header--boxed block__header--border">
        <div class="block__title block__title--order">
            <span data-language="order_greeting">{$lang->order_number_text}</span>
            <span class="order_number">№ {$order->id}</span>
            {if $order->paid == 1}
                &nbsp;<span data-language="status_paid">{$lang->status_paid}</span>
            {else}
                <span data-language="status_paid">ждет оплаты</span>
            {/if}
        </div>
    </div>

    <div class="block__body">
        <div class="f_row flex-column flex-lg-row" data-sticky-container>
            <div class="sticky f_col f_col-lg-6 f_col-xl-5">
                <div class="fn_cart_sticky block--cart_purchases block--boxed block--border" data-margin-top="15" data-sticky-for="1024" data-sticky-class="is-sticky">
                    <div class="order_boxeded">
                        <div class="h6" data-language="cart_purchase_title">{$lang->cart_purchase_title}</div>

                        <div class="purchase">
                            {foreach $purchases as $purchase}
                                <div class="purchase__item d-flex align-items-start">
                                    {* Product image *}
                                    <div class="purchase__image d-flex">
                                        <a href="{url_generator route='product' url=$purchase->product->url}">
                                            {if $purchase->product->image}
                                            <picture>
                                                {if $settings->support_webp}
                                                    <source type="image/webp" data-srcset="{$purchase->product->image->filename|resize:70:70|webp}">
                                                {/if}
                                                <source data-srcset="{$purchase->product->image->filename|resize:70:70}">
                                                <img class="lazy" data-src="{$purchase->product->image->filename|resize:70:70}" src="{$rootUrl}/design/{get_theme}/images/xloading.gif" alt="{$purchase->product->name|escape}" title="{$purchase->product->name|escape}"/>
                                            </picture>
                                            {else}
                                                <div class="purchase__no_image d-flex align-items-start">
                                                    {include file="svg.tpl" svgId="no_image"}
                                                </div>
                                            {/if}
                                        </a>
                                    </div>
                                    <div class="purchase__content">
                                        {* Product name *}
                                        <div class="purchase__name">
                                            <a class="purchase__name_link" href="{url_generator route="product" url=$purchase->product->url}">{$purchase->product_name|escape}</a>
                                            <i>{$purchase->variant_name|escape}</i>
                                            {if !$order->closed && $purchase->variant->stock == 0}<span class="preorder_label">{$lang->product_pre_order}</span>{/if}

                                        </div>
                                        <div class="purchase__group">
                                            {* Price per unit *}
                                            <div class="purchase__price">
                                                <div class="purchase__group_title hidden-xs-down">
                                                    <span data-language="cart_head_price">{$lang->cart_head_price}</span>
                                                </div>
                                                <div class="purchase__group_content {if $purchase->discounts} price--red{/if}">
                                                    <span class="hidden-xs-down">{($purchase->price)|convert} </span>
                                                    <span class="currency hidden-xs-down">{$currency->sign}</span> 
                                                    {if $purchase->variant->units}<span class="hidden-xs-down">/ {$purchase->variant->units|escape}</span>{/if}
                                                    {if $purchase->discounts}
                                                        <a href="javascript:;" class="discount_tooltip" title="{$lang->purchase_discount__tooltip}" data-src="#fn_purchase_discount_detail_{$purchase->variant->id}" data-fancybox="hello_{$purchase->variant->id}">{include file="svg.tpl" svgId="sale_icon"}</a>
                                                    {/if}
                                                </div>
                                                <div class="hidden">
                                                    <div id="fn_purchase_discount_detail_{$purchase->variant->id}" class="purchase_discount_detail popup popup_animated">
                                                        {* The form heading *}
                                                        <div class="form__header">
                                                            <div class="form__title">
                                                                {include file="svg.tpl" svgId="sale_icon"}
                                                                <span data-language="purchase_discount__popup_title">{$lang->purchase_discount__popup_title}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form__body">
                                                            {foreach $purchase->discounts as $discount}
                                                                <div class="purchase_discount__item">
                                                                    <div class="purchase_discount__name">
                                                                        <span>{$discount->name}</span>
                                                                    </div>
                                                                    <div class="purchase_discount__group">
                                                                        <div class="purchase_discount__price_before">
                                                                            <div class="purchase_discount__title">
                                                                                <span data-language="purchase_discount__price">{$lang->purchase_discount__price}</span>
                                                                            </div>
                                                                            <div class="purchase_discount__group_content">
                                                                                <span>{$discount->priceBeforeDiscount}</span>
                                                                                <span class="currency">{$currency->sign|escape}</span>
                                                                            </div>   
                                                                        </div>
                                                                        <div class="purchase_discount__discount">
                                                                            <div class="purchase_discount__title">
                                                                                <span data-language="purchase_discount__discount">{$lang->purchase_discount__discount}</span>
                                                                            </div>
                                                                            <div class="purchase_discount__group_content purchase_detail__price">
                                                                                <i>{$discount->percentDiscount|string_format:"%.2f"} %</i>
                                                                                &minus; {$discount->absoluteDiscount|convert} <span class="currency">{$currency->sign|escape}</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="purchase_discount__price_after">
                                                                            <div class="purchase__group_title">
                                                                                <span data-language="purchase_discount__total">{$lang->purchase_discount__total}</span>
                                                                            </div>
                                                                            <div class="purchase_discount__group_content">
                                                                                <span>{$discount->priceAfterDiscount}</span>
                                                                                <span class="currency">{$currency->sign|escape}</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {/foreach}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="purchase__amount">
                                                <div class="purchase__group_title hidden-xs-down">
                                                    <span data-language="cart_head_amoun">{$lang->cart_head_amoun}</span>
                                                </div>
                                                <div class="fn_product_amount purchase__group_content d-flex justify-content-center align-items-center">
                                                    <span class="order_purchase_count">x{$purchase->amount|escape}</span>
                                                </div>
                                            </div>
                                            <div class="purchase__price_total">
                                                <div class="purchase__group_title hidden-xs-down">
                                                    <span data-language="cart_head_total">{$lang->cart_head_total}</span>
                                                </div>
                                                <div class="purchase__group_content">{($purchase->price*$purchase->amount)|convert} <span class="currency">{$currency->sign}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        </div>

                        <div class="purchase_detail">
                            {* Discounts *}
                            {if $discounts}
                                {foreach $discounts as $discount}
                                    <div class="purchase_detail__item">
                                        <div class="purchase_detail__column_name">
                                            <div class="purchase_detail__name">{$discount->name}</div>
                                        </div>
                                        <div class="purchase_detail__column_value">
                                            <div class="purchase_detail__price">
                                                <i>{$discount->percentDiscount|string_format:"%.2f"} %</i>
                                                &minus; {$discount->absoluteDiscount|convert} <span class="currency">{$currency->sign|escape}</span>
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            {/if}

                            {if !$delivery->hide_front_delivery_price && ($order->separate_delivery || !$order->separate_delivery && $order->delivery_price > 0)}
                                <div class="purchase_detail__item">
                                    <div class="purchase_detail__column_name">
                                        <div class="purchase_detail__name">{$delivery->name|escape}:</div>
                                    </div>
                                    <div class="purchase_detail__column_value">
                                        <div class="purchase_detail__price">
                                            <span>{$order->delivery_price|convert} <span class="currency"> {$currency->sign|escape}</span></span>
                                        </div>
                                    </div>
                                </div>
                            {/if}

                            <div class="purchase_detail__item">
                                <div class="purchase_detail__column_name">
                                    <div class="purchase_detail__name purchase_detail__name--total" data-language="cart_total_price">{$lang->cart_total_price}:</div>
                                </div>
                                <div class="purchase_detail__column_value">
                                    <div class="purchase_detail__price purchase_detail__price--total">
                                        <span>{$order->total_price|convert} <span class="currency">{$currency->sign|escape}</span></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky f_col f_col-lg-6 f_col-xl-7 flex-lg-first">
                <div class="fn_cart_sticky block--boxed block--border d-flex justify-content-center" data-margin-top="15" data-sticky-for="1024" data-sticky-class="is-sticky">
                    <div class="order_boxeded" style="width: 100%">
                        {if !$order->paid}
                            {if $payment_methods && (!$payment_method || !$order->paid) && $order->total_price>0} {* добавил !$order->paid *}
                                <div class="block 1form--boxed form form_cart">
                                    {* Payments *}
                                    <div class="h6">
                                        <span data-language="order_payment_details">{$lang->order_payment_details}</span>
                                    </div>
                                    <div class="delivery padding block">
                                        {if $order->payment_details}
                                            {if $is_mobile || $is_tablet}
                                                <a href="{$order->payment_details->Data->payload}" target="_blank">
                                                    <center>
                                                        <img src="/files/uploads/nspkLogo.jpg">
                                                        <p>Оплатить в НСПК</p>
                                                    </center>
                                                </a>
                                            {else}
                                                <div style="margin: -60px 0">
                                                    <center><img class="lazy" data-src="/{$config->qrcodes_dir}{$order->payment_details->Data->qrcId}.png" src="{$rootUrl}/design/{get_theme}/images/xloading.gif" alt="{$payment_method->name|escape}" title="{$payment_method->name|escape}"/></center>
                                                </div>
                                            {/if}
                                        {/if}
{* изменение способа оплаты *}
{*                                        <form method="post">*}
{*                                            <div class="delivery form__group">*}
{*                                                {foreach $payment_methods as $payment_method}*}
{*                                                    <div class="delivery__item">*}
{*                                                        <label class="checkbox delivery__label{if $payment_method->id == $order->payment_method_id} active{/if}">*}
{*                                                            <input class="checkbox__input delivery__input"  type="radio" name="payment_method_id"{if $payment_method->id == $order->payment_method_id} checked{/if} value="{$payment_method->id}" {if $delivery@first && $payment_method@first} checked{/if} id="payment_{$delivery->id}_{$payment_method->id}">*}

{*                                                            <svg class="checkbox__icon" viewBox="0 0 20 20">*}
{*                                                                <path class="checkbox__mark" fill="none" d="M4 10 l5 4 8-8.5"></path>*}
{*                                                            </svg>*}

{*                                                            <div class="delivery__name">*}
{*                                                                {$payment_method->name|escape}*}
{*                                                                {$lang->cart_deliveries_to_pay} <span class="delivery__name_price">{$order->total_price|convert:$payment_method->currency_id} {$all_currencies[$payment_method->currency_id]->sign}</span>*}
{*                                                            </div>*}

{*                                                            {if $payment_method->image}*}
{*                                                                <div class="delivery__image">*}
{*                                                                    <picture>*}
{*                                                                        {if $settings->support_webp}*}
{*                                                                            <source type="image/webp" srcset="{$payment_method->image|resize:80:30:false:$config->resized_payments_dir|webp}">*}
{*                                                                        {/if}*}
{*                                                                        <source srcset="{$payment_method->image|resize:80:30:false:$config->resized_payments_dir}">*}
{*                                                                        <img class="lazy" data-src="{$payment_method->image|resize:80:30:false:$config->resized_payments_dir}" src="{$rootUrl}/design/{get_theme}/images/xloading.gif" alt="{$purchase->product->name|escape}" title="{$purchase->product->name|escape}"/>*}
{*                                                                    </picture>*}
{*                                                                </div>*}
{*                                                            {/if}*}
{*                                                        </label>*}

{*                                                        {if $payment_method->description}*}
{*                                                            <div class="delivery__description">*}
{*                                                                {$payment_method->description}*}
{*                                                            </div>*}
{*                                                        {/if}*}
{*                                                    </div>*}
{*                                                {/foreach}*}
{*                                            </div>*}

{*                                            <input type="submit" data-language="cart_checkout" value="{$lang->cart_checkout}" name="checkout" class="form__button">*}
{*                                        </form>*}
                                    </div>
                                </div>
                            {elseif $payment_method}
                                <div class="block form form_cart">
                                    {* Payments *}
{*                                    <div class="h6" data-language="order_payment_details">*}
{*                                        {$lang->order_payment_details}*}
{*                                    </div>*}
                                    {* Selected payment *}
                                    <div class="block_selected_payment">
                                        <div class="order_payment">
                                            <div class="order_payment__title">
                                                <span data-language="order_payment">{$lang->order_payment}:</span>
                                                <span class="order_payment__name">{$payment_method->name|escape}</span>
                                            </div>
                                            <form class="hidden order_payment__form" method="post">
                                                <input class="order_payment__button" type=submit name='reset_payment_method' data-language="order_change_payment" value='{$lang->order_change_payment}'/>
                                            </form>
                                            {if $payment_method->description}
                                                <div class="hidden order_payment__description">
                                                    {$payment_method->description}
                                                </div>
                                            {/if}

                                            <div class="order_payment__checkout">
                                                {*Payment form is generated by payment module*}
                                                {*payment's form HTML code is in the /payment/ModuleName/form.tpl*}
                                                {checkout_payment_form order_id=$order->id module=$payment_method->module}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/if}

                        {/if}
                        <div class="block form form_cart">
                            <div class="h6" data-language="order_details">{$lang->order_details}</div>
                            {* Order details *}
                            <div class="block padding block__description--style">
                                <table class="order_details">
                                    <tr>
                                        <td>
                                            <span data-language="user_order_status">{$lang->user_order_status}</span>
                                        </td>
                                        <td>
                                            {$order_status->name|escape}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span data-language="order_date">{$lang->order_date}</span>
                                        </td>
                                        <td>{$order->date|date} <span data-language="order_time">{$lang->order_time}</span> {$order->date|time}</td>
                                    </tr>
{*                                    оригинал — вернуть если перевозчик выбирается в селекте админки внутри заказа -- design/html/order.tpl : 430 *}
{*                                    {if $delivery}*}
{*                                        <tr>*}
{*                                            <td>*}
{*                                                <span data-language="order_delivery">{$lang->order_delivery}</span>*}
{*                                            </td>*}
{*                                            <td>{$delivery->name|escape}</td>*}
{*                                        </tr>*}
{*                                    {else}*}
{*                                        <tr>*}
{*                                            <td>*}
{*                                                <span data-language="order_delivery">{$lang->order_delivery}</span>*}
{*                                            </td>*}
{*                                            <td>-= ПЕРЕВОЗЧИК НЕ ВЫБРАН =-</td>*}
{*                                        </tr>*}
{*                                    {/if}*}
                                    {if $order->name || $order->last_name}
                                        {assign var="recepientName" value=$order->name}
                                        {assign var="recepientLastname" value=$order->last_name}
                                    {else}
                                        {assign var="recepientName" value=$user->name}
                                        {assign var="recepientLastname" value=$user->last_name}
                                    {/if}
                                    <tr>
                                        <td>
                                            <span data-language="order_name">{$lang->cart_form_header}</span>
                                        </td>
                                        <td>{$recepientName|escape} {$recepientLastname|escape}</td>
                                    </tr>
                                    {if $order->address}
                                        {assign var="recepientAddress" value=$order->address}
{*                                        {assign var="recepientIndex" value="-= ИНДЕКС НЕ УКАЗАН =-"}*}
                                    {elseif $user->address}
                                        {assign var="recepientAddress" value=$user->address}
                                        {assign var="recepientIndex" value=$user->postal_index}
                                    {else}
                                        {assign var="recepientAddress" value='-= НЕТ АДРЕСА =-'}
                                        {assign var="recepientIndex" value=''}
                                    {/if}
                                    <tr>
                                        <td>
                                            <span data-language="order_name">{$lang->email_order_address}</span>
                                        </td>
                                        <td>{$recepientIndex|escape} {$recepientAddress|escape}</td>
                                    </tr>
{*                                    <tr>*}
{*                                        <td>*}
{*                                            <span data-language="order_email">{$lang->order_email}</span>*}
{*                                        </td>*}
{*                                        <td>{$order->email|escape}</td>*}
{*                                    </tr>*}
                                    {if $order->phone}
                                        <tr>
                                            <td>
                                                <span data-language="order_phone">{$lang->order_phone}</span>
                                            </td>
                                            <td>{$order->phone|phone}</td>
                                        </tr>
                                    {/if}
                                    {if $order->comment}
                                        <tr>
                                            <td>
                                                <span data-language="order_comment">{$lang->order_comment}</span>
                                            </td>
                                            <td>{$order->comment|escape|nl2br}</td>
                                        </tr>
                                    {/if}

                                    <tr>
                                        <td>
                                            <span data-language="order_delivery">{$lang->shipping_number}</span>
                                        </td>
                                        <td>
                                            {if $order->shipping_number}
                                                {foreach $order->shipping_number as $track}
                                                    <a href="{$track}" target="_blank">{$track}</a>&nbsp;<i class="fa fa-external-link"></i><br>
                                                {/foreach}
                                            {else}ожидаем
                                            {/if}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!--div class="block form form_cart">
                            <div class="o_notify_v2_content">
                                <div class="o_notify_v2_content_inner" data-language="order_success_text">
                                    <p><strong>{$order->name|escape}</strong>, {$lang->order_success_text}</p>
                                </div>
                            </div>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
