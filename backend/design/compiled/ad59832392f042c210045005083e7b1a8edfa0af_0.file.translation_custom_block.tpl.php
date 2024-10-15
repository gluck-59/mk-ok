<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:58:05
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/AutoDeploy/Backend/design/html/translation_custom_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e208d88c1c9_04139933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad59832392f042c210045005083e7b1a8edfa0af' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/AutoDeploy/Backend/design/html/translation_custom_block.tpl',
      1 => 1728664430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e208d88c1c9_04139933 (Smarty_Internal_Template $_smarty_tpl) {
if ((!$_smarty_tpl->tpl_vars['translation']->value || !$_smarty_tpl->tpl_vars['translation']->value->id) && $_smarty_tpl->tpl_vars['settings']->value->deploy_build_channel && $_smarty_tpl->tpl_vars['settings']->value->deploy_build_channel != 'local') {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--error">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->auto_deploy_disable_add, ENT_QUOTES, 'UTF-8', true);?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        $(function () {
            $('.min_content_fix input, .min_content_fix textarea, .min_content_fix button').prop('disabled', true);
        });
    <?php echo '</script'; ?>
>
<?php }
}
}
