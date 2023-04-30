<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:21:22
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/common_js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644ddeb227f374_04870280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd433c0fc63935ec7074b5bd173798d01e8ece3f5' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/common_js.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644ddeb227f374_04870280 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
        
    const okay = {};
    okay.router = {};
    
    
    <?php if ($_smarty_tpl->tpl_vars['common_js_vars']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['common_js_vars']->value, 'value', false, 'var');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            okay.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var']->value, ENT_QUOTES, 'UTF-8', true);?>
 = <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
;
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['front_routes']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['front_routes']->value, 'route', false, 'name');
$_smarty_tpl->tpl_vars['route']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['route']->value) {
$_smarty_tpl->tpl_vars['route']->do_else = false;
?>
            okay.router['<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
'] = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>$_smarty_tpl->tpl_vars['name']->value,'absolute'=>1),$_smarty_tpl ) );?>
';
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    okay.change_payment_method = function() {
        let delivery_input = $( 'input[name="delivery_id"]:checked' );
        let current_payment_id = $( 'input[name="payment_method_id"]:checked' ).val();
        let delivery_id = delivery_input.val();
        let payments_ids = new Array();
        
        if (String(delivery_input.data('payment_method_ids')).length > 0) {
            payments_ids = String(delivery_input.data('payment_method_ids')).split(',');
        }

        $( ".fn_payment_method__item" ).hide().find('input[name="payment_method_id"]').prop('disabled', true);
        $( ".fn_payment_method__item" )
            .find('input[name="payment_method_id"]')
            .not('[value="' + current_payment_id + '"]')
            .prop('checked', false);
        
        if (payments_ids.length > 0) {
            payments_ids.forEach(function (payment_id, i, arr) {
                let payment_block =  $( ".fn_payment_method__item_" + payment_id );
                let payment_input = payment_block.find('input[name="payment_method_id"]');
                let currency_id = payment_input.data('currency_id');

                payment_block.show();
                payment_block.find('.fn_payment_price').text(okay.convert(delivery_input.data('total_price'), currency_id));
                payment_input.prop('disabled', false);
            });

            $('.fn_payments_block').show();

            /*если способ оплаты не активен для данной доставки, тогда выберим первый доступный*/
            if ($('input[name="payment_method_id"][value="' + current_payment_id + '"]').is(':disabled')) {
                $(".fn_payment_method__item:visible").first().find('input[name="payment_method_id"]').prop('checked', true).trigger('click');
            }
        } else {
            $('.fn_payments_block').hide();
        }
        
        okay.update_cart_total_price();

        $( 'input[name="delivery_id"]' ).parent().removeClass( 'active' );
        $( '#deliveries_' + delivery_id ).parent().addClass( 'active' );
    };

    okay.update_cart_total_price = function() {
        let delivery_input = $( 'input[name="delivery_id"]:checked' );
        $('#fn_cart_total_price').text(okay.convert(delivery_input.data('total_price')));
        $('#fn_total_purchases_price').text(okay.convert($('.fn_purchases_wrap').data('total_purchases_price'), null, true, true));

        /*Обновляем информацию по стоимости доставки*/
        if (delivery_input.data('is_free_delivery')) {
            $('#fn_total_free_delivery').show();
            $('#fn_total_delivery_price').hide();
        } else {
            $('#fn_total_free_delivery').hide();
            $('#fn_total_delivery_price').text(okay.convert(delivery_input.data('delivery_price'), null, true, true)).show();
        }

        /*Обновляем информацию по оплате доставки (отдельно или нет)*/
        if (delivery_input.data('separate_payment') == true && delivery_input.data('is_free_delivery') == false) {
            $('#fn_total_separate_delivery').show();
        } else {
            $('#fn_total_separate_delivery').hide();
        }
    };

    /*Метод ворматирования цены в js*/
    okay.convert = function(price, currencyId = null, format = true, withCurrency = false)
    {

        if (currencyId === null) {
            currencyId = <?php echo $_smarty_tpl->tpl_vars['currency']->value->id;?>
;
        }

        let currencies = Object.create(null);

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
        currencies[<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
] = {
            'rate_from': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_from, ENT_QUOTES, 'UTF-8', true);?>
',
            'rate_to': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->rate_to, ENT_QUOTES, 'UTF-8', true);?>
',
            'cents': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->cents, ENT_QUOTES, 'UTF-8', true);?>
',
            'sign': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
',
        };
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        let currency = currencies[currencyId];
        
        if (typeof currency == "undefined") {
            console.error('currency ID='+currencyId+' is not defined');
            return 'currency error';
        }
        
        let decimal = currency.cents;
        let dec_point = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->decimals_point, ENT_QUOTES, 'UTF-8', true);?>
';
        let separator = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->thousands_separator, ENT_QUOTES, 'UTF-8', true);?>
';
        let res = parseFloat(price*currency.rate_from/currency.rate_to);

        if (format === true) {
            res = Number(res).toFixed(decimal).toString().split('.');
            
            let b = res[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
            
            res = (res[1]?b+ dec_point +res[1]:b);

            if (withCurrency === true) {
                res += ' ' + currency.sign;
            }
        } else {
            res = Number(res).toFixed(decimal);
        }
        return res;
    };

<?php echo '</script'; ?>
>
<?php }
}
