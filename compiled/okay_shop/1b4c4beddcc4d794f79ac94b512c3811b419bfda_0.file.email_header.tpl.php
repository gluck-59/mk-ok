<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:52:11
  from '/Users/gluck/Sites/okaycms/backend/design/html/email/email_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de5ebcbd465_37701580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b4c4beddcc4d794f79ac94b512c3811b419bfda' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/backend/design/html/email/email_header.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644de5ebcbd465_37701580 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="es-header" cellspacing="0" cellpadding="0" align="center">
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
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->design_images, ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo, ENT_QUOTES, 'UTF-8', true);?>
?v=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo_version, ENT_QUOTES, 'UTF-8', true);?>
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
