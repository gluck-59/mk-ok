<?php
/* Smarty version 3.1.40, created on 2023-05-01 23:39:43
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/categories_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6450076f9a9fa9_08321286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbe000ad2cb84405e33edc226092a236037f5f6' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/categories_ajax.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
    'file:categories_ajax.tpl' => 2,
  ),
),false)) {
function content_6450076f9a9fa9_08321286 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>fn_step-1 fn_sort_item <?php }?>fn_row okay_list_body_item">
            <div class="okay_list_row">
                <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->position, ENT_QUOTES, 'UTF-8', true);?>
" />

                <?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
                    <div class="okay_list_heading okay_list_subicon">
                        <a href="javascript:;" class="fn_ajax_toggle" data-toggle="<?php if ($_smarty_tpl->tpl_vars['isAllCategories']->value || (!empty($_GET['category_id']) && in_array($_GET['category_id'],$_smarty_tpl->tpl_vars['category']->value->children))) {?>1<?php } else { ?>0<?php }?>" data-category_id="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" >
                            <i class="fa fa-plus-square<?php if ($_smarty_tpl->tpl_vars['isAllCategories']->value || (!empty($_GET['category_id']) && in_array($_GET['category_id'],$_smarty_tpl->tpl_vars['category']->value->children))) {?> fa-minus-square<?php }?>"></i>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="okay_list_heading okay_list_subicon"></div>
                <?php }?>

                <div class="okay_list_boding okay_list_drag move_zone">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                </div>

                <div class="okay_list_boding okay_list_check">
                    <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" />
                    <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"></label>
                </div>

                <div class="okay_list_boding okay_list_photo hidden-sm-down">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value->image) {?>
                        <a href="<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'CategoriesAdmin','category_id'=>$_smarty_tpl->tpl_vars['category']->value->id),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'CategoryAdmin','id'=>$_smarty_tpl->tpl_vars['category']->value->id,'return'=>$_prefixVariable1),$_smarty_tpl ) );?>
">
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->image,55,55,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" alt="" />
                        </a>
                    <?php } else { ?>
                        <img height="55" width="55" src="design/images/no_image.png"/>
                    <?php }?>
                </div>

                <div class="okay_list_boding okay_list_categories_name">
                    <a href="<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'CategoriesAdmin','category_id'=>$_smarty_tpl->tpl_vars['category']->value->id),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'CategoryAdmin','id'=>$_smarty_tpl->tpl_vars['category']->value->id,'return'=>$_prefixVariable2),$_smarty_tpl ) );?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"categories_list_name",'vars'=>array('category'=>$_smarty_tpl->tpl_vars['category']->value)),$_smarty_tpl ) );?>

                </div>


                <div class="okay_list_boding okay_list_status">
                                        <div>
                        <label class="switch switch-default">
                            <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['category']->value->visible) {?>fn_active_class<?php }?>" data-controller="category" data-action="visible" data-id="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" name="visible" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['category']->value->visible) {?>checked=""<?php }?>/>
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>

                <div class="okay_list_setting">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"category",'url'=>$_smarty_tpl->tpl_vars['category']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
" target="_blank" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_view, ENT_QUOTES, 'UTF-8', true);?>
" class="setting_icon setting_icon_open hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_desktop'), 0, true);
?>
                    </a>
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_dublicate, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_copy fn_copy hint-bottom-middle-t-info-s-small-mobile  hint-anim">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'icon_copy'), 0, true);
?>
                    </button>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"categories_actions",'vars'=>array('category'=>$_smarty_tpl->tpl_vars['category']->value)),$_smarty_tpl ) );?>

                </div>
                <div class="okay_list_boding okay_list_close">
                                        <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                    </button>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['category']->value->subcategories) {?>
                <div class="fn_ajax_categories categories_sub_block sortable <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>subcategories_level_1<?php } else { ?>subcategories_level_2<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['isAllCategories']->value || (!empty($_GET['category_id']) && in_array($_GET['category_id'],$_smarty_tpl->tpl_vars['category']->value->children))) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:categories_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), 0, true);
?>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
