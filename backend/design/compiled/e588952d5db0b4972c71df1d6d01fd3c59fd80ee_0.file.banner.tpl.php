<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:30:03
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Banners/Backend/design/html/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644deecbb129c8_81544862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e588952d5db0b4972c71df1d6d01fd3c59fd80ee' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Banners/Backend/design/html/banner.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 5,
  ),
),false)) {
function content_644deecbb129c8_81544862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/e588952d5db0b4972c71df1d6d01fd3c59fd80ee_0.file.banner.tpl.php',
    'uid' => 'e588952d5db0b4972c71df1d6d01fd3c59fd80ee',
    'call_name' => 'smarty_template_function_category_select_202712469644deecba3bc91_21451804',
  ),
));
if ($_smarty_tpl->tpl_vars['banner']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['banner']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->banner_new_group ,false ,32);
}?>

<style>
    @media (min-width: 1200px) and (max-width: 1400px) {
        .col-xxl-6{
            width: 100%;
        }
    }
</style>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['banner']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_new_group, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--success">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_group_added, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_updated, ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'shortcode_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_shortcode_exists, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />
    <div class="row">
        <div class="col-xs-12">
            <div class="boxed">
                <div class="row d_flex">
                                        <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="heading_label">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input class="form-control mb-h" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>
                                        <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch activity_of_switch--left mt-q mb-1">
                            <div class="activity_of_switch_item">                                 <div class="okay_switch okay_switch--nowrap clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->visible) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-sm-12 pr-0">
                        <div class="">
                            <div class="heading_label">
                                <span class="boxes_inline heading_label">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_label_id_group, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_faq_id_group, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </span>
                            </div>
                            <div class="form-group">
                                <span class="boxes_inline bnr_id_grup">
                                    <input type="text" class="form-control" name="group_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->group_name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value->as_individual_shortcode) {?>
                    <div class="col-xl-4 col-lg-6 col-sm-12 pr-0">
                        <div class="">
                            <div class="heading_label">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_label_individual_shortcode, ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                            <div class="form-group">
                                <span class="boxes_inline bnr_id_grup">
                                    <input type="text" class="form-control" readonly value="{$banner_shortcode_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->group_name, ENT_QUOTES, 'UTF-8', true);?>
}" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="col-xl-4 col-lg-6 col-sm-12 pr-0">
                        <div class="activity_of_switch activity_of_switch--left mt-2">
                            <div class="activity_of_switch_item">
                                <span class="okay_switch okay_switch--nowrap clearfix">
                                    <label class="switch switch-default switch-pill switch-primary-outline-alt boxes_inline mr-h">
                                        <input class="switch-input" name="as_individual_shortcode" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->as_individual_shortcode) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                    <label class="boxes_inline heading_label">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_individual_shortcode, ENT_QUOTES, 'UTF-8', true);?>

                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_individual_shortcode_description, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                </label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 ">
            <div class="alert alert--icon alert--info">
                <div class="alert__content">
                    <div class="alert__title mb-q"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction_head, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="text_box">
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['btr']->value->banner_instruction_global_shortcode_part_1;?>

                            <a href=""  class="fn_clipboard hint-bottom-middle-t-info-s-small-mobile" data-hint="Click to copy" data-hint-copied="✔ Copied to clipboard">{$global_banners}</a>
                            <br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction_global_shortcode_part_2, ENT_QUOTES, 'UTF-8', true);?>

                        </p>
                        <?php if ($_smarty_tpl->tpl_vars['banner']->value->as_individual_shortcode) {?>
                        <p>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction_shortcode_part_1, ENT_QUOTES, 'UTF-8', true);?>

                            <a href=""  class="fn_clipboard hint-bottom-middle-t-info-s-small-mobile" data-hint="Click to copy" data-hint-copied="✔ Copied to clipboard">{$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner']->value->as_individual_shortcode, ENT_QUOTES, 'UTF-8', true);?>
}</a>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_instruction_shortcode_part_2, ENT_QUOTES, 'UTF-8', true);?>

                        </p>
                        <p><?php echo $_smarty_tpl->tpl_vars['btr']->value->banner_instruction_shortcode_part_3;?>
</p>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_show_banner, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>

                <div class="toggle_body_wrap fn_card on">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 pr-0">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_pages, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="pages[]" class="selectpicker form-control fn_action_select" multiple="multiple" data-selected-text-format="count">
                                        <option value="0" <?php if (!$_smarty_tpl->tpl_vars['banner']->value->page_selected || in_array(0,$_smarty_tpl->tpl_vars['banner']->value->page_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['page']->value->name != '') {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value->page_selected && in_array($_smarty_tpl->tpl_vars['page']->value->id,$_smarty_tpl->tpl_vars['banner']->value->page_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 pr-0">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="categories[]" class="selectpicker form-control fn_select_all_categories" multiple="multiple" data-selected-text-format="count">
                                        <option value='0' <?php if (!$_smarty_tpl->tpl_vars['banner']->value->category_selected || in_array(0,$_smarty_tpl->tpl_vars['banner']->value->category_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        
                                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['banner']->value->category_selected), true);?>

                                    </select>

                                    <div class="activity_of_switch_item mt-1">
                                        <div class="okay_switch okay_switch--nowrap clearfix">
                                            <label class="boxes_inline heading_label">Выбрать все категории</label>
                                            <label class="switch switch-default">
                                                <input class="switch-input" id="select_all_categories" name="select_all_categories" value='1' type="checkbox" />
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="banner_card">
                                <div class="banner_card_header">
                                    <span class="font-weight-bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_brands, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                                <div class="banner_card_block">
                                    <select name="brands[]" class="selectpicker form-control fn_select_all_brands" multiple="multiple" data-selected-text-format="count">
                                        <option value='0' <?php if (!$_smarty_tpl->tpl_vars['banner']->value->brand_selected || in_array(0,$_smarty_tpl->tpl_vars['banner']->value->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_hide, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                                            <option value='<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
' <?php if ($_smarty_tpl->tpl_vars['banner']->value->brand_selected && in_array($_smarty_tpl->tpl_vars['brand']->value->id,$_smarty_tpl->tpl_vars['banner']->value->brand_selected)) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>

                                    <div class="activity_of_switch_item mt-1">
                                        <div class="okay_switch okay_switch--nowrap clearfix">
                                            <label class="boxes_inline heading_label">Выбрать все бренды</label>
                                            <label class="switch switch-default">
                                                <input class="switch-input" id="select_all_brands" name="select_all_categories" value='1' type="checkbox" />
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"banner_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

                        <?php }?>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="activity_of_switch_item mt-h">
                                <div class="okay_switch okay_switch--nowrap">
                                    <label class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_show_group, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default switch-pill switch-primary-outline-alt boxes_inline">
                                        <input class="switch-input" name="show_all_pages" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->show_all_pages) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="activity_of_switch_item mt-h">
                                <div class="okay_switch okay_switch--nowrap">
                                    <label class="boxes_inline heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_show_all_products, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default switch-pill switch-primary-outline-alt boxes_inline">
                                        <input class="switch-input" name="show_all_products" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['banner']->value->show_all_products) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_head, ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="permission_block">
                        <div class="permission_boxes row">
                            <div class="col-xl-4 col-lg-4 col-md-6 text-muted">
                                <div class="permission_box">
                                    <span class="switch_label" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_as_slider, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_as_slider, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="settings[as_slider]" value='1' type="checkbox" <?php if (((isset($_smarty_tpl->tpl_vars['banner']->value->settings['as_slider'])) && !empty($_smarty_tpl->tpl_vars['banner']->value->settings['as_slider'])) || !$_smarty_tpl->tpl_vars['banner']->value->id) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 text-muted">
                                <div class="permission_box">
                                    <span class="switch_label" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_autoplay, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_autoplay, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="settings[autoplay]" value='1' type="checkbox" <?php if (((isset($_smarty_tpl->tpl_vars['banner']->value->settings['autoplay'])) && !empty($_smarty_tpl->tpl_vars['banner']->value->settings['autoplay'])) || !$_smarty_tpl->tpl_vars['banner']->value->id) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 text-muted">
                                <div class="permission_box">
                                    <span class="switch_label" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_loop, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_loop, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="settings[loop]" value='1' type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['banner']->value->settings['loop'])) && !empty($_smarty_tpl->tpl_vars['banner']->value->settings['loop'])) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 text-muted">
                                <div class="permission_box">
                                    <span class="switch_label" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_nav, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_nav, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="settings[nav]" value='1' type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['banner']->value->settings['nav'])) && !empty($_smarty_tpl->tpl_vars['banner']->value->settings['nav'])) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 text-muted">
                                <div class="permission_box">
                                    <span class="switch_label" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_dots, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_dots, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="settings[dots]" value='1' type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['banner']->value->settings['dots'])) && !empty($_smarty_tpl->tpl_vars['banner']->value->settings['dots'])) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 text-muted">
                                <div class="permission_box">
                                    <span class="switch_label" title="<?php echo $_smarty_tpl->tpl_vars['btr']->value->banner_settings_rotation_speed;?>
"><?php echo $_smarty_tpl->tpl_vars['btr']->value->banner_settings_rotation_speed;?>
</span>
                                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->banner_settings_rotation_speed_title, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                    </i>
                                    <input class="form-control" style="width: 80px;margin-left: 10px" name="settings[rotation_speed]" type="text" pattern="^[0-9]+$" required
                                           value="<?php if ((isset($_smarty_tpl->tpl_vars['banner']->value->settings['rotation_speed'])) && !empty($_smarty_tpl->tpl_vars['banner']->value->settings['rotation_speed'])) {
echo $_smarty_tpl->tpl_vars['banner']->value->settings['rotation_speed'];
} else { ?>2500<?php }?>" />
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="row">
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
             </div>
        </div>
    </div>

</form>

<?php echo '<script'; ?>
>
    sclipboard();

    $(document).on('change', '#select_all_categories', function () {
        $('.fn_select_all_categories option').prop("selected", $(this).is(':checked'));
        $('.fn_select_all_categories').selectpicker('refresh');
    });

    $(document).on('change', '#select_all_brands', function () {
        $('.fn_select_all_brands option').prop("selected", $(this).is(':checked'));
        $('.fn_select_all_brands').selectpicker('refresh');
    });

<?php echo '</script'; ?>
><?php }
/* smarty_template_function_category_select_202712469644deecba3bc91_21451804 */
if (!function_exists('smarty_template_function_category_select_202712469644deecba3bc91_21451804')) {
function smarty_template_function_category_select_202712469644deecba3bc91_21451804(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value && in_array($_smarty_tpl->tpl_vars['category']->value->id,$_smarty_tpl->tpl_vars['selected']->value)) {?>selected<?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;<?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected'=>$_smarty_tpl->tpl_vars['banner']->value->category_selected,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php
}}
/*/ smarty_template_function_category_select_202712469644deecba3bc91_21451804 */
}
