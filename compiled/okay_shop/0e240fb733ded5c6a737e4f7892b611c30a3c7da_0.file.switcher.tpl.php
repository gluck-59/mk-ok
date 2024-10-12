<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:24:30
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096d5e0ddee1_64833747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e240fb733ded5c6a737e4f7892b611c30a3c7da' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/switcher.tpl',
      1 => 1728664429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67096d5e0ddee1_64833747 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Languages -->
<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<?php $_smarty_tpl->_assignInScope('cnt', 0);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'ln');
$_smarty_tpl->tpl_vars['ln']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {?>
			<?php $_smarty_tpl->_assignInScope('cnt', $_smarty_tpl->tpl_vars['cnt']->value+1);?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php if ($_smarty_tpl->tpl_vars['cnt']->value > 1) {?>
		<div class="switcher__item d-flex align-items-center switcher__language">
			<div class="switcher__visible d-flex align-items-center">
				<?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['language']->value->label).".png")) {?>
					<img alt="<?php echo $_smarty_tpl->tpl_vars['language']->value->current_name;?>
" width="20" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['language']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
'/>
				<?php }?>
				<span class="switcher__name"><?php echo $_smarty_tpl->tpl_vars['language']->value->name;?>
</span>
			</div>
			<div class="switcher__hidden">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
						<a class="switcher__link d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['language']->value->id == $_smarty_tpl->tpl_vars['l']->value->id) {?> active<?php }?>" href="<?php echo preg_replace('/^(.+)\/$/','$1',$_smarty_tpl->tpl_vars['l']->value->url);?>
">
							<?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['l']->value->label).".png")) {?>
								<img alt="<?php echo $_smarty_tpl->tpl_vars['l']->value->current_name;?>
" width="20" src='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( (((string)$_smarty_tpl->tpl_vars['l']->value->label).".png"),20,20,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
'/>
							<?php }?>
							<span class="switcher__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
						</a>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	<?php }
}?>

<!-- Currencies -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
	<div class="switcher__item d-flex align-items-center switcher__currencies">
		<div class="switcher__visible">
			<span class="switcher__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
		</div>
		<div class="switcher__hidden">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
					<form method="POST">
						<button type="submit" name="prg_seo_hide" class="switcher__link d-flex align-items-center <?php if ($_smarty_tpl->tpl_vars['currency']->value->id == $_smarty_tpl->tpl_vars['c']->value->id) {?> active<?php }?>" value="<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('price'=>null),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('path'=>$_prefixVariable6,'currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl ) );?>
">
							<span class="switcher__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
						</button>
					</form>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php }
}
}
