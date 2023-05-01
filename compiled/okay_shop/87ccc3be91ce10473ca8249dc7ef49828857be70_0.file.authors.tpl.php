<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:56:32
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/authors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fe1300dd1e1_76292449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ccc3be91ce10473ca8249dc7ef49828857be70' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/authors.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 1,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_644fe1300dd1e1_76292449 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- The authors page template -->

<div class="block">
		<div class="block__header block__header--boxed block__header--border">
		<h1 class="block__heading"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php if (htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name_h1, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);
}?></span></h1>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['authors']->value) {?>
		<div class="block__body block--boxed block--border">
						<div class="author_list f_row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
					<div class="author_list__item f_col-xs-6 f_col-sm-4 f_col-lg-2">
						<div class="author_list__preview">
							<a class="d-flex align-items-center justify-content-center flex-column author_list__link" data-author="<?php echo $_smarty_tpl->tpl_vars['a']->value->id;?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'author','url'=>$_smarty_tpl->tpl_vars['a']->value->url),$_smarty_tpl ) );?>
">
								<div class="author_list__image">
								<?php if ($_smarty_tpl->tpl_vars['a']->value->image) {?>
									<picture>
										<?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
											<source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['a']->value->image,320,500,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir )) ));?>
">
										<?php }?>
										<source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['a']->value->image,320,500,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir ));?>
">
										<img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['a']->value->image,320,500,false,$_smarty_tpl->tpl_vars['config']->value->resized_authors_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
									</picture>
								<?php } else { ?>
									<div class="author_card__no_image d-flex align-items-start">
										<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-user_icon"), 0, true);
?>
									</div>
								<?php }?>
								</div>
								<div class="author_list__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</div>
							</a>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php }?>
</div>

<div class="products_pagination">
	<?php $_smarty_tpl->_subTemplateRender('file:pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
<div class="block block--boxed block--border">
	<div class="fn_readmore">
		<div class="block__description block__description--style"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
	</div>
</div>
<?php }?>


<?php }
}
