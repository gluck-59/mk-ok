<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:52:17
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/brands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fe031ecb952_84424497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a30d6e0a48e6c835c304ae30cdd52ebb39ef2ff' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/brands.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 3,
    'file:selected_features.tpl' => 1,
    'file:features.tpl' => 1,
    'file:browsed_products.tpl' => 1,
    'file:brands_content.tpl' => 1,
    'file:chpu_pagination.tpl' => 1,
  ),
),false)) {
function content_644fe031ecb952_84424497 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block">
		<div class="block__header block__header--boxed block__header--border">
		<h1 class="block__heading">
			<span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
		</h1>

		<div class="d-flex align-items-center justify-content-end">
						<div class="fn_switch_mobile_filter switch_mobile_filter hidden-lg-up">
				<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"filter_icon"), 0, false);
?>
				<span data-language="filters"><?php echo $_smarty_tpl->tpl_vars['lang']->value->filters;?>
</span>
			</div>
		</div>
	</div>

		<div class="fn_mobile_toogle sidebar d-lg-flex flex-lg-column">
		<div class="fn_mobile_toogle sidebar__header sidebar__boxed hidden-lg-up">
			<div class="fn_switch_mobile_filter sidebar__header--close">
				<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"remove_icon"), 0, true);
?>
				<span data-language="mobile_filter_close"><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_close;?>
</span>
			</div>
			<div class="sidebar__header--reset">
				<form method="post">
					<button type="submit" name="prg_seo_hide" class="fn_filter_reset mobile_filter__reset" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"brands",'absolute'=>1),$_smarty_tpl ) );?>
">
						<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"reset_icon"), 0, true);
?>
						<span><?php echo $_smarty_tpl->tpl_vars['lang']->value->mobile_filter_reset;?>
</span>
					</button>
				</form>
			</div>
		</div>

		<div class="fn_selected_features">
			<?php if (!$_smarty_tpl->tpl_vars['settings']->value->deferred_load_features) {?>
				<?php $_smarty_tpl->_subTemplateRender('file:selected_features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php }?>
		</div>

		<div class="fn_features">
			<?php if (!$_smarty_tpl->tpl_vars['settings']->value->deferred_load_features) {?>
				<?php $_smarty_tpl->_subTemplateRender('file:features.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php } else { ?>
								<div class='fn_skeleton_load'>
					<?php
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if (true) {
for ($__section_foo_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 1; $__section_foo_0_iteration <= 6; $__section_foo_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?>
						<div class='skeleton_load__item skeleton_load__item--<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null);?>
'></div>
					<?php
}
}
?>
				</div>
			<?php }?>
		</div>

				<div class="browsed products">
			<?php $_smarty_tpl->_subTemplateRender('file:browsed_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>

	<div class="products_container">
		<div class="block__body block--boxed block--border">
						<div id="fn_products_content" class="fn_categories">
				<?php $_smarty_tpl->_subTemplateRender("file:brands_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
								<div class="fn_pagination products_pagination">
					<?php $_smarty_tpl->_subTemplateRender('file:chpu_pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
				<div class="block block--boxed">
					<div class="fn_readmore">
						<div class="block__description block__description--style"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</div>


<?php }
}
