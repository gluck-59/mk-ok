<?php
/* Smarty version 3.1.40, created on 2023-04-30 08:21:21
  from '/Users/gluck/Sites/okaycms/Okay/Modules/OkayCMS/Banners/design/html/show_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644ddeb10095c4_40525860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efdb585f270501aaf3e7b885d746bff38aabdcf1' => 
    array (
      0 => '/Users/gluck/Sites/okaycms/Okay/Modules/OkayCMS/Banners/design/html/show_banner.tpl',
      1 => 1682807751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644ddeb10095c4_40525860 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['banner_data']->value->group_name == 'advantage') {?>
    <div class="block block--boxed block--border">
        <div class="banner_advantages f_row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner_data']->value->items, 'bi');
$_smarty_tpl->tpl_vars['bi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->do_else = false;
?>
                <div class="banner_advantages__item f_col-6 f_col-md-3">
                    <div class="banner_advantages__preview d-flex align-items-center">
                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                            <a class="banner_advantages__link" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"></a>
                        <?php }?>
                        <div class="banner_advantages__icon d-flex align-items-center justify-content-center">
                            <picture>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                    <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir )) ));?>
" media="(max-width: 767px)">
                                    <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' )) ));?>
">
                                <?php }?>
                                <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
" media="(max-width: 767px)">
                                <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
">
                                    
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" data-src-retina="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->alt, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </picture>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->title) {?>
                            <div class="banner_advantages__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['bi']->value->description) {?>
                            <div class="banner_advantages__description"><?php echo $_smarty_tpl->tpl_vars['bi']->value->description;?>
</div>
                        <?php }?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php } else { ?>
    <div class="fn_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_data']->value->group_name, ENT_QUOTES, 'UTF-8', true);?>
 banner_group banner_group--<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
  <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings['as_slider']) {?>swiper-container<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings['as_slider']) {?><div class="swiper-wrapper"><?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner_data']->value->items, 'bi');
$_smarty_tpl->tpl_vars['bi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_DEFAULT) {?>
                <div class="banner_group__item swiper-slide block--border banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant1" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_DARK) {?>
                <div class="banner_group__item swiper-slide block--border banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant2" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_IMAGE_LEFT) {?>
                <div class="banner_group__item swiper-slide block--border banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant3" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings['variant_show'] == Okay\Modules\OkayCMS\Banners\Entities\BannersImagesEntity::SHOW_IMAGE_RIGHT) {?>
                <div class="banner_group__item swiper-slide block--border banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant4" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                    <a class="banner_group__link" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"></a>
                    <?php }?>
                    <div class="banner_group__image">
                        <picture>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir )) ));?>
" media="(max-width: 767px)">
                                <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' )) ));?>
">
                            <?php }?>
                            <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['mobile']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
" media="(max-width: 767px)">
                            <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
">
                                
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" data-src-retina="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['w'],$_smarty_tpl->tpl_vars['bi']->value->settings['desktop']['h'],false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->alt, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
"/>
                        </picture>
                    </div>
                    <div class="banner_group__content">
                        <div class="banner_group__text">
                            <?php if ($_smarty_tpl->tpl_vars['bi']->value->title) {?>
                                <div class="banner_group__title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['bi']->value->description) {?>
                                <div class="banner_group__description"><?php echo $_smarty_tpl->tpl_vars['bi']->value->description;?>
</div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings['as_slider']) {?>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['nav'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['nav'])) {?>
                <div class="swiper-button-next "></div>
                <div class="swiper-button-prev "></div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['dots'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['dots'])) {?>
                <div class="swiper-pagination"></div>
            <?php }?>
        <?php }?>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings['as_slider']) {?>
    <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function(){
            $('.fn_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_data']->value->group_name, ENT_QUOTES, 'UTF-8', true);?>
').each(function(){
                var swiper = new Swiper(this, {
                loop: <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['loop'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['loop'])) {?>true<?php } else { ?>false<?php }?>,
                <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['autoplay'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['autoplay'])) {?>
                    autoplay: {
                        delay: <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['rotation_speed'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['rotation_speed'])) {
echo intval($_smarty_tpl->tpl_vars['banner_data']->value->settings['rotation_speed']);
} else { ?>2500<?php }?>,
                    },
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['nav'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['nav'])) {?>
                    navigation: {
                        nextEl: this.querySelector('.swiper-button-next'),
                        prevEl: this.querySelector('.swiper-button-prev'),
                    },
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['banner_data']->value->settings['dots'])) && !empty($_smarty_tpl->tpl_vars['banner_data']->value->settings['dots'])) {?>
                pagination: {
                    el: this.querySelector('.swiper-pagination'),
                    clickable: true,
                    },
                <?php }?>
                slidesPerView: 1,
                watchOverflow: true,
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    991: {
                        slidesPerView: 1,
                    },
                }
            });
            });
        });
    <?php echo '</script'; ?>
>
    <?php }
}
}
}
