<?php
/* Smarty version 3.1.40, created on 2024-01-07 23:07:38
  from '/var/www/html/Okay/xml/opensearch.xml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_659b129a0bf952_66080164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '791dcd55e12cb4860ba711090221e13c90d270d8' => 
    array (
      0 => '/var/www/html/Okay/xml/opensearch.xml.tpl',
      1 => 1690910451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659b129a0bf952_66080164 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?xml ';?>
version="1.0" encoding="UTF-8"<?php echo '?>';?>

<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/" xmlns:moz="http://www.mozilla.org/2006/browser/search/">
    <ShortName><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
</ShortName>
    <Developer>OkayCMS <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->version, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value->version_type, ENT_QUOTES, 'UTF-8', true);?>
</Developer>
    <Description><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
</Description>
    <InputEncoding>UTF-8</InputEncoding>
    <?php if ((!empty($_smarty_tpl->tpl_vars['favicon_mime']->value))) {?>
        <Image type="<?php echo $_smarty_tpl->tpl_vars['favicon_mime']->value;?>
" width="16" height="16"><?php echo $_smarty_tpl->tpl_vars['rootUrl']->value;?>
/files/images/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_favicon, ENT_QUOTES, 'UTF-8', true);?>
</Image>
    <?php }?>

    <Url type="application/opensearchdescription+xml" rel="self" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"opensearch",'absolute'=>1),$_smarty_tpl ) );?>
" />
    <Url type="application/x-suggestions+json" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"opensearch_ajax",'absolute'=>1),$_smarty_tpl ) );?>
?query={searchTerms}" />
    <Url type="text/html" template="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"products",'absolute'=>1),$_smarty_tpl ) );?>
?keyword={searchTerms}" />
    <moz:SearchForm><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"products",'absolute'=>1),$_smarty_tpl ) );?>
</moz:SearchForm>
    <OutputEncoding>UTF-8</OutputEncoding>
    <InputEncoding>UTF-8</InputEncoding>
</OpenSearchDescription><?php }
}
