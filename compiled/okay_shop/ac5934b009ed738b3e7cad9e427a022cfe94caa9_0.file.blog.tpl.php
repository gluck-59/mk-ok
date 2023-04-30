<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:30:54
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644deefed30b77_03672445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac5934b009ed738b3e7cad9e427a022cfe94caa9' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/blog.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_sidebar.tpl' => 1,
    'file:svg.tpl' => 1,
    'file:post_list.tpl' => 1,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_644deefed30b77_03672445 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Blog page -->

<div class="d-lg-flex align-items-lg-start justify-content-lg-between flex-lg-row-reverse clearfix">
        <div class="fn_mobile_toogle sidebar sidebar--right d-lg-flex flex-lg-column">
        <?php $_smarty_tpl->_subTemplateRender('file:blog_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
        <div class="blog_container blog_container--left d-flex flex-column">
        <div class="blog_container__boxed">
            <h1 class="blog__heading h1">
                <span <?php if ($_smarty_tpl->tpl_vars['page']->value->id) {?>data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>data-blog_category="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </h1>
                        <div class="fn_switch_mobile_filter switch_mobile_filter hidden-lg-up">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"catalog_icon"), 0, false);
?>
                <span data-language="blog_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_catalog;?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                <div class="boxed boxed--big">
                    <div class="fn_readmore">
                        <div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
                    </div>
                </div>
            <?php }?>
            <div class="article_list f_row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                <div class="article_item f_col-sm-6 f_col-md-4 f_col-lg-4"><?php $_smarty_tpl->_subTemplateRender('file:post_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
                        <div class="products_pagination">
                <?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div>
<?php }
}
