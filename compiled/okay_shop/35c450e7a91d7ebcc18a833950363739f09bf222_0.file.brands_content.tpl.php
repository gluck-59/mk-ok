<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:52:17
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/brands_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fe031efe930_05962986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35c450e7a91d7ebcc18a833950363739f09bf222' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/brands_content.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644fe031efe930_05962986 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['brands']->value) {?>
    <div class="brand f_row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'b');
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
?>
            <div class="brand__item f_col-xs-6 f_col-sm-4 f_col-lg-3">
                <div class="brand__preview">
                    <a class="d-flex align-items-center justify-content-center brand__link" data-brand="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brand','url'=>$_smarty_tpl->tpl_vars['b']->value->url,'keyword'=>$_smarty_tpl->tpl_vars['keyword']->value),$_smarty_tpl ) );?>
">
                        <?php if ($_smarty_tpl->tpl_vars['b']->value->image) {?>
                            <div class="brand__image">
                                <picture>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                        <source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,120,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
.webp">
                                    <?php }?>
                                    <source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,120,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
">
                                    <img class="brand_img lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['b']->value->image,120,100,false,$_smarty_tpl->tpl_vars['config']->value->resized_brands_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </picture>
                            </div>
                        <?php } else { ?>
                            <div class="brand__name"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                        <?php }?>
                    </a>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php } else { ?>
    <div class="brand f_row">
        <div class="col-xs-12">
            <div class="boxed boxed--big boxed--notify ">
                <span data-language="products_not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value->brands_not_found;?>
</span>
            </div>
        </div>
    </div>
<?php }
}
}
