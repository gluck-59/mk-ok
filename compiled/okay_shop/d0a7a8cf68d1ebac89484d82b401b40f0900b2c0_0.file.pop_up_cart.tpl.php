<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:23:16
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/pop_up_cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e1864675c04_73408125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a7a8cf68d1ebac89484d82b401b40f0900b2c0' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/pop_up_cart.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_670e1864675c04_73408125 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cart']->value->isEmpty === false) {?>
    <div>
        <div class="block__popup_cart">
            <div class="h6" data-language="cart_purchase_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_purchase_title;?>
</div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value->purchases, 'purchase');
$_smarty_tpl->tpl_vars['purchase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->do_else = false;
?>
                <div class="purchase__item d-flex align-items-start fn_purchase_row">
                                        <div class="purchase__image d-flex">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url),$_smarty_tpl ) );?>
">
                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,70,70 ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <?php } else { ?>
                                <div class="purchase__no_image d-flex align-items-start">
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                </div>
                            <?php }?>
                        </a>
                    </div>
                    <div class="purchase__content">
                                                <div class="purchase__name">
                            <a class="purchase__name_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->name, ENT_QUOTES, 'UTF-8', true);?>
</i>
                            <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->stock == 0) {?><span class="preorder_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</span><?php }?>
                        </div>
                        <div class="purchase__group">
                                                        <div class="purchase__price hidden-xs-down">
                                <div class="purchase__group_title hidden-xs-down">
                                    <span data-language="cart_head_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
</span>
                                </div>
                                <div class="purchase__group_content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( ($_smarty_tpl->tpl_vars['purchase']->value->price) ));?>
 <span class="currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span> <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->units) {?>/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->units, ENT_QUOTES, 'UTF-8', true);
}?></div>
                            </div>
                            <div class="purchase__amount">
                                <div class="purchase__group_title hidden-xs-down">
                                    <span data-language="cart_head_amoun"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_amoun;?>
</span>
                                </div>
                                <div class="fn_product_amount purchase__group_content<?php if ($_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?> fn_is_preorder<?php }?> amount">
                                    <span class="fn_minus amount__minus">&minus;</span>
                                    <input class="amount__input" type="text" data-id="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" name="amounts[<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->amount;?>
" onblur="ajax_change_amount(this, <?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);" data-max="<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->stock;?>
">
                                    <span class="fn_plus amount__plus">&plus;</span>
                                </div>
                            </div>
                            <div class="purchase__price_total">
                                <div class="purchase__group_title hidden-xs-down">
                                    <span data-language="cart_head_total"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_total;?>
</span>
                                </div>
                                <div class="purchase__group_content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->meta->total_price ));?>
 <span class="currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span></div>
                            </div>
                        </div>
                                                <a class="purchase__remove" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"cart_remove_item",'variantId'=>$_smarty_tpl->tpl_vars['purchase']->value->variant->id),$_smarty_tpl ) );?>
" onclick="ajax_remove(<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
);return false;" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_remove;?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'remove_icon'), 0, true);
?>
                        </a>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <div class="purchase_detail__item flex-wrap">
            <a class="form__button form__button--border" href="#" onclick="$.fancybox.close(); return false;"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_continue_shopping;?>
</a>

            <div class="purchase_detail__column_value form form_cart form--boxed_cart">
                <div class="purchase_detail__price--total">
                    <div class="purchase_detail_popup_total">
                        <span id="fn_cart_total_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value->total_price ));?>
</span> <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </div>
                    <a class="form__button button--blick" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'cart'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_go_to_cart;?>
</a>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="block">
                <div class="h1"><span data-language="cart_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></div>

        <p class="block padding" data-language="cart_empty"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty;?>
</p>
    </div>
<?php }
}
}
