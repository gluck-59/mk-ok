<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:46:28
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/FastOrder/Backend/design/html/description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fded4897de3_52494435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7540da4c0e9fb8c8f7efb3b7e21baef30b6d6acb' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/FastOrder/Backend/design/html/description.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644fded4897de3_52494435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('meta_title', htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__fast_order__title, ENT_QUOTES, 'UTF-8', true) ,false ,32);?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__fast_order__title, ENT_QUOTES, 'UTF-8', true);?>

            </div>
        </div>
    </div>
</div>

<div class="row d_flex">
    <div class="col-lg-12 col-md-12">
        <div class="alert alert--icon">
            <div class="alert__content">
                <div class="alert__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->alert_description, ENT_QUOTES, 'UTF-8', true);?>
</div>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__fast_order__description, ENT_QUOTES, 'UTF-8', true);?>
</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="boxed">
            <h3 class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->okay_cms__fast_order__code, ENT_QUOTES, 'UTF-8', true);?>
: {fast_order_btn product=$product}</h3>
        </div>
    </div>
</div>
<?php }
}
