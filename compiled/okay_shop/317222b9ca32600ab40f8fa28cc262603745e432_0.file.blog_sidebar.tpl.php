<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:58:07
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/blog_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e208f399ea6_43840067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '317222b9ca32600ab40f8fa28cc262603745e432' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/blog_sidebar.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 7,
  ),
),false)) {
function content_670e208f399ea6_43840067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_article' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/compiled/okay_shop/317222b9ca32600ab40f8fa28cc262603745e432_0.file.blog_sidebar.tpl.php',
    'uid' => '317222b9ca32600ab40f8fa28cc262603745e432',
    'call_name' => 'smarty_template_function_categories_article_1906290941670e208f31e758_75713613',
  ),
));
?><!-- Blog sidebar page -->

<div class="fn_mobile_toogle sidebar__header sidebar__boxed hidden-lg-up">
    <div class="fn_switch_mobile_filter sidebar__header--close">
        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, false);
?>
        <span data-language="mobile_filter_close"><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_close;?>
</span>
    </div>
</div>

<div class="sidebar__boxed">
    <div class="fn_switch sidebar_heading d-flex align-items-center justify-content-between">
        <span data-language="blog_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_catalog;?>
</span>
        <span class="d-flex align-items-center filter__name_arrow fa fa-chevron-down"></span>
    </div>
    <nav class="blog_catalog">
        
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_article', array('categories'=>$_smarty_tpl->tpl_vars['blog_categories']->value,'level'=>1), true);?>

    </nav>
</div>

<div class="sidebar__boxed sidebar__boxed--subscribe hidden-md-down">
    <div class="sidebar_subscribe">
        <div class="sidebar_subscribe__title">
            <span data-language="subscribe_promotext"><?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_promotext;?>
</span>
        </div>
        <form class="sidebar_subscribe__form fn_validate_subscribe" method="post">
            <div class="sidebar_subscribe__group">
                <input type="hidden" name="subscribe" value="1"/>
                <input class="form__input form__input--aside_subscribe" aria-label="subscribe" type="email" name="subscribe_email" value="" data-format="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
"/>
            </div>
            <button class="button button--basic button--aside_subscribe" type="submit" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->subscribe_button;?>
"><?php $_smarty_tpl->_subTemplateRender('file:svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'subscribe_image'), 0, true);
?></button>
        </form>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['controller']->value != "AuthorsController" && !$_smarty_tpl->tpl_vars['post']->value) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0], array( array('var'=>'featured_products','limit'=>3),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
    <div class="sidebar__boxed">
        <div class="fn_switch sidebar_heading d-flex align-items-center justify-content-between">
            <span data-language="main_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_recommended_products;?>
</span>
            <span class="d-flex align-items-center sidebar_heading_arrow icon fa fa-chevron-down"></span>
        </div>
        <div class="sidebar_card f_row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div class="sidebar_card__item f_col-12">
                <a class="d-flex align-items-center justify-content-center sidebar_card__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'product','url'=>$_smarty_tpl->tpl_vars['product']->value->url),$_smarty_tpl ) );?>
">
                    <div class="sidebar_card__image">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->image->filename) {?>
                        <picture>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,60,60 )) ));?>
">
                            <?php }?>
                            <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,60,60 ));?>
">
                            <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,60,60 ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </picture>
                        <?php } else { ?>
                        <div class="sidebar_card__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                        </div>
                        <?php }?>
                    </div>
                    <div class="sidebar_card__content">
                        <div class="sidebar_card__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="sidebar_card__prices">
                            <div class="d-flex align-items-center">
                                <div class="old_price <?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden-xs-up<?php }?>">
                                    <span class="fn_old_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->compare_price ));?>
</span>
                                </div>
                                <div class="price <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> price--red<?php }?>">
                                    <span class="fn_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->price ));?>
</span> <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <a class="sidebar_card__more d-flex align-items-center f_col-12" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'products','filtersUrl'=>array('filter'=>array('featured'))),$_smarty_tpl ) );?>
">
                <span data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
</span><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
            </a>
        </div>
    </div>
    <?php }
}
}
/* smarty_template_function_categories_article_1906290941670e208f31e758_75713613 */
if (!function_exists('smarty_template_function_categories_article_1906290941670e208f31e758_75713613')) {
function smarty_template_function_categories_article_1906290941670e208f31e758_75713613(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

            <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                <ul class="blog_catalog__list level_<?php echo $_smarty_tpl->tpl_vars['level']->value;
if ($_smarty_tpl->tpl_vars['level']->value > 1) {?> blog_catalog__list--inner<?php }?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->visible && ($_smarty_tpl->tpl_vars['c']->value->has_posts || $_smarty_tpl->tpl_vars['settings']->value->show_empty_categories)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories && $_smarty_tpl->tpl_vars['c']->value->count_children_visible && $_smarty_tpl->tpl_vars['level']->value < 3) {?>
                                <li class="blog_catalog__item parent">
                                    <a class="blog_catalog__link <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
" data-blog_category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                            <picture>
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                                    <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_categories_dir )) ));?>
">
                                                <?php }?>
                                                <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_categories_dir ));?>
">
                                                <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_categories_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                            </picture>
                                        <?php } else { ?>
                                            <span class="blog_catalog__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                            </span>
                                        <?php }?>
                                        <span class="blog_catalog__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                    <span class="fn_switch blog_catalog__switch"><?php $_smarty_tpl->_subTemplateRender('file:svg.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'arrow_right3'), 0, true);
?></span>
                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_article', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                </li>
                            <?php } else { ?>
                                <li class="blog_catalog__item">
                                    <a class="blog_catalog__link <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
" data-blog_category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                        <picture>
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                                <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_categories_dir )) ));?>
">
                                            <?php }?>
                                            <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_categories_dir ));?>
">
                                            <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_categories_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </picture>
                                        <?php } else { ?>
                                            <span class="blog_catalog__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                            </span>
                                        <?php }?>
                                        <span class="blog_catalog__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                </li>
                            <?php }?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
        <?php
}}
/*/ smarty_template_function_categories_article_1906290941670e208f31e758_75713613 */
}
