<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:26:14
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/page_404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644dede6edac83_32062904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6069c109e0c19f615d1c279fc41b2e9836a64d18' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/page_404.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_644dede6edac83_32062904 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- The template of page 404 -->


<div class="block">
    <div class="container">
        <div class="not_found">
            <div class="not_found__image">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"404_icon"), 0, false);
?>
            </div>
            <div class="not_found__description">
                <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

            </div>
            <div class="not_found__menu">
                <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

            </div>
        </div>
    </div>
</div><?php }
}
