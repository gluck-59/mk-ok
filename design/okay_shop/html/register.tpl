<!-- Registration page -->

{* The page title *}
{$meta_title = $lang->register_title scope=global}

<div class="block">
    {* The page heading *}
    <div class="block__header block__header--boxed block__header--border">
        <h1 class="block__heading"><span data-language="register_header">{$lang->register_header}</span></h1>
    </div>

    <div class="block block--boxed block--border">
        <div class="f_row flex-lg-row align-items-md-start">
            <div class="form_wrap f_col-lg-7 f_col-xl-6">
                <form id="captcha_id" method="post" class="fn_validate_register form form--boxed">
                    {if $settings->captcha_type == "v3"}
                        <input type="hidden" class="fn_recaptcha_token fn_recaptchav3" name="recaptcha_token" />
                    {/if}

                    <div class="form__header">
                        <div class="form__title">
                            {include file="svg.tpl" svgId="note_icon"}
                            <span data-language="register_write_comment">{$lang->register_write_comment}</span>
                        </div>
                    </div>

                    <div class="form__body">
                        {* Form error messages *}
                        {if $error}
                        <div class="message_error">
                            {if $error == 'empty_name'}
                                <span data-language="form_enter_name">{$lang->form_enter_name}</span>
                            {elseif $error == 'empty_email'}
                                <span data-language="form_enter_email">{$lang->form_enter_email}</span>
                            {elseif $error == 'empty_password'}
                                <span data-language="form_enter_password">{$lang->form_enter_password}</span>
                            {elseif $error == 'user_exists'}
                                <span data-language="register_user_registered">{$lang->register_user_registered}</span>
                            {elseif $error == 'captcha'}
                                <span data-language="form_error_captcha">{$lang->form_error_captcha}</span>
                            {else}
                                {$error|escape}
                            {/if}
                        </div>
                        {/if}

                        {* User's  name *}
                        <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="name" value="{$request_data.name|escape}" data-language="form_name" />
                            <span class="form__placeholder">{*$lang->form_name*}Получатель*</span>
                        </div>

                        {* User's  last name *}
{*                        <div class="form__group">*}
{*                            <input class="form__input form__placeholder--focus" type="text" name="last_name" value="{$request_data.name|escape}" data-language="form_last_name" />*}
{*                            <span class="form__placeholder">{$lang->form_last_name}</span>*}
{*                        </div>*}
                        <div class="row">
                            <div class="col-md-9">
                                {* User's  address *}
                                <div class="form__group">
                                    <input class="form__input form__placeholder--focus" type="text" name="address" id="address" value="" data-language="form_address" />
                                    <span class="form__placeholder">{*$lang->form_street*}Куда доставить посылку*</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                {* User's  postal index *}
                                <div class="form__group">
                                    <input class="form__input form__placeholder--focus" type="text" name="postal_index" id="postal_index" value="" data-language="form_address" />
                                    <span class="form__placeholder">{$lang->form_postal_index}*</span>
                                </div>
                            </div>
                        </div>

                        {* User's  phone *}
                        <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="phone" value="{$request_data.phone|escape}" data-language="form_phone" />
                            <span class="form__placeholder">{$lang->form_phone} необязателен, но почта пришлет СМС с отслеживанием</span>
                        </div>

                        {* User's  email *}
                        <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="text" name="email" value="{$request_data.email|escape}" data-language="form_email"/>
                            <span class="form__placeholder">{$lang->form_email}*</span>
                        </div>

                        {* User's  password *}
                        <div class="form__group">
                            <input class="form__input form__placeholder--focus" type="password" name="password" value="" data-language="form_enter_password" />
                            <span class="form__placeholder">{$lang->form_enter_password}*</span>
                        </div>
                    </div>

                    <div class="form__footer">
                        {if $settings->captcha_register}
                            {if $settings->captcha_type == "v2"}
                                <div class="captcha">
                                    <div id="recaptcha1"></div>
                                </div>
                            {elseif $settings->captcha_type == "default"}
                                {get_captcha var="captcha_register"}
                                <div class="captcha">
                                    <div class="secret_number">{$captcha_register[0]|escape} + ? =  {$captcha_register[1]|escape}</div>
                                    <span class="form__captcha">
                                        <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" data-language="form_enter_captcha" >
                                        <span class="form__placeholder">{$lang->form_enter_captcha}*</span>
                                     </span>
                                </div>
                            {/if}
                        {/if}
                        <input name="register" type="hidden" value="1">
                        {* Submit button *}
                        <label class="checkbox">
                            <input id="cookie" type="checkbox" {if $request_data.name} checked{/if} class="checkbox__input">
                            <svg class="checkbox__icon" viewBox="0 0 20 20">
                                <path class="checkbox__mark" fill="none" d="M4 10 l5 4 8-8.5"></path>
                            </svg>
                            Сохранять минимально возможные cookie. Без них часть функционала не будет работать.
                        </label>
                        <label class="checkbox">
                            <input id="politika" type="checkbox" {if $request_data.name} checked{/if} class="checkbox__input">
                            <svg class="checkbox__icon" viewBox="0 0 20 20">
                                <path class="checkbox__mark" fill="none" d="M4 10 l5 4 8-8.5"></path>
                            </svg>
                            Принимаю <a href="/politika-konfidentsialnosti">Соглашение и политику конфиденциальности</a>
                        </label>
                        <button type="submit" style="display: none" value="{$lang->register_create_account}" class="hidden form__button button--blick g-recaptcha" name="register" {if $settings->captcha_type == "invisible"}data-sitekey="{$settings->public_recaptcha_invisible}" data-badge='bottomleft' data-callback="onSubmit"{/if}>
                            <span data-language="register_create_account">{$lang->register_create_account}</span>
                        </button>
                    </div>
                 </form>
            </div>
            <div class="f_col-lg-5 f_col-xl-6">
                <div class="block_explanation">
                    <div class="block__description">
                        {$description}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#address").suggestions({
        token: "0a4626882bbbd48b65b3d11beb6e1332aa0a366c",
        type: "ADDRESS",
        onSelect: function(suggestion) {
            $("#postal_index").val(suggestion.data.postal_code);
        }
    });

    $('#politika, #cookie').on('change', function (){
        if ($('#cookie').prop('checked') && $('#politika').prop('checked')) {
            $('[name=register]').show()
        } else {
            $('[name=register]').hide()
        }
    })
</script>
