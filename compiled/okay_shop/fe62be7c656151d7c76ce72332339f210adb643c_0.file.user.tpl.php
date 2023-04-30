<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:45:48
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de46ccfecf3_83542920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe62be7c656151d7c76ce72332339f210adb643c' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/user.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 14,
    'file:user_deliveries.tpl' => 1,
    'file:user_comments.tpl' => 1,
    'file:product_list.tpl' => 2,
  ),
),false)) {
function content_644de46ccfecf3_83542920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['lang']->value->user_title ,false ,32);?>

<div class="block">
    <div class="tabs tabs--user clearfix">
                <div class="sidebar sidebar--user position_sticky d-lg-flex flex-lg-column">
            <div class="sidebar__boxed sidebar__boxed--user">
                <div class="d-flex align-items-center form__profile profile">
                    <div class="profile__image">
                        <div class="profile__icon">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-user_icon"), 0, false);
?>
                        </div>
                    </div>
                    <div class="profile__information">
                        <div class="profile__name">
                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </div>
                                                <div class="profile__logout hidden-md-up">
                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'logout'),$_smarty_tpl ) );?>
" class="d-flex align-items-center">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"exit_icon"), 0, true);
?>
                                <span data-language="user_logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_logout;?>
</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tabs__navigation tabs__navigation--user">
                    <a class="tabs__link<?php if (empty($_smarty_tpl->tpl_vars['active_tab']->value)) {?> selected<?php }?>" data-history_location="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"user"),$_smarty_tpl ) );?>
" href="#user_info">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"user_account_icon"), 0, true);
?>
                        <span data-language="user_personal_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_personal_title;?>
</span>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
                        <a class="tabs__link<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'orders') {?> selected<?php }?>" data-history_location="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"user_orders"),$_smarty_tpl ) );?>
" href="#user_orders">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"user_orders_icon"), 0, true);
?>
                            <span data-language="user_orders_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_orders_title;?>
</span>
                        </a>
                    <?php }?>
                    <a class="tabs__link<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'comments') {?> selected<?php }?>" data-history_location="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"user_comments"),$_smarty_tpl ) );?>
" href="#user_comments">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"user_comments_icon"), 0, true);
?>
                        <span data-language="user_comments_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_comments_title;?>
</span>
                    </a>
                    <?php if (count($_smarty_tpl->tpl_vars['wishlist']->value->products)) {?>
                        <a class="tabs__link<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'favorites') {?> selected<?php }?>" data-history_location="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"user_favorites"),$_smarty_tpl ) );?>
" href="#user_wishlist">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"user_heart_icon"), 0, true);
?>
                            <span data-language="user_wishlist_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_wishlist_title;?>
</span>
                        </a>
                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_browsed_products'][0], array( array('var'=>'browsed_products','limit'=>16),$_smarty_tpl ) );?>

                    <?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
                    <a class="tabs__link<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'browsed') {?> selected<?php }?>" data-history_location="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"user_browsed"),$_smarty_tpl ) );?>
" href="#user_browsed">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"user_broused_icon"), 0, true);
?>
                        <span data-language="product_featuuser_browsed_titleres"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_browsed_title;?>
</span>
                    </a>
                    <?php }?>
                                        <span onclick="document.location.href = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"logout"),$_smarty_tpl ) );?>
'" class="button__logout">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"exit_icon"), 0, true);
?>
                        <span data-language="user_logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_logout;?>
</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="user_container position_sticky d-flex flex-column">
            <div class="tabs__content user_container__boxed">
                <div id="user_info" class="tab"<?php if (empty($_smarty_tpl->tpl_vars['active_tab']->value)) {?> style="display: block;"<?php }?>>
                    <div class="fn_switch user_tab__switch active">
                        <div class="block__header block__header--boxed block__header--border">
                            <div class="block__heading h1"><span data-language="user_personal_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_personal_title;?>
</span></div>
                         </div>
                    </div>
                    <div class="block block--boxed block--border mobile_tab__content">
                        <div class="block__inner">
                            <form method="post" class="fn_validate_register">
                                <?php if ($_smarty_tpl->tpl_vars['user_updated']->value) {?>
                                    <div class="message_success">
                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"success_icon"), 0, true);
?>
                                        <span data-language="user_messages_success"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_messages_success;?>
</span>
                                    </div>
                                <?php }?>
                                <div class="f_row">
                                    <div class="user_personal_seperator f_col-xl-6">
                                        <div class="block form form_cart ">
                                            <div class="form__header">
                                                                                                <div class="form__title">
                                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, true);
?>
                                                    <span data-language="cart_form_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_form_header;?>
</span>
                                                </div>
                                            </div>
                                            <div class="form__body">
                                                                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                                <div class="message_error">
                                                    <?php if ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                                        <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                                        <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_password') {?>
                                                        <span data-language="form_enter_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_password;?>
</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'user_exists') {?>
                                                        <span data-language="register_user_registered"><?php echo $_smarty_tpl->tpl_vars['lang']->value->register_user_registered;?>
</span>
                                                    <?php } else { ?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php }?>
                                                </div>
                                                <?php }?>

                                                <div class="f_row">
                                                    <div class="f_col-md-12 f_col-lg-6 f_col-xl-12">
                                                                                                                <div class="form__group">
                                                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" name="name" type="text" data-language="form_name" />
                                                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                                                        </div>
                                                    </div>
                                                    <div class="f_col-md-12 f_col-lg-6 f_col-xl-12">
                                                                                                                <div class="form__group">
                                                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->last_name, ENT_QUOTES, 'UTF-8', true);?>
" name="last_name" type="text" data-language="form_name" />
                                                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_last_name;?>
</span>
                                                        </div>
                                                    </div>
                                                    <div class="f_col-md-12 f_col-lg-6 f_col-xl-12">
                                                                                                                <div class="form__group">
                                                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);?>
" name="email" type="text" data-language="form_email" />
                                                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*</span>
                                                        </div>
                                                    </div>
                                                    <div class="f_col-md-12 f_col-lg-6 f_col-xl-12">
                                                                                                                <div class="form__group">
                                                            <input class="form__input form__placeholder--focus" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'phone' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value->phone ));?>
" name="phone" type="text" data-language="form_phone" />
                                                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
</span>
                                                        </div>
                                                    </div>
                                                    <div class="f_col-md-12 f_col-lg-6 f_col-xl-12">
                                                                                                                <div class="form__group">
                                                            <input class="form__input form__placeholder--focus" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->address, ENT_QUOTES, 'UTF-8', true);?>
" name="address" type="text" data-language="form_address" />
                                                            <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
</span>
                                                        </div>
                                                    </div>
                                                    <div class="f_col-md-12">
                                                                                                                <div class="form__group">
                                                            <p class="change_pass" onclick="$('#fn_password').toggle().prop('type', 'password').prop('name', 'password');return false;">
                                                                <span data-language="user_change_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_change_password;?>
</span>
                                                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_right2"), 0, true);
?>
                                                            </p>
                                                            <input class="form__input form__placeholder--focus " id="fn_password" value="" name="" type="" style="display:none;" />
                                                        </div>
                                                    </div>
                                                    <div class="f_col-md-12 form__group hidden-sm-down">
                                                                                                                <button type="submit" class="form__button button--blick hidden-md-up" name="user_save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_save;?>
">
                                                            <span data-language="form_save"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_save;?>
</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="f_col-xl-6">
                                        <?php $_smarty_tpl->_subTemplateRender('file:user_deliveries.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                                                <button type="submit" class="form__button button--blick" name="user_save" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_save;?>
">
                                            <span data-language="form_save"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_save;?>
</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['orders']->value) {?>
                    <div id="user_orders" class="tab"<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'orders') {?> style="display: block;"<?php }?>>
                        <div class="fn_switch user_tab__switch">
                            <div class="block__header block__header--boxed block__header--border">
                                <div class="block__heading h1"><span data-language="user_orders_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_orders_title;?>
</span></div>
                            </div>
                        </div>
                        <div class="block block--boxed block--border mobile_tab__content">
                            <div class="block_explanation__body">
                                <div class="table_wrapper block__description--style table_not_bg">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>  
                                            <th>
                                                <span data-language="user_number_of_order"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_number_of_order;?>
</span>
                                            </th>
                                            <th>
                                                <span data-language="user_order_date"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_date;?>
</span>
                                            </th>
                                            <th>
                                                <span data-language="user_order_status"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_status;?>
</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
                                        <tr>
                                            <td width="50px"><a class="fn_user_orders_switch" href="javascript:;"></a></td>
                                                                                        <td>
                                                <a href='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"order",'url'=>$_smarty_tpl->tpl_vars['order']->value->url),$_smarty_tpl ) );?>
'><span data-language="user_order_number"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_order_number;?>
</span><?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</a>
                                            </td>
    
                                                                                        <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->date ));?>
</td>
    
                                                                                        <td>
                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->paid == 1) {?>
                                                <span data-language="status_paid"><?php echo $_smarty_tpl->tpl_vars['lang']->value->status_paid;?>
</span>,
                                                <?php }?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orders_status']->value[$_smarty_tpl->tpl_vars['order']->value->status_id]->name, ENT_QUOTES, 'UTF-8', true);?>

                                            </td>
                                        </tr>
                                        <tr class="user_orders_hidden">
                                            <td colspan="4">
                                                <div class="purchases purchases--user">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->purchases, 'purchase');
$_smarty_tpl->tpl_vars['purchase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purchase']->value) {
$_smarty_tpl->tpl_vars['purchase']->do_else = false;
?>
                                                    <div class="purchase__item d-flex align-items-start">
                                                                                                                <div class="purchase__image d-flex">
                                                            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'product','url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url),$_smarty_tpl ) );?>
">
                                                                <?php if ($_smarty_tpl->tpl_vars['purchase']->value->product->image) {?>
                                                                <picture>
                                                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                                                        <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,70,70 )) ));?>
">
                                                                    <?php }?>
                                                                    <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,70,70 ));?>
">
                                                                    <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['purchase']->value->product->image->filename,70,70 ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                                                </picture>
                                                                <?php } else { ?>
                                                                    <div class="purchase__no_image d-flex align-items-start">
                                                                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, true);
?>
                                                                    </div>
                                                                <?php }?>
                                                            </a>
                                                        </div>
                                                        <div class="purchase__content">
                                                                                                                        <div class="purchase__name">
                                                                <a class="purchase__name_link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['purchase']->value->product->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->product_name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                                                <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant_name, ENT_QUOTES, 'UTF-8', true);?>
</i>
                                                                <?php if (!$_smarty_tpl->tpl_vars['order']->value->closed && $_smarty_tpl->tpl_vars['purchase']->value->variant->stock == 0) {?><span class="preorder_label"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_pre_order;?>
</span><?php }?>
                    
                                                            </div>
                                                            <div class="purchase__group">
                                                                                                                                <div class="purchase__price">
                                                                    <div class="purchase__group_title hidden-xs-down">
                                                                        <span data-language="cart_head_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_price;?>
</span>
                                                                    </div>
                                                                    <div class="purchase__group_content <?php if ($_smarty_tpl->tpl_vars['purchase']->value->discounts) {?> price--red<?php }?>">
                                                                        <span class="hidden-xs-down"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( ($_smarty_tpl->tpl_vars['purchase']->value->price) ));?>
 </span>
                                                                        <span class="currency hidden-xs-down"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span> 
                                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->variant->units) {?><span class="hidden-xs-down">/ <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->variant->units, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                                                                        <?php if ($_smarty_tpl->tpl_vars['purchase']->value->discounts) {?>
                                                                            <a href="javascript:;" class="discount_tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->purchase_discount__tooltip;?>
" data-src="#fn_purchase_discount_detail_<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" data-fancybox="hello_<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
"><?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"sale_icon"), 0, true);
?></a>
                                                                        <?php }?>
                                                                    </div>
                                                                    <div class="hidden">
                                                                        <div id="fn_purchase_discount_detail_<?php echo $_smarty_tpl->tpl_vars['purchase']->value->variant->id;?>
" class="purchase_discount_detail popup popup_animated">
                                                                                                                                                        <div class="form__header">
                                                                                <div class="form__title">
                                                                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"sale_icon"), 0, true);
?>
                                                                                    <span data-language="purchase_discount__popup_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->purchase_discount__popup_title;?>
</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form__body">
                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['purchase']->value->discounts, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
                                                                                    <div class="purchase_discount__item">
                                                                                        <div class="purchase_discount__name">
                                                                                            <span><?php echo $_smarty_tpl->tpl_vars['discount']->value->name;?>
</span>
                                                                                        </div>
                                                                                        <div class="purchase_discount__group">
                                                                                            <div class="purchase_discount__price_before">
                                                                                                <div class="purchase_discount__title">
                                                                                                    <span data-language="purchase_discount__price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->purchase_discount__price;?>
</span>
                                                                                                </div>
                                                                                                <div class="purchase_discount__group_content">
                                                                                                    <span><?php echo $_smarty_tpl->tpl_vars['discount']->value->priceBeforeDiscount;?>
</span>
                                                                                                    <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                                                </div>   
                                                                                            </div>
                                                                                            <div class="purchase_discount__discount">
                                                                                                <div class="purchase_discount__title">
                                                                                                    <span data-language="purchase_discount__discount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->purchase_discount__discount;?>
</span>
                                                                                                </div>
                                                                                                <div class="purchase_discount__group_content purchase_detail__price">
                                                                                                    <i><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['discount']->value->percentDiscount);?>
 %</i>
                                                                                                    &minus; <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['discount']->value->absoluteDiscount ));?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="purchase_discount__price_after">
                                                                                                <div class="purchase__group_title">
                                                                                                    <span data-language="purchase_discount__total"><?php echo $_smarty_tpl->tpl_vars['lang']->value->purchase_discount__total;?>
</span>
                                                                                                </div>
                                                                                                <div class="purchase_discount__group_content">
                                                                                                    <span><?php echo $_smarty_tpl->tpl_vars['discount']->value->priceAfterDiscount;?>
</span>
                                                                                                    <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="purchase__amount">
                                                                    <div class="purchase__group_title hidden-xs-down">
                                                                        <span data-language="cart_head_amoun"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_amoun;?>
</span>
                                                                    </div>
                                                                    <div class="fn_product_amount purchase__group_content d-flex justify-content-center align-items-center">
                                                                        <span class="order_purchase_count">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['purchase']->value->amount, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                    </div>
                                                                </div>
                                                                <div class="purchase__price_total">
                                                                    <div class="purchase__group_title hidden-xs-down">
                                                                        <span data-language="cart_head_total"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_head_total;?>
</span>
                                                                    </div>
                                                                    <div class="purchase__group_content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( ($_smarty_tpl->tpl_vars['purchase']->value->price*$_smarty_tpl->tpl_vars['purchase']->value->amount) ));?>
 <span class="currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                                <div class="purchase_detail">
                                                                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->discount > 0) {?>
                                                        <div class="purchase_detail__item">
                                                            <div class="purchase_detail__column_name">
                                                                <div class="purchase_detail__name" data-language="cart_discount"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_discount;?>
:</div>
                                                            </div>
                                                            <div class="purchase_detail__column_value">
                                                                <div class="purchase_detail__price"><?php echo $_smarty_tpl->tpl_vars['order']->value->discount;?>
%</div>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                        
                                                    <?php if ($_smarty_tpl->tpl_vars['order']->value->coupon_discount > 0) {?>
                                                        <div class="purchase_detail__item">
                                                            <div class="purchase_detail__column_name">
                                                                <div class="purchase_detail__name" data-language="cart_coupon"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_coupon;?>
:</div>
                                                            </div>
                                                            <div class="purchase_detail__column_value">
                                                                <div class="purchase_detail__price">
                                                                    &minus; <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->coupon_discount ));?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                        
                                                    <?php if (!$_smarty_tpl->tpl_vars['delivery']->value->hide_front_delivery_price && ($_smarty_tpl->tpl_vars['order']->value->separate_delivery || !$_smarty_tpl->tpl_vars['order']->value->separate_delivery && $_smarty_tpl->tpl_vars['order']->value->delivery_price > 0)) {?>
                                                        <div class="purchase_detail__item">
                                                            <div class="purchase_detail__column_name">
                                                                <div class="purchase_detail__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
:</div>
                                                            </div>
                                                            <div class="purchase_detail__column_value">
                                                                <div class="purchase_detail__price">
                                                                    <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->delivery_price ));?>
 <span class="currency"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                        
                                                    <div class="purchase_detail__item">
                                                        <div class="purchase_detail__column_name">
                                                            <div class="purchase_detail__name purchase_detail__name--total" data-language="cart_total_price"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_total_price;?>
:</div>
                                                        </div>
                                                        <div class="purchase_detail__column_value">
                                                            <div class="purchase_detail__price purchase_detail__price--total">
                                                                <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'convert' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value->total_price ));?>
 <span class="currency"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <div id="user_comments" class="tab"<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'comments') {?> style="display: block;"<?php }?>>
                    <div class="fn_switch user_tab__switch">
                        <div class="block__header block__header--boxed block__header--border">
                            <div class="block__heading h1"><span data-language="user_comments_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_comments_title;?>
</span></div>
                        </div>
                    </div>

                    <div class="block block--boxed block--border mobile_tab__content">
                         <?php $_smarty_tpl->_subTemplateRender('file:user_comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>

                <?php if (count($_smarty_tpl->tpl_vars['wishlist']->value->products)) {?>
                    <div id="user_wishlist" class="tab"<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'favorites') {?> style="display: block;"<?php }?>>
                        <div class="fn_switch user_tab__switch">
                            <div class="block__header block__header--boxed block__header--border">
                                <div class="block__heading h1"><span data-language="user_wishlist_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_wishlist_title;?>
</span></div>
                            </div>
                        </div>
                        <div class="block block--boxed block--border mobile_tab__content">
                            <div class="fn_wishlist_page products_list row">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist']->value->products, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                    <div class="product_item no_hover col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-3">
                                        <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['browsed_products']->value) {?>
                <div id="user_browsed" class="tab"<?php if ($_smarty_tpl->tpl_vars['active_tab']->value == 'browsed') {?> style="display: block;"<?php }?>>
                    <div class="fn_switch user_tab__switch">
                        <div class="block__header block__header--boxed block__header--border">
                            <div class="block__heading h1"><span data-language="user_browsed_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->user_browsed_title;?>
</span></div>
                        </div>
                    </div>
                    <div class="block block--boxed block--border mobile_tab__content">
                        <div class="products_list row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['browsed_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                <div class="product_item no_hover col-xs-6 col-sm-4 col-md-6 col-lg-4 col-xl-3">
                                    <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div><?php }
}
