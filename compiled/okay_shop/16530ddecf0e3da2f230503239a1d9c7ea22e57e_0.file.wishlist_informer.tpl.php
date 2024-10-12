<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:24:30
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/wishlist_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096d5e0ec3f4_41322646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16530ddecf0e3da2f230503239a1d9c7ea22e57e' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/wishlist_informer.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67096d5e0ec3f4_41322646 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Информер избранного (отдаётся аяксом) -->
<?php if (count($_smarty_tpl->tpl_vars['wishlist']->value->products) > 0) {?>
    <a class="header_informers__link d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"wishlist"),$_smarty_tpl ) );?>
">
        <i class="d-flex align-items-center fa fa-heart-o"></i>
                <span class="wishlist_counter"><?php echo count($_smarty_tpl->tpl_vars['wishlist']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <span class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-heart-o"></i>
            </span>
<?php }
}
}
