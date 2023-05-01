<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:47:41
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/products_rel_prev_next.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fdf1d3e1306_65349605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96be56d6bfaf98b9ce280244b857cc8d45306a0' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/products_rel_prev_next.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644fdf1d3e1306_65349605 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['total_pages_num']->value > 1) {?>
    <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == $_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );?>
"/>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_page_num']->value == 1) {?>
        <link rel="next" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>2),$_smarty_tpl ) );?>
"/>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );?>
"/>
        <?php } else { ?>
            <link rel="prev" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );?>
"/>
        <?php }?>
        <link rel="next" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl ) );?>
"/>
    <?php }
}
}
}
