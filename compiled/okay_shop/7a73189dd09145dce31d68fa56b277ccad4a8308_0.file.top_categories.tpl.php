<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:23:16
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/top_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e186421b9c8_70862916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a73189dd09145dce31d68fa56b277ccad4a8308' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/top_categories.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
  ),
),false)) {
function content_670e186421b9c8_70862916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_has_main' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/compiled/okay_shop/7a73189dd09145dce31d68fa56b277ccad4a8308_0.file.top_categories.tpl.php',
    'uid' => '7a73189dd09145dce31d68fa56b277ccad4a8308',
    'call_name' => 'smarty_template_function_categories_has_main_839812715670e18641dd1c2_14748278',
  ),
  'has_main_categories' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/compiled/okay_shop/7a73189dd09145dce31d68fa56b277ccad4a8308_0.file.top_categories.tpl.php',
    'uid' => '7a73189dd09145dce31d68fa56b277ccad4a8308',
    'call_name' => 'smarty_template_function_has_main_categories_839812715670e18641dd1c2_14748278',
  ),
));
$_smarty_tpl->_assignInScope('has_main_categories', false ,false ,32);?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_has_main', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1), true);?>


<?php if ($_smarty_tpl->tpl_vars['has_main_categories']->value) {?>
<section class="container section_top_categories"> 
    <div class="block block--boxed block--border">
        <div class="block__header block__header--promo">
            <div class="block__title">
                <span data-language="main_popular_categories"><?php echo $_smarty_tpl->tpl_vars['lang']->value->main_popular_categories;?>
</span>
            </div>
        </div>

        <div class="block__body">
            <div class="f_row top_categories">
                
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'has_main_categories', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1), true);?>

            </div>
        </div>
    </div>
</section> 
<?php }
}
/* smarty_template_function_categories_has_main_839812715670e18641dd1c2_14748278 */
if (!function_exists('smarty_template_function_categories_has_main_839812715670e18641dd1c2_14748278')) {
function smarty_template_function_categories_has_main_839812715670e18641dd1c2_14748278(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['c']->value->visible && ($_smarty_tpl->tpl_vars['c']->value->has_products || $_smarty_tpl->tpl_vars['settings']->value->show_empty_categories)) {?>
                <?php if ($_smarty_tpl->tpl_vars['c']->value->on_main) {?>
                    <?php $_smarty_tpl->_assignInScope('has_main_categories', true ,false ,32);?>
                    <?php break 1;?>
                <?php }?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_has_main', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['has_main_categories']->value) {?>
                <?php break 1;?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}}
/*/ smarty_template_function_categories_has_main_839812715670e18641dd1c2_14748278 */
/* smarty_template_function_has_main_categories_839812715670e18641dd1c2_14748278 */
if (!function_exists('smarty_template_function_has_main_categories_839812715670e18641dd1c2_14748278')) {
function smarty_template_function_has_main_categories_839812715670e18641dd1c2_14748278(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->visible && ($_smarty_tpl->tpl_vars['c']->value->has_products || $_smarty_tpl->tpl_vars['settings']->value->show_empty_categories)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->on_main) {?>
                            <div class="top_categories__item f_col-6 f_col-md-4 f_col-xl-2">
                                <a class="top_categories__preview d-flex align-items-center flex-column" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
">
                                    <div class="top_categories__image d-flex align-items-center justify-content-center">
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                            <?php if (strtolower(pathinfo($_smarty_tpl->tpl_vars['c']->value->image,(defined('PATHINFO_EXTENSION') ? constant('PATHINFO_EXTENSION') : null))) == 'svg') {?>
                                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'read_svg' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,$_smarty_tpl->tpl_vars['config']->value->original_categories_dir ));?>

                                            <?php } else { ?>
                                            <picture>
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                                    <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,100,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir )) ));?>
">
                                                <?php }?>
                                                <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,100,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
">
                                                <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,100,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                            </picture>
                                            <?php }?>
                                        <?php } else { ?>
                                            <div class="top_categories__no_image d-flex align-items-center justify-content-center" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="top_categories__name">
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
  
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'has_main_categories', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php
}}
/*/ smarty_template_function_has_main_categories_839812715670e18641dd1c2_14748278 */
}
