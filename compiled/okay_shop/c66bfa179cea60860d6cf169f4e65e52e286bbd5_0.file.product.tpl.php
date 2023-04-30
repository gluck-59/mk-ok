<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:32:05
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de135381d02_60392472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c66bfa179cea60860d6cf169f4e65e52e286bbd5' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/product.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 9,
    'file:product_list.tpl' => 1,
    'file:post_list.tpl' => 1,
  ),
),false)) {
function content_644de135381d02_60392472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'comments_tree' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/okaycms/compiled/okay_shop/c66bfa179cea60860d6cf169f4e65e52e286bbd5_0.file.product.tpl.php',
    'uid' => 'c66bfa179cea60860d6cf169f4e65e52e286bbd5',
    'call_name' => 'smarty_template_function_comments_tree_1421440960644de1351e9886_26917729',
  ),
));
?>
<div class="fn_product block" itemscope itemtype="http://schema.org/Product">
        <div class="block__header block__header--boxed block__header--border  <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->sku) {?>block__header--promo<?php }?>">
        <h1 class="block__heading">
            <span data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </h1>
        <div class="block__header_promo product-page__sku<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->sku) {?> hidden<?php }?>">
            <span data-language="product_sku"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sku;?>
:</span>
            <span class="fn_sku sku_nubmer" <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->sku) {?>itemprop = "sku"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->sku, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </div>
    </div>

    <div class="fn_transfer f_row flex-column flex-lg-row align-items-lg-stretch">
        <div class="block product-page__gallery f_col f_col-lg-7 f_col-xl-7">
            <div class="block--boxed block--border boxed--stretch d-md-flex justify-content-between">
                <?php if ($_smarty_tpl->tpl_vars['product']->value->images) {?>
                                        <div class="gallery_image product-page__image <?php if (count($_smarty_tpl->tpl_vars['product']->value->images) == 1) {?> product-page__image--full <?php }?> f_row justify-content-center">
                        <div class="product-page__img swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->images, 'image', false, 'i');
$_smarty_tpl->tpl_vars['image']->index = -1;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->index++;
$_smarty_tpl->tpl_vars['image']->first = !$_smarty_tpl->tpl_vars['image']->index;
$__foreach_image_0_saved = $_smarty_tpl->tpl_vars['image'];
?>
                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,1800,1800,'w' ));?>
" data-fancybox="we2" class="swiper-slide">
                                        <picture>
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                                <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,700,800 )) ));?>
">
                                            <?php }?>
                                                <source srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,700,800 ));?>
">
                                                <img <?php if ($_smarty_tpl->tpl_vars['image']->first) {?> itemprop="image" <?php }?> src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,700,800 ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                        </picture>
                                    </a>
                                <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <?php if (count($_smarty_tpl->tpl_vars['product']->value->images) > 1) {?>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->featured || $_smarty_tpl->tpl_vars['product']->value->special || $_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?>
                            <div class="stickers stickers_product-page">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>
                                <span class="sticker sticker--hit" data-language="product_sticker_hit"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sticker_hit;?>
</span>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?>
                                <span class="sticker sticker--discount" data-language="product_sticker_discount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sticker_discount;?>
</span>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->special) {?>
                                    <span class="sticker sticker--special">
                                        <img class="sticker__image" src='files/special/<?php echo $_smarty_tpl->tpl_vars['product']->value->special;?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->special, ENT_QUOTES, 'UTF-8', true);?>
' title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->special, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                    </span>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                                        <?php if (count($_smarty_tpl->tpl_vars['product']->value->images) > 1) {?>
                    <div class="product-page__images swiper-container gallery-thumbs d-md-flex justify-content-center justify-content-md-start flex-md-column hidden-sm-down">
                        <div class="swiper-wrapper">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->images, 'image', false, 'i');
$_smarty_tpl->tpl_vars['image']->index = -1;
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['image']->index++;
$_smarty_tpl->tpl_vars['image']->first = !$_smarty_tpl->tpl_vars['image']->index;
$__foreach_image_1_saved = $_smarty_tpl->tpl_vars['image'];
?>
                            <div class="swiper-slide product-page__images-item">
                                <picture>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                        <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,60,60 )) ));?>
">
                                    <?php }?>
                                        <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,60,60 ));?>
">
                                        <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value->filename,60,60 ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </picture>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['product']->value->images) > 4) {?>
                            <div class="swiper-scrollbar"></div>
                        <?php }?>
                    </div>
                    <?php }?>
                <?php } else { ?>
                    <div class="product-page__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, false);
?>
                    </div>
                <?php }?>
            </div>
        </div>

        <div class="block product-page__details f_col f_col-lg-5 f_col-xl-5">
            <div class="block--border boxed--stretch details_boxed">
                <div class="details_boxed__item details_boxed__item--one">
                                        <div class="d-flex justify-content-between align-items-start">
                        <div class="details_boxed__rating">
                            <div id="product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="product__rating fn_rating" data-rating_post_url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'ajax_product_rating'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value->rating > 0) {?> itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"<?php }?>>
                                <span class="rating_starOff">
                                    <span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['product']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
                                </span>
                                                                <?php if ($_smarty_tpl->tpl_vars['product']->value->rating > 0) {?>
                                <span class="rating_text">( <span itemprop="reviewCount"><?php echo sprintf("%.0f",$_smarty_tpl->tpl_vars['product']->value->votes);?>
</span> )</span>
                                <span class="rating_text hidden">( <span itemprop="ratingValue"><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
</span> )</span>
                                                                <span class="rating_text hidden" itemprop="bestRating" style="display:none;">5</span>
                                <?php } else { ?>
                                <span class="rating_text hidden">(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['product']->value->rating);?>
)</span>
                                <?php }?>
                            </div>
                        </div>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value)) {?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['brand']->value->image)) {?>
                                <div class="details_boxed__brand clearfix">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brand",'url'=>$_smarty_tpl->tpl_vars['brand']->value->url),$_smarty_tpl ) );?>
">
                                        <img class="brand_img" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value->image,120,65,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="hidden" itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
                                            <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        </span>
                                    </a>
                                </div>
                            <?php } else { ?>
                                <div class="details_boxed__no_brand clearfix">
                                    <span class="details_boxed__title" data-language="product_brand_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_brand_name;?>
</span>
                                    <a class="theme_link--color" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brand",'url'=>$_smarty_tpl->tpl_vars['brand']->value->url),$_smarty_tpl ) );?>
">
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <span class="hidden" itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
                                            <meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        </span>
                                    </a>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>

                                        <div class="details_boxed__anchor_comments">
                        <a href="#comments" class="fn_anchor_comments d-inline-flex align-items-center anchor_comments__link">
                            <?php if (count($_smarty_tpl->tpl_vars['comments']->value)) {?>
                                <?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>

                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( count($_smarty_tpl->tpl_vars['comments']->value),$_smarty_tpl->tpl_vars['lang']->value->product_anchor_comment_plural1,$_smarty_tpl->tpl_vars['lang']->value->product_anchor_comment_plural2,$_smarty_tpl->tpl_vars['lang']->value->product_anchor_comment_plural3 ));?>

                            <?php } else { ?>
                                <span data-language="product_anchor_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_anchor_comment;?>
</span>
                            <?php }?>
                        </a>
                    </div>

                                        <div class="details_boxed__available">
                        <div class="available__no_stock d-flex align-items-center icon icon-highlight-off fn_not_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock > 0) {?> hidden-xs-up<?php }?>" data-language="product_out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_out_of_stock;?>
</div>
                        <div class="available__in_stock d-flex align-items-center icon icon-check-circle-outline fn_in_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock < 1) {?> hidden-xs-up<?php }?>" data-language="product_in_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_in_stock;?>
</div>
                    </div>
                </div>

                <div class="details_boxed__item">
                    <form class="fn_variants" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"cart"),$_smarty_tpl ) );?>
">

                                                <div class="details_boxed__select">
                            <div class="details_boxed__title <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants) < 2) {?> hidden<?php }?>" data-language="product_variant"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_variant;?>
:</div>
                            <select name="variant" class="fn_variant variant_select <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants) < 2) {?> hidden <?php } else { ?>fn_select2<?php }?>">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->variants, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                    <option<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->id == $_smarty_tpl->tpl_vars['v']->value->id) {?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value->price ));?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price > 0) {?> data-cprice="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value->compare_price ));?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price > $_smarty_tpl->tpl_vars['v']->value->price && $_smarty_tpl->tpl_vars['v']->value->price > 0) {?> data-discount="<?php echo round((($_smarty_tpl->tpl_vars['v']->value->price-$_smarty_tpl->tpl_vars['v']->value->compare_price)/$_smarty_tpl->tpl_vars['v']->value->compare_price)*100,2);?>
&nbsp;%"<?php }
}
if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['v']->value->units) {?>data-units="<?php echo $_smarty_tpl->tpl_vars['v']->value->units;?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->name, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>

                        <div class="details_boxed__offer" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                        <span class="hidden">
                                <link itemprop="url" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['product']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
" />
                                <time itemprop="priceValidUntil" datetime="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->created,'Ymd' ));?>
"></time>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock > 0) {?>
                                <link itemprop="availability" href="https://schema.org/InStock" />
                                <?php } else { ?>
                                <link itemprop="availability" href="http://schema.org/OutOfStock" />
                                <?php }?>
                                <link itemprop="itemCondition" href="https://schema.org/NewCondition" />
                                <span itemprop="seller" itemscope itemtype="http://schema.org/Organization">
                                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
</span></span>
                            </span>

                            <div class="d-flex flex-wrap align-items-center details_boxed__price_amount">
                                <div class="d-flex align-items-center details_boxed__prices">
                                                                        <div class="d-flex align-items-center details_boxed__old_price <?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden-xs-up<?php }?>">
                                        <span class="fn_old_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->compare_price ));?>
</span>
                                        <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                                                        <div class="d-flex align-items-center details_boxed__price <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> price--red<?php }?>">
                                        <span class="fn_price" itemprop="price" content="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->price,null,false ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->price ));?>
</span>
                                        <span class="currency" itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->code, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>

                                    <div class="fn_discount_label details_boxed_pct<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > $_smarty_tpl->tpl_vars['product']->value->variant->price) {
} else { ?> hidden-xs-up<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > $_smarty_tpl->tpl_vars['product']->value->variant->price) {?>
                                        <?php echo round((($_smarty_tpl->tpl_vars['product']->value->variant->price-$_smarty_tpl->tpl_vars['product']->value->variant->compare_price)/$_smarty_tpl->tpl_vars['product']->value->variant->compare_price)*100,2);?>
&nbsp;%
                                        <?php }?>
                                    </div>
                                </div>

                                                                <div class="details_boxed__amount">
                                    <div class="fn_is_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock < 1) {?> hidden<?php }?>">
                                                                                <div class="fn_product_amount  amount">
                                            <span class="fn_minus amount__minus">&minus;</span>
                                            <input class="amount__input" type="text" name="amount" value="1" data-max="<?php echo $_smarty_tpl->tpl_vars['product']->value->variant->stock;?>
">
                                            <span class="fn_plus amount__plus">&plus;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center details_boxed__buttons">
                                <?php if (!$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>
                                                                <p class="fn_not_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock > 0) {?> hidden-xs-up<?php }?>">
                                    <span class="product-page__button product-page__out_stock" data-language="product_out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_out_of_stock;?>
</span>
                                </p>
                                <?php } else { ?>
                                                                <div class="fn_is_preorder <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock > 0) {?> hidden-xs-up<?php }?>">
                                    <button class="product-page__button product-page__button--preloader" type="submit" data-language="product_pre_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</button>
                                </div>
                                <?php }?>

                                                                <div class="fn_is_stock <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock < 1) {?> hidden-xs-up<?php }?>">
                                    <button class=" product-page__button button--blick" type="submit" data-language="product_add_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_cart;?>
</button>
                                </div>

                                 <div class="d-flex align-items-center details_boxed__other">

                                     <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fast_order_btn'][0], array( array('product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


                                                                        <?php if (is_array($_smarty_tpl->tpl_vars['wishlist']->value->ids) && in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wishlist']->value->ids)) {?>
                                        <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist product-page__wishlist selected" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-language="product_remove_favorite">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist product-page__wishlist" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_remove_favorite;?>
" data-language="product_add_favorite">
                                            <i class="fa fa-heart-o"></i>
                                        </a>
                                    <?php }?>

                                                                        <?php if (is_array($_smarty_tpl->tpl_vars['comparison']->value->ids) && in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
                                        <a class="fn_comparison product-page__compare selected" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-language="product_remove_comparison">
                                            <i class="fa fa-balance-scale"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a class="fn_comparison product-page__compare" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->product_add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
" data-language="product_add_comparison">
                                            <i class="fa fa-balance-scale"></i>
                                        </a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="fn_accordion accordion details_boxed__item details_boxed__item--inner">
                    <div class="details_boxed__item">
                                                <div class="accordion__item visible">
                            <div class="accordion__title active">
                                <div class="accordion__header d-flex justify-content-between align-items-center">
                                    <span data-language="product_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_delivery;?>
</span>
                                    <span class="accordion__arrow fa fa-chevron-down"></span>
                                </div>
                            </div>
                            <div class="accordion__content" style="display: block;">
                                <div class="">
                                    <?php echo $_smarty_tpl->tpl_vars['settings']->value->product_deliveries;?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details_boxed__item">
                                                <div class="accordion__item">
                            <div class="accordion__title">
                                <div class="accordion__header d-flex justify-content-between align-items-center">
                                    <span data-language="product_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_payment;?>
</span>
                                    <span class="accordion__arrow fa fa-chevron-down"></span>
                                </div>
                            </div>
                            <div class="accordion__content">
                                <div class="">
                                    <?php echo $_smarty_tpl->tpl_vars['settings']->value->product_payments;?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                                <div class="details_boxed__item details_boxed__share">
                    <div class="share">
                        <div class="share__text">
                            <span data-language="product_share"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_share;?>
:</span>
                        </div>
                        <div class="fn_share jssocials share__icons"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="fn_products_tab" class="product-page__tabs">
        <div class="block--border tabs">
            <div class="tabs__navigation hidden-sm-down">
                <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                <a class="tabs__link" href="#description">
                    <span data-language="product_description"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_description;?>
</span>
                </a>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                <a class="tabs__link" href="#features">
                    <span data-language="product_features"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_features;?>
</span>
                </a>
                <?php }?>

                <a id="fn_tab_comments" class="tabs__link" href="#comments" >
                    <span data-language="product_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_comments;?>
</span>
                </a>
            </div>

            <div class="tabs__content">
                <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                    <div id="description" class="tab product_description" itemprop="description">
                        <div class="fn_switch mobile_tab_navigation active hidden-md-up">
                            <div class="mobile_tab_title">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"description_icon"), 0, true);
?>
                                <span data-language="product_description"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_description;?>
</span>
                            </div>
                        </div>
                        <div class="mobile_tab__content">
                            <div class="block__description block__description--style">
                                <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

                            </div>
                         </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->features) {?>
                    <div id="features" class="tab">
                        <div class="fn_switch mobile_tab_navigation active hidden-md-up">
                            <div class="mobile_tab_title">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"features_icon"), 0, true);
?>
                                <span data-language="product_features"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_features;?>
</span>
                            </div>
                        </div>
                        <ul class="d-sm-flex flex-sm-wrap features mobile_tab__content">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->features, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <li class="f_col-md-6 features__item">
                                <div class="d-flex justify-content-start features__wrap">
                                    <div class="features__name"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
:</span><?php if ($_smarty_tpl->tpl_vars['f']->value->description) {?><span title="<?php echo $_smarty_tpl->tpl_vars['f']->value->description;?>
" style="margin-left: 10px; cursor: pointer; background: lightgreen; padding: 5px; border-radius: 5px;">i</span><?php }?></div>
                                    <div class="features__value">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value->values, 'value', true);
$_smarty_tpl->tpl_vars['value']->iteration = 0;
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['value']->iteration++;
$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
$__foreach_value_4_saved = $_smarty_tpl->tpl_vars['value'];
?>
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value && $_smarty_tpl->tpl_vars['f']->value->url_in_product && $_smarty_tpl->tpl_vars['f']->value->in_filter && $_smarty_tpl->tpl_vars['value']->value->to_index) {?>
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['category']->value->url),$_smarty_tpl ) );
if (!$_smarty_tpl->tpl_vars['settings']->value->category_routes_template_slash_end) {?>/<?php }
echo $_smarty_tpl->tpl_vars['f']->value->url;?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value->translit;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</a><?php if (!$_smarty_tpl->tpl_vars['value']->last) {?>,<?php }?>                                        <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value->value, ENT_QUOTES, 'UTF-8', true);
if (!$_smarty_tpl->tpl_vars['value']->last) {?>,<?php }?>
                                        <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>

                                <div id="comments" class="tab">
                    <div class="fn_switch mobile_tab_navigation active hidden-md-up">
                        <div class="mobile_tab_title">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, true);
?>
                            <span data-language="product_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_comments;?>
</span>
                        </div>
                    </div>
                    <div class="mobile_tab__content comment-wrap f_row flex-lg-row align-items-md-start">
                        <div class="comment f_col-lg-7">
                            <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                                
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['comments']->value), true);?>

                            <?php } else { ?>
                                <div class="boxed boxed--middle boxed--notify">
                                    <span data-language="product_no_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_no_comments;?>
</span>
                                </div>
                            <?php }?>
                        </div>

                        <div class="form_wrap f_col-lg-5">
                                                        <form id="captcha_id" class="form form--boxed fn_validate_product" method="post">

                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v3") {?>
                                    <input type="hidden" class="fn_recaptcha_token fn_recaptchav3" name="recaptcha_token" />
                                <?php }?>

                                <div class="form__header">
                                    <div class="form__title">
                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, true);
?>
                                        <span data-language="product_write_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_write_comment;?>
</span>
                                    </div>

                                                                        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                    <div class="message_error">
                                        <?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                                        <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                        <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_comment') {?>
                                        <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                        <?php }?>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="form__body">
                                                                        <div class="form__group">
                                        <input class="form__input form__placeholder--focus" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['name'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->name) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" />
                                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                                    </div>

                                                                        <div class="form__group">
                                        <input class="form__input form__placeholder--focus" type="text" name="email" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['email']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['email'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->email) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);
}?>" data-language="form_email" />
                                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
</span>
                                    </div>
                                    
                                                                        <div class="form__group">
                                        <textarea class="form__textarea form__placeholder--focus" rows="3" name="text" ><?php echo $_smarty_tpl->tpl_vars['request_data']->value['text'];?>
</textarea>
                                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
*</span>
                                    </div>
                                </div>
                                <div class="form__footer">
                                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_comment) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                                            <div class="captcha">
                                                <div id="recaptcha1"></div>
                                            </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_comment"),$_smarty_tpl ) );?>

                                            <div class="captcha">
                                                <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_comment']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_comment']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                <div class="form__captcha">
                                                    <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" />
                                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                                </div>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                    
                                    <input type="hidden" name="comment" value="1">
                                                                        <input class="form__button g-recaptcha" type="submit" name="comment" data-language="form_send" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php if ($_smarty_tpl->tpl_vars['prev_product']->value || $_smarty_tpl->tpl_vars['next_product']->value) {?>
        <nav>
            <ol class="pager row">
                <li class="col-xs-12<?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?> col-sm-6<?php } else { ?> col-sm-12<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['prev_product']->value) {?>
                    <a class="d-flex align-items-center justify-content-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['prev_product']->value->url),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_up_icon"), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></a>
                    <?php }?>
                </li>
                <li class="col-xs-12 col-sm-6">
                    <?php if ($_smarty_tpl->tpl_vars['next_product']->value) {?>
                    <a class="d-flex align-items-center justify-content-center" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['next_product']->value->url),$_smarty_tpl ) );?>
">
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next_product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_up_icon"), 0, true);
?>
                    </a>
                    <?php }?>
                </li>
            </ol>
        </nav>
    <?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
    <div class="block block--boxed block--border">
        <div class="block__header">
            <div class="block__title">
                <span data-language="product_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_recommended_products;?>
</span>
            </div>
        </div>

        <div class="block__body">
            <div class="products_list row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                <div class="product_item col-xs-6 col-sm-4 col-md-4 col-xl-25">
                    <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['p']->value), 0, true);
?>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['related_posts']->value) {?>
    <div class="block block--boxed block--border">
        <div class="block__header">
            <div class="block__title">
                <span data-language="product_related_post"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_related_post;?>
</span>
            </div>
        </div>
        <div class="block__body article">
            <div class="fn_articles_slide article_list row no_gutters">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_posts']->value, 'r_p');
$_smarty_tpl->tpl_vars['r_p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r_p']->value) {
$_smarty_tpl->tpl_vars['r_p']->do_else = false;
?>
                    <div class="article_item no_hover col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <?php $_smarty_tpl->_subTemplateRender('file:post_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['r_p']->value), 0, true);
?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
<?php }?>

<?php }
/* smarty_template_function_comments_tree_1421440960644de1351e9886_26917729 */
if (!function_exists('smarty_template_function_comments_tree_1421440960644de1351e9886_26917729')) {
function smarty_template_function_comments_tree_1421440960644de1351e9886_26917729(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                    <div class="comment__item <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?> admin_note<?php }?>">
                                                                        <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>
                                                                        <div class="comment__inner"> 
                                        <div class="comment__icon">
                                            <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-admin_icon"), 0, true);
?> 
                                            <?php } else { ?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-user_icon"), 0, true);
?>
                                            <?php }?>
                                        </div>
                                        <div class="comment__boxed">
                                            <div class="d-flex flex-wrap align-items-center justify-content-between comment__header">
                                                                                                <div class="d-flex flex-wrap align-items-center comment__author">
                                                    <span class="comment__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                                        <span class="comment__status" data-language="post_comment_status">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                                    <?php }?>
                                                </div>
                                                                                                <div class="comment__date">
                                                    <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
</span>
                                                </div>
                                            </div>
    
                                                                                        <div class="comment__body">
                                                <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value->children)) {?>
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['comment']->value->children,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                    <?php }?>
                                    </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}}
/*/ smarty_template_function_comments_tree_1421440960644de1351e9886_26917729 */
}
