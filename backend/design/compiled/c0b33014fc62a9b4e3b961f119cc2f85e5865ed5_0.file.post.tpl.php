<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:31:35
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644def27cadb10_97432185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0b33014fc62a9b4e3b961f119cc2f85e5865ed5' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/post.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 4,
    'file:learning_hints.tpl' => 1,
    'file:tinymce_init.tpl' => 1,
  ),
),false)) {
function content_644def27cadb10_97432185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'category_select' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/c0b33014fc62a9b4e3b961f119cc2f85e5865ed5_0.file.post.tpl.php',
    'uid' => 'c0b33014fc62a9b4e3b961f119cc2f85e5865ed5',
    'call_name' => 'smarty_template_function_category_select_277223810644def27b631f2_08936879',
  ),
));
if ($_smarty_tpl->tpl_vars['post']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['post']->value->name ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->post_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php if (!$_smarty_tpl->tpl_vars['post']->value->id) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_add, ENT_QUOTES, 'UTF-8', true);?>

                <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>
                <div class="box_btn_heading">
                    <a class="btn btn_small btn-info add" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'post','url'=>$_smarty_tpl->tpl_vars['post']->value->url,'absolute'=>1),$_smarty_tpl ) );?>
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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_added, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_updated, ENT_QUOTES, 'UTF-8', true);?>

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
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'global_url_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->global_url_exists, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_name') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_title, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'empty_url') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enter_url, ENT_QUOTES, 'UTF-8', true);?>

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

<form method="post" enctype="multipart/form-data" class="fn_fast_button">
    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
    <input type="hidden" name="lang_id" value="<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
" />

    <div class="row">
        <div class="col-xs-12 ">
            <div class="boxed match_matchHeight_true">
                                <div class="row d_flex">
                    <div class="col-lg-10 col-md-9 col-sm-12">
                        <div class="fn_step-1">
                            <div class="heading_label">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                <input name="id" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-md-10">
                                <div class="fn_step-2">
                                    <div class="input-group input-group--dabbl">
                                        <span class="input-group-addon input-group-addon--left">URL</span>
                                        <input name="url" class="fn_meta_field form-control fn_url <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>fn_disabled<?php }?>" <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>readonly=""<?php }?> type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        <input type="checkbox" id="block_translit" class="hidden" value="1" <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>checked=""<?php }?>>
                                        <span class="input-group-addon fn_disable_url">
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->id) {?>
                                                <i class="fa fa-lock"></i>
                                            <?php } else { ?>
                                                <i class="fa fa-lock fa-unlock"></i>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"post_general"),$_smarty_tpl ) );?>

                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12">
                        <div class="activity_of_switch">
                            <div class="fn_step-3 activity_of_switch_item">                                 <div class="okay_switch clearfix">
                                    <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="visible" value='1' type="checkbox" id="visible_checkbox" <?php if ($_smarty_tpl->tpl_vars['post']->value->visible) {?>checked=""<?php }?>/>
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
                        <div class="activity_of_switch_item">                             <div class="okay_switch clearfix">
                                <label class="switch_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_table_content, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                <label class="switch switch-default">
                                    <input class="switch-input" name="show_table_content" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['post']->value->show_table_content) {?>checked=""<?php }?>/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                        </div>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"post_switch_checkboxes"),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-lg-4 col-md-12 pr-0">
            <div class="fn_step-4 boxed fn_toggle_wrap min_height_250px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_image, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <ul class="brand_images_list">
                        <li class="brand_image_item fn_image_block">
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                                <input type="hidden" class="fn_accept_delete" name="delete_image" value="">
                                <div class="fn_parent_image">
                                    <div class="category_image image_wrapper fn_image_wrapper text-xs-center">
                                        <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                        <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,300,120,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir ));?>
" alt="" />
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="fn_parent_image"></div>
                            <?php }?>
                            <div class="fn_upload_image dropzone_block_image <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?> hidden<?php }?>">
                                <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                <input class="dropzone_image" name="image" type="file" />
                            </div>
                            <div class="category_image image_wrapper fn_image_wrapper fn_new_image text-xs-center hidden">
                                <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                <img src="" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"post_image"),$_smarty_tpl ) );?>

            </div>
        </div>
                <div class="col-lg-8 col-md-12">
            <div class="fn_step-5 boxed fn_toggle_wrap min_height_250px">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="<?php if (!$_smarty_tpl->tpl_vars['authors']->value) {?>hidden<?php }?>">
                                    <div class="heading_label">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_author, ENT_QUOTES, 'UTF-8', true);?>

                                    </div>
                                    <div class="">
                                        <select name="author_id" class="selectpicker form-control mb-1 fn_meta_author" data-live-search="true">
                                            <option value="0" <?php if (!$_smarty_tpl->tpl_vars['post']->value->author_id) {?>selected=""<?php }?> data-author_name=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_not_set, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['author']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value->author_id == $_smarty_tpl->tpl_vars['author']->value->id) {?>selected=""<?php }?> data-author_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['author']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['author']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="">
                                    <div class="heading_label heading_label--required">
                                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    </div>
                                    <div id="product_cats" class="clearfix">
                                        <?php $_smarty_tpl->_assignInScope('first_category', reset($_smarty_tpl->tpl_vars['post_categories']->value));?>
                                        <select class="selectpicker form-control  mb-1 fn_post_category fn_meta_categories" data-live-search="true">
                                            <option value="0" selected="" disabled="" data-category_name=""><?php echo $_smarty_tpl->tpl_vars['btr']->value->product_select_category;?>
</option>
                                            
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

                                        </select>
                                        <div id="sortable_cat" class="fn_post_categories_list clearfix">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_categories']->value, 'post_category');
$_smarty_tpl->tpl_vars['post_category']->index = -1;
$_smarty_tpl->tpl_vars['post_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post_category']->value) {
$_smarty_tpl->tpl_vars['post_category']->do_else = false;
$_smarty_tpl->tpl_vars['post_category']->index++;
$_smarty_tpl->tpl_vars['post_category']->first = !$_smarty_tpl->tpl_vars['post_category']->index;
$__foreach_post_category_2_saved = $_smarty_tpl->tpl_vars['post_category'];
?>
                                                <div class="fn_category_item product_category_item <?php if ($_smarty_tpl->tpl_vars['post_category']->first) {?>first_category<?php }?>">
                                                    <span class="product_cat_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                    <label class="fn_delete_post_cat fa fa-times" for="id_<?php echo $_smarty_tpl->tpl_vars['post_category']->value->id;?>
"></label>
                                                    <input id="id_<?php echo $_smarty_tpl->tpl_vars['post_category']->value->id;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['post_category']->value->id;?>
" data-cat_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post_category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" checked="" name="categories[]">
                                                </div>
                                            <?php
$_smarty_tpl->tpl_vars['post_category'] = $__foreach_post_category_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                        <div class="fn_category_item fn_new_category_item product_category_item">
                                            <span class="product_cat_name"></span>
                                            <label class="fn_delete_post_cat fa fa-times" for=""></label>
                                            <input id="" type="checkbox" value="" name="categories[]" data-cat_name="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="mb-1">
                                        <input name="date" class="form-control" type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date ));?>
" />
                                    </div>
                                </div>
                                <div class="">
                                    <div class="heading_label" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_update_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="mb-1">
                                        <input name="updated_date" class="form-control" type="text" value="<?php if (!empty($_smarty_tpl->tpl_vars['post']->value->updated_date)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->updated_date ));
}?>" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="">
                                    <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_read_time, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="">
                                        <input name="read_time" class="form-control" type="text" value="<?php echo intval($_smarty_tpl->tpl_vars['post']->value->read_time);?>
" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12 pr-0">
            <div class="fn_step-6 boxed fn_toggle_wrap min_height_230px">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['backend_compact_product_list'][0], array( array('title'=>$_smarty_tpl->tpl_vars['btr']->value->general_recommended,'name'=>'related_products','products'=>$_smarty_tpl->tpl_vars['related_products']->value,'label'=>$_smarty_tpl->tpl_vars['btr']->value->general_recommended_add,'placeholder'=>$_smarty_tpl->tpl_vars['btr']->value->general_add_product),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"post_related_products"),$_smarty_tpl ) );?>

            </div>
        </div>
        <div class="col-lg-4">
            <div class="boxed min_height_230px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->post_rating, ENT_QUOTES, 'UTF-8', true);?>

                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="heading_label">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating_value, ENT_QUOTES, 'UTF-8', true);?>

                        <span class="font-weight-bold fn_show_rating"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->rating, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </div>
                    <div class="raiting_boxed">
                        <input class="fn_rating_value" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->rating, ENT_QUOTES, 'UTF-8', true);?>
" name="rating" />
                        <input class="fn_rating range_input" type="range" min="1" max="5" step="0.1" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->rating, ENT_QUOTES, 'UTF-8', true);?>
" />

                        <div class="raiting_range_number">
                            <span class="float-xs-left">1</span>
                            <span class="float-xs-right">5</span>
                        </div>
                    </div>
                    <div class="heading_label">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->product_rating_number, ENT_QUOTES, 'UTF-8', true);?>

                        <input type="text" class="form-control" name="votes" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->votes, ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"post_rationg"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="fn_step-7 boxed match fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_metatags, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card row">
                    <div class="col-lg-6 col-md-6">
                        <div class="heading_label" >Meta-title <span id="fn_meta_title_counter"></span></div>
                        <input name="meta_title" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_title, ENT_QUOTES, 'UTF-8', true);?>
" />
                        <div class="heading_label" >Meta-keywords</div>
                        <input name="meta_keywords" class="form-control fn_meta_field mb-h" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_keywords, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>

                    <div class="col-lg-6 col-md-6 pl-0">
                        <div class="heading_label" >Meta-description <span id="fn_meta_description_counter"></span></div>
                        <textarea name="meta_description" class="form-control okay_textarea fn_meta_field"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->meta_description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"post_meta"),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"post_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="row custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>
    
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="fn_step-8 boxed match fn_toggle_wrap tabs">
                <div class="heading_tabs">
                    <div class="tab_navigation">
                        <a href="#tab1" class="heading_box tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_short_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <a href="#tab2" class="heading_box tab_navigation_link"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_full_description, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </div>
                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="icon-arrow-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="tab_container">
                        <div id="tab1" class="tab">
                            <textarea name="annotation" id="annotation" class="editor_small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                        <div id="tab2" class="tab">
                            <textarea id="fn_editor" name="description" class="editor_large fn_editor_class"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->description, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-12 col-md-12 mt-1">
                       <button id="fast_save_button_and_quit" type="submit" class="btn btn_small btn_blue float-md-right ml-1" name="apply_and_quit" value="1">
                           <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                           <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply_and_quit, ENT_QUOTES, 'UTF-8', true);?>
</span>
                       </button>
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
</form>

<?php $_smarty_tpl->_subTemplateRender('file:learning_hints.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hintId'=>'hint_post'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:tinymce_init.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="design/js/autocomplete/jquery.autocomplete-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).on("input", ".fn_rating", function () {
            $(".fn_show_rating").html($(this).val());
            $(".fn_rating_value").val($(this).val());
        });
        
        $(window).on("load", function() {
            $('input[name="date"]').datepicker();
            $('input[name="updated_date"]').datepicker();

            var clone_cat = $(".fn_new_category_item").clone();
            $(".fn_new_category_item").remove();
            clone_cat.removeClass("fn_new_category_item");
            $(document).on("change", ".fn_post_category select", function () {
                var clone = clone_cat.clone();
                clone.find("label").attr("for","id_"+$(this).find("option:selected").val());
                clone.find("span").html($(this).find("option:selected").data("category_name"));
                clone.find("input").attr("id","id_"+$(this).find("option:selected").val());
                clone.find("input").val($(this).find("option:selected").val());
                clone.find("input").attr("checked",true);
                clone.find("input").attr("data-cat_name",$(this).find("option:selected").data("category_name"));
                $(".fn_post_categories_list").append(clone);
                if ($(".fn_category_item").size() == 1) {
                    change_post_category();
                }
            });
            $(document).on("click", ".fn_delete_post_cat", function () {
                var item = $(this).closest(".fn_category_item"),
                    is_first = item.hasClass("first_category");
                item.remove();
                if (is_first && $(".fn_category_item").size() > 0) {
                    change_post_category();
                }
            });

            var el = document.getElementById('sortable_cat');
            var sortable = Sortable.create(el, {
                handle: ".product_cat_name",  // Drag handle selector within list items
                sort: true,  // sorting inside list
                animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation

                ghostClass: "sortable-ghost",  // Class name for the drop placeholder
                chosenClass: "sortable-chosen",  // Class name for the chosen item
                dragClass: "sortable-drag",  // Class name for the dragging item
                scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
                scrollSpeed: 10, // px
                // Changed sorting within list
                onUpdate: function (evt) {
                    change_post_category();
                }
            });

            function change_post_category() {
                var wrapper = $(".fn_post_categories_list");
                wrapper.find("div.first_category").removeClass("first_category");
                wrapper.find("div.fn_category_item:first ").addClass("first_category");
                set_meta();
            }
        
        });
    <?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_category_select_277223810644def27b631f2_08936879 */
if (!function_exists('smarty_template_function_category_select_277223810644def27b631f2_08936879')) {
function smarty_template_function_category_select_277223810644def27b631f2_08936879(Smarty_Internal_Template $_smarty_tpl,$params) {
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
" <?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['first_category']->value->id) {?>selected<?php }?> data-category_name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>- <?php
}
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php
}}
/*/ smarty_template_function_category_select_277223810644def27b631f2_08936879 */
}
