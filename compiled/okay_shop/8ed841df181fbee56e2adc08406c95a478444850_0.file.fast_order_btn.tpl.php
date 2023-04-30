<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:21:21
  from '/Users/gluck/Sites/okaycms/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644ddeb11441f1_29632348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ed841df181fbee56e2adc08406c95a478444850' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/Okay/Modules/OkayCMS/FastOrder/design/html/fast_order_btn.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644ddeb11441f1_29632348 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="fn_fast_order_button fast_order_button fa fa-rocket fn_is_stock"
   href="#fast_order" <?php if ($_smarty_tpl->tpl_vars['fastOrderProduct']->value->variant->stock < 1 && !$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>style="display: none" <?php }?>
   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>
" data-language="fast_order" data-name="<?php echo $_smarty_tpl->tpl_vars['fast_order_product_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->fast_order;?>

</a><?php }
}
