<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:16:05
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/cart_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644ddd75bd0b05_65543421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6c86af4f1858e7a9e4052befe18a134f13e9d0' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/cart_informer.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644ddd75bd0b05_65543421 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Cart informer (given by Ajax) -->
<?php if ($_smarty_tpl->tpl_vars['cart']->value->isEmpty === false) {?>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'cart'),$_smarty_tpl ) );?>
" class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-shopping-cart"></i>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </div>
<?php }
}
}
