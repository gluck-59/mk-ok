<?php
/* Smarty version 3.1.40, created on 2023-05-01 21:54:13
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644feeb5aa0f28_17853726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07a3d33fd6e8da599848e82d559cfa6fe4334894' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/categories.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
    'file:categories_ajax.tpl' => 1,
    'file:learning_hints.tpl' => 1,
  ),
),false)) {
function content_644feeb5aa0f28_17853726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->general_categories ,false ,32);?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['categoriesCount']->value;?>

            </div>
            <div class="box_btn_heading">
                <a class="fn_learning_create_category btn btn_small btn-info" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'CategoryAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="boxed fn_toggle_wrap">
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"categories_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
        <div class="fn_toggle_wrap custom_block">
            <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
        <form method="post" class="fn_form_list fn_fast_button">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
" />
            <div class="okay_list products_list fn_sort_list">
                                <div class="okay_list_head">
                    <div class="okay_list_heading okay_list_subicon">
                        <a href="javascript:;" class="fn_open_all">
                            <i class="fa fa-plus-square"></i>
                        </a>
                    </div>
                    <div class="okay_list_heading okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_photo hidden-sm-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_photo, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_categories_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_enable, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>

                                <div class="okay_list_body categories_wrap sortable fn_categories_block">
                    <?php $_smarty_tpl->_subTemplateRender("file:categories_ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('level'=>1), 0, false);
?>
                </div>

                                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_heading okay_list_subicon"></div>
                        <div class="okay_list_heading okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker form-control">
                                <option value="enable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_enable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="disable"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_do_disable, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="duplicate"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_create_dublicate, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn_small btn_blue">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->categories_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:learning_hints.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hintId'=>'hint_categories'), 0, false);
?>

<?php echo '<script'; ?>
>
    $(document).on("click", ".fn_open_all", function () {
        let that = $(this);
        $.ajax({
            dataType: 'json',
            url: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'CategoriesAdmin@getAllCategories'),$_smarty_tpl ) );?>
",
            success: function(data){
                var msg = "";

                if(data.success){
                    $(".fn_categories_block").html(data.cats);
                } else {
                    toastr.error(msg, "Error");
                }

                var el = document.querySelectorAll("div.sortable , .fn_ajax_categories.sortable");
                for (i = 0; i < el.length; i++) {
                    var sortable = Sortable.create(el[i], {
                        handle: ".move_zone",  // Drag handle selector within list items
                        sort: true,  // sorting inside list
                        animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation
                        scroll: true, // or HTMLElement
                        ghostClass: "sortable-ghost",  // Class name for the drop placeholder
                        chosenClass: "sortable-chosen",  // Class name for the chosen item
                        dragClass: "sortable-drag",  // Class name for the dragging item
                        scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
                        scrollSpeed: 10, // px
                    });
                }

                that.hide();
                
                <?php if ($_smarty_tpl->tpl_vars['config']->value->dev_mode) {?>
                $('.fn_backend_block_name').parent().addClass('backend_block_parent_element');
                $('.fn_backend_block_name').on('mouseover', function () {
                    $(this).parent().addClass('focus');
                });
                $('.fn_backend_block_name').on('mouseout', function () {
                    $(this).parent().removeClass('focus');
                });
                <?php }?>
            }
        });
        return false;
    });
    
    $(document).on("click", ".fn_ajax_toggle", function () {
        let elem = $(this);
        let toggle = parseInt(elem.data("toggle"));
        let category_id = parseInt(elem.data("category_id"));
        if(toggle == 0){
            $.ajax({
                dataType: 'json',
                url: "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'CategoriesAdmin@getSubCategories'),$_smarty_tpl ) );?>
",
                data: {
                    category_id: category_id
                },
                success: function(data){
                    var msg = "";

                    if(data.success){
                        elem.closest(".fn_row").find(".fn_ajax_categories").html(data.cats);
                        elem.closest(".fn_row").find(".fn_ajax_categories").addClass("sortable");
                        elem.data("toggle",1);
                        elem.find("i").toggleClass("fa-minus-square");
                    } else {
                        toastr.error(msg, "Error");
                    }

                    var el = document.querySelectorAll("div.sortable , .fn_ajax_categories.sortable");
                    for (i = 0; i < el.length; i++) {
                        var sortable = Sortable.create(el[i], {
                            handle: ".move_zone",  // Drag handle selector within list items
                            sort: true,  // sorting inside list
                            animation: 150,  // ms, animation speed moving items when sorting, `0` — without animation
                            scroll: true, // or HTMLElement
                            ghostClass: "sortable-ghost",  // Class name for the drop placeholder
                            chosenClass: "sortable-chosen",  // Class name for the chosen item
                            dragClass: "sortable-drag",  // Class name for the dragging item
                            scrollSensitivity: 30, // px, how near the mouse must be to an edge to start scrolling.
                            scrollSpeed: 10, // px
                        });
                    }

                    <?php if ($_smarty_tpl->tpl_vars['config']->value->dev_mode) {?>
                        $('.fn_backend_block_name').parent().addClass('backend_block_parent_element');
                        $('.fn_backend_block_name').on('mouseover', function () {
                            $(this).parent().addClass('focus');
                        });
                        $('.fn_backend_block_name').on('mouseout', function () {
                            $(this).parent().removeClass('focus');
                        });
                    <?php }?>

                }
            });
        } else {
            elem.closest(".fn_row").children(".fn_ajax_categories").slideToggle(500);
            elem.find("i").toggleClass("fa-minus-square");
        }
    });

    // Дублировать товар
    $(document).on("click", ".fn_copy", function () {
        $('.fn_form_list input[type="checkbox"][name*="check"]').attr('checked', false);
        $(this).closest(".fn_form_list").find('select[name="action"] option[value=duplicate]').attr('selected', true);
        $(this).closest(".okay_list_row").find('input[type="checkbox"][name*="check"]').attr('checked', true).click();
        $(this).closest(".fn_form_list").submit();
    });

<?php echo '</script'; ?>
>
<?php }
}
