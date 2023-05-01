<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:45:23
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/module_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fde93d1dd10_17742055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '857f74d383a4cb29e06fa6ea9efe277ad6ccda63' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/module_list.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 6,
  ),
),false)) {
function content_644fde93d1dd10_17742055 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
    <div class="fn_row okay_list_body_item fn_sort_item <?php if ($_smarty_tpl->tpl_vars['now_downloaded']->value) {?> fn_now_downloaded<?php }?>"<?php if ($_smarty_tpl->tpl_vars['now_downloaded']->value) {?> style="background-color: #ebffea; transition: background-color 1s linear;"<?php }?>>
        <div class="okay_list_row">
            <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->position, ENT_QUOTES, 'UTF-8', true);?>
">

            <div class="okay_list_boding okay_list_drag move_zone">
                <?php if ($_smarty_tpl->tpl_vars['module']->value->status !== 'Not Installed') {
$_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
}?>
            </div>

            <div class="okay_list_boding okay_list_check">
                <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
"/>
                <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
"></label>
            </div>

            <div class="okay_list_boding okay_list_photo">
                <?php if ($_smarty_tpl->tpl_vars['module']->value->preview) {?>
                    <?php if ($_smarty_tpl->tpl_vars['module']->value->backend_main_controller) {?>
                        <a href="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->backend_main_controller, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>array($_prefixVariable1,$_prefixVariable2,$_prefixVariable3),'id'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->preview, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </a>
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->preview, ENT_QUOTES, 'UTF-8', true);?>
"/>
                    <?php }?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['module']->value->backend_main_controller) {?>
                        <a href="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable4 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable5 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->backend_main_controller, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>array($_prefixVariable4,$_prefixVariable5,$_prefixVariable6),'id'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'modules_icon'), 0, true);
?>
                        </a>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'modules_icon'), 0, true);
?>
                    <?php }?>
                <?php }?>
            </div>

            <div class="okay_list_boding okay_list_module_name">
                <div class="text_600 mb-h mr-1">
                    <?php if ($_smarty_tpl->tpl_vars['module']->value->backend_main_controller) {?>
                        <a href="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable7 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable8 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->backend_main_controller, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>array($_prefixVariable7,$_prefixVariable8,$_prefixVariable9),'id'=>null,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);?>

                        </a>
                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['module']->value->params->vendor->email) {?>
                    <div class="mb-h">
                        <span class="text_grey text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->module_vendor_email, ENT_QUOTES, 'UTF-8', true);?>
:</span>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->params->vendor->email, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['module']->value->params->vendor->site) {?>
                    <div class="mb-h">
                        <span class="text_grey text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->module_vendor_site, ENT_QUOTES, 'UTF-8', true);?>
:</span>
                        <a class="okay_list_module_name_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->params->vendor->site, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->params->vendor->site, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                <?php }?>

                <div class="mb-h hidden-lg-up">
                    <span class="text_grey text_bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->module_version, ENT_QUOTES, 'UTF-8', true);?>
:</span>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->version, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>

            <div class="okay_list_boding okay_list_module_version hidden-md-down">
                <div class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->version, ENT_QUOTES, 'UTF-8', true);?>
</div>

                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value->params->version) && $_smarty_tpl->tpl_vars['module']->value->params->version != $_smarty_tpl->tpl_vars['module']->value->version) {?>
                    <?php if ($_smarty_tpl->tpl_vars['module']->value->params->version > $_smarty_tpl->tpl_vars['module']->value->version) {?>
                        <button type="button" class="fn_update_module btn btn-outline-warning btn--update mt-h hint-top-middle-t-info-s-small-mobile hint-anim" data-hint="<?php echo $_smarty_tpl->tpl_vars['btr']->value->module_need_update;?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value->params->version;?>
"><?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'refresh_icon'), 0, true);
?> <?php echo $_smarty_tpl->tpl_vars['module']->value->params->version;?>
</button>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['btr']->value->module_downgrade_warning;?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value->params->version;?>

                    <?php }?>
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value->params->Okay) && $_smarty_tpl->tpl_vars['module']->value->params->Okay != $_smarty_tpl->tpl_vars['config']->value->version) {?>
                    <div class="font_12 text_grey mt-q">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->module_okay_version, ENT_QUOTES, 'UTF-8', true);?>

                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->params->Okay, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                <?php }?>
            </div>
            <div class="okay_list_boding okay_list_module_type hidden-md-down"><?php if ($_smarty_tpl->tpl_vars['module']->value->type) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->type, ENT_QUOTES, 'UTF-8', true);
} else {
echo $_smarty_tpl->tpl_vars['btr']->value->not_used_module_type;
}?></div>

            <div class="okay_list_boding okay_list_status">
                                <?php if ($_smarty_tpl->tpl_vars['module']->value->status === 'Not Installed') {?>
                    <button class="btn" name="install_module" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->vendor, ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value->module_name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['btr']->value->install_module;?>
</button>
                <?php } else { ?>
                    <label class="switch switch-default">
                        <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['module']->value->enabled) {?>fn_active_class<?php }?>" data-controller="module" data-action="enabled" data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
" name="enabled" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['module']->value->enabled) {?>checked=""<?php }?>/>
                        <span class="switch-label"></span>
                        <span class="switch-handle"></span>
                    </label>
                <?php }?>
            </div>

            <div class="okay_list_setting okay_list_products_setting">
                <?php if ($_smarty_tpl->tpl_vars['module']->value->status !== 'Not Installed') {?>
                    <a data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->files_list_module, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ModuleDesignAdmin','vendor'=>$_smarty_tpl->tpl_vars['module']->value->vendor,'module_name'=>$_smarty_tpl->tpl_vars['module']->value->module_name),$_smarty_tpl ) );?>
">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_copy'), 0, true);
?>
                    </a>
                <?php }?>
            </div>

            <div class="okay_list_boding okay_list_close">
                                <?php if ($_smarty_tpl->tpl_vars['module']->value->status !== 'Not Installed') {?>
                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                    </button>
                <?php }?>
            </div>
        </div>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['now_downloaded']->value) {?>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            setTimeout(function () {
                $('.fn_now_downloaded').css('background-color', '').removeClass('fn_now_downloaded');
            }, 2000)
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
