<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:42:54
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de3be3fe935_79781850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00321beefcb5192aa788f8f66bc0c204ddcb1e8' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/products.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 4,
    'file:selected_features.tpl' => 1,
    'file:features.tpl' => 1,
    'file:browsed_products.tpl' => 1,
    'file:products_sort.tpl' => 1,
    'file:products_content.tpl' => 1,
    'file:chpu_pagination.tpl' => 1,
  ),
),false)) {
function content_644de3be3fe935_79781850 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- The Categories page -->

<div class="clearfix">
        <div class="fn_mobile_toogle sidebar d-lg-flex flex-lg-column">
        <div class="fn_mobile_toogle sidebar__header sidebar__boxed hidden-lg-up">
            <div class="fn_switch_mobile_filter sidebar__header--close">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, false);
?>
                <span data-language="mobile_filter_close"><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_close;?>
</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <div class="sidebar__header--reset">
                    <form method="post">
                        <button type="submit" name="prg_seo_hide" class="fn_filter_reset mobile_filter__reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['category']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"reset_icon"), 0, true);
?>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_reset;?>
</span>
                        </button>
                    </form>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                <div class="sidebar__header--reset">
                    <form method="post">
                        <button type="submit" name="prg_seo_hide" class="fn_filter_reset mobile_filter__reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brand",'url'=>$_smarty_tpl->tpl_vars['brand']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"reset_icon"), 0, true);
?>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_reset;?>
</span>
                        </button>
                    </form>
                </div>
            <?php }?>
        </div>

        <div class="fn_selected_features">
            <?php if (!$_smarty_tpl->tpl_vars['settings']->value->deferred_load_features) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:selected_features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>

        <div class="fn_features">
            <?php if (!$_smarty_tpl->tpl_vars['settings']->value->deferred_load_features) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                                <div class='fn_skeleton_load'>
                    <?php
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if (true) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 1; $__section_foo_0_iteration <= 6; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?>
                        <div class='skeleton_load__item skeleton_load__item--<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null);?>
'></div>
                    <?php
}
}
?>
                </div>
            <?php }?>
        </div>

                <div class="browsed products">
            <?php $_smarty_tpl->_subTemplateRender('file:browsed_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

    <div class="products_container d-flex flex-column">
        <div class="products_container__boxed">
            <h1 class="h1"<?php if ($_smarty_tpl->tpl_vars['category']->value) {?> data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"<?php }
if ($_smarty_tpl->tpl_vars['brand']->value) {?> data-brand="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>

            <?php if (!empty($_smarty_tpl->tpl_vars['annotation']->value)) {?>
                <div class="boxed boxed--big">
                    <div class="">
                        <div class="fn_readmore">
                            <div class="block__description">
                                <?php echo $_smarty_tpl->tpl_vars['annotation']->value;?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <div class="products_container__sort d-flex align-items-center justify-content-between">
                                        <div class="fn_products_sort">
                        <?php $_smarty_tpl->_subTemplateRender("file:products_sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                                        <div class="fn_switch_mobile_filter switch_mobile_filter hidden-lg-up">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"filter_icon"), 0, true);
?>
                        <span data-language="filters"><?php echo $_smarty_tpl->tpl_vars['lang']->value->filters;?>
</span>
                    </div>
                </div>
            <?php }?>

                        <div id="fn_products_content" class="fn_categories products_list row">
                <?php $_smarty_tpl->_subTemplateRender("file:products_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                                <div class="fn_pagination products_pagination">
                    <?php $_smarty_tpl->_subTemplateRender('file:chpu_pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                <div class="boxed boxed--big">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['table_of_content']->value)) {?>
                        <div class="post__table_contents">
                            <div class="post__table_contents_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_table_contents;?>
</div>
                            <ol>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_of_content']->value, 'content_item');
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?>
                                    <li style="margin-left: <?php echo $_smarty_tpl->tpl_vars['content_item']->value['header_level']*15-15;?>
px">
                                        <a class="fn_ancor_post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_item']->value['anchor_text'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                        </div>
                    <?php }?>
                    <div class="">
                        <div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
