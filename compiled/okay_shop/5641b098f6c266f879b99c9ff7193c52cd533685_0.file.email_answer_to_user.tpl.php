<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:52:42
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/email/email_answer_to_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de60a621409_57952841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5641b098f6c266f879b99c9ff7193c52cd533685' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/email/email_answer_to_user.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:design/".$_prefixVariable1."/html/email/email_head.tpl' => 1,
    'file:design/".$_prefixVariable2."/html/email/email_header.tpl' => 1,
    'file:design/".$_prefixVariable3."/html/email/email_footer.tpl' => 1,
  ),
),false)) {
function content_644de60a621409_57952841 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'comment') {?>
    <?php $_smarty_tpl->_assignInScope('subject', ((string)$_smarty_tpl->tpl_vars['lang']->value->email_comment_theme)." ".((string)$_smarty_tpl->tpl_vars['settings']->value->site_name) ,false ,32);
} elseif ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'feedback') {?>
    <?php $_smarty_tpl->_assignInScope('subject', ((string)$_smarty_tpl->tpl_vars['lang']->value->email_feedback_subject) ,false ,32);
}?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php if ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'comment') {
echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_answer_s;
} elseif ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'feedback') {
echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_answer_l;
}?></title>
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">

    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:design/".$_prefixVariable1."/html/email/email_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</head>

<body>
<div class="es-wrapper-color">
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="es-p0t es-p0b" valign="center">

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:design/".$_prefixVariable2."/html/email/email_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
                                                                <h1><?php if ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'comment') {?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_answer_s;?>

                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'feedback') {?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_answer_l;?>

                                                                    <?php }?>.
                                                                </h1>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="es-p5t es-p5b es-p40r es-p40l" align="center">
                                                                <p style="font-size: 16px;color: #5c5c5c;">
                                                                    <?php if ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'comment') {?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_hello;?>
 <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</i>.

                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_answer_user;?>
 <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"main",'absolute'=>1),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
</a>
                                                                        <?php if ($_smarty_tpl->tpl_vars['object']->value->type == 'product') {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_product;?>
: <div><strong>"<?php echo $_smarty_tpl->tpl_vars['object']->value->product->name;?>
"</strong></div>
                                                                        <?php } elseif ($_smarty_tpl->tpl_vars['object']->value->type == 'post') {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_article;?>
: <div><strong>"<?php echo $_smarty_tpl->tpl_vars['object']->value->post->name;?>
"</strong></div>
                                                                        <?php }?>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'feedback') {?>
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_hello;?>
 <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</i>. <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_answer_user_s;?>

                                                                        <a target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"main",'absolute'=>1),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
</a>
                                                                    <?php }?>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                        <?php if ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'comment') {?>
                                                            <tr>
                                                                <td class="es-p10t es-p10b" align="center">
                                                                    <?php if ($_smarty_tpl->tpl_vars['object']->value->type == 'product') {?>
                                                                    <a class="es-button" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['object']->value->product->url,'absolute'=>1),$_smarty_tpl ) );?>
#comment_<?php echo $_smarty_tpl->tpl_vars['object']->value->id;?>
">
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_look;?>

                                                                    </a>
                                                                    <?php } elseif ($_smarty_tpl->tpl_vars['object']->value->type == 'post') {?>
                                                                    <a class="es-button" target="_blank" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"post",'url'=>$_smarty_tpl->tpl_vars['object']->value->post->url,'absolute'=>1),$_smarty_tpl ) );?>
#comment_<?php echo $_smarty_tpl->tpl_vars['object']->value->id;?>
">
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_look;?>

                                                                    </a><?php }?>
                                                                </td>
                                                            </tr>
                                                        <?php }?>
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
                                    <td class="es-p15t es-p10b es-p20r es-p20l" align="left">
                                        <table width="100%" cellspacing="0" cellpadding="0" align="left">
                                            <tbody>
                                            <tr>
                                                <td class="es-p5t es-p5b" align="left">
                                                    <div class="es-comment-name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_your_comment;?>

                                                        (<span class="es-comment-date"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['object']->value->date ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['object']->value->date ));?>
</span>):
                                                    </div>
                                                    <div class="es-comment-text es-p15">
                                                        <?php if ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'comment') {?>
                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object']->value->text, ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php } elseif ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'feedback') {?>
                                                            <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['object']->value->message, ENT_QUOTES, 'UTF-8', true));?>

                                                        <?php }?>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="es-p15b es-p20r es-p20l" align="right">
                                        <table width="100%" cellspacing="0" cellpadding="0" align="right">
                                            <tbody>
                                            <tr>
                                                <td class="es-p5t es-p5b" align="left">
                                                    <div class="es-comment-name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->email_comment_admin_ans;?>

                                                        (<span class="es-comment-date"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectAnswer']->value->date ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectAnswer']->value->date ));?>
</span>):
                                                    </div>
                                                    <div class="es-comment-text es-p15">
                                                    <?php if ($_smarty_tpl->tpl_vars['objectAnswer']->value->type_obj == 'comment') {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectAnswer']->value->text, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['object']->value->type_obj == 'feedback') {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['objectAnswer']->value->message, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php }?>
                                                    </div>
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

                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:design/".$_prefixVariable3."/html/email/email_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>

</html><?php }
}
