<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:46:57
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/settings_theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fdef10cdc74_95586460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2616ad2d36b9fa346bc0249561102b790c851e9' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/settings_theme.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 11,
  ),
),false)) {
function content_644fdef10cdc74_95586460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->settings_general_design ,false ,32);?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="heading_page">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_design, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--success">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

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


<form class="fn_form_list" method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

        <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="boxed fn_toggle_wrap ">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="main_header pt-0">
                            <div class="main_header__item">
                                <div class="heading_box mb-1">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_site_logo, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_site_logo, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                                </div>
                            </div>
                            <div class="main_header__item">
                                <div class="activity_of_switch mb-1">
                                    <div class="activity_of_switch_item">                                         <div class="okay_switch clearfix">
                                            <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_multilang_logo, ENT_QUOTES, 'UTF-8', true);?>

                                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_multilang_logo, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                                </i>
                                            </label>
                                            <label class="switch switch-default">
                                                <input class="switch-input" name="multilang_logo" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->multilang_logo) {?>checked=""<?php }?>/>
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_logo_checkboxes"),$_smarty_tpl ) );?>

                                    </div>
                                </div>
                            </div>
                            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                                <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_allow_ext, ENT_QUOTES, 'UTF-8', true);?>

                            <?php if ($_smarty_tpl->tpl_vars['allow_ext']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allow_ext']->value, 'img_ext');
$_smarty_tpl->tpl_vars['img_ext']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['img_ext']->value) {
$_smarty_tpl->tpl_vars['img_ext']->do_else = false;
?>
                                    <span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_ext']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="boxed fn_image_block site_logo_wrap">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_logo) {?>
                                    <div class="fn_parent_image txt_center">
                                        <div class="image_wrapper fn_image_wrapper fn_new_image text-xs-center">
                                            <a href="javascript:;" class="fn_delete_item delete_image remove_image"></a>
                                            <input type="hidden" name="site_logo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <img class="watermark_image" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->design_images, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo, ENT_QUOTES, 'UTF-8', true);?>
?v=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo_version, ENT_QUOTES, 'UTF-8', true);?>
" alt="" />
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="fn_parent_image"></div>
                                <?php }?>

                                <div class="fn_upload_image dropzone_block_image text-xs-center <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_logo) {?> hidden<?php }?>">
                                    <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                    <input class="dropzone_image" name="site_logo" type="file" accept="image/*" />
                                </div>
                                <div class="image_wrapper fn_image_wrapper fn_new_image text-xs-center hidden">
                                    <a href="javascript:;" class="fn_delete_item delete_image remove_image"></a>
                                    <input type="hidden" name="site_logo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo, ENT_QUOTES, 'UTF-8', true);?>
" disabled="">
                                    <img src="" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_site_logo"),$_smarty_tpl ) );?>

            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="boxed fn_toggle_wrap ">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading_box row mb-0">
                            <div class="col-lg-12 col-md-12 mb-1">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_site_favicon, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_site_favicon, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                                <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_allow_ext, ENT_QUOTES, 'UTF-8', true);?>

                            <?php if ($_smarty_tpl->tpl_vars['allow_ext']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allow_ext']->value, 'img_ext');
$_smarty_tpl->tpl_vars['img_ext']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['img_ext']->value) {
$_smarty_tpl->tpl_vars['img_ext']->do_else = false;
?>
                                    <span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_ext']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="boxed fn_image_block site_logo_wrap">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_favicon) {?>
                                    <div class="fn_parent_image txt_center">
                                        <div class="image_wrapper fn_image_wrapper fn_new_image text-xs-center">
                                            <a href="javascript:;" class="fn_delete_item delete_image remove_image"></a>
                                            <input type="hidden" name="site_favicon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <img class="watermark_image" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->design_images, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon, ENT_QUOTES, 'UTF-8', true);?>
?v=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon_version, ENT_QUOTES, 'UTF-8', true);?>
" alt="" />
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="fn_parent_image"></div>
                                <?php }?>

                                <div class="fn_upload_image dropzone_block_image text-xs-center <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_favicon) {?> hidden<?php }?>">
                                    <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                    <input class="dropzone_image" name="site_favicon" type="file" accept="image/*" />
                                </div>
                                <div class="image_wrapper fn_image_wrapper fn_new_image text-xs-center hidden">
                                    <a href="javascript:;" class="fn_delete_item delete_image remove_image"></a>
                                    <input type="hidden" name="site_favicon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon, ENT_QUOTES, 'UTF-8', true);?>
" disabled="">
                                    <img src="" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_favicon"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="row fn_toggle_wrap custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>

    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_deliveries, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_deliveries, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="mb-1">
                                <textarea name="product_deliveries" class="form-control okay_textarea editor_small"><?php echo $_smarty_tpl->tpl_vars['settings']->value->product_deliveries;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_deliveries"),$_smarty_tpl ) );?>

            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_payments, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_payments, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="mb-1">
                                <textarea name="product_payments" class="form-control okay_textarea editor_small"><?php echo $_smarty_tpl->tpl_vars['settings']->value->product_payments;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_payments"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_contact, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_contact, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_email, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="site_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_phones, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="site_phones" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['site_phones']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_working_hours, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <textarea name="site_working_hours" class="form-control okay_textarea editor_small"><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_working_hours;?>
</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_social, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <textarea name="site_social_links" class="form-control okay_textarea"><?php echo $_smarty_tpl->tpl_vars['site_social_links']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_contacts"),$_smarty_tpl ) );?>

            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_general_settings, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_iframe_map, ENT_QUOTES, 'UTF-8', true);?>

                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_iframe_map, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="mb-1">
                                <textarea name="iframe_map_code" class="form-control okay_textarea"><?php echo $_smarty_tpl->tpl_vars['settings']->value->iframe_map_code;?>
</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_social_share, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <div class="">
                                    <select name="social_share_theme" class="fn_social_share_theme selectpicker form-control">
                                        <option value=""<?php if (!$_smarty_tpl->tpl_vars['settings']->value->social_share_theme) {?> selected<?php }?>>default</option>
                                        <option value="flat"<?php if ($_smarty_tpl->tpl_vars['settings']->value->social_share_theme == 'flat') {?> selected<?php }?>>flat</option>
                                        <option value="classic"<?php if ($_smarty_tpl->tpl_vars['settings']->value->social_share_theme == 'classic') {?> selected<?php }?>>classic</option>
                                        <option value="minima"<?php if ($_smarty_tpl->tpl_vars['settings']->value->social_share_theme == 'minima') {?> selected<?php }?>>minima</option>
                                        <option value="plain"<?php if ($_smarty_tpl->tpl_vars['settings']->value->social_share_theme == 'plain') {?> selected<?php }?>>plain</option>
                                    </select>
                                    <div class="fn_share"></div>

                                    <div style="display: none;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_socials']->value, 'soc');
$_smarty_tpl->tpl_vars['soc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['soc']->value) {
$_smarty_tpl->tpl_vars['soc']->do_else = false;
?>
                                        <input type="checkbox" class="fn_<?php echo $_smarty_tpl->tpl_vars['soc']->value;?>
" name="sj_shares[]"<?php if (in_array($_smarty_tpl->tpl_vars['soc']->value,$_smarty_tpl->tpl_vars['settings']->value->sj_shares)) {?> checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['soc']->value;?>
" />
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_general"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['css_variables']->value)) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_theme_color, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_theme, ENT_QUOTES, 'UTF-8', true);
}?>
                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_settings_theme_color, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_variables']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('translation_name', str_replace('--','',$_smarty_tpl->tpl_vars['name']->value));?>
                            <?php $_smarty_tpl->_assignInScope('translation_name', str_replace('-','_',$_smarty_tpl->tpl_vars['translation_name']->value));?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['btr']->value->getTranslation(('settings_theme_').($_smarty_tpl->tpl_vars['translation_name']->value)))) {?>
                                <div class="col-md-6 col-xs-12">
                                    <div class="variables_box">
                                        <div class="variables_box__left">
                                            <div class="heading_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->getTranslation(('settings_theme_').($_smarty_tpl->tpl_vars['translation_name']->value));?>
</div>
                                        </div>
                                        <div class="variables_box__right">
                                            <div class="">
                                                <span<?php if (!empty($_smarty_tpl->tpl_vars['value']->value)) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?> class="fn_color theme_color"></span>
                                                <input name="css_colors[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
]" class="form-control" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <div class="col-lg-12 col-md-12 ">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                        
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"settings_theme_css_colors"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
    <?php }?>
</form>

<link rel="stylesheet" media="screen" type="text/css" href="design/js/colorpicker/css/colorpicker.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="design/js/colorpicker/js/colorpicker.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/js_libraries/js_socials/js/jssocials.min.js"><?php echo '</script'; ?>
>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/js_libraries/js_socials/css/jssocials.css" />
<?php if ($_smarty_tpl->tpl_vars['settings']->value->social_share_theme) {?>
    <link type="text/css" class="fn_social_share_style" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/js_libraries/js_socials/css/jssocials-theme-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->social_share_theme, ENT_QUOTES, 'UTF-8', true);?>
.css" />
<?php }
echo '<script'; ?>
 type="text/javascript" src="design/js/tinymce_jq/tinymce.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $(function() {
            $(document).on('click', '.fn_remove_new', function() {
                $(this).closest('.fn_row').remove();
            });

            $(document).on("mouseenter click", ".fn_color", function () {
                var elem = $(this);
                elem.ColorPicker({
                    onChange: function (hsb, hex, rgb) {
                        elem.css('backgroundColor', '#' + hex);
                        elem.next().val('#' + hex);
                    },
                    onBeforeShow: function () {
                        $(this).ColorPickerSetColor($(this).next().val());
                    }
                });
            });

        });
        
        
        <?php if ($_smarty_tpl->tpl_vars['js_custom_socials']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_custom_socials']->value, 'params', false, 'social');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
                jsSocials.shares.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value, ENT_QUOTES, 'UTF-8', true);?>
 = <?php echo json_encode($_smarty_tpl->tpl_vars['params']->value);?>
;
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        
        
        $(".fn_share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: <?php echo json_encode($_smarty_tpl->tpl_vars['js_socials']->value);?>
,
            on: {
                click: function(e) {
                    var $share_checkbox = $('.fn_'+this.share);
                    if ($share_checkbox.is(':checked')) {
                        $('.jssocials-share-'+this.share).removeClass('active');
                        $share_checkbox.prop('checked', false);
                    } else {
                        $('.jssocials-share-'+this.share).addClass('active');
                        $share_checkbox.prop('checked', true);
                    }
                    return false;
                }
            }
        });
        
        
                <?php if ($_smarty_tpl->tpl_vars['settings']->value->sj_shares) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->sj_shares, 'soc');
$_smarty_tpl->tpl_vars['soc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['soc']->value) {
$_smarty_tpl->tpl_vars['soc']->do_else = false;
?>
                $('.jssocials-share-<?php echo $_smarty_tpl->tpl_vars['soc']->value;?>
').addClass('active');
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        
        
        $(document).on('change', 'select.fn_social_share_theme', function() {
            if ($(this).val() != '') {
                if ($('.fn_social_share_style').length > 0) {
                    $('.fn_social_share_style').prop('href', '<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/js_libraries/js_socials/css/jssocials-theme-' + $(this).val() + '.css')
                } else {
                    $('body').append('<link type="text/css" class="fn_social_share_style" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/js_libraries/js_socials/css/jssocials-theme-' + $(this).val() + '.css" />');
                }
            } else {
                $('.fn_social_share_style').remove();
            }
        });
        
        $(function(){
            tinyMCE.init({
                selector: "textarea.editor_small",
                height: '100',
                plugins: ["code"],
                toolbar_items_size : 'small',
                menubar:'',
                toolbar1: "fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | forecolor backcolor | code",
                statusbar: true,
                font_formats: "Andale Mono=andale mono,times;"+
                "Arial=arial,helvetica,sans-serif;"+
                "Arial Black=arial black,avant garde;"+
                "Book Antiqua=book antiqua,palatino;"+
                "Comic Sans MS=comic sans ms,sans-serif;"+
                "Courier New=courier new,courier;"+
                "Georgia=georgia,palatino;"+
                "Helvetica=helvetica;"+
                "Impact=impact,chicago;"+
                "Open Sans=Open Sans,sans-serif;"+
                "Symbol=symbol;"+
                "Tahoma=tahoma,arial,helvetica,sans-serif;"+
                "Terminal=terminal,monaco;"+
                "Times New Roman=times new roman,times;"+
                "Trebuchet MS=trebuchet ms,geneva;"+
                "Verdana=verdana,geneva;"+
                "Webdings=webdings;"+
                "Wingdings=wingdings,zapf dingbats",
            });
        });
    <?php echo '</script'; ?>
>

<?php }
}
