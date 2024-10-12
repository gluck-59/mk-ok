<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:26:43
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/NovaposhtaCost/Backend/design/html/counter_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096de3aab2a0_10273184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a5da70c446b152d91825dcf05c1339c2e514deb' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/NovaposhtaCost/Backend/design/html/counter_block.tpl',
      1 => 1728664430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 1,
  ),
),false)) {
function content_67096de3aab2a0_10273184 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value->np_api_key_error || $_smarty_tpl->tpl_vars['uahCurrencyError']->value) {?>
    <div class="notif_item">
        <a href="index.php?controller=OkayCMS.NovaposhtaCost.NovaposhtaCostAdmin" class="l_notif">
            <span class="notif_icon boxed_notify">
                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'left_modules'), 0, false);
?>
            </span>
            <span class="notif_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->left_setting_np_title, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </a>
        <span class="notif_count">1</span>
    </div>
<?php }
}
}
