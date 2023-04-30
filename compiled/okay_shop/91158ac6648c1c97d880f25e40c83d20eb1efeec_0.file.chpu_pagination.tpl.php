<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:42:54
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/chpu_pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de3be6489e6_22097573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91158ac6648c1c97d880f25e40c83d20eb1efeec' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/chpu_pagination.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644de3be6489e6_22097573 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Pagination -->
<?php if ($_smarty_tpl->tpl_vars['total_pages_num']->value > 1) {?>
    <ul class="fn_ajax_buttons pagination<?php if ($_smarty_tpl->tpl_vars['ajax']->value) {?> fn_is_ajax<?php }?>">
                <?php $_smarty_tpl->_assignInScope('visible_pages', 5);?>

                <?php $_smarty_tpl->_assignInScope('page_from', 1);?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value > floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
            <?php $_smarty_tpl->_assignInScope('page_from', max(1,$_smarty_tpl->tpl_vars['current_page_num']->value-floor($_smarty_tpl->tpl_vars['visible_pages']->value/2)-1));?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value > $_smarty_tpl->tpl_vars['total_pages_num']->value-ceil($_smarty_tpl->tpl_vars['visible_pages']->value/2)) {?>
            <?php $_smarty_tpl->_assignInScope('page_from', max(1,$_smarty_tpl->tpl_vars['total_pages_num']->value-$_smarty_tpl->tpl_vars['visible_pages']->value-1));?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('page_to', min($_smarty_tpl->tpl_vars['page_from']->value+$_smarty_tpl->tpl_vars['visible_pages']->value,$_smarty_tpl->tpl_vars['total_pages_num']->value-1));?>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value > 1) {?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value-1),$_smarty_tpl ) );
}?>">
                    <span>&laquo; <?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_prev;?>
</span>
                </a>
            </li>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == 1) {?>
            <li class="pagination__item active">
                <span class="pagination__link">1</span>
            </li>
        <?php } else { ?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>null),$_smarty_tpl ) );?>
">1</a>
            </li>
        <?php }?>

                <?php
$__section_pages_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['page_to']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_1_start = (int)@$_smarty_tpl->tpl_vars['page_from']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['page_from']->value + $__section_pages_1_loop) : min((int)@$_smarty_tpl->tpl_vars['page_from']->value, $__section_pages_1_loop);
$__section_pages_1_total = min(($__section_pages_1_loop - $__section_pages_1_start), $__section_pages_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new Smarty_Variable(array());
if ($__section_pages_1_total !== 0) {
for ($__section_pages_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_1_start; $__section_pages_1_iteration <= $__section_pages_1_total; $__section_pages_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('p', (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null)+1);?>
            <?php if (($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page_from']->value+1 && $_smarty_tpl->tpl_vars['p']->value != 2) || ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page_to']->value && $_smarty_tpl->tpl_vars['p']->value != $_smarty_tpl->tpl_vars['total_pages_num']->value-1)) {?>
                <li class="pagination__item">
                    <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
">...</a>
                </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['current_page_num']->value) {?>
                <li class="pagination__item<?php if ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['current_page_num']->value) {?> active<?php }?>">
                    <span class="pagination__link"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</span>
                </li>
            <?php } else { ?>
                <li class="pagination__item">
                    <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
                </li>
            <?php }?>
        <?php
}
}
?>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value == $_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
            <li class="pagination__item active">
                <span class="pagination__link"><?php echo $_smarty_tpl->tpl_vars['total_pages_num']->value;?>
</span>
            </li>
        <?php } else { ?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['total_pages_num']->value),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['total_pages_num']->value;?>
</a>
            </li>
        <?php }?>

                <li class="pagination__item">
            <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>'all'),$_smarty_tpl ) );?>
" data-language="pagination_all"><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_all;?>
</a>
        </li>

                <?php if ($_smarty_tpl->tpl_vars['current_page_num']->value < $_smarty_tpl->tpl_vars['total_pages_num']->value) {?>
            <li class="pagination__item">
                <a class="fn_sort_pagination_link pagination__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['furl'][0], array( array('page'=>$_smarty_tpl->tpl_vars['current_page_num']->value+1),$_smarty_tpl ) );?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value->pagination_next;?>
 &raquo;</span>
                </a>
            </li>
        <?php }?>
    </ul>
<?php }
}
}
