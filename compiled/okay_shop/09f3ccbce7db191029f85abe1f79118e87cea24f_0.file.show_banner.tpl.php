<?php
/* Smarty version 3.1.40, created on 2024-10-15 12:23:15
  from '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Banners/design/html/show_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_670e1863f244c4_62936814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f3ccbce7db191029f85abe1f79118e87cea24f' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/Okay/Modules/OkayCMS/Banners/design/html/show_banner.tpl',
      1 => 1728664430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670e1863f244c4_62936814 (Smarty_Internal_Template $_smarty_tpl) {
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
                                    <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir )) ));?>
" media="(max-width: 767px)">
                                    <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' )) ));?>
">
                                <?php }?>
                                <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir ));?>
" media="(max-width: 767px)">
                                <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
">

                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" data-src-retina="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
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
  <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isAsSlider()) {?>swiper-container<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isAsSlider()) {?><div class="swiper-wrapper"><?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner_data']->value->items, 'bi');
$_smarty_tpl->tpl_vars['bi']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bi']->value) {
$_smarty_tpl->tpl_vars['bi']->do_else = false;
?>
                <?php if (($_smarty_tpl->tpl_vars['is_mobile']->value == true && $_smarty_tpl->tpl_vars['is_tablet']->value == false) && $_smarty_tpl->tpl_vars['bi']->value->image_mobile) {?>
                    <?php if ($_smarty_tpl->tpl_vars['bi']->value->settings->getMobileVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_DEFAULT) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant1" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings->getMobileVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_DARK) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant2" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings->getMobileVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_IMAGE_LEFT) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant3" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings->getMobileVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_IMAGE_RIGHT) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant4" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php }?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['bi']->value->settings->getVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_DEFAULT) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant1" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings->getVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_DARK) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant2" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings->getVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_IMAGE_LEFT) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant3" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php } elseif ($_smarty_tpl->tpl_vars['bi']->value->settings->getVariantShow() == Okay\Modules\OkayCMS\Banners\DTO\BannerImageSettingsDTO::SHOW_IMAGE_RIGHT) {?>
                    <div class="banner_group__item swiper-slide banner_group-<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
_id-<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
 banner_group__variant4" data-slide="<?php echo $_smarty_tpl->tpl_vars['banner_data']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['bi']->value->id;?>
">
                    <?php }?>
                <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['bi']->value->url) {?>
                    <a class="banner_group__link" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->url, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"></a>
                    <?php }?>
                    <div class="banner_group__image">
                        <?php if (($_smarty_tpl->tpl_vars['is_mobile']->value == true && $_smarty_tpl->tpl_vars['is_tablet']->value == false) && $_smarty_tpl->tpl_vars['bi']->value->image_mobile) {?>
                            <picture>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                    <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image_mobile,$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' )) ));?>
">
                                <?php }?>
                                <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image_mobile,$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
">

                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image_mobile,$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getMobileHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" data-src-retina="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->alt, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </picture>
                        <?php } else { ?>
                            <picture>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->support_webp) {?>
                                    <source type="image/webp" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'webp' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' )) ));?>
">
                                <?php }?>
                                <source type="image/jpg" srcset="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
">

                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" data-src-retina="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'resize' ][ 0 ], array( $_smarty_tpl->tpl_vars['bi']->value->image,$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopWidth(),$_smarty_tpl->tpl_vars['bi']->value->settings->getDesktopHeight(),false,$_smarty_tpl->tpl_vars['config']->value->resized_banners_images_dir,'center','center' ));?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->alt, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bi']->value->title, ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </picture>
                        <?php }?>
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
            <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isAsSlider()) {?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isNav()) {?>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isDots()) {?>
                <div class="swiper-pagination"></div>
            <?php }?>
        <?php }?>
    </div>


    <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isAsSlider()) {?>
    <?php echo '<script'; ?>
>
        document.addEventListener('DOMContentLoaded', function(){
            $('.fn_banner_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_data']->value->group_name, ENT_QUOTES, 'UTF-8', true);?>
').each(function(){
                var swiper = new Swiper(this, {
                loop: <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isLoop()) {?>true<?php } else { ?>false<?php }?>,
                <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isAutoplay()) {?>
                    autoplay: {
                        delay: <?php echo $_smarty_tpl->tpl_vars['banner_data']->value->settings->getRotationSpeed();?>
,
                    },
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isNav()) {?>
                    navigation: {
                        nextEl: this.querySelector('.swiper-button-next'),
                        prevEl: this.querySelector('.swiper-button-prev'),
                    },
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['banner_data']->value->settings->isDots()) {?>
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
