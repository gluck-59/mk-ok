<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:45:48
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/user_deliveries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de46cd84af7_85552074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bbce25b1338fabc2b9fc30a8a16b69a0a6c96bd' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/user_deliveries.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_644de46cd84af7_85552074 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['deliveries']->value) {?>
   	<div class="block form form_cart">
        		<div class="form__header">
			<div class="form__title">
				<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"delivery_icon"), 0, false);
?>
				<span data-language="cart_delivery"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_delivery;?>
</span>
			</div>
		</div>
		<div class="delivery form__group">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['deliveries']->value, 'delivery');
$_smarty_tpl->tpl_vars['delivery']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['delivery']->value) {
$_smarty_tpl->tpl_vars['delivery']->do_else = false;
?>
				<div class="delivery__item fn_delivery_item">
					<label class="checkbox delivery__label<?php if ($_smarty_tpl->tpl_vars['active_delivery']->value->id == $_smarty_tpl->tpl_vars['delivery']->value->id) {?> active<?php }?>" for="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
">
												<input class="checkbox__input delivery__input" 
							    id="deliveries_<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"
							   onchange="okay.change_payment_method();"
							   data-module_id="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->module_id;?>
"
							   data-payment_method_ids="<?php echo implode(',',$_smarty_tpl->tpl_vars['delivery']->value->payment_methods_ids);?>
"
							   type="radio"
							   name="delivery_id" 
							   value="<?php echo $_smarty_tpl->tpl_vars['delivery']->value->id;?>
"
								<?php if ($_smarty_tpl->tpl_vars['active_delivery']->value->id == $_smarty_tpl->tpl_vars['delivery']->value->id) {?> checked<?php }?> />
						<svg class="checkbox__icon" viewBox="0 0 20 20">
							<path class="checkbox__mark" fill="none" d="M4 10 l5 4 8-8.5"></path>
						</svg>
						<span class="delivery__name">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>

						</span>
						<?php if ($_smarty_tpl->tpl_vars['delivery']->value->image) {?>
							<span class="delivery__image">
								<picture>
									<?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
										<source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['delivery']->value->image,80,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir )) ));?>
">
									<?php }?>
									<source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['delivery']->value->image,80,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir ));?>
">
									<img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['delivery']->value->image,80,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_deliveries_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
								</picture>
							</span>
						<?php }?>
					</label>
					
					<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>'front_user_delivery','vars'=>array('delivery'=>$_smarty_tpl->tpl_vars['delivery']->value)),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);?>
					<?php if ($_smarty_tpl->tpl_vars['delivery']->value->description || $_smarty_tpl->tpl_vars['block']->value) {?>
						<div class="delivery__description">
							<?php echo $_smarty_tpl->tpl_vars['delivery']->value->description;?>

							<?php if ($_smarty_tpl->tpl_vars['block']->value) {?>
								<div class="fn_delivery_module_html">
									<?php echo $_smarty_tpl->tpl_vars['block']->value;?>

								</div>
							<?php }?>
						</div>
					<?php }?>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
    </div> 
    
    	<?php if ($_smarty_tpl->tpl_vars['payment_methods']->value) {?>
		<div class="fn_payments_block"<?php if (!$_smarty_tpl->tpl_vars['active_delivery']->value->payment_methods_ids) {?> style="display: none;" <?php }?>>
		   	<div class="block form form_cart">
				<div class="form__header">
					<div class="form__title">
					<?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"money_icon"), 0, true);
?>
					<span data-language="cart_payment"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_payment;?>
</span>
					</div>
				</div>
				<div class="delivery form__group">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment_method');
$_smarty_tpl->tpl_vars['payment_method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->do_else = false;
?>
						<div class="payment_method__item fn_payment_method__item fn_payment_method__item_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"<?php if (!in_array($_smarty_tpl->tpl_vars['payment_method']->value->id,$_smarty_tpl->tpl_vars['active_delivery']->value->payment_methods_ids)) {?> style="display: none;" <?php }?>>
							<label class="checkbox delivery__label<?php if ($_smarty_tpl->tpl_vars['active_payment']->value->id == $_smarty_tpl->tpl_vars['payment_method']->value->id) {?> active<?php }?>" for="payment_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
">
								<input class="checkbox__input delivery__input" id="payment_<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
" type="radio" name="payment_method_id" data-currency_id="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->currency_id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['active_payment']->value->id == $_smarty_tpl->tpl_vars['payment_method']->value->id) {?> checked<?php }?> />
								<svg class="checkbox__icon" viewBox="0 0 20 20">
									<path class="checkbox__mark" fill="none" d="M4 10 l5 4 8-8.5"></path>
								</svg>
								<span class="delivery__name">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);
echo $_smarty_tpl->tpl_vars['lang']->value->cart_deliveries_to_pay;?>

								</span>
								<?php if ($_smarty_tpl->tpl_vars['payment_method']->value->image) {?>
									<span class="delivery__image">
										<picture>
											<?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
												<source type="image/webp" data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment_method']->value->image,80,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir )) ));?>
">
											<?php }?>
											<source data-srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment_method']->value->image,80,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir ));?>
">
											<img class="lazy" data-src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['payment_method']->value->image,80,30,false,$_smarty_tpl->tpl_vars['config']->value->resized_payments_dir ));?>
" src="<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/design/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_theme'][0], array( array(),$_smarty_tpl ) );?>
/images/xloading.gif" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</picture>
									</span>
								<?php }?>
							</label>

							<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>'front_cart_payment','vars'=>array('payment_method'=>$_smarty_tpl->tpl_vars['payment_method']->value)),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable2);?>
							<?php if ($_smarty_tpl->tpl_vars['payment_method']->value->description || $_smarty_tpl->tpl_vars['block']->value) {?>
								<div class="delivery__description">
									<?php echo $_smarty_tpl->tpl_vars['payment_method']->value->description;?>

									<?php if ($_smarty_tpl->tpl_vars['block']->value) {?>
										<div class="fn_payment_module_html">
											<?php echo $_smarty_tpl->tpl_vars['block']->value;?>

										</div>
									<?php }?>
								</div>
							<?php }?>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		</div>
	<?php }
}
}
}
