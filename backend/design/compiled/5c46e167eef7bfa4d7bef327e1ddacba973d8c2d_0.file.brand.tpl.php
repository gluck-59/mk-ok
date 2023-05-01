<?php
/* Smarty version 3.1.40, created on 2023-05-01 21:02:49
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fe2a9f248b6_46742035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c46e167eef7bfa4d7bef327e1ddacba973d8c2d' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/brand.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 11,
    'file:learning_hints.tpl' => 1,
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_644fe2a9f248b6_46742035 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['brand']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['brand']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->brand_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page" onclick="enjoyhintBrand();">
                <?php if (!$_smarty_tpl->tpl_vars['brand']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brand_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['brand']->value->id) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brand",'url'=>$_smarty_tpl->tpl_vars['brand']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_open, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                </div>
            <?php }?>
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
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brand_added, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brand_updated, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
                <?php if ($_GET['return']) {?>
                    <a class="alert__button" href="<?php echo $_GET['return'];?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, true);
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
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'url_exists') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brand_exists, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'global_url_exists') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->global_url_exists, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_name') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_url') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_url, ENT_QUOTES, 'UTF-8', true);?>

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
            <div class="boxed match_matchHeight_true">
                                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="fn_step-1">
                            <div class="heading_label heading_label--required">
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_name_brand, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                </i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-10">
                                <div class="fn_step-2">
                                    <div class="input-group input-group--dabbl">
                                        <span class="input-group-addon input-group-addon--left">URL</span>
                                        <input name="url" class="fn_meta_field form-control fn_url <?php if ($_smarty_tpl->tpl_vars['brand']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['brand']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['brand']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['brand']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"brand_general"),$_smarty_tpl ) );?>

                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="fn_step-3 activity_of_switch">
                            <div class="activity_of_switch_item">
                                <div class="okay_switch clearfix">
                                    <label class="switch_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>

                                        <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_enable_brand, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                                        </i>
                                    </label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['brand']->value->visible) {?>checked=""<?php }?>/>
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

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"brand_switch_checkboxes"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('switch_checkboxes', $_prefixVariable1);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['switch_checkboxes']->value)) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_additional_settings, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="activity_of_switch activity_of_switch--box_settings">
                        <?php echo $_smarty_tpl->tpl_vars['switch_checkboxes']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

        <div class="row">
        <div class="col-lg-4 col-md-12 pr-0">
            <div class="fn_step-4 boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="brand_images_list">
                        <li class="brand_image_item fn_image_block">
                            <?php if ($_smarty_tpl->tpl_vars['brand']->value->image) {?>
                            <input type="hidden" class="fn_accept_delete" name="delete_image" value="">
                                <div class="fn_parent_image">
                                    <div class="brand_image image_wrapper fn_image_wrapper text-xs-center">
                                        <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['brand']->value->image,300,120,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
" alt="" />
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="fn_parent_image"></div>
                            <?php }?>
                            <div class="fn_upload_image dropzone_block_image <?php if ($_smarty_tpl->tpl_vars['brand']->value->image) {?> hidden<?php }?>">

                                <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                <input class="dropzone_image" name="image" type="file" />
                            </div>
                            <div class="brand_image image_wrapper fn_image_wrapper fn_new_image text-xs-center hidden">
                                <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                <img src="" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"brand_image"),$_smarty_tpl ) );?>

            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="fn_step-5 boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_metatags, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_general_metatags, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card row">
                    <div class="col-lg-6 col-md-6">
                        <div class="heading_label" >Meta-title <span id="fn_meta_title_counter"></span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_title, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <input name="meta_title" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="heading_label" >Meta-keywords
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <input name="meta_keywords" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>
                    <div class="col-lg-6 col-md-6 pl-0">
                        <div class="heading_label" >Meta-description <span id="fn_meta_description_counter"></span>
                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_meta_description, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <textarea name="meta_description" class="form-control okay_textarea fn_meta_field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->brand_h1, ENT_QUOTES, 'UTF-8', true);?>

                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_brand_h1, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div>
                            <input name="name_h1" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name_h1, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"brand_meta"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"brand_custom_block"),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable2);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="row custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>

        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="fn_step-6 boxed match fn_toggle_wrap tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_short_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <a href="#tab2" class="tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="annotation" id="fn_editor" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div id="tab2" class="tab">
                            <textarea name="description" class="editor_large fn_editor_class"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 col-md-12 mt-1">
                       <button id="fast_save_button_and_quit" type="submit" class="fn_step-7 btn btn_small btn_blue float-md-right ml-1" name="apply_and_quit" value="1">
                           <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                           <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply_and_quit, ENT_QUOTES, 'UTF-8', true);?>
</span>
                       </button>
                        <button type="submit" class="fn_step-7 btn btn_small btn_blue float-md-right">
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
</form>

<?php $_smarty_tpl->_subTemplateRender('file:learning_hints.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hintId'=>'hint_brand'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
