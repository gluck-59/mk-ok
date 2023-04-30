<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:45:48
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/user_comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de46cdb6956_42113132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bd452a080df2c55ee6396950301d2d13a16a54a' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/user_comments.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_644de46cdb6956_42113132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'comments_tree' => 
  array (
    'compiled_filepath' => '/Users/gluck/Sites/okaycms/compiled/okay_shop/0bd452a080df2c55ee6396950301d2d13a16a54a_0.file.user_comments.tpl.php',
    'uid' => '0bd452a080df2c55ee6396950301d2d13a16a54a',
    'call_name' => 'smarty_template_function_comments_tree_1877315708644de46cd8fb33_43419788',
  ),
));
if ($_smarty_tpl->tpl_vars['user_comments']->value) {?>
    <div class="comment">
        
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['user_comments']->value), true);?>

    </div>
<?php } else { ?>
    <div class="boxed_no_comments">
        <div class="boxed_no_comments__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 20 19.805">
                <path fill="#D1D6D8" d="M4,19.8V16H2a2,2,0,0,1-2-2V2A2,2,0,0,1,2,0H18a2,2,0,0,1,2,2V14a2,2,0,0,1-2,2H10.087L4,19.8H4ZM2,14H6v2.2L9.513,14H18V2H2Zm3-3V9h7v2ZM5,7V5h9V7Z"></path>
            </svg>
        </div>
        <div class="boxed_no_comments__title">
            <span data-language="product_no_comments"><?php echo $_smarty_tpl->tpl_vars['lang']->value->product_no_comments;?>
</span>
        </div>
    </div>
<?php }
}
/* smarty_template_function_comments_tree_1877315708644de46cd8fb33_43419788 */
if (!function_exists('smarty_template_function_comments_tree_1877315708644de46cd8fb33_43419788')) {
function smarty_template_function_comments_tree_1877315708644de46cd8fb33_43419788(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                <div class="comment__item <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?> admin_note<?php }?>">
                                        <a name="comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"></a>
                                        <div class="comment__inner">
                        <div class="comment__icon">
                            <?php if ($_smarty_tpl->tpl_vars['level']->value > 0) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-admin_icon"), 0, true);
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"comment-user_icon"), 0, true);
?>
                            <?php }?>
                        </div>
                        <div class="comment__boxed">
                            <div class="d-flex flex-wrap align-items-center justify-content-between comment__header">
                                                                <div class="d-flex flex-wrap align-items-center comment__author">
                                    <span class="comment__name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                                        <?php if (!$_smarty_tpl->tpl_vars['comment']->value->approved) {?>
                                        <span class="comment__status" data-language="post_comment_status">(<?php echo $_smarty_tpl->tpl_vars['lang']->value->post_comment_status;?>
)</span>
                                    <?php }?>
                                </div>
                                                                <div class="comment__date">
                                    <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'time' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value->date ));?>
</span>
                                </div>
                            </div>

                                                        <div class="comment__body">
                                <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->text, ENT_QUOTES, 'UTF-8', true));?>

                            </div>

                            <?php if ($_smarty_tpl->tpl_vars['comment']->value->type == "product") {?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"product",'url'=>$_smarty_tpl->tpl_vars['comment']->value->product->url),$_smarty_tpl ) );?>
#comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->product->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['comment']->value->type == "post") {?>
                                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"post",'url'=>$_smarty_tpl->tpl_vars['comment']->value->post->url),$_smarty_tpl ) );?>
#comment_<?php echo $_smarty_tpl->tpl_vars['comment']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value->post->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <?php }?>

                        </div>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['comment']->value->children)) {?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'comments_tree', array('comments'=>$_smarty_tpl->tpl_vars['comment']->value->children,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}}
/*/ smarty_template_function_comments_tree_1877315708644de46cd8fb33_43419788 */
}
