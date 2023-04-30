<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:32:05
  from '/Users/gluck/Sites/okaycms/design/okay_shop/html/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644de13545e0f8_27195082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7595d1735f91f0b0ce9809d9e197be3a97fa45d9' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/design/okay_shop/html/breadcrumb.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644de13545e0f8_27195082 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Breadcrumb navigation -->

<?php $_smarty_tpl->_assignInScope('level', 1);
if ($_smarty_tpl->tpl_vars['controller']->value != "MainController") {?>
    <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs d-flex flex-wrap align-items-center">
                <li itemprop="itemListElement" itemscope
            itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
            <a itemprop="item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'main'),$_smarty_tpl ) );?>
">
                <span itemprop="name" data-language="breadcrumb_home" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_home;?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
        </li>

                <?php if ($_smarty_tpl->tpl_vars['controller']->value == "CategoryController") {?>
            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value->path, 'cat', true);
$_smarty_tpl->tpl_vars['cat']->iteration = 0;
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['cat']->iteration++;
$_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
$__foreach_cat_8_saved = $_smarty_tpl->tpl_vars['cat'];
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cat']->last || $_smarty_tpl->tpl_vars['keyword']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                                <a itemprop="item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['cat']->value->url),$_smarty_tpl ) );?>
">
                                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                            </li>
                        <?php }?>
                    <?php } else { ?>
                        <li itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                        </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "ProductsController") {?>
            <?php if (!empty($_smarty_tpl->tpl_vars['keyword']->value)) {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name" data-language="general_search"><?php echo $_smarty_tpl->tpl_vars['lang']->value->general_search;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } else { ?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['h1']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php }?>
            
                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "BrandController") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <a itemprop="item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brands'),$_smarty_tpl ) );?>
">
                    <span itemprop="name" data-language="breadcrumb_brands"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_brands;?>
</span>
                </a>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>
            <?php if ($_smarty_tpl->tpl_vars['keyword']->value) {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <a itemprop="item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'brand','url'=>$_smarty_tpl->tpl_vars['brand']->value->url),$_smarty_tpl ) );?>
">
                        <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </a>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } else { ?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "BrandsController") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "ProductController") {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value->path, 'cat', true);
$_smarty_tpl->tpl_vars['cat']->iteration = 0;
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['cat']->iteration++;
$_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
$__foreach_cat_9_saved = $_smarty_tpl->tpl_vars['cat'];
?>
                <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                        <a itemprop="item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'category','url'=>$_smarty_tpl->tpl_vars['cat']->value->url),$_smarty_tpl ) );?>
">
                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                        <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                    </li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "FeedbackController" || $_smarty_tpl->tpl_vars['controller']->value == "PageController") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "CartController") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name" data-language="breadcrumb_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_cart;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "OrderController") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_order;?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "LoginController" && $_GET['action'] == "password_remind") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name" data-language="breadcrumbs_password_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_password_remind;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "LoginController") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name" data-language="breadcrumbs_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_enter;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "RegisterController") {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name" data-language="breadcrumbs_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_registration;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "UserController") {?>
            <?php if ($_smarty_tpl->tpl_vars['route_name']->value == 'login') {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name" data-language="breadcrumbs_enter"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_enter;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['route_name']->value == 'register') {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name" data-language="breadcrumbs_registration"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_registration;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } elseif ($_smarty_tpl->tpl_vars['route_name']->value == 'password_remind') {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name" data-language="breadcrumbs_password_remind"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_password_remind;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } else { ?>
                <li itemprop="itemListElement" itemscope
                     itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name" data-language="breadcrumbs_user"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_user;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "BlogController") {?>

            <?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value->path, 'cat', true);
$_smarty_tpl->tpl_vars['cat']->iteration = 0;
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
$_smarty_tpl->tpl_vars['cat']->iteration++;
$_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
$__foreach_cat_10_saved = $_smarty_tpl->tpl_vars['cat'];
?>
                    <?php if (!$_smarty_tpl->tpl_vars['cat']->last || !empty($_smarty_tpl->tpl_vars['post']->value)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['cat']->value->visible) {?>
                            <li itemprop="itemListElement" itemscope
                                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                                <a itemprop="item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'blog_category','url'=>$_smarty_tpl->tpl_vars['cat']->value->url),$_smarty_tpl ) );?>
">
                                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                            </li>
                        <?php }?>
                    <?php } else { ?>
                        <li itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                        </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php if ($_smarty_tpl->tpl_vars['post']->value) {?>
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                        <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                    </li>
                <?php }?>
            <?php } else { ?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name" data-language="breadcrumbs_blog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_blog;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == "AuthorsController") {?>
            <?php if ($_smarty_tpl->tpl_vars['author']->value) {?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <a itemprop="item" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>'authors'),$_smarty_tpl ) );?>
">
                        <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_authors;?>
</span>
                    </a>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['author']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php } else { ?>
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                    <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumbs_authors;?>
</span>
                    <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                </li>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'ComparisonController') {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name" data-language="breadcrumb_comparison"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_comparison;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'WishListController') {?>
            <li itemprop="itemListElement" itemscope
                itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                <span itemprop="name" data-language="breadcrumb_wishlist"><?php echo $_smarty_tpl->tpl_vars['lang']->value->breadcrumb_wishlist;?>
</span>
                <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
            </li>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value) && is_array($_smarty_tpl->tpl_vars['breadcrumbs']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'name', true, 'url');
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['url']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
$__foreach_name_11_saved = $_smarty_tpl->tpl_vars['name'];
?>
                <?php if (!$_smarty_tpl->tpl_vars['name']->last) {?>
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                        <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                    </li>
                <?php } else { ?>
                    <li itemprop="itemListElement" itemscope
                        itemtype="https://schema.org/ListItem" class="d-inline-flex align-items-center breadcrumbs__item">
                        <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <meta itemprop="position" content="<?php echo $_smarty_tpl->tpl_vars['level']->value++;?>
" />
                    </li>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_11_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </ol>
<?php }
}
}
