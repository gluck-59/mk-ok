<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:52:42
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/email/email_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de60a63e5d0_52315896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68f27cc4240cd45a5a367796eab21519c99e1616' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/email/email_header.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644de60a63e5d0_52315896 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Email header page -->
<table class="es-header" cellspacing="0" cellpadding="0" align="center">
    <tbody>
    <tr>
        <td align="center">
            <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" align="center">
                <tbody>
                <tr>
                    <td class="es-p20t es-p20b es-p15r es-p15l" align="center">
                        <table width="100%" cellspacing="0" cellpadding="0">
                            <tbody>
                            <tr>
                                <td align="center">
                                    <a target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'main','absolute'=>1),$_smarty_tpl ) );?>
">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
?v=<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo_version;?>
" alt="logo" width="200" align="center" style="display: block; margin: 0 auto" />
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table><?php }
}
