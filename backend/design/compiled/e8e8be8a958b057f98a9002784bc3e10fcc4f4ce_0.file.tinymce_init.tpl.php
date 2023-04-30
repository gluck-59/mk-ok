<?php
/* Smarty version 3.1.40, created on 2023-04-30 09:31:35
  from '/Users/gluck/Sites/motokofr.ok/backend/design/html/tinymce_init.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644def27d032d8_94799445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8e8be8a958b057f98a9002784bc3e10fcc4f4ce' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/backend/design/html/tinymce_init.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644def27d032d8_94799445 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="design/js/tinymce_jq/tinymce.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function(){
        tinyMCE.init({
            selector: "textarea.editor_large, textarea.editor_small, textarea#format-custom",
            height: 600,
            relative_urls : false,
            plugins: [
                "advlist autolink quickbars lists link image preview anchor responsivefilemanager emoticons",
                "hr visualchars codesample autosave noneditable searchreplace wordcount visualblocks",
                "code fullscreen save charmap nonbreaking",
                "insertdatetime media table paste imagetools",
            ],
            toolbar_mode: 'floating',
            mobile: 'false',
            toolbar_items_size : 'small',
            menubar:'file edit insert view format table tools',
            toolbar1: "undo redo|styleselect| fontselect |fontsizeselect |forecolor backcolor blocks | bold italic underline strikethrough blockquote | alignleft aligncenter alignright | numlist bullist checklist | table | link unlink| image media emoticons  | fullscreen preview codesample code",

                
            table_class_list:[
                {title: 'None', value: ''},
                {title: 'table_style1', value: 'table_style1'},
                {title: 'table_style2', value: 'table_style2'},
                {title: 'table_style3', value: 'table_style3'}
            ],
            image_class_list: [
                {title: 'None', value: ''},
                {title: 'image_zoom', value: 'fn_img_zoom'},
                {title: 'image_slider', value: 'fn_img_slider'},
                {title: 'image_gallery', value: 'fn_img_gallery'},
                {title: 'image_gallery 2', value: 'fn_img_gallery_2'},
                {title: 'image_style', value: 'fn_image_style'}
            ],
            link_class_list: [
                {title: 'None', value: ''},
                {title: 'Style 1', value: 'link_decor'},
                {title: 'Style 2', value: 'link_style'}
            ],
            
            statusbar: true,
            fontsize_formats: '11px 12px 14px 16px 18px 24px 36px 48px',
            font_formats: "Arial=arial,helvetica,sans-serif;"+
            "Arial Black=arial black,avant garde;"+
            "Montserrat=Montserrat,sans-serif;"+
            "Book Antiqua=book antiqua,palatino;"+
            "Comic Sans MS=comic sans ms,sans-serif;"+
            "Courier New=courier new,courier;"+
            "Georgia=georgia,palatino;"+
            "Helvetica=helvetica;"+
            "Impact=impact,chicago;"+
            "Symbol=symbol;"+
            "Tahoma=tahoma,arial,helvetica,sans-serif;"+
            "Terminal=terminal,monaco;"+
            "Times New Roman=times new roman,times;"+
            "Trebuchet MS=trebuchet ms,geneva;"+
            "Verdana=verdana,geneva;",
            image_advtab: true,
            external_filemanager_path:"<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/js/filemanager/",
            filemanager_title:"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->tinymce_init_filemanager, ENT_QUOTES, 'UTF-8', true);?>
" ,
            external_plugins: { "filemanager" : "<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/backend/design/js/filemanager/plugin.min.js"},

            style_formats: [
                { title: 'Headings', items: [
                        { title: 'Heading 1', format: 'h1' },
                        { title: 'Heading 2', format: 'h2' },
                        { title: 'Heading 3', format: 'h3' },
                        { title: 'Heading 4', format: 'h4' },
                        { title: 'Heading 5', format: 'h5' },
                        { title: 'Heading 6', format: 'h6' }
                    ]},
                { title: 'Inline', items: [
                        { title: 'Bold', format: 'bold' },
                        { title: 'Italic', format: 'italic' },
                        { title: 'Underline', format: 'underline' },
                        { title: 'Strikethrough', format: 'strikethrough' },
                        { title: 'Superscript', format: 'superscript' },
                        { title: 'Subscript', format: 'subscript' }
                    ]},
                { title: 'Blocks', items: [
                        { title: 'Paragraph', format: 'p' },
                        { title: 'Blockquote', format: 'blockquote' },
                        { title: 'Notice_info', block: 'div', format: 'p', classes: 'tmce_notice_info' },
                        { title: 'Notice_error', block: 'div', format: 'p', classes: 'tmce_notice_error' },
                        { title: 'Notice_success', block: 'div', format: 'p', classes: 'tmce_notice_success' },
                        { title: 'Div', format: 'div' }
                    ]}
            ],

            save_enablewhendirty: true,
            save_title: "save",
            content_css : [
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registered_front_css']->value, 'css');
$_smarty_tpl->tpl_vars['css']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->do_else = false;
?>
                    "<?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
",
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ],
            body_class: "block__description block__description--style",
            theme_advanced_buttons3_add : "save",
            save_onsavecallback: function() {
                $("[type='submit']").trigger("click");
                },

            language : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manager']->value->lang, ENT_QUOTES, 'UTF-8', true);?>
",
            /* Замена тега P на BR при разбивке на абзацы
             force_br_newlines : true,
             force_p_newlines : false,
             forced_root_block : '',
             */
            <?php if ($_GET['controller'] != "SeoPatternsAdmin") {?>
                setup : function(ed) {
                    ed.on('keyup change', (function() {
                        set_meta();
                    }));
                }
            <?php }?>
            });
    });


<?php echo '</script'; ?>
>
<?php }
}
