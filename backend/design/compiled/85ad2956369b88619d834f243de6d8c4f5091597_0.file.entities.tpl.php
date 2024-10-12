<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:26:48
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Feeds/Backend/design/html/feed_tabs/entities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096de88c5015_12181359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ad2956369b88619d834f243de6d8c4f5091597' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Feeds/Backend/design/html/feed_tabs/entities.tpl',
      1 => 1728664430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 7,
  ),
),false)) {
function content_67096de88c5015_12181359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'render_condition_product' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/85ad2956369b88619d834f243de6d8c4f5091597_0.file.entities.tpl.php',
    'uid' => '85ad2956369b88619d834f243de6d8c4f5091597',
    'call_name' => 'smarty_template_function_render_condition_product_104759963367096de8835460_46489444',
  ),
  'render_condition_category' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/85ad2956369b88619d834f243de6d8c4f5091597_0.file.entities.tpl.php',
    'uid' => '85ad2956369b88619d834f243de6d8c4f5091597',
    'call_name' => 'smarty_template_function_render_condition_category_104759963367096de8835460_46489444',
  ),
  'category_select_2' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/85ad2956369b88619d834f243de6d8c4f5091597_0.file.entities.tpl.php',
    'uid' => '85ad2956369b88619d834f243de6d8c4f5091597',
    'call_name' => 'smarty_template_function_category_select_2_104759963367096de8835460_46489444',
  ),
  'render_condition_feature_value' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/85ad2956369b88619d834f243de6d8c4f5091597_0.file.entities.tpl.php',
    'uid' => '85ad2956369b88619d834f243de6d8c4f5091597',
    'call_name' => 'smarty_template_function_render_condition_feature_value_104759963367096de8835460_46489444',
  ),
  'render_condition_brand' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/85ad2956369b88619d834f243de6d8c4f5091597_0.file.entities.tpl.php',
    'uid' => '85ad2956369b88619d834f243de6d8c4f5091597',
    'call_name' => 'smarty_template_function_render_condition_brand_104759963367096de8835460_46489444',
  ),
  'render_condition' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/backend/design/compiled/85ad2956369b88619d834f243de6d8c4f5091597_0.file.entities.tpl.php',
    'uid' => '85ad2956369b88619d834f243de6d8c4f5091597',
    'call_name' => 'smarty_template_function_render_condition_104759963367096de8835460_46489444',
  ),
));
?>









<div class="fn_conditions_new">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition', array(), true);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_product', array(), true);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_category', array(), true);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_feature_value', array(), true);?>

    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_brand', array(), true);?>

</div>

<div class="row">
    <div class="col-md-12 col-lg-6 pr-0">
        <div class="boxed">
            <div class="heading_box mb-q">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__inclusions, ENT_QUOTES, 'UTF-8', true);?>

                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__inclusions_faq, ENT_QUOTES, 'UTF-8', true);?>
">
                    <svg width="20px" height="20px" viewBox="0 0 438.533 438.533"><path fill="currentColor" d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"></path></svg>
                </i>
                <div class="box_btn_heading ml-1">
                    <button class="fn_add_condition btn btn_mini btn-secondary" data-type="inclusion" type="button">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
            <div class="content row">
                <div class="col-md-12">
                    <div class="fn_conditions fn_inclusions">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conditions']->value['inclusions'], 'inclusion');
$_smarty_tpl->tpl_vars['inclusion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inclusion']->value) {
$_smarty_tpl->tpl_vars['inclusion']->do_else = false;
?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition', array('condition'=>$_smarty_tpl->tpl_vars['inclusion']->value), true);?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6">
        <div class="boxed">
            <div class="heading_box mb-q">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__exclusions, ENT_QUOTES, 'UTF-8', true);?>

                <i class="fn_tooltips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__exclusions_faq, ENT_QUOTES, 'UTF-8', true);?>
">
                    <svg width="20px" height="20px" viewBox="0 0 438.533 438.533"><path fill="currentColor" d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"></path></svg>
                </i>
                <div class="box_btn_heading ml-1">
                    <button class="fn_add_condition btn btn_mini btn-secondary" data-type="exclusion" type="button">
                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'plus'), 0, true);
?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
            <div class="content row">
                <div class="col-md-12">
                    <div class="fn_conditions fn_exclusions">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conditions']->value['exclusions'], 'exclusion');
$_smarty_tpl->tpl_vars['exclusion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['exclusion']->value) {
$_smarty_tpl->tpl_vars['exclusion']->do_else = false;
?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition', array('condition'=>$_smarty_tpl->tpl_vars['exclusion']->value), true);?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 src="design/js/autocomplete/jquery.autocomplete-min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function() {
        let inclusionsContainer = $('.fn_conditions.fn_inclusions'),
            exclusionsContainer = $('.fn_conditions.fn_exclusions'),
            newCondition = $('.fn_conditions_new .fn_condition').clone(false),
            newConditionProduct = $('.fn_conditions_new .fn_condition_product').clone(false),
            newConditionCategory = $('.fn_conditions_new .fn_condition_category').clone(false),
            newConditionFeatureValue = $('.fn_conditions_new .fn_condition_feature_value').clone(false),
            newConditionBrand = $('.fn_conditions_new .fn_condition_brand').clone(false);

        $('.fn_conditions_new').html('');

        $('.fn_condition_product').not('.fn_conditions_new .fn_condition_product').each(function(i, el) {
            initProductList($(el).find('.fn_card.fn_sort_list'));
        })

        $(document).on('click', '.fn_add_condition', function() {
            addCondition($(this).data('type'));
        });

        function addCondition(type) {
            let condition = newCondition.clone(false),
                el = newConditionProduct.clone(false),
                id = Date.now();

            if (type === 'inclusion') {
                inclusionsContainer.append(condition);
            } else if (type === 'exclusion') {
                exclusionsContainer.append(condition);
            }

            condition.find('.fn_condition_container').html(el);

            condition.data('id', id);
            condition.data('type', type);

            initNames(condition, condition.data('id'), condition.data('type'));

            condition.find('.selectpicker').selectpicker();
            if (el.find('.fn_card.fn_sort_list').length > 0) {
                initProductList(el.find('.fn_card.fn_sort_list'));
            }
        }

        $(document).on('click', '.fn_delete_condition', function() {
            $(this).closest('.fn_condition').remove();
        })

        $(document).on('change', 'select.fn_condition_type', function() {
            let condition = $(this).closest('.fn_condition'),
                el;

            switch ($(this).val()) {
                case 'product':
                    el = newConditionProduct.clone(false);
                    break;
                case 'category':
                    el = newConditionCategory.clone(false);
                    break;
                case 'feature_value':
                    el = newConditionFeatureValue.clone(false);
                    break;
                case 'brand':
                    el = newConditionBrand.clone(false);
                    break;
            }

            condition.find('.fn_condition_container').html(el);

            initNames(el, condition.data('id'), condition.data('type'));

            el.find('.selectpicker').selectpicker();
            if (el.find('.fn_card.fn_sort_list').length > 0) {
                initProductList(el.find('.fn_card.fn_sort_list'));
            }
        });

        $(document).on('change', '.fn_features select', function() {
            let condition = $(this).closest('.fn_condition'),
                selectContainer = $(this).closest('.fn_condition_feature_value').find('.fn_feature_values');

            $.ajax({
                url: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'OkayCMS.Feeds.FeedAdmin@getFeatureValues'),$_smarty_tpl ) );?>
',
                data: {
                    feature_id: $(this).val()
                },
                success: function(featureValues) {
                    if (featureValues.length > 0) {
                        selectContainer.html(`
                            <div class="heading_label heading_label--required">
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__select_feature_values, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                            <select class="form-control mb-1" name="new_conditions[condition_type][id][entities][]" data-actions-box="true" multiple></select>
                        `);

                        let select = selectContainer.find('select');

                        for (let featureValue of featureValues) {
                            select.append(`<option value="${featureValue.id}">${featureValue.value}</option>`);
                        }

                        initNames(selectContainer, condition.data('id'), condition.data('type'));

                        select.selectpicker();
                    } else {
                        selectContainer.html('Нет значений');
                    }
                }
            });
        });

        function initNames(el, id, type) {
            el.find('input, select').each(function(i, el) {
                if ($(el).attr('name')) {
                    $(el).attr('name', $(el).attr('name').replace('[id]', `[${id}]`));
                    $(el).attr('name', $(el).attr('name').replace('[condition_type]', `[${type}]`));
                }
            })
        }

        function initProductList(el) {
            let compact_product_list_item_add = el.find('.fn_compact_product_list_item_add').clone(true),
                compact_product_list_input = el.find("input.fn_compact_product_list"),
                compact_product_list = el.find(".compact_product_list");
            el.find('.fn_compact_product_list_item_add').remove();
            compact_product_list_input.removeAttr('id');
            compact_product_list_input.devbridgeAutocomplete({
                serviceUrl:'ajax/search_products.php',
                type: 'POST',
                minChars:0,
                orientation:'auto',
                noCache: false,
                onSelect:
                    function(suggestion){
                        compact_product_list_input.val('').focus().blur();
                        new_item = compact_product_list_item_add.clone().appendTo(compact_product_list);
                        new_item.find('a.compact_list_product_name').html(suggestion.data.name);
                        new_item.find('a.compact_list_product_name').attr('href', 'index.php?controller=ProductAdmin&id='+suggestion.data.id);
                        new_item.find('input').val(suggestion.data.id);
                        if(suggestion.data.image) {
                            new_item.find('img.product_icon').attr("src", suggestion.data.image);
                        }
                        else {
                            new_item.find('img.product_icon').remove();
                        }
                        new_item.show();
                    },
                formatResult:
                    function(suggestions, currentValue){
                        var reEscape = new RegExp('(\\' + ['/', '.', '*', '+', '?', '|', '(', ')', '[', ']', '{', '}', '\\'].join('|\\') + ')', 'g');
                        var pattern = '(' + currentValue.replace(reEscape, '\\$1') + ')';
                        return "<div>" + (suggestions.data.image?"<img align=absmiddle src='"+suggestions.data.image+"'> ":'') + "</div>" +  "<span>" + suggestions.value.replace(new RegExp(pattern, 'gi'), '<strong>$1<\/strong>') + "</span>";
                    }
            });

            $(document).on( "click", ".fn_remove_item", function() {
                $(this).closest(".fn_row").fadeOut(200, function() { $(this).remove(); });
                return false;
            });
        }
    });
<?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_render_condition_product_104759963367096de8835460_46489444 */
if (!function_exists('smarty_template_function_render_condition_product_104759963367096de8835460_46489444')) {
function smarty_template_function_render_condition_product_104759963367096de8835460_46489444(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="fn_condition_product row mb-1">
        <div class="col-md-12">
            <div class="toggle_body_wrap on fn_card fn_sort_list">
                <div class="d_flex">
                    <div class="f_col-lg">
                        <div class="heading_label heading_label--required">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__select_products, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                        <div class="autocomplete_arrow">
                            <input type=text name=related class="form-control fn_compact_product_list" placeholder='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__product_add, ENT_QUOTES, 'UTF-8', true);?>
'>
                        </div>
                    </div>
                    <div class="activity_of_switch activity_of_switch--left mt-2 ml-1">
                        <div class="activity_of_switch_item">
                            <div class="okay_switch clearfix">
                                <label class="switch_label">Все</label>
                                <label class="switch switch-default">
                                    <input
                                        class="switch-input"
                                        <?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>
                                            name="conditions[<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
][all_entities]"
                                        <?php } else { ?>
                                            name="new_conditions[condition_type][id][all_entities]"
                                        <?php }?>
                                        value="1"
                                        type="checkbox"
                                        id="example_checkbox"
                                        <?php if ($_smarty_tpl->tpl_vars['condition']->value->all_entities) {?>
                                            checked
                                        <?php }?>
                                    >
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="okay_list ok_feed_condition_list">
                    <div class="okay_list_body compact_product_list sortable">
                        <?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condition']->value->entities, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <div class="fn_row okay okay_list_body_item fn_sort_item">
                                    <div class="okay_list_row">
                                        <div class="okay_list_boding okay_list_drag move_zone">
                                            <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                        </div>
                                        <div class="okay_list_boding okay_list_related_photo">
                                            <input type="hidden" name=conditions[<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
][entities][] value='<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'>
                                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id),$_smarty_tpl ) );?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['product']->value->image) {?>
                                                    <img class="product_icon" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->image->filename,40,40 ));?>
'>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value->images[0]) {?>
                                                    <img class="product_icon" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->images[0]->filename,40,40 ));?>
'>
                                                <?php } else { ?>
                                                    <img class="product_icon" src="design/images/no_image.png" width="40">
                                                <?php }?>
                                            </a>
                                        </div>
                                        <div class="okay_list_boding okay_list_related_name">
                                            <a class="link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('controller'=>'ProductAdmin','id'=>$_smarty_tpl->tpl_vars['product']->value->id),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                        </div>
                                        <div class="okay_list_boding okay_list_close">
                                            <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile hint-anim">
                                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>

                        <div class="fn_row okay okay_list_body_item fn_sort_item fn_compact_product_list_item_add" style='display:none;'>
                            <div class="okay_list_row">
                                <div class="okay_list_boding okay_list_drag move_zone">
                                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'drag_vertical'), 0, true);
?>
                                </div>
                                <div class="okay_list_boding okay_list_related_photo">
                                    <input type="hidden" name="<?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>conditions[<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
][entities][]<?php } else { ?>new_conditions[condition_type][id][entities][]<?php }?>" value="">
                                    <img class=product_icon src="">
                                </div>
                                <div class="okay_list_boding okay_list_related_name">
                                    <a class="link compact_list_product_name" href=""></a>
                                </div>
                                <div class="okay_list_boding okay_list_close">
                                    <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete_product, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove_item hint-bottom-right-t-info-s-small-mobile hint-anim">
                                        <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'trash'), 0, true);
?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_render_condition_product_104759963367096de8835460_46489444 */
/* smarty_template_function_category_select_2_104759963367096de8835460_46489444 */
if (!function_exists('smarty_template_function_category_select_2_104759963367096de8835460_46489444')) {
function smarty_template_function_category_select_2_104759963367096de8835460_46489444(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('selected_id'=>$_smarty_tpl->tpl_vars['product_category']->value,'level'=>0), $params);
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
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
" <?php if ($_smarty_tpl->tpl_vars['condition']->value && in_array($_smarty_tpl->tpl_vars['category']->value->id,$_smarty_tpl->tpl_vars['condition']->value->entity_ids)) {?> selected <?php }?>><?php
$__section_sp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sp_0_total = $__section_sp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sp'] = new Smarty_Variable(array());
if ($__section_sp_0_total !== 0) {
for ($__section_sp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index'] = 0; $__section_sp_0_iteration <= $__section_sp_0_total; $__section_sp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sp']->value['index']++){
?>&nbsp;&nbsp;&nbsp;&nbsp;<?php
}
}
echo $_smarty_tpl->tpl_vars['category']->value->name;?>
</option>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select_2', array('categories'=>$_smarty_tpl->tpl_vars['category']->value->subcategories,'selected_id'=>$_smarty_tpl->tpl_vars['selected_id']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
}}
/*/ smarty_template_function_category_select_2_104759963367096de8835460_46489444 */
/* smarty_template_function_render_condition_category_104759963367096de8835460_46489444 */
if (!function_exists('smarty_template_function_render_condition_category_104759963367096de8835460_46489444')) {
function smarty_template_function_render_condition_category_104759963367096de8835460_46489444(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="fn_condition_category row">
        <div class="col-md-12 form_group">
            <div class="heading_label heading_label--required">
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__select_categories, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
            <select class="selectpicker form-control mb-1" name="<?php if (!$_smarty_tpl->tpl_vars['condition']->value) {?>new_conditions[condition_type][id][entities][]<?php } else { ?>conditions[<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
][entities][]<?php }?>" data-actions-box="true" multiple>
                
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'category_select_2', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value), true);?>

            </select>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_render_condition_category_104759963367096de8835460_46489444 */
/* smarty_template_function_render_condition_feature_value_104759963367096de8835460_46489444 */
if (!function_exists('smarty_template_function_render_condition_feature_value_104759963367096de8835460_46489444')) {
function smarty_template_function_render_condition_feature_value_104759963367096de8835460_46489444(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="fn_condition_feature_value row">
        <div class="fn_features col-md-6 form_group">
            <div class="heading_label heading_label--required">
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__select_feature, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
            <select class="selectpicker form-control mb-1" <?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>disabled<?php }?>>
                <?php if (!$_smarty_tpl->tpl_vars['condition']->value) {?>
                    <option value="0" selected disabled><?php echo $_smarty_tpl->tpl_vars['feature']->value->name;?>
</option>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['condition']->value && $_smarty_tpl->tpl_vars['feature']->value->id == $_smarty_tpl->tpl_vars['condition']->value->all_entities[0]->feature_id) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['feature']->value->name;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="fn_feature_values col-md-6 form_group">
            <?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>
                <div class="heading_label heading_label--required">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__select_feature_values, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </div>
                <select class="selectpicker form-control mb-1" name="conditions[<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
][entities][]" data-actions-box="true" multiple>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condition']->value->all_entities, 'entity');
$_smarty_tpl->tpl_vars['entity']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entity']->value) {
$_smarty_tpl->tpl_vars['entity']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['entity']->value->id;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['entity']->value->id,$_smarty_tpl->tpl_vars['condition']->value->entity_ids)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['entity']->value->value;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php }?>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_render_condition_feature_value_104759963367096de8835460_46489444 */
/* smarty_template_function_render_condition_brand_104759963367096de8835460_46489444 */
if (!function_exists('smarty_template_function_render_condition_brand_104759963367096de8835460_46489444')) {
function smarty_template_function_render_condition_brand_104759963367096de8835460_46489444(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="fn_condition_brand row">
        <div class="col-md-12 form_group">
            <div class="heading_label heading_label--required">
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__select_brands, ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
            <select class="selectpicker form-control mb-1" name="<?php if (!$_smarty_tpl->tpl_vars['condition']->value) {?>new_conditions[condition_type][id][entities][]<?php } else { ?>conditions[<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
][entities][]<?php }?>" data-actions-box="true" multiple>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['condition']->value && in_array($_smarty_tpl->tpl_vars['brand']->value->id,$_smarty_tpl->tpl_vars['condition']->value->entity_ids)) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['brand']->value->name;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_render_condition_brand_104759963367096de8835460_46489444 */
/* smarty_template_function_render_condition_104759963367096de8835460_46489444 */
if (!function_exists('smarty_template_function_render_condition_104759963367096de8835460_46489444')) {
function smarty_template_function_render_condition_104759963367096de8835460_46489444(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="fn_condition feed_condition_item row" <?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
" data-type="$condition->type"<?php }?>>
        <div class="col-md-12">
            <div class="d_flex">
                <div class="feed_select_type">
                    <div class="heading_label heading_label--required">
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__select_entity, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </div>
                    <select class="fn_condition_type selectpicker form-control mb-1" name="<?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>conditions[<?php echo $_smarty_tpl->tpl_vars['condition']->value->id;?>
][entity]<?php } else { ?>new_conditions[condition_type][id][entity]<?php }?>" <?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>disabled<?php }?>>
                        <option value="product" <?php if ($_smarty_tpl->tpl_vars['condition']->value && $_smarty_tpl->tpl_vars['condition']->value->entity === 'product') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__product;?>
</option>
                        <option value="category" <?php if ($_smarty_tpl->tpl_vars['condition']->value && $_smarty_tpl->tpl_vars['condition']->value->entity === 'category') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__category;?>
</option>
                        <option value="feature_value" <?php if ($_smarty_tpl->tpl_vars['condition']->value && $_smarty_tpl->tpl_vars['condition']->value->entity === 'feature_value') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__feature_value;?>
</option>
                        <option value="brand" <?php if ($_smarty_tpl->tpl_vars['condition']->value && $_smarty_tpl->tpl_vars['condition']->value->entity === 'brand') {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__brand;?>
</option>
                    </select>
                </div>
                <button type="button" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__feeds__feed__entities__delete, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn_close feed_condition_delete fn_delete_condition hint-bottom-right-t-info-s-small-mobile hint-anim">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'delete'), 0, true);
?>
                </button>
            </div>
        </div>
        <div class="fn_condition_container col-md-12">
            <?php if ($_smarty_tpl->tpl_vars['condition']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['condition']->value->entity === 'product') {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_product', array('condition'=>$_smarty_tpl->tpl_vars['condition']->value), true);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->entity === 'category') {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_category', array('condition'=>$_smarty_tpl->tpl_vars['condition']->value), true);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->entity === 'feature_value') {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_feature_value', array('condition'=>$_smarty_tpl->tpl_vars['condition']->value), true);?>

                <?php } elseif ($_smarty_tpl->tpl_vars['condition']->value->entity === 'brand') {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'render_condition_brand', array('condition'=>$_smarty_tpl->tpl_vars['condition']->value), true);?>

                <?php }?>
            <?php }?>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_render_condition_104759963367096de8835460_46489444 */
}
