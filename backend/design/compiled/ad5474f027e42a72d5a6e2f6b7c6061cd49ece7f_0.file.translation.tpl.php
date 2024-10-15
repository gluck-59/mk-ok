<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:58:05
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/translation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e208d8777b2_16643046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad5474f027e42a72d5a6e2f6b7c6061cd49ece7f' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/translation.tpl',
      1 => 1728664428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg_icon.tpl' => 2,
  ),
),false)) {
function content_670e208d8777b2_16643046 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['translation']->value->id) {?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['translation']->value->label ,false ,32);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('meta_title', $_smarty_tpl->tpl_vars['btr']->value->translation_new ,false ,32);
}?>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <?php if (!$_smarty_tpl->tpl_vars['translation']->value->id) {?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_add, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?> <?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_theme;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_theme, ENT_QUOTES, 'UTF-8', true);
}?></div>
        <?php } else { ?>
            <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['translation']->value->label, ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['settings']->value->admin_theme) {?> <?php echo $_smarty_tpl->tpl_vars['btr']->value->theme_theme;?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_theme, ENT_QUOTES, 'UTF-8', true);
}?></div>
        <?php }?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--icon alert--error">
                <div class="alert__content">
                    <div class="alert__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_protected, ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--success">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_success']->value == 'added') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_added, ENT_QUOTES, 'UTF-8', true);?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['message_success']->value == 'updated') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_updated, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
                <?php if ($_GET['return']) {?>
                <a class="alert__button" href="<?php echo $_GET['return'];?>
">
                    <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'return'), 0, false);
?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert--center alert--icon alert--error">
                <div class="alert__content">
                    <div class="alert__title">
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'label_empty') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_empty, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'label_exists') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_used, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'label_is_class') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_not_allowed, ENT_QUOTES, 'UTF-8', true);?>

                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"translation_custom_block"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable1);
if ($_smarty_tpl->tpl_vars['block']->value) {?>
    <div class="custom_block">
        <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

    </div>
<?php }?>

<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">
    <input name=id type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['translation']->value->id;?>
"/>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="boxed match_matchHeight_true">
                <div class="row">
                                        <div class="col-lg-12 col-md-12">
                        <div class="heading_label">

                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->translation_name, ENT_QUOTES, 'UTF-8', true);?>

                        </div>
                        <div class="form-group">
                            <input name="label" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['translation']->value->label, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>readonly=""<?php }?> />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
$_smarty_tpl->tpl_vars['lang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->do_else = false;
?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-h">
                            <div class="heading_label mb-h">
                                <?php if (is_file(((string)$_smarty_tpl->tpl_vars['config']->value->lang_images_dir).((string)$_smarty_tpl->tpl_vars['lang']->value->label).".png")) {?>
                                <div class="translation_icon">
                                <img src="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->label, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable2=ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( ($_prefixVariable2.".png"),32,32,false,$_smarty_tpl->tpl_vars['config']->value->lang_resized_dir ));?>
" />
                                </div>
                                <?php }?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value->id;
$_prefixVariable3 = ob_get_clean();
if ((isset($_smarty_tpl->tpl_vars['translation']->value->values[$_prefixVariable3]->module))) {?>
                                    <i class="translation_module_hint">
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value->id;
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['translation']->value->values[$_prefixVariable4]->module->vendor;?>
/<?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value->id;
$_prefixVariable5 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['translation']->value->values[$_prefixVariable5]->module->name;?>

                                    </i>
                                <?php }?>
                            </div>
                            <div class="">
                                <textarea name="lang_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->label, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control okay_textarea" <?php if ($_smarty_tpl->tpl_vars['locked_theme']->value) {?>readonly=""<?php }?>><?php ob_start();
echo $_smarty_tpl->tpl_vars['lang']->value->id;
$_prefixVariable6 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['translation']->value->values[$_prefixVariable6]->value;?>
</textarea>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"translation_data_block"),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('block', $_prefixVariable7);?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value) {?>
                    <div class="custom_block">
                        <?php echo $_smarty_tpl->tpl_vars['block']->value;?>

                    </div>
                <?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['locked_theme']->value) {?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-1">
                            <button type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php $_smarty_tpl->_subTemplateRender('file:svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>'checked'), 0, true);
?>
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</form>


    <?php echo '<script'; ?>
>
        $(function() {
            $('textarea').on( "focusout", function(){
                label = $(this).val();
                label = label.replace(/[\s]+/gi, '_');
                label = translit(label);
                label = label.replace(/[^0-9a-z_\-]+/gi, '').toLowerCase();

                if(($('input[name="label"]').val() == label || $('input[name="label"]').val() == ''))
                    $('input[name="label"]').val(label);
            });

        });

        function translit(str)
        {
            var ru=("А-а-Б-б-В-в-Ґ-ґ-Г-г-Д-д-Е-е-Ё-ё-Є-є-Ж-ж-З-з-И-и-І-і-Ї-ї-Й-й-К-к-Л-л-М-м-Н-н-О-о-П-п-Р-р-С-с-Т-т-У-у-Ф-ф-Х-х-Ц-ц-Ч-ч-Ш-ш-Щ-щ-Ъ-ъ-Ы-ы-Ь-ь-Э-э-Ю-ю-Я-я").split("-")
            var en=("A-a-B-b-V-v-G-g-G-g-D-d-E-e-E-e-E-e-ZH-zh-Z-z-I-i-I-i-I-i-J-j-K-k-L-l-M-m-N-n-O-o-P-p-R-r-S-s-T-t-U-u-F-f-H-h-TS-ts-CH-ch-SH-sh-SCH-sch-'-'-Y-y-'-'-E-e-YU-yu-YA-ya").split("-")
            var res = '';
            for(var i=0, l=str.length; i<l; i++)
            {
                var s = str.charAt(i), n = ru.indexOf(s);
                if(n >= 0) { res += en[n]; }
                else { res += s; }
            }
            return res;
        }
    <?php echo '</script'; ?>
>


<?php }
}
