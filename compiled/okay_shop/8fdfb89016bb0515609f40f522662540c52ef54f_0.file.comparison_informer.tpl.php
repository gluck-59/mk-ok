<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:24:30
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/comparison_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096d5e0f60b0_40259922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fdfb89016bb0515609f40f522662540c52ef54f' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/comparison_informer.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67096d5e0f60b0_40259922 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Сomparison informer (given by Ajax) -->
<?php if (count($_smarty_tpl->tpl_vars['comparison']->value->products) > 0) {?>
    <a class="header_informers__link d-flex align-items-center"  href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"comparison"),$_smarty_tpl ) );?>
">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
        <span class="compare_counter"><?php echo count($_smarty_tpl->tpl_vars['comparison']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <div class="header_informers__link d-flex align-items-center">
        <i class="d-flex align-items-center fa fa-balance-scale"></i>
    </div>
<?php }
}
}
