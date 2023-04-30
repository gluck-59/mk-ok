<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:52:11
  from '/Users/gluck/Sites/okaycms/backend/design/html/email/email_callback_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de5ebca0259_51009460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e41fbc9573e117d175f02341dffb399df7998fff' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/backend/design/html/email/email_callback_admin.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:backend/design/html/email/email_head.tpl' => 1,
    'file:backend/design/html/email/email_header.tpl' => 1,
    'file:backend/design/html/email/email_footer.tpl' => 1,
  ),
),false)) {
function content_644de5ebca0259_51009460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('subject', ((string)$_smarty_tpl->tpl_vars['btr']->value->email_callback_request)." ".((string)(htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->name, ENT_QUOTES, 'UTF-8', true))) ,false ,32);?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $_smarty_tpl->tpl_vars['btr']->value->email_callback_request2;?>
</title>
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">

    <?php $_smarty_tpl->_subTemplateRender("file:backend/design/html/email/email_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body>
<div class="es-wrapper-color">
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" id="backgroundTable">
        <tbody>
        <tr>
            <td class="es-p25t es-p25b" valign="center">

                                <?php $_smarty_tpl->_subTemplateRender("file:backend/design/html/email/email_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p10t es-p10b es-p20r es-p20l" align="center">
                                        <table width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td valign="top" align="center">
                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-p10t es-p15b" align="center">
                                                                <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_callback_request2, ENT_QUOTES, 'UTF-8', true);?>
.<br></h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p10t es-p0b es-p40r es-p40l" align="center">
                                                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_inform_first, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->name, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_inform_callback, ENT_QUOTES, 'UTF-8', true);?>
. </p>
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
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                    <tr>
                        <td align="center">
                            <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                <tbody>
                                <tr>
                                    <td class="es-p30b es-p20r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0" align="left">
                                            <tbody>
                                            <tr>
                                                <td class="es-p20t es-p10b" align="left">
                                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                        <tbody>
                                                        <tr>
                                                            <td class="es-m-p0r es-m-p20b" width="100%" valign="top" align="center">
                                                                <table width="100%" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="esd-block-text">
                                                                            <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_information, ENT_QUOTES, 'UTF-8', true);?>
:</h4>
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
                                            <tr>
                                                <td class="es-m-p20b" width="100%" align="left">
                                                    <table class="es-table-infobox" cellspacing="1" cellpadding="1" border="0" align="left">
                                                        <tbody>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_name, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_order_phone, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'phone' ][ 0 ], array( $_smarty_tpl->tpl_vars['callback']->value->phone ));?>
</span></td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_request_page, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b">
                                                                <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->url, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->url, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                            </td>
                                                        </tr>
                                                        <tr valign="top">
                                                            <td class="es-p5t es-p5b" width="180"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->email_message, ENT_QUOTES, 'UTF-8', true);?>
:</span></td>
                                                            <td class="es-p5t es-p5b"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['callback']->value->message, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
                                                        </tr>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"email_callback_admin_total_info"),$_smarty_tpl ) );?>

                                                        </tbody>
                                                    </table>
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
                </table>

                                <?php $_smarty_tpl->_subTemplateRender("file:backend/design/html/email/email_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
<?php }
}
