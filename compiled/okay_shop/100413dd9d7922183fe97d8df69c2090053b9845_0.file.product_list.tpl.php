<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:26:14
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096dc6849c39_12229066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100413dd9d7922183fe97d8df69c2090053b9845' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/product_list.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_67096dc6849c39_12229066 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Product preview -->
<div class="product_preview fn_product">
    <div class="fn_transfer clearfix">
        <div class="product_preview__center">
            <div class="d-flex product_preview__image">
                <a class="d-flex align-items-center justify-content-center" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'Comparison') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,800,600,'w' ));
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'product','url'=>$_smarty_tpl->tpl_vars['product']->value->url),$_smarty_tpl ) );
}?>" <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'Comparison') {?>data-fancybox="group" data-caption="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value->image->filename) {?>
                        <picture>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->increased_image_size) {?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                    <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,600,800 )) ));?>
" >
                                <?php }?>
                                <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,600,800 ));?>
">
                                <img class="fn_img preview_img lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,600,800 ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                    <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,180,150 )) ));?>
" media="(max-width: 440px)" >
                                    <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,300,150 )) ));?>
" >
                                <?php }?>
                                <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,180,150 ));?>
" media="(max-width: 440px)">
                                <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,300,150 ));?>
">
                                    
                                <img class="fn_img preview_img lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,300,150 ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <?php }?>
                        </picture>
                    <?php } else { ?>
                        <div class="fn_img product_preview__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, false);
?>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value->featured || $_smarty_tpl->tpl_vars['product']->value->special || ($_smarty_tpl->tpl_vars['product']->value->variant->price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > $_smarty_tpl->tpl_vars['product']->value->variant->price)) {?>
                    <div class="stickers">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value->featured) {?>
                        <span class="sticker sticker--hit" data-language="product_sticker_hit"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sticker_hit;?>
</span>
                        <?php }?>
                        <span class="fn_discount_label <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > $_smarty_tpl->tpl_vars['product']->value->variant->price) {
} else { ?> hidden<?php }?>">
                            <span class="sticker sticker--discount">
                                <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > 0 && $_smarty_tpl->tpl_vars['product']->value->variant->compare_price > $_smarty_tpl->tpl_vars['product']->value->variant->price) {?>
                                <?php echo round((($_smarty_tpl->tpl_vars['product']->value->variant->price-$_smarty_tpl->tpl_vars['product']->value->variant->compare_price)/$_smarty_tpl->tpl_vars['product']->value->variant->compare_price)*100,2);?>
&nbsp;%
                                <?php }?>
                            </span>
                        </span>
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
                </a>

                                <?php if ($_smarty_tpl->tpl_vars['controller']->value != "WishListController") {?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['wishlist']->value->ids) && in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['wishlist']->value->ids)) {?>
                        <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist wishlist_button fa fa-heart selected" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
"></a>
                    <?php } else { ?>
                        <a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="fn_wishlist fa fa-heart-o wishlist_button" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_favorite;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
"></a>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['controller']->value == "WishListController") {?>
                    <a href="#" class="fn_wishlist selected fa fa-times wishlist_button__remove" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_favorite;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"></a>
                <?php }?>

             </div>
            <div class="product_preview__name">
                                <a class="product_preview__name_link" data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['product']->value->url),$_smarty_tpl ) );?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="product_preview__sku <?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->sku) {?> hidden<?php }?>">
                        <span data-language="product_sku"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_sku;?>
:</span>
                        <span class="fn_sku sku__nubmer"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->variant->sku, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </div>
                </a>
            </div>
            <div class="d-flex align-items-center product_preview__prices">
                <div class="old_price <?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden-xs-up<?php }?>">
                    <span class="fn_old_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->compare_price ));?>
</span> <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </div>
                <div class="price <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> price--red<?php }?>">
                    <span class="fn_price"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->variant->price ));?>
</span> <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </div>
            </div>
        </div>
        <div class="product_preview__bottom">
            <form class="fn_variants preview_form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"cart"),$_smarty_tpl ) );?>
">
                <div class="d-flex align-items-center justify-content-between product_preview__buttons">
                    <?php if (!$_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>
                                                        <p class="fn_not_preorder d-flex align-items-center product_preview__out_stock <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock > 0) {?> hidden-xs-up<?php }?>">
                                <span data-language="out_of_stock"><?php echo $_smarty_tpl->tpl_vars['lang']->value->out_of_stock;?>
</span>
                            </p>
                    <?php } else { ?>
                                                <button class="product_preview__button product_preview__button--pre_order fn_is_preorder<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock > 0) {?> hidden-xs-up<?php }?>" type="submit" data-language="pre_order">
                            <span class="product_preview__button_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->pre_order;?>
</span>
                        </button>
                    <?php }?>
                                        <button class="product_preview__button product_preview__button--buy button--blick fa fa-shopping-cart fn_is_stock<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock < 1) {?> hidden-xs-up<?php }?>" type="submit">
                        <span class="product_preview__button_text" data-language="add_to_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->add_to_cart;?>
</span>
                    </button>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fast_order_btn'][0], array( array('product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                        
                                        <?php if ($_smarty_tpl->tpl_vars['controller']->value != "ComparisonController") {?>
                        <?php if (is_array($_smarty_tpl->tpl_vars['comparison']->value->ids) && in_array($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['comparison']->value->ids)) {?>
                            <a class="fn_comparison comparison_button fa fa-balance-scale selected" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
"></a>
                        <?php } else { ?>
                            <a class="fn_comparison fa fa-balance-scale comparison_button" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->add_comparison;?>
" data-result-text="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
"></a>
                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['controller']->value == "ComparisonController") {?>
                        <a href="#" class="fn_comparison selected fa fa-times comparison_button remove_link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->remove_comparison;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"></a>
                    <?php }?>

                </div>
                                <div class="product_preview__variants <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants) == 1) {?>hidden<?php }?>">
                    <select name="variant" class="fn_variant  variant_select <?php if (count($_smarty_tpl->tpl_vars['product']->value->variants) == 1) {?>hidden<?php } else { ?>fn_select2<?php }?>">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value->variants, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value->price ));?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price > 0) {?> data-cprice="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value->compare_price ));?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price > $_smarty_tpl->tpl_vars['v']->value->price && $_smarty_tpl->tpl_vars['v']->value->price > 0) {?> data-discount="<?php echo round((($_smarty_tpl->tpl_vars['v']->value->price-$_smarty_tpl->tpl_vars['v']->value->compare_price)/$_smarty_tpl->tpl_vars['v']->value->compare_price)*100,2);?>
&nbsp;%"<?php }
}
if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value->sku, ENT_QUOTES, 'UTF-8', true);?>
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
            </form>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->annotation && $_smarty_tpl->tpl_vars['controller']->value != "MainController") {?>
                <div class="product_preview__annotation">
                    <?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>

                </div>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
