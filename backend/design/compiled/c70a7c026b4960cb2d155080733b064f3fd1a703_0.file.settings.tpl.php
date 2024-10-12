<?php
/* Smarty version 3.1.40, created on 2024-10-11 23:26:48
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Feeds/Backend/design/html/feed_tabs/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_67096de88e6e76_28807197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c70a7c026b4960cb2d155080733b064f3fd1a703' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Feeds/Backend/design/html/feed_tabs/settings.tpl',
      1 => 1728664430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67096de88e6e76_28807197 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"okay_cms__feeds__feed__settings__custom_block"),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable10);
if (!empty($_smarty_tpl->tpl_vars['block']->value)) {?>
    <div class="row custom_block">
        <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

    </div>
<?php }?>
<div class="fn_settings" data-preset_name="<?php if ($_smarty_tpl->tpl_vars['feed']->value) {
echo $_smarty_tpl->tpl_vars['feed']->value->preset;
} else {
echo key($_smarty_tpl->tpl_vars['settings_templates']->value);
}?>">
    <?php echo $_smarty_tpl->tpl_vars['settings_template']->value;?>

</div>


    <?php echo '<script'; ?>
>
        $(function() {
            $('.selectpicker_categories').selectpicker();
            $('.selectpicker_brands').selectpicker();

            let newSettings = [];

            $('.fn_new_settings_container .fn_new_settings').each(function(i, el) {
                newSettings[$(el).data('preset_name')] = el;
            });

            $(document).on('change', 'select.fn_preset_select', function() {
                let currentEl = $('.fn_settings_container .fn_settings');
                newSettings[currentEl.data('preset_name')] = currentEl[0];
                currentEl.appendTo('.fn_new_settings_container');
                $('.fn_settings_container').append(newSettings[$(this).val()]);
            })
        })
    <?php echo '</script'; ?>
>
<?php }
}
