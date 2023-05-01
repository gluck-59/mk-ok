<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:47:22
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/feedback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fdf0a4f8491_68182113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02a659d7275a2e9bd5bff1fc8b7657a39c36d825' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/feedback.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_644fdf0a4f8491_68182113 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Feedback page -->

<div class="block">
        <div class="block__header block__header--boxed block__header--border">
        <h1 class="block__heading">
            <span><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></span>
        </h1>
    </div>

        <div class="block__body block--boxed block--border">
        <div class="row">
            <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                <div class="col-lg-6">
                    <div class="block">
                        <div class="block__description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
                    </div>
                </div>
            <?php }?>
            <div class="col-lg-6">
                                <?php if ($_smarty_tpl->tpl_vars['message_sent']->value) {?>
                    <div class="form form--boxed">
                        <div class="form__header">
                            <div class="form__title">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, false);
?>
                                <span data-language="feedback_feedback"><?php echo $_smarty_tpl->tpl_vars['lang']->value->feedback_feedback;?>
</span>
                            </div>
                        </div>
                        <div class="message_success">
                            <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
,</b> <span data-language="feedback_message_sent"><?php echo $_smarty_tpl->tpl_vars['lang']->value->feedback_message_sent;?>
.</span>
                        </div>
                    </div>
                <?php } else { ?>
                                <form id="captcha_id" method="post" class="fn_validate_feedback form form--boxed">
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v3") {?>
                        <input type="hidden" class="fn_recaptcha_token fn_recaptchav3" name="recaptcha_token" />
                    <?php }?>

                    <div class="form__header">
                        <div class="form__title">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, true);
?>
                            <span data-language="feedback_feedback"><?php echo $_smarty_tpl->tpl_vars['lang']->value->feedback_feedback;?>
</span>
                        </div>

                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                            <div class="message_error">
                                <?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                                <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_text') {?>
                                <span data-language="form_enter_message"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
</span>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>

                    <div class="form__body">
                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['name'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->name) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" name="name" type="text" data-language="form_name"/>
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                        </div>

                                                <div class="form__group">
                            <input class="form__input form__placeholder--focus" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['email']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['email'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->email) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);
}?>" name="email" type="text" data-language="form_email"/>
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
</span>
                        </div>

                                                <div class="form__group">
                            <textarea class="form__textarea form__placeholder--focus" rows="3" name="message" data-language="form_enter_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['message'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_message;?>
*</span>
                        </div>
                    </div>

                    <div class="form__footer">
                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_feedback) {?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                            <div class="captcha" style="">
                                <div id="recaptcha1"></div>
                            </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_feedback"),$_smarty_tpl ) );?>

                            <div class="captcha">
                                <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_feedback']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_feedback']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <span class="form__captcha">
                                        <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" data-language="form_enter_captcha"/>
                                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                    </span>
                            </div>
                            <?php }?>
                        <?php }?>
                        <input type="hidden" name="feedback" value="1">

                                                <button class="form__button button--blick g-recaptcha" type="submit" name="feedback" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
">
                            <span data-language="form_send"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
</span>
                        </button>
                    </div>
                </form>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['settings']->value->iframe_map_code) {?>
<div class="block block--boxed block--border">
    <div class="ya_map">
        <?php echo $_smarty_tpl->tpl_vars['settings']->value->iframe_map_code;?>

    </div>
</div>
<?php }?>

<?php }
}
