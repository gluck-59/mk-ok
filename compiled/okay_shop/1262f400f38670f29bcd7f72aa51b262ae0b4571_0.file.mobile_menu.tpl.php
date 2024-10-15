<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:23:16
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/mobile_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e18645f8dd0_03184205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1262f400f38670f29bcd7f72aa51b262ae0b4571' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/mobile_menu.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_670e18645f8dd0_03184205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories_tree4' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/compiled/okay_shop/1262f400f38670f29bcd7f72aa51b262ae0b4571_0.file.mobile_menu.tpl.php',
    'uid' => '1262f400f38670f29bcd7f72aa51b262ae0b4571',
    'call_name' => 'smarty_template_function_categories_tree4_6502530670e1864573ce5_75467157',
  ),
));
?><ul class="top-nav">
    <li>
        <div class="">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;
$_prefixVariable7 = ob_get_clean();
if (!empty($_prefixVariable7)) {?>
            <a class="mobile__link " href="<?php if ($_smarty_tpl->tpl_vars['controller']->value == 'MainController') {?>javascript:;<?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"main"),$_smarty_tpl ) );
}?>">
                <img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
?v=<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo_version;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            </a>
            <?php }?>
        </div>
        <div class="d-flex align-items-center f_col">
            <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                <a class="account__link d-inline-flex align-items-center icon icon-perm-identity" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"user"),$_smarty_tpl ) );?>
">
                <span class="account__text" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
 </span>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>

            </a>
            <?php } else { ?>
                <a class="account__link d-inline-flex align-items-center icon icon-perm-identity" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'login'),$_smarty_tpl ) );?>
"  title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
">
                <span class="account__text" data-language="index_account"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_account;?>
 </span>
                <span class="account__login" data-language="index_login"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
</span>
                </a>
            <?php }?>
        </div>
    </li>
</ul>
<ul class="second-nav">
    <?php if ($_smarty_tpl->tpl_vars['controller']->value != 'MainController') {?>
        <li>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'main'),$_smarty_tpl ) );?>
">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"home_icon"), 0, false);
?>
                <span data-language="mobile_menu_home"><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_menu_home;?>
</span>
            </a>
        </li>
    <?php }?>
    <li>
        <a>
            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"catalog_icon"), 0, true);
?>
            <span data-language="mobile_menu_category"><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_menu_category;?>
</span>
        </a>
        
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree4', array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1), true);?>

    </li>
</ul>

<?php echo $_smarty_tpl->tpl_vars['menu_mobile']->value;?>


<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
<ul class="currencies-nav">
    <li class="">

        <span class=""><span data-language="mobile_menu_currency"><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_menu_currency;?>
:</span> <?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
</span>
        <ul class="">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
            <li>
                <a class="<?php if ($_smarty_tpl->tpl_vars['currency']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> active<?php }?>" href="#" onclick="document.location.href = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl ) );?>
'">
                    <span class=""><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
 </span> <span class=""> (<?php echo $_smarty_tpl->tpl_vars['c']->value->sign;?>
)</span>
                </a>
            </li>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </li>
</ul>
<?php }?>

<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {
$_smarty_tpl->_assignInScope('cnt', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'ln');
$_smarty_tpl->tpl_vars['ln']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->do_else = false;
if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {
$_smarty_tpl->_assignInScope('cnt', $_smarty_tpl->tpl_vars['cnt']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['cnt']->value > 1) {?>
    <ul class="language-nav">
        <li class="">
            <?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['language']->value->label).".png")) {?>
            <img alt="<?php echo $_smarty_tpl->tpl_vars['language']->value->current_name;?>
" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['language']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
" />
            <?php }?>
            <span class=""><?php echo $_smarty_tpl->tpl_vars['language']->value->name;?>
</span>
            <ul class="">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
                <li>
                    <a class=" <?php if ($_smarty_tpl->tpl_vars['language']->value->id == $_smarty_tpl->tpl_vars['l']->value->id) {?> active<?php }?>"
                       href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['l']->value->url);?>
">
                        <?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['l']->value->label).".png")) {?>
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['l']->value->current_name;?>
" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['l']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
" />
                        <?php }?>
                        <span class=""><?php echo $_smarty_tpl->tpl_vars['l']->value->name;?>
</span>
                                            </a>
                </li>
                <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </li>
    </ul>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value->site_phones) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_phones, 'phone');
$_smarty_tpl->tpl_vars['phone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->do_else = false;
?>
<ul>
    <li>
        <a class="phone icon icon-phone-callback" href="tel:<?php echo preg_replace('~[^0-9\+]~','',$_smarty_tpl->tpl_vars['phone']->value);?>
">
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </a>
    </li>
</ul>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['settings']->value->site_email) {?>
<ul>
    <li>
        <a class="email icon icon-mail-outline" href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
">
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_email, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </a>
    </li>
</ul>
<?php }?>



<ul class="bottom-nav social">
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['social_aliases']) ? $_smarty_tpl->tpl_vars['social_aliases']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['ok'] = 'odnoklassniki';
$_smarty_tpl->_assignInScope('social_aliases', $_tmp_array);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value->site_social_links, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
    <?php $_smarty_tpl->_assignInScope('social_domain', preg_replace('~(https?://)?(www\.)?([^\.]+)?\..*~','$3',$_smarty_tpl->tpl_vars['social_link']->value));?>
    <?php if ((isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value])) || $_smarty_tpl->tpl_vars['social_domain']->value) {?>
    <li class="">
        <a class="<?php if ((isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value]))) {
echo $_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value];
} else {
echo $_smarty_tpl->tpl_vars['social_domain']->value;
}?>" href="<?php if (!preg_match('~^https?://.*$~',$_smarty_tpl->tpl_vars['social_link']->value)) {?>https://<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['social_domain']->value;?>
">
            <i class="fa fa-<?php if ((isset($_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value]))) {
echo $_smarty_tpl->tpl_vars['social_aliases']->value[$_smarty_tpl->tpl_vars['social_domain']->value];
} else {
echo $_smarty_tpl->tpl_vars['social_domain']->value;
}?>"></i>
        </a>
    </li>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
/* smarty_template_function_categories_tree4_6502530670e1864573ce5_75467157 */
if (!function_exists('smarty_template_function_categories_tree4_6502530670e1864573ce5_75467157')) {
function smarty_template_function_categories_tree4_6502530670e1864573ce5_75467157(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
            <ul class="">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value->visible && ($_smarty_tpl->tpl_vars['c']->value->has_products || $_smarty_tpl->tpl_vars['settings']->value->show_empty_categories)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->subcategories && $_smarty_tpl->tpl_vars['c']->value->count_children_visible) {?>
                            <li class="">
                                <a class="<?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                        <span class="nav-icon">
                                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        </span>
                                    <?php }?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories_tree4', array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                            </li>
                        <?php } else { ?>
                            <li class="">
                                <a class="<?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> selected<?php }?>" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
" data-category="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['c']->value->image) {?>
                                    <span class="nav-icon">
                                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['c']->value->image,20,20,false,$_smarty_tpl->tpl_vars['config']->value->resized_categories_dir ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
                                        </span>
                                    <?php }?>
                                     <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </li>
                        <?php }?>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
        <?php
}}
/*/ smarty_template_function_categories_tree4_6502530670e1864573ce5_75467157 */
}
