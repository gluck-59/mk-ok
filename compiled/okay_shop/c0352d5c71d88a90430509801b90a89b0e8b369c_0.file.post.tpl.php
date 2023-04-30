<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:35:40
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644df01cd25f84_92262242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0352d5c71d88a90430509801b90a89b0e8b369c' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/post.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_sidebar.tpl' => 1,
    'file:svg.tpl' => 13,
    'file:product_list.tpl' => 1,
  ),
),false)) {
function content_644df01cd25f84_92262242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'comments_tree' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/motokofr.ok/compiled/okay_shop/c0352d5c71d88a90430509801b90a89b0e8b369c_0.file.post.tpl.php',
    'uid' => 'c0352d5c71d88a90430509801b90a89b0e8b369c',
    'call_name' => 'smarty_template_function_comments_tree_2126410485644df01cbb2e73_17367425',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/gluck/Sites/motokofr.ok/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- Post page -->

<div class="d-lg-flex align-items-lg-start justify-content-lg-between flex-lg-row-reverse">
        <div class="fn_mobile_toogle sidebar sidebar--right position_sticky d-lg-flex flex-lg-column">
        <?php $_smarty_tpl->_subTemplateRender('file:blog_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

        <div class="post_container post_container--left">
        <div class="post_container__wrapper">
            <div class="post_container__wallpaper" style="background: #F4F6F9 url(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,1100,600,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir ));?>
) no-repeat center center;background-size: cover;">
                                <?php if (!empty($_smarty_tpl->tpl_vars['post']->value->categories)) {?>
                    <div class="post__labels">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->categories, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                                <a class="post__label" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
            </div>
            <div class="post_container__boxed">
                <div class="post_container__header">
                                        <h1 class="post__heading">
                        <span data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </h1>
                                        <div class="fn_switch_mobile_filter switch_mobile_filter hidden-lg-up">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"catalog_icon"), 0, false);
?>
                        <span data-language="blog_catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_catalog;?>
</span>
                    </div>
                    <div class="post_information">
                                                <?php if ($_smarty_tpl->tpl_vars['post']->value->author) {?>
                        <div class="post_information__item" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_author;?>
">
                            
                            <div class="post_information__avatar">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value->author->image) {?>
                                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->author->image,30,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir,'center','center' ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"avatar_icon"), 0, true);
?>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->author->visible) {?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'author','url'=>$_smarty_tpl->tpl_vars['post']->value->author->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <?php } else { ?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <?php }?>
                        </div>
                        <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['post']->value->date) {?>
                            <div class="post_information__item" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_date_public;?>
">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"calendar_icon"), 0, true);
?>
                                <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date,"d m Y, H:i" ));?>
</span>
                            </div>
                        <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['post']->value->read_time > 0) {?>
                            <div class="post_information__item" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_time_read;?>
 <?php if ($_smarty_tpl->tpl_vars['post']->value->read_time > 0) {
echo $_smarty_tpl->tpl_vars['post']->value->read_time;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->read_time,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_1,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_2,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_3 ));
} else {
echo $_smarty_tpl->tpl_vars['lang']->value->blog_unknown_time_read;
}?>">
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"time_read_icon"), 0, true);
?>
                                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_time_read;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->read_time;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->read_time,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_1,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_2,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_3 ));?>
</span>
                            </div>
                        <?php }?>
                                                <div class="post_information__item" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_count_comments;?>
">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"chat_icon"), 0, true);
?>
                            <span><?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
</span>
                        </div>
                    </div>
                                        <?php if ($_smarty_tpl->tpl_vars['post']->value->updated_date > 0) {?>
                        <div class="post__update_date">
                            <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"update_date_icon"), 0, true);
?>
                            <span class="post__update_date_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_update_date;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->updated_date,"d m Y" ));?>
</span>
                        </div>
                    <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['table_of_content']->value)) {?>
                        <div class="post__table_contents">
                            <div class="post__table_contents_title"><?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_table_contents;?>
</div>
                            <ol>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_of_content']->value, 'content_item');
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?>
                                    <li style="margin-left: <?php echo $_smarty_tpl->tpl_vars['content_item']->value['header_level']*15-15;?>
px">
                                        <a class="fn_ancor_post" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_item']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content_item']->value['anchor_text'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ol>
                        </div>
                    <?php }?>
                </div>
                <div class="post_container__body">
                                        <div class="block__description block__description--style">
                        <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

                    </div>

                </div>
                <div class="post_container__footer">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value->categories)) {?>
                    <div class="post_tags">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"tag_icon"), 0, true);
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->categories, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                        <a class="post_tag" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php }?>

                    <div class="post_share">
                        <div id="post_<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" class="post__rating product__rating fn_rating" data-rating_post_url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'ajax_post_rating'),$_smarty_tpl ) );?>
">
                            <div class="share__text post_share__text">
                                <span data-language="product_share"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_rating_title;?>
</span>
                            </div>
                            <span class="rating_starOff">
                                <span class="rating_starOn" style="width:<?php echo $_smarty_tpl->tpl_vars['post']->value->rating*90/sprintf('%.0f',5);?>
px;"></span>
                            </span>
                                                        <?php if ($_smarty_tpl->tpl_vars['post']->value->rating > 0) {?>
                            <span class="rating_text">( <span><?php echo sprintf("%.0f",$_smarty_tpl->tpl_vars['post']->value->votes);?>
</span> )</span>
                            <span class="rating_text hidden">( <span><?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['post']->value->rating);?>
</span> )</span>
                                                        <span class="rating_text hidden" style="display:none;">5</span>
                            <?php } else { ?>
                            <span class="rating_text hidden">(<?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['post']->value->rating);?>
)</span>
                            <?php }?>
                        </div>

                                                <div class="post_share_boxed">
                            <div class="share">
                                                                <div class="fn_share jssocials share__icons"></div>
                            </div>
                        </div>
                    </div>

                                        <?php if ($_smarty_tpl->tpl_vars['post']->value->author) {?>
                    <div class="post_author">
                        <div class="post_author__images">
                            <div class="post_author__img">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value->author->image) {?>
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->author->image,100,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir,'center','center' ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"avatar_icon"), 0, true);
?>
                                <?php }?>
                            </div>
                        </div>
                        <div class="post_author__infobox">
                            <div class="post_author__name">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value->author->visible) {?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'author','url'=>$_smarty_tpl->tpl_vars['post']->value->author->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                                <?php } else { ?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['post']->value->author->position_name) {?>
                            <div class="post_author__position">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->position_name, ENT_QUOTES, 'UTF-8', true);?>

                            </div>
                            <?php }?>

                            <?php if (is_array($_smarty_tpl->tpl_vars['post']->value->author->socials)) {?>
                            <div class="post_author__social">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->author->socials, 'social');
$_smarty_tpl->tpl_vars['social']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social']->value) {
$_smarty_tpl->tpl_vars['social']->do_else = false;
?>
                                <a class="fn_social_image social__link <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['domain'], ENT_QUOTES, 'UTF-8', true);?>
" rel="noreferrer" aria-label="<?php echo $_smarty_tpl->tpl_vars['social_domain']->value;?>
" href="<?php if (!preg_match('~^https?://.*$~',$_smarty_tpl->tpl_vars['social']->value['url'])) {?>https://<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['domain'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <i class="fa fa-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value['domain'], ENT_QUOTES, 'UTF-8', true);?>
"></i>
                                </a>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['prev_post']->value || $_smarty_tpl->tpl_vars['next_post']->value) {?>
                    <nav>
                        <ol class="pager row">
                            <li class="col-xs-12<?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?> col-sm-6<?php } else { ?> col-sm-12<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['prev_post']->value) {?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'post','url'=>$_smarty_tpl->tpl_vars['prev_post']->value->url),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('prev_post_url', $_prefixVariable1);?>
                                <a class="" href="<?php echo $_smarty_tpl->tpl_vars['prev_post_url']->value;?>
">
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_up_icon"), 0, true);
?>
                                    <span><?php echo $_smarty_tpl->tpl_vars['prev_post']->value->name;?>
</span>
                                </a>
                                <?php }?>
                            </li>
                            <li class="col-xs-12 col-sm-6">
                                <?php if ($_smarty_tpl->tpl_vars['next_post']->value) {?>
                                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'post','url'=>$_smarty_tpl->tpl_vars['next_post']->value->url),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('next_post_url', $_prefixVariable2);?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['next_post_url']->value;?>
">
                                    <span><?php echo $_smarty_tpl->tpl_vars['next_post']->value->name;?>
</span>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"arrow_up_icon"), 0, true);
?>
                                </a>
                                <?php }?>
                            </li>
                        </ol>
                    </nav>
                    <?php }?>
                </div>
            </div>
        </div>

                <?php if ($_smarty_tpl->tpl_vars['related_products']->value) {?>
        <div class="block block--boxed block--border">
            <div class="block__header">
                <div class="block__title">
                    <span data-language="product_recommended_products"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_recommended_products;?>
</span>
                </div>
            </div>

            <div class="block__body">
                <div class="products_list row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                    <div class="product_item col-xs-6 col-sm-3 col-md-3 col-xl-4">
                        <?php $_smarty_tpl->_subTemplateRender("file:product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['p']->value), 0, true);
?>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <?php }?>

        <div class="block block--boxed block--border">
            <div class="block__header">
                <div class="block__title">
                    <span data-language="post_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comments;?>
</span>
                </div>
            </div>

            <div id="comments">
                <div class="comment-wrap ">
                    <div class="comment ">
                        <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                        
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['comments']->value), true);?>

                        <?php } else { ?>
                        <div class="boxed boxed--big boxed--notify">
                            <span data-language="product_no_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_no_comments;?>
</span>
                        </div>
                        <?php }?>
                    </div>
                    <div class="form_wrap ">
                                                <form id="fn_blog_comment" class="fn_validate_post form form--boxed"  method="post" action="">
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v3") {?>
                            <input type="hidden" class="fn_recaptcha_token fn_recaptchav3" name="recaptcha_token" />
                            <?php }?>

                            <div class="form__header">
                                <div class="form__title">
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment_icon"), 0, true);
?>
                                    <span data-language="post_write_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->post_write_comment;?>
</span>
                                </div>
                            </div>
                            <div class="form__body">
                                                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                <div class="message_error">
                                    <?php if ($_smarty_tpl->tpl_vars['error']->value == 'captcha') {?>
                                    <span data-language="form_error_captcha"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_name') {?>
                                    <span data-language="form_enter_name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_comment') {?>
                                    <span data-language="form_enter_comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
</span>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['error']->value == 'empty_email') {?>
                                    <span data-language="form_enter_email"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
                                    <?php }?>
                                </div>
                                <?php }?>

                                                                <div class="form__group">
                                    <input class="form__input form__placeholder--focus" type="text" name="name" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['name']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['name'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->name) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" />
                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*</span>
                                </div>

                                                                <div class="form__group">
                                    <input class="form__input form__placeholder--focus" type="text" name="email" value="<?php if ($_smarty_tpl->tpl_vars['request_data']->value['email']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['request_data']->value['email'], ENT_QUOTES, 'UTF-8', true);
} elseif ($_smarty_tpl->tpl_vars['user']->value->email) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->email, ENT_QUOTES, 'UTF-8', true);
}?>" data-language="form_email" />
                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
</span>
                                </div>

                                                                <div class="form__group">
                                    <textarea class="form__textarea form__placeholder--focus" rows="3" name="text" ><?php echo $_smarty_tpl->tpl_vars['request_data']->value['text'];?>
</textarea>
                                    <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_comment;?>
*</span>
                                </div>
                            </div>
                            <div class="form__footer">
                                                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_comment) {?>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "v2") {?>
                                <div class="captcha">
                                    <div id="recaptcha1"></div>
                                </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "default") {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_captcha'][0], array( array('var'=>"captcha_comment"),$_smarty_tpl ) );?>

                                <div class="captcha">
                                    <div class="secret_number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_comment']->value[0], ENT_QUOTES, 'UTF-8', true);?>
 + ? =  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captcha_comment']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="form__captcha">
                                        <input class="form__input form__input_captcha form__placeholder--focus" type="text" name="captcha_code" value="" />
                                        <span class="form__placeholder"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*</span>
                                    </div>
                                </div>
                                <?php }?>
                                <?php }?>

                                <input type="hidden" name="comment" value="1">
                                                                <button class="form__button button--blick g-recaptcha" type="submit" name="comment" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type == "invisible") {?>data-sitekey="<?php echo $_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible;?>
" data-badge='bottomleft' data-callback="onSubmit"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
">
                                    <span  data-language="form_send"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_send;?>
</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 type="application/ld+json">

    { "@context": "http://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"
        },
        "headline": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
",
        "alternativeHeadline": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
",
        "image": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,800,800,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir ));?>
",
        "author": {
            "@type": "Person",
            "name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
"
        },
        "publisher": {
            "@type": "Organization",
            "name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['config']->value->design_images;
echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
",
                "width": 230,
                "height": 40
            }
        },
        "url": "<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
",
        "datePublished": "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date,'%Y-%m-%d');?>
",
        "dateCreated": "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date,'%Y-%m-%d');?>
",
        
        <?php if ($_smarty_tpl->tpl_vars['post']->value->updated_date > 0) {?>
        
        "dateModified": "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->updated_date,'%Y-%m-%d');?>
",
        
        <?php } else { ?>
        
        "dateModified": "<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date,'%Y-%m-%d');?>
",
        
        <?php }?>
        
        "description": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_ld_text' ][ 0 ], array( $_smarty_tpl->tpl_vars['annotation']->value ));?>
",
        "articleBody": "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_ld_text' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value ));?>
"
    }

<?php echo '</script'; ?>
>

<?php }
/* smarty_template_function_comments_tree_2126410485644df01cbb2e73_17367425 */
if (!function_exists('smarty_template_function_comments_tree_2126410485644df01cbb2e73_17367425')) {
function smarty_template_function_comments_tree_2126410485644df01cbb2e73_17367425(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                        <div class="comment__item <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?> admin_note<?php }?>">
                                                        <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>
                                                        <div class="comment__inner">
                                <div class="comment__icon">
                                    <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-admin_icon"), 0, true);
?>
                                    <?php } else { ?>
                                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-user_icon"), 0, true);
?>
                                    <?php }?>
                                </div>
                                <div class="comment__boxed">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between comment__header">
                                                                                <div class="d-flex flex-wrap align-items-center comment__author">
                                            <span class="comment__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                            <span class="comment__status" data-language="post_comment_status">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                            <?php }?>
                                        </div>
                                                                                <div class="comment__date">
                                            <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
</span>
                                        </div>
                                    </div>

                                                                        <div class="comment__body">
                                        <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value->children)) {?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['comment']->value->children,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                            <?php }?>
                        </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}}
/*/ smarty_template_function_comments_tree_2126410485644df01cbb2e73_17367425 */
}
