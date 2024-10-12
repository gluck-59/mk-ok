<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:24:30
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096d5e2a6bb7_91395927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28272998ef4c11e1b2a6c3b58372e7b237e230bf' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_form.tpl',
      1 => 1728664430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67096d5e2a6bb7_91395927 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hidden">
    <form id="fn_fast_order" class="form form--boxed popup popup_animated fn_validate_fast_order" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"OkayCMS.FastOrder.CreateOrder",'absolute'=>1),$_smarty_tpl ) );?>
"
          <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>
              onsubmit="grecaptcha.execute(window.fastOrderRecaptcha); return false"
          <?php } else { ?>
              onsubmit="sendAjaxFastOrderForm(); return false"
          <?php }?>
    >
                <div class="form__header">
            <div class="form__title">
                <span data-language="fast_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
</span>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v3") {?>
            <input id="fn_fast_order_recaptcha_token" class="fn_recaptchav3" type="hidden" name="recaptcha_token" />
        <?php }?>

        <div class="form__body">
            <input id="fast_order_variant_id" value="" name="variant_id" type="hidden"/>
            <input value="" name="amount" type="hidden"/>
            <input type="hidden" name="IsFastOrder" value="true">

            <div class="message_error fn_fast_order_errors" style="display: none"></div>

            <div id="fast_order_product_name" class="h6"></div>

            <div class="form__group">
                <input class="fn_validate_fast_name form__input form__placeholder--focus" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['name'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->name) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" />
                <span class="form__placeholder" data-language="form_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
            </div>

            <div class="form__group">
                <input class="fn_validate_fast_name form__input form__placeholder--focus" type="text" name="last_name" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['last_name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['last_name'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->last_name) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_name, ENT_QUOTES, 'UTF-8', true);
}?>" />
                <span class="form__placeholder" data-language="form_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_last_name;?>
</span>
            </div>

            <div class="form__group">
                <input  class="fn_validate_fast_phone form__input form__placeholder--focus" type="text" name="phone" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['phone']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['phone'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->phone) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->phone, ENT_QUOTES, 'UTF-8', true);
}?>" />
                <span class="form__placeholder" data-language="form_phone"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
*</span>
            </div>
         </div>

        <div class="form__footer">
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_fast_order) {?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2" || $_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>
                    <div class="captcha">
                        <div id="recaptcha_fast_order"></div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_fast_order"),$_smarty_tpl ) );?>

                    <div class="captcha">
                        <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_fast_order']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_fast_order']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <span class="form__captcha">
                        <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" >
                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                    </span>
                    </div>
                <?php }?>
            <?php }?>

            <input class="form__button button--blick fn_fast_order_submit" type="submit" name="checkout" data-language="callback_order" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->callback_order;?>
"/>
        </div>
     </form>
</div><?php }
}
