<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:24:29
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/include_languages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096d5d05f9e5_60096404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfbfb62539f4cec7676f3c01c0005c5ae33813fc' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/include_languages.tpl',
      1 => 1728664428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67096d5d05f9e5_60096404 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['languages']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
        <a class="flag flag_<?php echo $_smarty_tpl->tpl_vars['lang']->value->id;?>
 <?php if ($_smarty_tpl->tpl_vars['lang']->value->id == $_smarty_tpl->tpl_vars['lang_id']->value) {?> focus<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('lang_id'=>$_smarty_tpl->tpl_vars['lang']->value->id),$_smarty_tpl ) );?>
" data-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->label, ENT_QUOTES, 'UTF-8', true);?>
">
            <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->lang_images_dir, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable22=ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->label, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable23=ob_get_clean();
if (is_file($_prefixVariable22.$_prefixVariable23.".png")) {?>
                <img src="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->label, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable24=ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( ($_prefixVariable24.".png"),32,32,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
" width="32px;" height="32px;">
            <?php }?>
        </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
