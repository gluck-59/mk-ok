<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:26:14
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096dc6774fd1_19561736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63ea21c41cd92c101b3477c3483fb9dc852ef9a0' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/main.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 4,
    'file:product_list.tpl' => 3,
    'file:top_categories.tpl' => 1,
    'file:post_list.tpl' => 1,
  ),
),false)) {
function content_67096dc6774fd1_19561736 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- The main page template -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_featured_products'][0], array( array('var'=>'featured_products','limit'=>5),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['featured_products']->value) {?>
    <div class="main-products main-products__featured container">
        <div class="block block--boxed block--border">
            <div class="block__header block__header--promo">
                <div class="block__title">
                    <span data-language="main_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_recommended_products;?>
</span>
                </div>
                <div class="block__header_button">
                    <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'products','filtersUrl'=>array('filter'=>array('featured'))),$_smarty_tpl ) );?>
">
                        <span data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
</span><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, false);
?>
                    </a>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_products_slide products_list row no_gutters swiper-container">
                    <div class="swiper-wrapper">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featured_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <div class="item product_item swiper-slide no_hover"><?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div> 
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:top_categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_new_products'][0], array( array('var'=>'new_products','limit'=>5),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['new_products']->value) {?>
    <div class="main-products main-products__new container">
        <div class="block block--boxed block--border">
            <div class="block__header">
                <div class="block__title">
                    <span data-language="main_new_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_new_products;?>
</span>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_products_slide products_list row no_gutters swiper-container">
                    <div class="swiper-wrapper">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <div class="product_item swiper-slide no_hover"><?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
         </div>
    </div>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_discounted_products'][0], array( array('var'=>'discounted_products','limit'=>5),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['discounted_products']->value) {?>
    <div class="main-products main-products__sale container">
        <div class="block block--boxed block--border">
            <div class="block__header block__header--promo">
                <div class="block__title">
                    <span data-language="main_discount_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_discount_products;?>
</span>
                </div>
                <div class="block__header_button">
                    <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'products','filtersUrl'=>array('filter'=>array('discounted'))),$_smarty_tpl ) );?>
">
                        <span data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
 </span><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                    </a>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_products_slide products_list row no_gutters swiper-container">
                    <div class="swiper-wrapper">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounted_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <div class="product_item swiper-slide no_hover"><?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_brands'][0], array( array('var'=>'all_brands','visible_brand'=>1,'limit'=>9),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['description']->value || $_smarty_tpl->tpl_vars['all_brands']->value) {?>
    <div class="container section_about_&_brands">
        <div class="block block--boxed block--border">
            <div class="f_row">
                <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                    <div class="d-lg-flex align-items-lg-stretch <?php if ($_smarty_tpl->tpl_vars['all_brands']->value) {?>f_col-lg-7 f_col-xl-8<?php } else { ?>f_col-lg-12<?php }?>">
                        <div class="block__abouts_us">
                            <div class="block__header">
                                <h1 class="block__title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>
                            </div>
                            <div class="block__body">
                                <div class="fn_readmore">
                                    <div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['all_brands']->value) {?>
                    <div class="d-lg-flex align-items-lg-stretch <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>f_col-lg-5 f_col-xl-4<?php } else { ?>f_col-lg-12 <?php }?>">
                        <div class="block__main_brands">
                            <div class="block__header block__header--promo">
                                <div class="block__title"><span data-language="main_brands"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_brands;?>
</span></div>
                                <div class="block__header_button">
                                    <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brands'),$_smarty_tpl ) );?>
">
                                        <span data-language="main_look_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_look_all;?>
 </span><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                                    </a>
                                </div>
                            </div>
                            <div class="block__body">
                                <div class="main_brands f_row no_gutters">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_brands']->value, 'b');
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
?>
                                    <div class="main_brands__item f_col-4 f_col-md-2 f_col-lg-4 f_col-xl-4">
                                        <a class="d-flex align-items-center justify-content-center main_brands__link" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brand','url'=>$_smarty_tpl->tpl_vars['b']->value->url),$_smarty_tpl ) );?>
" data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
                                                <div class="d-flex align-items-center justify-content-center main_brands__image">
                                                    <picture>
                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                                            <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,100,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir )) ));?>
">
                                                        <?php }?>
                                                        <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,100,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
">
                                                        <img class="main_brands_img lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,100,50,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                    </picture>
                                                </div>
                                            <?php } else { ?>
                                                <div class="d-flex align-items-center justify-content-center main_brands__name">
                                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                </div>
                                            <?php }?>
                                        </a>
                                    </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_posts'][0], array( array('var'=>'last_posts','limit'=>4,'category_id'=>1),$_smarty_tpl ) );?>

<?php if ($_smarty_tpl->tpl_vars['last_posts']->value) {?>
    <div class="main-articles container">
        <div class="block block--boxed block--border">
            <div class="block__header block__header--promo">
                <div class="block__title">
                    <span data-language="main_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_news;?>
</span>
                </div>
                <div class="block__header_button">
                    <a class="block__more d-flex align-items-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_category','url'=>$_smarty_tpl->tpl_vars['blog_categories']->value[1]->url),$_smarty_tpl ) );?>
">
                        <span data-language="main_all_news"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_all_news;?>
 </span><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                    </a>
                </div>
            </div>
            <div class="block__body">
                <div class="fn_articles_slide article_list f_row no_gutters">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                        <div class="article_item no_hover f_col-sm-6 f_col-lg-3"><?php $_smarty_tpl->_subTemplateRender('file:post_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>   
        </div>
    </div>
<?php }
}
}
