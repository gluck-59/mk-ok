<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:38:04
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6709708cd02766_07006156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a877f25678b71fd4532db519496b32310bd0be51' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/login.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_6709708cd02766_07006156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->login_title ,false ,32);?>

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
    	<h1 class="block__heading"><span data-language="login_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_enter;?>
</span></h1>
    </div>
    <div class="block block--boxed block--border">
        <div class="f_row flex-lg-row align-items-md-start">
            <div class="form_wrap f_col-lg-6">
                <form method="post" class="fn_validate_login form form--boxed">
                    <div class="form__header">
                        <div class="form__title">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"note_icon"), 0, false);
?>
                            <span data-language="login_title_form"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_title_form;?>
</span>
                        </div>
                    </div>
                    
                    <div class="form__body">
                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="message_error">
                            <?php if ($_smarty_tpl->tpl_vars['error']->value == 'login_incorrect') {?>
                            <span data-language="login_error_pass"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_error_pass;?>
</span>
                            <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>

                            <?php }?>
                        </div>
                        <?php }?>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
"  data-language="form_email" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                        </div>
                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="password" name="password" value="" data-language="form_password" />
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_password;?>
*</span>
                                                        <a class="password_remind" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"password_remind"),$_smarty_tpl ) );?>
">
                                <span data-language="login_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_remind;?>
</span>
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                            </a>
                        </div>
                    </div>
                    <div class="form__footer">
                                                <button type="submit" class="form__button button--blick" name="login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->login_sign_in;?>
">
                            <span data-language="login_sign_in"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_sign_in;?>
</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="f_col-lg-6">
                <div class="block_explanation">
                    <div class="block_explanation__header">
                        <span data-language="login_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_text;?>
</span>
                    </div>
                    <div class="block_explanation__body block__description">
                        <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

                    </div>
                                        <div class="form__footer">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"register"),$_smarty_tpl ) );?>
" class="form__button button--blick" data-language="login_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->login_registration;?>
</a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
<?php }
}
