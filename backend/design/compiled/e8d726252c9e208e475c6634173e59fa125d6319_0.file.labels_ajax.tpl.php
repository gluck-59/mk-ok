<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:29:32
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/labels_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096e8cc5ad29_77532871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8d726252c9e208e475c6634173e59fa125d6319' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/labels_ajax.tpl',
      1 => 1728664428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67096e8cc5ad29_77532871 (Smarty_Internal_Template $_smarty_tpl) {
if ($_GET['controller'] == "OrderAdmin") {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_labels']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
        <span class="tag font-xs" style="background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->color, ENT_QUOTES, 'UTF-8', true);?>
;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
        <input type="hidden" name="order_labels[]" value="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['order']->value->labels) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->labels, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
            <span class="tag" style="background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->color, ENT_QUOTES, 'UTF-8', true);?>
;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
}
