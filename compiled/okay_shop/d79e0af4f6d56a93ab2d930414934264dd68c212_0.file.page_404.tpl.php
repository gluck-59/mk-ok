<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:16:05
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/page_404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644ddd758710b4_61162496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd79e0af4f6d56a93ab2d930414934264dd68c212' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/page_404.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_644ddd758710b4_61162496 (Smarty_Internal_Template $_smarty_tpl) {
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
