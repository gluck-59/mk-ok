<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:15:14
  from '/Users/gluck/Sites/okaycms/backend/design/html/settings_catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644deb527a8e43_97133105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f336f9d04e296c6d1f7614c338704184715380ff' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/backend/design/html/settings_catalog.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 20,
    'file:learning_hints.tpl' => 1,
  ),
),false)) {
function content_644deb527a8e43_97133105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog ,false ,32);?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value && empty($_smarty_tpl->tpl_vars['message_error']->value)) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--success">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
                <?php if ($_GET['return']) {?>
                <a class="alert__button" href="<?php echo $_GET['return'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--error">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'truncate_table_password_failed') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_password_failed, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_catalog, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="fn_step-1 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_products_on_page, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <input name="products_num" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->products_num, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="fn_step-2 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_products_max, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="max_order_amount" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_order_amount, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="fn_step-3 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_posts_on_page, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="posts_num" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->posts_num, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="fn_step-4 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_products_comparcion, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="comparison_count" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->comparison_count, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="fn_step-5 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_units, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <input name="units" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->units, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="fn_step-6 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_cents, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <select name="decimals_point" class="selectpicker form-control">
                                    <option value='.' <?php if ($_smarty_tpl->tpl_vars['settings']->value->decimals_point == '.') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_dot, ENT_QUOTES, 'UTF-8', true);?>
 12.45 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value=',' <?php if ($_smarty_tpl->tpl_vars['settings']->value->decimals_point == ',') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_comma, ENT_QUOTES, 'UTF-8', true);?>
 12,45 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <div class="fn_step-7 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_thousands, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                               <select name="thousands_separator" class="selectpicker form-control">
                                    <option value='' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator == '') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_without, ENT_QUOTES, 'UTF-8', true);?>
 1245678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value=' ' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator == ' ') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_space, ENT_QUOTES, 'UTF-8', true);?>
 1 245 678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value=',' <?php if ($_smarty_tpl->tpl_vars['settings']->value->thousands_separator == ',') {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_comma, ENT_QUOTES, 'UTF-8', true);?>
 1,245,678 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <div class="fn_step-8 col-lg-4 col-md-6">
                            <div class="heading_label">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_not_in_stock, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_catalog_not_in_stock, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="mb-1">
                               <select name="missing_products" class="selectpicker form-control">
                                    <option value='<?php echo (defined('MISSING_PRODUCTS_DEFAULT') ? constant('MISSING_PRODUCTS_DEFAULT') : null);?>
' <?php if ($_smarty_tpl->tpl_vars['settings']->value->missing_products == (defined('MISSING_PRODUCTS_DEFAULT') ? constant('MISSING_PRODUCTS_DEFAULT') : null)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_missing_products_default, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value='<?php echo (defined('MISSING_PRODUCTS_MOVE_END') ? constant('MISSING_PRODUCTS_MOVE_END') : null);?>
' <?php if ($_smarty_tpl->tpl_vars['settings']->value->missing_products == (defined('MISSING_PRODUCTS_MOVE_END') ? constant('MISSING_PRODUCTS_MOVE_END') : null)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_missing_products_move_end, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value='<?php echo (defined('MISSING_PRODUCTS_HIDE') ? constant('MISSING_PRODUCTS_HIDE') : null);?>
' <?php if ($_smarty_tpl->tpl_vars['settings']->value->missing_products == (defined('MISSING_PRODUCTS_HIDE') ? constant('MISSING_PRODUCTS_HIDE') : null)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_missing_products_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="fn_step-9">
                                <div class="heading_label boxes_inline"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_preorder_not_in_stock, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="is_preorder" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->is_preorder) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_catalog_general"),$_smarty_tpl ) );?>

                    </div>

                    <div class="row">
                        <div class="fn_step-8 col-lg-4 col-md-6">
                            <div class="heading_label">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_features_max_count_products, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_catalog_features_max_count_products, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="mb-1">
                                <input name="features_max_count_products" class="form-control" type="number" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->features_max_count_products, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="fn_step-8 col-lg-4 col-md-6">
                            <div class="heading_label">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_features_cache_ttl, ENT_QUOTES, 'UTF-8', true);?>
 <span style="color: red">Beta</span>
                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_catalog_features_cache_ttl, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="mb-1">
                                <input name="features_cache_ttl" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->features_cache_ttl, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="fn_step-9">
                                <div class="heading_label boxes_inline">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_features_cache_deferred, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_catalog_features_cache_deferred, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="deferred_load_features" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->deferred_load_features) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="fn_step-10">
                                <div class="heading_label boxes_inline">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->allow_to_visible_empty_categories, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->allow_to_visible_empty_categories_notice, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="show_empty_categories" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->show_empty_categories) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="fn_step-10">
                                <div class="heading_label boxes_inline">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_hide_single_filters, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_hide_single_filters_notice, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="hide_single_filters" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->hide_single_filters) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="fn_step-10">
                                <div class="heading_label boxes_inline">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_enable_webp, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_enable_webp_notice, ENT_QUOTES, 'UTF-8', true);?>
"> 
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="support_webp" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="fn_step-10">
                                <div class="heading_label boxes_inline">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_hide_equal_compare_price, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_hide_equal_compare_price_notice, ENT_QUOTES, 'UTF-8', true);?>
"> 
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="hide_equal_compare_price" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->hide_equal_compare_price) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 mt-2">
                            <div class="fn_step-10">
                                <div class="heading_label boxes_inline">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_increased_image_size, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_increased_image_size_notice, ENT_QUOTES, 'UTF-8', true);?>
"> 
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </div>
                                <div class="boxes_inline">
                                    <div class="okay_switch clearfix">
                                        <label class="switch switch-default">
                                            <input class="switch-input" name="increased_image_size" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->increased_image_size) {?>checked=""<?php }?>/>
                                            <span class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_catalog_general_row_2"),$_smarty_tpl ) );?>

                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right" type="submit" name="save" value="1">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_catalog_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="fn_step-11 boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->title_truncate_table, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="heading_label">&nbsp;</div>
                            <div class="mb-1">
                                <button type="button" class="btn btn_small btn_blue fn_truncate_table">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_button, ENT_QUOTES, 'UTF-8', true);?>
*</span>
                                </button>
                            <div class="mt-1">* <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_catalog_data, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            </div>
                        </div>
                        <div class="fn_truncate_table_confirm" style="display: none;">
                            <div class="col-lg-4 col-md-6">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_password, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="mb-1">
                                    <input name="truncate_table_password" class="form-control" type="password" value="" disabled />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="heading_label">&nbsp;</div>
                                <button type="submit" class="btn btn_small btn-danger" name="truncate_table_confirm" value="">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_confirm, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="heading_label"></div>
                            <div class="mb-1">
                                <button type="button" class="btn btn_small btn_blue fn_truncate_table_entity" name="truncate_table_confirm" value="category" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
" data-default="category">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_button_clear, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="heading_label"></div>
                            <div class="mb-1">
                                <button type="button" class="btn btn_small btn_blue fn_truncate_table_entity" name="truncate_table_confirm" value="product" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_products, ENT_QUOTES, 'UTF-8', true);?>
" data-default="product">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_button_clear, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_products, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="heading_label"></div>
                            <div class="mb-1">
                                <button type="button" class="btn btn_small btn_blue fn_truncate_table_entity" name="truncate_table_confirm" value="feature" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_features, ENT_QUOTES, 'UTF-8', true);?>
" data-default="feature">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_button_clear, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_features, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="heading_label"></div>
                            <div class="mb-1">
                                <button type="button" class="btn btn_small btn_blue fn_truncate_table_entity" name="truncate_table_confirm" value="brand" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brands_brands, ENT_QUOTES, 'UTF-8', true);?>
" data-default="brand">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_button_clear, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brands_brands, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="heading_label"></div>
                            <div class="mb-1">
                                <button type="button" class="btn btn_small btn_blue fn_truncate_table_entity" name="truncate_table_confirm" value="blog" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_blog, ENT_QUOTES, 'UTF-8', true);?>
" data-default="blog">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_button_clear, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->blog_blog, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </button>
                            </div>
                        </div>

                        <div class="fn_truncate_table_confirm_entity" style="display: none;">
                            <div class="col-lg-4 col-md-6">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_password, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="mb-1">
                                    <input name="truncate_table_password_entity" class="form-control" type="password" value="" disabled />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="heading_label">&nbsp;</div>
                                <button type="submit" class="btn btn_small btn-danger" name="truncate_table_confirm_entity" value="">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_table_confirm, ENT_QUOTES, 'UTF-8', true);?>
: <span class="fn_name_entity"></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1">* <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->truncate_catalog_entity_data, ENT_QUOTES, 'UTF-8', true);?>
</div>

                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_catalog_truncate"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="fn_step-12 boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_watermark, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="boxed fn_image_block">
                                <?php if ($_smarty_tpl->tpl_vars['config']->value->watermark_file && is_file($_smarty_tpl->tpl_vars['config']->value->watermark_file)) {?>
                                    <div class="fn_parent_image">
                                        <input class="fn_accept_delete" name="delete_watermark" value="" type="hidden" />
                                        <div class="banner_image fn_image_wrapper text-xs-center">
                                            <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                            <img class="watermark_image" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->watermark_file, ENT_QUOTES, 'UTF-8', true);?>
" alt="" />
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="fn_parent_image"></div>
                                <?php }?>

                                <div class="fn_upload_image dropzone_block_image text-xs-center <?php if ($_smarty_tpl->tpl_vars['config']->value->watermark_file && is_file($_smarty_tpl->tpl_vars['config']->value->watermark_file)) {?> hidden<?php }?>">
                                    <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                    <input class="dropzone_image" name="watermark_file" type="file" accept="image/jpeg,image/png,image/gif" />
                                </div>
                                <div class="banner_image fn_image_wrapper fn_new_image text-xs-center">
                                    <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                    <img class="watermark_image" src="" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-xs-12 fn_range_wrap">
                                    <div class="heading_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_watermark_position, ENT_QUOTES, 'UTF-8', true);?>

                                        <span class="font-weight-bold fn_show_range"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                    <div class="raiting_boxed">
                                        <input class="fn_range_value" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
" name="watermark_offset_x" />
                                        <input class="fn_rating range_input" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_x, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <div class="raiting_range_number">
                                            <span class="float-xs-left">1</span>
                                            <span class="float-xs-right">100</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 fn_range_wrap">
                                    <div class="heading_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_catalog_watermark_position_y, ENT_QUOTES, 'UTF-8', true);?>

                                        <span class="font-weight-bold fn_show_range"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                    <div class="raiting_boxed">
                                        <input class="fn_range_value" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
" name="watermark_offset_y" />
                                        <input class="fn_rating range_input" type="range" min="0" max="100" step="1" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->watermark_offset_y, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <div class="raiting_range_number">
                                            <span class="float-xs-left">1</span>
                                            <span class="float-xs-right">100</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right" type="submit" name="save" value="1">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_catalog_watermark"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:learning_hints.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hintId'=>'hint_settings_catalog'), 0, false);
?>

<?php echo '<script'; ?>
>
    $(document).on("click", ".fn_truncate_table", function () {
        $('.fn_truncate_table_confirm').fadeIn(500);
        $('.fn_truncate_table_confirm_entity').fadeOut(500);
        $('[name="truncate_table_password"]').prop('disabled', false);
        $('[name="truncate_table_confirm"]').val('1');
    });
    $(document).on("click", ".fn_truncate_table_entity", function () {
        $('.fn_truncate_table_confirm_entity').fadeIn(500);
        $('[name="truncate_table_password_entity"]').prop('disabled', false);
        $('.fn_truncate_table_confirm').fadeOut(500);
        if(typeof ($(this).data('default')) != 'undefined') {
            $('.fn_name_entity').html($(this).data('name'));
            $('[name="truncate_table_confirm_entity"]').val($(this).data('default'));
        }
    });
    $(document).on("input", ".fn_rating", function () {
        $(this).closest(".fn_range_wrap").find(".fn_show_range").html($(this).val());
        $(this).closest(".fn_range_wrap").find(".fn_range_value").val($(this).val());
    });
<?php echo '</script'; ?>
>
<?php }
}
