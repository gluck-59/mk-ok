<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:58:07
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/post_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e208f419429_90872244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3403d3055852db60670584479a1e817c96968b' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/post_list.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 5,
  ),
),false)) {
function content_670e208f419429_90872244 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="article__preview">
    <div class="article__body">
        <div class="article__image">
            <a class="article__image_link" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'post','url'=>$_smarty_tpl->tpl_vars['post']->value->url),$_smarty_tpl ) );?>
">
                <?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
                    <picture>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                            <source class="lazy" type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,340,240,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir,'center','center' )) ));?>
" media="(max-width: 440px)" srcset="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif">
                            <source class="lazy" type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,380,240,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir,'center','center' )) ));?>
" srcset="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif">
                        <?php }?>
                        <source class="lazy" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,340,240,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir,'center','center' ));?>
" media="(max-width: 440px)" srcset="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif">
                        <source class="lazy" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,380,240,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir,'center','center' ));?>
" srcset="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif">
                            
                        <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->image,380,240,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir,'center','center' ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                    </picture>
                <?php } else { ?>
                    <div class="article__no_image d-flex align-items-start">
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"no_image"), 0, false);
?>
                    </div>
                <?php }?>
            </a>
            <?php if (!empty($_smarty_tpl->tpl_vars['post']->value->categories)) {?>
            <div class="article__labels">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->categories, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
                        <a class="article__label" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_category','url'=>$_smarty_tpl->tpl_vars['c']->value->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>
        </div>

        <a class="article__title theme_link--color" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'post','url'=>$_smarty_tpl->tpl_vars['post']->value->url),$_smarty_tpl ) );?>
" data-post="<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>

        <div class="article__info">
            <div class="article__info_item">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"calendar_icon"), 0, true);
?>
                <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->date,"d m Y" ));?>
</span>
            </div>
            <div class="article__info_item " title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_count_comments;?>
">
                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"chat_icon"), 0, true);
?>
                <span><?php if ($_smarty_tpl->tpl_vars['post']->value->comments_count) {
echo $_smarty_tpl->tpl_vars['post']->value->comments_count;
} else { ?>0<?php }?></span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['post']->value->read_time > 0) {?>
                <div class="article__info_item " title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_time_read;?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value->read_time;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->read_time,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_1,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_2,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_3 ));?>
">
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"time_read_icon"), 0, true);
?>
                    <span><?php echo $_smarty_tpl->tpl_vars['post']->value->read_time;?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'plural' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->read_time,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_1,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_2,$_smarty_tpl->tpl_vars['lang']->value->blog_time_read_minute_3 ));?>
</span>
                </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['post']->value->annotation) {?>
            <div class="article__annotation"><?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
</div>
        <?php }?>
    </div>
    <?php if (!empty($_smarty_tpl->tpl_vars['post']->value->author)) {?>
        <div class="article__footer d-flex justify-content-between align-items-center">
            <div class="article__info_item article__info_item--author" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->blog_author;?>
">
                <div class="article__avatar">
                    <?php if ($_smarty_tpl->tpl_vars['post']->value->author->image) {?>
                    <picture>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                            <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->author->image,24,24,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir,'center','center' )) ));?>
">
                        <?php }?>
                        <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->author->image,24,24,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir,'center','center' ));?>
">
                        <img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value->author->image,24,24,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir,'center','center' ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                    </picture>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"avatar_icon"), 0, true);
?>
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['post']->value->author->visible) {?>
                    <a class="article__author article__author--link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'author','url'=>$_smarty_tpl->tpl_vars['post']->value->author->url),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                <?php } else { ?>
                    <span class="article__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->author->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
