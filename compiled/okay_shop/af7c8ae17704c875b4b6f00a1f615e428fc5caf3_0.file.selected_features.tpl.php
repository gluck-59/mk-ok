<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:47:41
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/selected_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fdf1d510ca2_21332684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7c8ae17704c875b4b6f00a1f615e428fc5caf3' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/selected_features.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 4,
  ),
),false)) {
function content_644fdf1d510ca2_21332684 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- selected filters -->
<?php if ($_smarty_tpl->tpl_vars['is_filter_page']->value) {?>
    <div class="sidebar__boxed">
        <div class="filter">
            <div class="fn_switch filter__name d-flex align-items-center justify-content-between">
                <span data-language="selected_features_heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value->selected_features_heading;?>
</span>
                <span class="d-flex align-items-center filter__name_arrow icon icon-keyboard-arrow-down"></span>
            </div>
            <div class="filter__group">
                <div class="filter__selected_features d-flex align-items-center flex-wrap">
                    <?php if ($_smarty_tpl->tpl_vars['selected_catalog_prices']->value) {?>
                        <div class="filter__selected_feature">
                            <form class="filter__selected_feature_item" method="post">
                                <button type="submit" name="prg_seo_hide" class="fn_filter_reset d-flex align-items-center filter__sf_link checked" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('price'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );?>
">
                                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->features_price;?>
: <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_catalog_prices']->value['min'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_catalog_prices']->value['max'], ENT_QUOTES, 'UTF-8', true);?>
</i></span>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, false);
?>
                                </button>
                            </form>
                        </div>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['catalog_other_filters']->value && $_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog_other_filters']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['f']->value->url,$_smarty_tpl->tpl_vars['selected_catalog_other_filters']->value)) {?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('filter'=>$_smarty_tpl->tpl_vars['f']->value->url,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable1);?>
                                <div class="filter__selected_feature">
                                    <form class="filter__selected_feature_item" method="post">
                                        <button type="submit" name="prg_seo_hide" class="d-flex align-items-center filter__sf_link checked" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <span data-language="<?php echo $_smarty_tpl->tpl_vars['f']->value->translation;?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value->name;?>
</span>
                                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, true);
?>
                                        </button>
                                    </form>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['catalog_brands']->value && $_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog_brands']->value, 'b');
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['brand']->value->id == $_smarty_tpl->tpl_vars['b']->value->id || in_array($_smarty_tpl->tpl_vars['b']->value->id,$_smarty_tpl->tpl_vars['selected_catalog_brands_ids']->value)) {?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array('brand'=>$_smarty_tpl->tpl_vars['b']->value->url,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable2);?>
                                <div class="filter__selected_feature">
                                    <form class="filter__selected_feature_item" method="post">
                                        <button type="submit" name="prg_seo_hide" class="d-flex align-items-center filter__sf_link checked" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <span><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</i></span>
                                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, true);
?>
                                        </button>
                                    </form>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['catalog_features']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalog_features']->value, 'f', false, 'key');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id]) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['f']->value->features_values, 'fv');
$_smarty_tpl->tpl_vars['fv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fv']->value) {
$_smarty_tpl->tpl_vars['fv']->do_else = false;
?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['selected_catalog_features']->value[$_smarty_tpl->tpl_vars['f']->value->id][$_smarty_tpl->tpl_vars['fv']->value->id]))) {?>
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('params'=>array($_smarty_tpl->tpl_vars['f']->value->url=>$_smarty_tpl->tpl_vars['fv']->value->translit,'page'=>null,'route'=>$_smarty_tpl->tpl_vars['furlRoute']->value)),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('furl', $_prefixVariable3);?>
                                        <div class="filter__selected_feature">
                                            <form class="filter__selected_feature_item" method="post">
                                                <button type="submit" name="prg_seo_hide" class="d-flex align-items-center filter__sf_link checked" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['furl']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value->name, ENT_QUOTES, 'UTF-8', true);?>
: <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fv']->value->value, ENT_QUOTES, 'UTF-8', true);?>
</i></span>
                                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, true);
?>
                                                </button>
                                            </form>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                    <div class="filter__selected_feature_reset">
                        <form method="post">
                            <button type="submit" name="prg_seo_hide" class="fn_filter_reset  filter__sf_reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['category']->value->url),$_smarty_tpl ) );?>
">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->selected_features_reset;?>

                            </button>
                        </form>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['brand']->value) {?>
                    <div class="filter__selected_feature_reset">
                        <form method="post">
                            <button type="submit" name="prg_seo_hide" class="fn_filter_reset filter__sf_reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brand",'url'=>$_smarty_tpl->tpl_vars['brand']->value->url),$_smarty_tpl ) );?>
">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->selected_features_reset;?>

                            </button>
                        </form>
                    </div>
                <?php } else { ?>
                    <div class="filter__selected_feature_reset">
                        <form method="post">
                            <button type="submit" name="prg_seo_hide" class="fn_filter_reset filter__sf_reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>$_smarty_tpl->tpl_vars['route_name']->value),$_smarty_tpl ) );?>
">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->selected_features_reset;?>

                            </button>
                        </form>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php }
}
}
