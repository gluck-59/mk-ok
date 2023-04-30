<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:26:39
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644dedffdd9d52_02049229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36dc552da6eaab923021ff89c9b5b20dc3170897' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/manager.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 7,
  ),
),false)) {
function content_644dedffdd9d52_02049229 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['m']->value->login) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['m']->value->login ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->manager_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php if (!$_smarty_tpl->tpl_vars['m']->value->id) {?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_add, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php } else { ?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
        <?php }?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--success">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_added, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_updated, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_success']->value, ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'login_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_exists, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_login') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_enter_login, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == "password_wrong") {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_pass_not_match, ENT_QUOTES, 'UTF-8', true);?>

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
    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <div class="row">
        <div class="col-lg-6 col-md-12 pr-0">
            <div class="boxed fn_toggle_wrap min_height_335px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_basic, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_login, ENT_QUOTES, 'UTF-8', true);?>

                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_manager_login, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div class="">
                            <input class="form-control" name="login" autocomplete="off" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->login, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>
                    
                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_email, ENT_QUOTES, 'UTF-8', true);?>

                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_manager_email, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div class="">
                            <input class="form-control" name="email" autocomplete="off" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->email, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->last_activity, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" disabled type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['m']->value->last_activity ));?>
|<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['m']->value->last_activity ));?>
"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_pass, ENT_QUOTES, 'UTF-8', true);?>

                            <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_manager_pass, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                            </i>
                        </div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="password" type="password" value="" placeholder="xxxxxxxx" />
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_pass_repeat, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="password_check" type="password" value="" placeholder="xxxxxxxx" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_335px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_settings, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap fn_card on">
                    <div class="mb-1">
                        <div class="heading_label" for="block_translit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_language, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <select name="manager_lang" class="selectpicker form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['btr_languages']->value, 'label', false, 'name');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['m']->value->lang == $_smarty_tpl->tpl_vars['label']->value) {?>selected<?php }?>>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                </option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label" for="block_translit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_comment, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="comment" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value->comment, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_example, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label" for="block_translit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <input class="form-control" autocomplete="off" name="" type="text" value="" placeholder="19.01.17|14:02"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_sidebar, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <div class="">
                            <select name="menu_status" class="selectpicker form-control">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['m']->value->menu_status == 1) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_open, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['m']->value->menu_status == 0) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_closed, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-1">
                        <div class="">
                            <button type="submit" class="btn btn_small btn_blue" name="reset_menu" value="1">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'refresh_icon'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_reset_menu, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>

                            <?php if ($_smarty_tpl->tpl_vars['manager']->value->permissions && in_array('system_modules',$_smarty_tpl->tpl_vars['manager']->value->permissions)) {?>
                                <div class="permission_box system_position <?php if ($_smarty_tpl->tpl_vars['m']->value->id == $_smarty_tpl->tpl_vars['manager']->value->id) {?>text-muted<?php }?>">
                                    <div class="system_label"><?php echo $_smarty_tpl->tpl_vars['btr']->value->allow_to_visible_system_modules;?>
</div>
                                    <label class="switch switch-default">
                                        <input class="switch-input fn_item_perm" name="permissions[]" value="system_modules" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['m']->value->permissions && in_array('system_modules',$_smarty_tpl->tpl_vars['m']->value->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['m']->value->id == $_smarty_tpl->tpl_vars['manager']->value->id) {?>disabled<?php }?>  />
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            <?php }?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_rights, ENT_QUOTES, 'UTF-8', true);?>

                    <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_manager_rights, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, true);
?>
                    </i>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['m']->value->id != $_smarty_tpl->tpl_vars['manager']->value->id) {?>
                        <span class="font_14 text_600"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_all_access, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <label class="switch switch-default">
                            <input class="switch-input fn_all_perms" value="" type="checkbox" />
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                        </label>
                    <?php }?>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['permission']->value, 'items', false, 'title');
$_smarty_tpl->tpl_vars['items']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->tpl_vars['items']->do_else = false;
?>
                        <div class="permission_block">
                            <div class="heading_box"><?php ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable1 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['btr']->value->getTranslation($_prefixVariable1);?>
</div>
                            <div class="permission_boxes row fn_perms_wrap">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <div class="col-xl-4 col-lg-4 col-md-6 <?php if ($_smarty_tpl->tpl_vars['m']->value->id == $_smarty_tpl->tpl_vars['manager']->value->id) {?>text-muted<?php }?>">
                                        <div class="permission_box">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                            <label class="switch switch-default">
                                                <input class="switch-input fn_item_perm" name="permissions[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['m']->value->permissions && in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['m']->value->permissions)) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['m']->value->id == $_smarty_tpl->tpl_vars['manager']->value->id) {?>disabled<?php }?>  />
                                                <span class="switch-label"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                        <div class="col-xs-12 clearfix"></div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value->cnt_try >= 10) {?>
                            <button type="submit" name="unlock_manager" class="btn btn_small btn_blue">
                                <i class="fa fa-magic"></i>
                            &nbsp;   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->manager_unlock, ENT_QUOTES, 'UTF-8', true);?>

                            </button>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
   </div>
</form>

<?php echo '<script'; ?>
>
    $(document).on("change", ".fn_all_perms", function () {
        if($(this).is(":checked")) {
            $('.fn_item_perm').each(function () {
                if(!$(this).is(":checked")) {
                    $(this).trigger("click");
                }
            });
        } else {
            $('.fn_item_perm').each(function () {
                if($(this).is(":checked")) {
                    $(this).trigger("click");
                }
            })
        }
    })
<?php echo '</script'; ?>
><?php }
}
