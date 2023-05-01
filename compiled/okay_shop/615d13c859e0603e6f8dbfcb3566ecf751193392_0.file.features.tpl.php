<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:47:41
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fdf1d5d2ff4_84088780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '615d13c859e0603e6f8dbfcb3566ecf751193392' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/features.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_644fdf1d5d2ff4_84088780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_tree_sidebar' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/compiled/okay_shop/615d13c859e0603e6f8dbfcb3566ecf751193392_0.file.features.tpl.php',
    'uid' => '615d13c859e0603e6f8dbfcb3566ecf751193392',
    'call_name' => 'smarty_template_function_categories_tree_sidebar_1113310573644fdf1d519bf5_35804668',
  ),
));
if ($_smarty_tpl->tpl_vars['catalog_categories']->value) {?>
    <div class="sidebar__boxed hidden-md-down">
        <div class="filters filters_catalog">
            <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                <span data-language="features_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_catalog;?>
</span>
                <span class="d-flex align-items-center filter__name_arrow fa fa-chevron-down"></span>
            </div>
            <div class="filter__group">
                
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree_sidebar', array('categories'=>$_smarty_tpl->tpl_vars['catalog_categories']->value,'level'=>1), true);?>

            </div>
        </div>
    </div>
<?php }?>

<?php if (($_smarty_tpl->tpl_vars['catalog_brands']->value || ($_smarty_tpl->tpl_vars['catalog_prices']->value->min != $_smarty_tpl->tpl_vars['catalog_prices']->value->max) || $_smarty_tpl->tpl_vars['catalog_features']->value)) {?>
    <div class="sidebar__boxed">
        <div class="filters">
                        <?php if ($_smarty_tpl->tpl_vars['catalog_prices']->value->min != '' && $_smarty_tpl->tpl_vars['catalog_prices']->value->max != '' && $_smarty_tpl->tpl_vars['catalog_prices']->value->min != $_smarty_tpl->tpl_vars['catalog_prices']->value->max) {?>
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_price;?>
</span>
                    <span class="d-flex align-items-center filter__name_arrow fa fa-chevron-down"></span>
                </div>

                <div class="filter__group">
                                        <div class="d-flex align-items-center justify-content-between price_range">
                        <div class="d-flex align-items-center price_label">
                            <input class="min_input" id="fn_slider_min" aria-label="<?php echo $_smarty_tpl->tpl_vars['catalog_prices']->value->min;?>
" name="p[min]" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['selected_catalog_prices']->value['min'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['catalog_prices']->value->min : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['catalog_prices']->value->min;?>
" type="text">
                        </div>
                        <div class="separator">-</div>
                        <div class="d-flex align-items-center price_label max_price">
                            <input class="max_input" id="fn_slider_max" name="p[max]" aria-label="<?php echo $_smarty_tpl->tpl_vars['catalog_prices']->value->max;?>
" value="<?php echo htmlspecialchars(((($tmp = @$_smarty_tpl->tpl_vars['selected_catalog_prices']->value['max'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['catalog_prices']->value->max : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['catalog_prices']->value->max;?>
" type="text">
                        </div>
                        <div class="price_currency">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                    </div>
                                        <div id="fn_slider_price" data-href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('price'=>array('min'=>'min','max'=>'max'),'page'=>null,'sort'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );?>
"></div>
                </div>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['catalog_other_filters']->value) {?>
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_other_filter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_other_filter;?>
</span>
                    <span class="d-flex align-items-center filter__name_arrow icon fa fa-chevron-down"></span>
                </div>
                <div class="filter__group">
                                        <div class="filter__item">
                        <form method="post">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('filter'=>null,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable4);?>
                            <button type="submit" name="prg_seo_hide" class="filter__link <?php if (!$_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <span class="filter__checkbox">
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                    </svg>
                                </span>
                                <span class="filter__label" data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                            </button>
                        </form>
                    </div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog_other_filters']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
$__foreach_f_6_saved = $_smarty_tpl->tpl_vars['f'];
?>
                        <div class="filter__item">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('filter'=>$_smarty_tpl->tpl_vars['f']->value->url,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable5);?>
                            <?php if ($_smarty_tpl->tpl_vars['seo_hide_filter']->value || ($_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value && in_array($_smarty_tpl->tpl_vars['f']->value->url,$_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value))) {?>
                                <form method="post">
                                    <button type="submit" name="prg_seo_hide" class="filter__link<?php if ($_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value && in_array($_smarty_tpl->tpl_vars['f']->value->url,$_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value)) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="filter__checkbox">
                                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                            </svg>
                                        </span>
                                        <span class="filter__label" data-language="<?php echo $_smarty_tpl->tpl_vars['f']->value->translation;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </button>
                                </form>
                            <?php } else { ?>
                                <a class="filter__link<?php if ($_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value && in_array($_smarty_tpl->tpl_vars['f']->value->url,$_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value)) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                                    <span class="filter__checkbox">
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                        </svg>
                                    </span>
                                    <span class="filter__label" data-language="<?php echo $_smarty_tpl->tpl_vars['f']->value->translation;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            <?php }?>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['f'] = $__foreach_f_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['catalog_brands']->value) {?>
                <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                    <span data-language="features_manufacturer"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_manufacturer;?>
</span>
                    <span class="d-flex align-items-center filter__name_arrow fa fa-chevron-down"></span>
                </div>
                
                <div class="fn_view_content filter__group feature_content">
                                        <div class="filter__item">
                        <form method="post">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('brand'=>null,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable6);?>
                            <button type="submit" name="prg_seo_hide" class="filter__link <?php if (!$_smarty_tpl->tpl_vars['brand']->value->id && !$_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <span class="filter__checkbox">
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                    </svg>
                                </span>
                                <span class="filter__label" data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                            </button>
                        </form>
                    </div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog_brands']->value, 'b');
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
?>
                        <?php $_smarty_tpl->_assignInScope('b_count', $_smarty_tpl->tpl_vars['b_count']->value+1);?>
                        <div class="filter__item <?php if ($_smarty_tpl->tpl_vars['b']->value && $_smarty_tpl->tpl_vars['b_count']->value > 4) {?> <?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value)) {?>opened<?php } else { ?>closed<?php }
}?>">
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('brand'=>$_smarty_tpl->tpl_vars['b']->value->url,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable7);?>
                            <?php if ($_smarty_tpl->tpl_vars['seo_hide_filter']->value || ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value))) {?>
                                <form method="post">
                                    <button type="submit" name="prg_seo_hide" class="filter__link<?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value)) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <span class="filter__checkbox">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                            </svg>
                                        </span>
                                        <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </button>
                                </form>
                            <?php } else { ?>
                                <a class="filter__link<?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || $_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value && in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value)) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                                    <span class="filter__checkbox">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                        </svg>
                                    </span>
                                    <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            <?php }?>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['b_count']->value > 4) {?>
                        <div class="box_view_all_feature">
                            <a class="fn_view_all view_all_feature" href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                    <?php }?>
                </div>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['catalog_features']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog_features']->value, 'f', false, 'key');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
$__foreach_f_8_saved = $_smarty_tpl->tpl_vars['f'];
?>
                    <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                        <span data-feature="<?php echo $_smarty_tpl->tpl_vars['f']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <span class="d-flex align-items-center filter__name_arrow fa fa-chevron-down"></span>
                    </div>
                    <div class="fn_view_content filter__group feature_content">
                                                <div class="filter__item">
                            <form method="post">
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>null,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable8);?>
                                <button type="submit" name="prg_seo_hide" class="filter__link <?php if (!(isset($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id]))) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <span class="filter__checkbox">
                                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                        </svg>
                                    </span>
                                    <span class="filter__label" data-language="features_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_all;?>
</span>
                                </button>
                            </form>
                        </div>
                        
                                                <?php $_smarty_tpl->_assignInScope('f_count', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value->features_values, 'fv');
$_smarty_tpl->tpl_vars['fv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
$_smarty_tpl->tpl_vars['fv']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('f_count', $_smarty_tpl->tpl_vars['f_count']->value+1);?>
                            <div class="filter__item <?php if ($_smarty_tpl->tpl_vars['fv']->value && $_smarty_tpl->tpl_vars['f_count']->value > 4) {?> <?php if ($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id] && (isset($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id][$_smarty_tpl->tpl_vars['fv']->value->id]))) {?>opened<?php } else { ?>closed<?php }
}?>">
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>$_smarty_tpl->tpl_vars['fv']->value->translit,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable9);?>
                                <?php if (!$_smarty_tpl->tpl_vars['fv']->value->to_index || $_smarty_tpl->tpl_vars['seo_hide_filter']->value || ($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id] && (isset($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id][$_smarty_tpl->tpl_vars['fv']->value->id])))) {?>
                                    <form method="post">
                                        <button type="submit" name="prg_seo_hide" class="filter__link<?php if ($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id] && (isset($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id][$_smarty_tpl->tpl_vars['fv']->value->id]))) {?> checked<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <span class="filter__checkbox">
                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                                </svg>
                                            </span>
                                            <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </button>
                                    </form>
                                <?php } else { ?>
                                    <a class="filter__link<?php if ($_GET[$_smarty_tpl->tpl_vars['f']->key] && in_array($_smarty_tpl->tpl_vars['fv']->value->translit,$_GET[$_smarty_tpl->tpl_vars['f']->key],true)) {?> checked<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
">
                                        <span class="filter__checkbox">
                                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path class="checkmark-path" fill="none" d="M4 10 l5 4 8-8.5"></path>
                                            </svg>
                                        </span>
                                        <span class="filter__label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </a>
                                <?php }?>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['f_count']->value > 4) {?>
                        <div class="box_view_all_feature">
                            <a class="fn_view_all view_all_feature" href=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                    <?php }?>
                    </div>
                <?php
$_smarty_tpl->tpl_vars['f'] = $__foreach_f_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
    </div>
<?php }
}
/* smarty_template_function_categories_tree_sidebar_1113310573644fdf1d519bf5_35804668 */
if (!function_exists('smarty_template_function_categories_tree_sidebar_1113310573644fdf1d519bf5_35804668')) {
function smarty_template_function_categories_tree_sidebar_1113310573644fdf1d519bf5_35804668(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                        <div class="level_<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>filter__catalog_menu <?php } else { ?>filter__subcatalog <?php }?>">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['c']->value->visible && ($_smarty_tpl->tpl_vars['c']->value->has_products || $_smarty_tpl->tpl_vars['settings']->value->show_empty_categories)) {?>
                                    <div class="filter__catalog_item has_child">
                                        <<?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['category']->value->id && !$_smarty_tpl->tpl_vars['keyword']->value) {?>b<?php } else { ?>a<?php }?>
                                                class="filter__catalog_link<?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories) {?> sub_cat<?php }
if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>"
                                                <?php if ($_smarty_tpl->tpl_vars['route_name']->value === 'products') {?>
                                                    href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['c']->value->url,'filtersUrl'=>array('brand'=>$_smarty_tpl->tpl_vars['brand']->value->url),'keyword'=>$_smarty_tpl->tpl_vars['keyword']->value),$_smarty_tpl ) );?>
"
                                                <?php } else { ?>
                                                    href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['c']->value->url,'filtersUrl'=>array('brand'=>$_smarty_tpl->tpl_vars['brand']->value->url)),$_smarty_tpl ) );?>
"
                                                <?php }?>
                                                data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"
                                        >
                                            <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                                <picture>
                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                                        <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
.webp">
                                                    <?php }?>
                                                    <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
">
                                                    <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                </picture>
                                            <?php } else { ?>
                                                <div class="filter_catalog__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                                </div>
                                            <?php }?>
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <?php if ($_smarty_tpl->tpl_vars['c']->value->id != $_smarty_tpl->tpl_vars['category']->value->id) {?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                                            <?php }?>
                                        </<?php if ($_smarty_tpl->tpl_vars['c']->value->id == $_smarty_tpl->tpl_vars['category']->value->id && !$_smarty_tpl->tpl_vars['keyword']->value) {?>b<?php } else { ?>a<?php }?>>
                                    </div>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                <?php
}}
/*/ smarty_template_function_categories_tree_sidebar_1113310573644fdf1d519bf5_35804668 */
}
