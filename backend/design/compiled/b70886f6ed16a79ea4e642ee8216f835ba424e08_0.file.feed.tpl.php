<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:26:48
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Feeds/Backend/design/html/feed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096de8826242_22492768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70886f6ed16a79ea4e642ee8216f835ba424e08' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Feeds/Backend/design/html/feed.tpl',
      1 => 1728664430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 7,
    'file:./feed_tabs/entities.tpl' => 1,
    'file:./feed_tabs/settings.tpl' => 1,
    'file:./feed_tabs/features_settings.tpl' => 1,
    'file:./feed_tabs/categories_settings.tpl' => 1,
  ),
),false)) {
function content_67096de8826242_22492768 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['feed']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['feed']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['feed']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feed']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['feed']->value->id) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"OkayCMS.Feeds.Feed",'url'=>$_smarty_tpl->tpl_vars['feed']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, false);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feeds__open, ENT_QUOTES, 'UTF-8', true);?>
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
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__added, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__updated, ENT_QUOTES, 'UTF-8', true);?>

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
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_exists, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_name') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'url_wrong') {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_underscore, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<form method="post" class="fn_fast_button" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12 ">
            <div class="boxed match_matchHeight_true">
                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="">
                            <div class="heading_label heading_label--required">
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feed']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feed']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6">
                                <div class="mb-1 mt-2 mt-2-md-down">
                                    <div class="input-group input-group--dabbl">
                                        <span class="input-group-addon input-group-addon--left">URL</span>
                                        <input name="url" class="form-control fn_url <?php if ($_smarty_tpl->tpl_vars['feed']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['feed']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feed']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['feed']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['feed']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <div class="heading_label heading_label--required">
                                        <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__preset;?>
</span>
                                    </div>
                                    <select class="selectpicker form-control mb-1 fn_preset_select" name="preset">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['presets']->value, 'preset', false, 'preset_name');
$_smarty_tpl->tpl_vars['preset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['preset_name']->value => $_smarty_tpl->tpl_vars['preset']->value) {
$_smarty_tpl->tpl_vars['preset']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['preset_name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['feed']->value->preset == $_smarty_tpl->tpl_vars['preset_name']->value) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['preset_name']->value;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"okay_cms__feeds__feed__general"),$_smarty_tpl ) );?>

                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="activity_of_switch_item">
                                <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="enabled" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['feed']->value->enabled) {?>checked=""<?php }?>/>
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
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"okay_cms__feeds__feed__switch_checkboxes"),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('switch_checkboxes', $_prefixVariable8);?>
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

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"okay_cms__feeds__feed__custom_block"),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable9);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="row custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>

    <div class="tabs">
        <div class="heading_tabs">
            <div class="tab_navigation tab_navigation--round">
                <a href="#tab_entities" class="heading_box tab_navigation_link">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'feed_product'), 0, true);
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__tab, ENT_QUOTES, 'UTF-8', true);?>

                </a>
                <a href="#tab_settings" class="heading_box tab_navigation_link">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'feed_settings'), 0, true);
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__settings__tab, ENT_QUOTES, 'UTF-8', true);?>

                </a>
                <a href="#tab_features_settings" class="heading_box tab_navigation_link hidden-xs-down">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'feed_features'), 0, true);
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__features_settings__tab, ENT_QUOTES, 'UTF-8', true);?>

                </a>
                <a href="#tab_categories_settings" class="heading_box tab_navigation_link hidden-xs-down">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'feed_category'), 0, true);
?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__categories_settings__tab, ENT_QUOTES, 'UTF-8', true);?>

                </a>
            </div>
        </div>
        <div class="tab_container tab_container--h-auto">
            <div id="tab_entities" class="tab">
                <?php $_smarty_tpl->_subTemplateRender('file:./feed_tabs/entities.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div id="tab_settings" class="tab fn_settings_container">
                <?php $_smarty_tpl->_subTemplateRender('file:./feed_tabs/settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div id="tab_features_settings" class="tab">
                <?php $_smarty_tpl->_subTemplateRender('file:./feed_tabs/features_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div id="tab_categories_settings" class="tab">
                <?php $_smarty_tpl->_subTemplateRender('file:./feed_tabs/categories_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
        <div class="boxed">
            <div class="row">
                <div class="col-lg-12 col-md-12">
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
</form>

<div class="fn_new_settings_container hidden">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings_templates']->value, 'st', false, 'preset_name');
$_smarty_tpl->tpl_vars['st']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['preset_name']->value => $_smarty_tpl->tpl_vars['st']->value) {
$_smarty_tpl->tpl_vars['st']->do_else = false;
?>
        <div class="fn_settings fn_new_settings" data-preset_name="<?php echo $_smarty_tpl->tpl_vars['preset_name']->value;?>
">
            <?php echo $_smarty_tpl->tpl_vars['st']->value;?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<style>
.feed_select_type{
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 220px;
    -ms-flex: 0 0 220px;
    flex: 0 0 220px;
    max-width: 220px;
}
.feed_condition_item{
    border: 1px solid rgb(238, 238, 238);
    padding-top: 1rem;
    margin: 0;
    margin-top: 1rem;
}
.feed_condition_delete{
    position: absolute;
    top: -10px;
    right: 5px;
    padding: 5px;
    color: #8c8c8c !important;
}
.feed_condition_delete svg{
    height: 14px;
    width: 14px;
}
.ok_feed_condition_list { 
    margin-top: 15px;
    border: none;
}
.ok_feed_condition_list .okay_list_body_item {
    border-top: 1px solid #f2f2f2;
    border-bottom: none;
    min-height: 80px;
}
.f_col-lg {
    -webkit-flex-basis: 0;
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
}
.okay_list .okay_list_feed_categories_settings_name{
    width: calc(100% - 500px);
    position: relative;
    text-align: left;
}
.okay_list .subcategories_level_1 .okay_list_feed_categories_settings_name{
    width: calc(100% - 530px);
}
.okay_list .subcategories_level_2 .okay_list_feed_categories_settings_name{
    width: calc(100% - 560px);
}
.okay_list_feed_features_settings_settings,
.okay_list_feed_categories_settings_settings {
    width: 350px;
    text-align: left;
}
.okay_list_feed_num{
    width: 60px;
}
.okay_list .okay_list_feed_features_settings_name{
    width: calc(100% - 430px);
    position: relative;
    text-align: left;
}
.pr-0.pr-0--feed{
    padding-right: 0 !important;
}
.settings_added_design_elements{
    text-align: left;
}
.bs-actionsbox .btn-group button {
    width: calc(50% - 6px);
}
.bs-deselect-all,
.bs-select-all{
    text-align: center;
    align-items: center;
    justify-content: center;
    margin: 0 3px;
}
.bs-select-all{
    background: rgb(172, 208, 255);
}
.bs-deselect-all{
    background: rgb(255, 172, 172);
}
.bs-select-all:hover{
    background: rgb(143, 192, 255);
}
.bs-deselect-all:hover{
    background: rgb(255, 136, 136);
}

@media (max-width: 991px) {
    .mt-2-md-down{
        margin-top: 0rem !important;
    }
}
@media (max-width: 767px) {
    .feed_condition_delete{
        top: -15px;
        right: 5px;
    }
    #tab_entities .box_btn_heading{
        display:block;
        margin: 10px 0 0!important;
    }
    .tab_navigation--round .tab_navigation_link {
        margin-right: 0px;
    }
    .feed_select_type {
        -webkit-box-flex: 0;
        -webkit-flex: 0 0 100%;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .okay_list_feed_features_settings_settings,
    .okay_list_feed_categories_settings_settings {
        width: 250px;
    }
    .okay_list .okay_list_feed_features_settings_name{
        width: calc(100% - 310px);
    }
    .okay_list .okay_list_feed_categories_settings_name{
        width: calc(100% - 300px);
    }
    .okay_list .subcategories_level_1 .okay_list_feed_categories_settings_name{
        width: calc(100% - 330px);
    }
    .okay_list .subcategories_level_2 .okay_list_feed_categories_settings_name{
        width: calc(100% - 360px);
    }
}
</style>
<?php }
}
