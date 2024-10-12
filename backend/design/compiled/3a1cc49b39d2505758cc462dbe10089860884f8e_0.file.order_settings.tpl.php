<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:30:25
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/order_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096ec18b7317_55250262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a1cc49b39d2505758cc462dbe10089860884f8e' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/order_settings.tpl',
      1 => 1728664428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 9,
  ),
),false)) {
function content_67096ec18b7317_55250262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->order_settings_labels ,false ,32);?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_orders, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--error">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>
<?php }?>

<div class="row">
        <div class="col-lg-7 col-md-12 pr-0">
        <div class="boxed fn_toggle_wrap">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_statuses, ENT_QUOTES, 'UTF-8', true);?>

                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tooltip_order_settings_statuses, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_tooltips'), 0, false);
?>
                </i>
                <div class="box_btn_heading ml-1">
                    <button type="button" class="btn btn_mini btn-secondary btn_openSans fn_add_status ">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_add_status, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_settings_statuses_head"),$_smarty_tpl ) );?>


                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                </div>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <form class="fn_form_list" method="post">
                    <input type="hidden" value="status" name="status">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
                    <div class="okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_boding okay_list_drag"></div>
                            <div class="okay_list_heading okay_list_order_stg_sts_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_stg_sts_status2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_select_action, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_stg_sts_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_colour, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <div class="fn_status_list fn_sort_list okay_list_body sortable">
                            <?php if ($_smarty_tpl->tpl_vars['orders_statuses']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders_statuses']->value, 'order_status');
$_smarty_tpl->tpl_vars['order_status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order_status']->value) {
$_smarty_tpl->tpl_vars['order_status']->do_else = false;
?>
                                    <div class="fn_row okay_list_body_item">
                                        <div class="okay_list_row fn_sort_item">
                                            <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->position, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <input type="hidden" name="statuses[id][]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
">

                                            <div class="okay_list_boding okay_list_drag move_zone">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                            </div>
                                            <div class="okay_list_boding okay_list_check hidden">
                                                <input class="hidden_check" type="checkbox" id="id_or_<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
"/>
                                                <label class="okay_ckeckbox" for="id_or_<?php echo $_smarty_tpl->tpl_vars['order_status']->value->id;?>
"></label>
                                            </div>

                                            <div class="okay_list_boding okay_list_order_stg_sts_name">
                                                <input type="text" class="form-control" name="statuses[name][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == true) {?>
                                                <div class="hidden-sm-up mt-q">
                                                    <select name="statuses[is_close][]" class="selectpicker form-control col-xs-12 px-0">
                                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 1) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_write_off, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_yes, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 0) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_write_off, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_no, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    </select>
                                                </div>
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == false || $_smarty_tpl->tpl_vars['is_tablet']->value == true) {?>
                                            <div class="okay_list_boding okay_list_order_stg_sts_status2">
                                                <select name="statuses[is_close][]" class="selectpicker form-control col-xs-12 px-0">
                                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 1) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['order_status']->value->is_close == 0) {?>selected=""<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                </select>
                                            </div>
                                            <?php }?>
                                            <div class="okay_list_boding okay_list_order_stg_sts_label">
                                                <input  name="statuses[color][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->color, ENT_QUOTES, 'UTF-8', true);?>
" class="hidden">
                                                <span data-hint="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->color, ENT_QUOTES, 'UTF-8', true);?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim" style="background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value->color, ENT_QUOTES, 'UTF-8', true);?>
;"></span>
                                            </div>
                                            <div class="okay_list_boding okay_list_close">
                                                <?php if (count($_smarty_tpl->tpl_vars['orders_statuses']->value) > 1) {?>
                                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_delete_status, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                                                    </button>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_settings_status_item"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
                                            <div class="okay_list_row">
                                                <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

                                            </div>
                                        <?php }?>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>

                            <div class="fn_row fn_new_status fn_sort_item okay_list_body">
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row fn_sort_item">
                                        <div class="okay_list_boding okay_list_drag"></div>
                                        <div class="okay_list_boding okay_list_order_stg_sts_name">
                                            <input type="hidden" name="statuses[id][]" value="">
                                            <input type="text" class="form-control" name="statuses[name][]" value="">
                                            <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == true) {?>
                                                <div class="hidden-sm-up mt-q">
                                                    <select name="statuses[is_close][]" class="selectpicker form-control col-xs-12 px-0">
                                                        <option value="1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_yes, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                        <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_no, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    </select>
                                                </div>
                                            <?php }?>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['is_mobile']->value == false || $_smarty_tpl->tpl_vars['is_tablet']->value == true) {?>
                                            <div class="okay_list_boding okay_list_order_stg_sts_status2">
                                                <select name="statuses[is_close][]" class="selectpicker form-control">
                                                    <option value="1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <option value="0"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_not_reduse_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                </select>
                                            </div>
                                        <?php }?>
                                        <div class="okay_list_boding okay_list_order_stg_sts_label">
                                            <input name="statuses[color][]" value="" class="hidden">
                                            <span data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_select_colour, ENT_QUOTES, 'UTF-8', true);?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim"></span>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_delete_status, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_light_remove hint-bottom-right-t-info-s-small-mobile  hint-anim">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="okay_list_footer">
                            <div class="okay_list_foot_left"></div>
                            <button type="submit" value="labels" class="btn btn_small btn_blue">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div class="col-lg-5 col-md-12 hidden-md-down">
        <div class="boxed fn_toggle_wrap">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_labels, ENT_QUOTES, 'UTF-8', true);?>

                <div class="box_btn_heading ml-1">
                    <button type="button" class="btn btn_mini btn-secondary btn_openSans fn_add_Label ">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_add_label, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_settings_labels_head"),$_smarty_tpl ) );?>


                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                </div>
            </div>
            <div class="toggle_body_wrap on fn_card">
                <form class="fn_form_list" method="post">
                    <input type="hidden" value="labels" name="labels">
                    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">

                    <div class="okay_list">
                                                <div class="okay_list_head">
                            <div class="okay_list_heading okay_list_order_stg_lbl_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_order_stg_sts_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_colour, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="okay_list_heading okay_list_close"></div>
                        </div>
                        <div class="fn_labels_list okay_list_body sortable fn_sort_list">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['labels']->value, 'label');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                                <div class="fn_row okay_list_body_item">
                                    <div class="okay_list_row fn_sort_item">
                                        <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->position, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <input type="hidden" name="labels[id][]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
">

                                        <div class="cokay_list_boding okay_list_check hidden">
                                            <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
"/>
                                            <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['label']->value->id;?>
"></label>
                                        </div>

                                        <div class="okay_list_boding okay_list_order_stg_lbl_name">
                                            <input type="text" class="form-control" name="labels[name][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                        </div>

                                        <div class="okay_list_boding okay_list_order_stg_sts_label">
                                            <input  name="labels[color][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->color, ENT_QUOTES, 'UTF-8', true);?>
" class="hidden">
                                            <span data-hint="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->color, ENT_QUOTES, 'UTF-8', true);?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim" style="background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value->color, ENT_QUOTES, 'UTF-8', true);?>
;"></span>
                                        </div>

                                        <div class="okay_list_boding okay_list_close">
                                                                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                                            </button>
                                        </div>
                                    </div>
                                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_settings_label_item"),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable2);?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
                                        <div class="okay_list_row">
                                            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

                                        </div>
                                    <?php }?>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div class="fn_row fn_new_label fn_sort_item okay_list_body_item">
                                <div class="okay_list_row fn_sort_item">
                                    <input type="hidden" name="labels[id][]" value="">
                                    <div class="okay_list_boding okay_list_order_stg_lbl_name">
                                        <input type="text" class="form-control" name="labels[name][]" value="">
                                    </div>
                                    <div class="okay_list_boding okay_list_order_stg_sts_label">
                                        <input name="labels[color][]" value="" class="hidden">
                                        <span data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->order_settings_select_colour, ENT_QUOTES, 'UTF-8', true);?>
" class="fn_color label_color_item hint-bottom-middle-t-info-s-small-mobile  hint-anim"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="okay_list_footer ">
                            <div class="okay_list_foot_left">
                                <div class="okay_list_heading okay_list_check hidden">
                                    <input class="hidden_check fn_check_all" type="checkbox" id="check_all_4" name="" value=""/>
                                    <label class="okay_ckeckbox" for="check_all_4"></label>
                                </div>
                            </div>
                            <button type="submit" value="labels" class="btn btn_small btn_blue">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"order_settings_custom_block"),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable3);
if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
    <div class="custom_block fn_toggle_wrap">
        <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

    </div>
<?php }?>


<link rel="stylesheet" media="screen" type="text/css" href="design/js/colorpicker/css/colorpicker.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="design/js/colorpicker/js/colorpicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function() {
        var new_label = $(".fn_new_label").clone(true);
        $(".fn_new_label").remove();

        var new_status = $(".fn_new_status").clone(true);
        $(".fn_new_status").remove();

        $(document).on("click", ".fn_add_Label", function () {
           clone_label = new_label.clone(true);
           clone_label_classes = clone_label.addClass("fn_ancor_label");
           $(".fn_labels_list").append(clone_label);

           setTimeout(function () {
            setChanges2();
            }, 100);

            function setChanges2() {
                $(clone_label_classes).each(function () {
                    $('html, body').animate({
                        scrollTop: clone_label_classes.offset().top - 70
                    }, 2000);
                });
            }
        });

        $(document).on("click", ".fn_add_status", function () {
            clone_status = new_status.clone(true);
            clone_status_classes = clone_status.addClass("fn_ancor_status");
            clone_status.find("select").selectpicker();
            $(".fn_status_list").append(clone_status);

            setTimeout(function () {
            setChanges();
            }, 100);

            function setChanges() {
                $(clone_status_classes).each(function () {
                    $('html, body').animate({
                        scrollTop: clone_status_classes.offset().top - 70
                    }, 2000);
                });
            }
        });

        $(document).on("mouseenter click", ".fn_color", function () {
            var elem = $(this);
            elem.ColorPicker({
                onChange: function (hsb, hex, rgb) {
                    elem.css('backgroundColor', '#' + hex);
                    elem.prev().val(hex);
                }
            });
        });

    });
<?php echo '</script'; ?>
>

<?php }
}
