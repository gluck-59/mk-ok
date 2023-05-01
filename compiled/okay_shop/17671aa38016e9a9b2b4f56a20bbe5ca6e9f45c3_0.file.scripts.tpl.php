<?php
/* Smarty version 3.1.40, created on 2023-05-01 20:47:22
  from '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_644fdf0af040e8_88418033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17671aa38016e9a9b2b4f56a20bbe5ca6e9f45c3' => 
    array (
      0 => '/Users/gluck/Sites/motokofr.ok/design/okay_shop/html/scripts.tpl',
      1 => 1682807752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644fdf0af040e8_88418033 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['dynamic_js']['js_vars'], 'value', false, 'var');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
        okay.<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
 = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
;
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    okay.max_order_amount = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->max_order_amount, ENT_QUOTES, 'UTF-8', true);?>
;

    /*Сброс фильтра*/
    <?php if (in_array($_smarty_tpl->tpl_vars['controller']->value,array('ProductsController','BrandController','BrandsController','CategoryController'))) {?>
        $(document).on('click', '.fn_filter_reset', function () {
            var date = new Date(0);
            document.cookie = "price_filter=; path=/; expires=" + date.toUTCString();
        });

        <?php if ($_smarty_tpl->tpl_vars['settings']->value->deferred_load_features) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value->features_cache_ttl > 0) {?>
                
                window.featuresCache = {
                    /**
                     * timeout for cache in millis
                     * @type {number}
                     */
                    timeout: <?php echo intval(($_smarty_tpl->tpl_vars['settings']->value->features_cache_ttl*1000));?>
,
                    DBVersion: 4,

                    init: function () {
                        let openRequest = indexedDB.open("features_cache", this.DBVersion);

                        // создаем хранилище
                        openRequest.onupgradeneeded = function() {
                            let db = openRequest.result;
                            if (!db.objectStoreNames.contains('features_cache_store')) {
                                db.createObjectStore('features_cache_store', {keyPath: 'key'});
                            }
                        }
                        return openRequest;
                    },
                    remove: function (key) {

                        let openRequest = this.init();
                        openRequest.onsuccess = function() {
                            let db = openRequest.result;
                            let transaction = db.transaction("features_cache_store", "readwrite");
                            let cacheObject = transaction.objectStore("features_cache_store");
                            let request = cacheObject.delete(key);

                            request.onsuccess = function () {

                                if (request.result !== undefined) {
                                    console.log('Remove cache for key: ' + key);
                                    return true;
                                }
                            }
                        }
                    },
                    get: function (key) {

                        const timeout = this.timeout

                        return new Promise(function(resolve, reject) {
                            let openRequest = featuresCache.init();
                            openRequest.onsuccess = function() {
                                let db = openRequest.result;
                                let transaction = db.transaction("features_cache_store", "readonly");
                                // получить хранилище объектов для работы с ним
                                let cacheObject = transaction.objectStore("features_cache_store");
                                let request = cacheObject.get(key);
                                request.onsuccess = function () {

                                    if (request.result !== undefined) {

                                        let currDate = new Date().getTime();
                                        if ((currDate - request.result.expires) > featuresCache.timeout) {
                                            featuresCache.remove(request.result.key);
                                            reject();
                                            return;
                                        }
                                        console.log('Getting in cache for key: ' + key + ' TTL:' + Math.ceil((timeout - (currDate - request.result.expires)) / 1000));
                                        resolve(request.result.data);
                                    } else {
                                        reject();
                                    }
                                }
                            }

                            openRequest.onerror = function(event) {
                                reject();
                            };

                        });
                    },
                    set: function (key, cachedData) {
                        let openRequest = this.init();
                        openRequest.onsuccess = function() {
                            let db = openRequest.result;
                            let transaction = db.transaction("features_cache_store", "readwrite");
                            // получить хранилище объектов для работы с ним
                            let cacheObject = transaction.objectStore("features_cache_store");

                            let request = cacheObject.put({
                                key: key,
                                expires: new Date().getTime(),
                                data: cachedData
                            });

                            request.onsuccess = function() {
                                console.log("Setting in cache for key: ", key);
                            };

                        }
                    },
                    clearWrong: function () {
                        let currDate = new Date().getTime();
                        let openRequest = this.init();

                        openRequest.onsuccess = function() {
                            let db = openRequest.result;
                            let transaction = db.transaction("features_cache_store", "readonly");
                            let cacheObject = transaction.objectStore("features_cache_store");
                            let request = cacheObject.getAll();

                            request.onsuccess = function () {
                                if (request.result !== undefined) {
                                    if (request.result.length) {
                                        for (let i = 0; i < request.result.length; i++) {
                                            if ((currDate - request.result[i].expires) > featuresCache.timeout) {
                                                featuresCache.remove(request.result[i].key);
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                };
                

                $(function() {
                    console.log('Init script');
                    window.featuresCache.clearWrong();

                    if (window.featuresCache.timeout > 0) {
                        if (window.indexedDB) {
                            window.featuresCache.get('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterCacheKey']->value, ENT_QUOTES, 'UTF-8', true);?>
').then(setFeaturesBlock).then(null, getAjaxFeatures);
                        } else {
                            console.warn('indexedDB not supported');
                            getAjaxFeatures();
                        }
                    }
                });
            <?php } else { ?>
                $(function() {
                    getAjaxFeatures();
                });
            <?php }?>

            function getAjaxFeatures() {
                $.ajax({
                    url: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>$_smarty_tpl->tpl_vars['ajax_filter_route']->value,'url'=>$_smarty_tpl->tpl_vars['url']->value,'filtersUrl'=>$_smarty_tpl->tpl_vars['filtersUrl']->value,'keyword'=>$_smarty_tpl->tpl_vars['keyword']->value,'absolute'=>true),$_smarty_tpl ) );?>
',
                    dataType: 'json',
                    cache: true,
                    success: function (data) {
                        setFeaturesBlock(data);
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value->features_cache_ttl > 0) {?>
                            featuresCache.set('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filterCacheKey']->value, ENT_QUOTES, 'UTF-8', true);?>
', data);
                        <?php }?>
                    },
                });
            }

            function setFeaturesBlock(data) {
                $('.fn_features').html(data.features);
                $('.fn_selected_features').html(data.selected_features);
                price_slider_init();
                $(".lazy").each(function(){
                    let myLazyLoad = new LazyLoad({
                        elements_selector: ".lazy"
                    });
                });
            }
        <?php }?>
    <?php }?>

    /* Mobile menu */
    $(function(){
        var $main_nav = $('.fn_mobile_menu');
        var $toggle = $('.fn_menu_switch');
        var defaultData = {
            maxWidth: false,
            navClass: 'mobile_nav',
            customToggle: $toggle,
            levelTitles: true,
            insertClose: -1,
            labelBack: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->mobile_menu_prev, ENT_QUOTES, 'UTF-8', true);?>
',
            labelClose: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->mobile_menu_close, ENT_QUOTES, 'UTF-8', true);?>
',
            closeLevels: false
        };
        $main_nav.hcOffcanvasNav(defaultData);
    });

    /* Показать все в фильтрах по свойствам и в футере категории */
    $( document ).on( 'click', '.fn_view_all', function(e) {
        $(this).closest('.fn_view_content').toggleClass('opened');
        $('.fn_view_all').not($(this)).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
');
        $('.fn_view_all').not($(this)).closest('.fn_view_content').removeClass('opened');
        if ($(this).closest('.fn_view_content').hasClass('opened')) {
            $(this).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_hide, ENT_QUOTES, 'UTF-8', true);?>
');
        } else {
            $(this).html('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->filter_view_show, ENT_QUOTES, 'UTF-8', true);?>
');
        }
        return false;
    });

    /* Предзаказ */
    okay.is_preorder = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->is_preorder, ENT_QUOTES, 'UTF-8', true);?>
;

    /* Ошибка при отправке комментария в посте */
    <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'BlogController' && $_smarty_tpl->tpl_vars['error']->value) {?>
        /* Переход по якорю к форме */
        $( window ).on( 'load', function() {
            location.href = location.href + '#fn_blog_comment';
            $( '#fn_blog_comment' ).trigger( 'submit' );
        } );
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_callback_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value) {?>
        $(function() {
            $.fancybox.open({
                src: '#fn_callback',
                type : 'inline'
            });
        });
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController' && $_smarty_tpl->tpl_vars['error']->value) {?>
        $( window ).on( 'load', function() {
            $( '.tabs__navigation a' ).removeClass( 'selected' );
            $( '.tab' ).hide();
            $( 'a[href="#comments"]' ).addClass( 'selected' );
             $( '#comments').show();
        } );
        <?php } elseif ($_smarty_tpl->tpl_vars['controller']->value == 'ProductController') {?>
        $( window ).on( 'load', function() {
            if( location.hash.search('comment') !=-1 ) {
                $( '.tabs__navigation a' ).removeClass( 'selected' );
                $( '.tab' ).hide();
                $( 'a[href="#comments"]' ).addClass( 'selected' );
                 $( '#comments').show();
            }
        } );
    <?php }?>

    var form_enter_name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_name, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_phone = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_phone, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->tpl_vars['phone_example']->value;?>
";
    var form_error_captcha = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_error_captcha, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_email = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_email, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_password = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_password, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_message = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_message, ENT_QUOTES, 'UTF-8', true);?>
";

    if($(".fn_validate_product").length>0) {
        $(".fn_validate_product").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }
    if($(".fn_validate_callback").length>0) {
        $(".fn_validate_callback").validate({
            rules: {
                callback_name: "required",
                callback_phone: "required",
                captcha_code: "required"
            },
            messages: {
                callback_name: form_enter_name,
                callback_phone: form_enter_phone,
                captcha_code: form_error_captcha
            }

        });
    }
    if($(".fn_validate_subscribe").length>0) {
        $(".fn_validate_subscribe").validate({
            rules: {
                subscribe_email: "required",
            },
            messages: {
                subscribe_email: form_enter_email
            }
        });
    }
    if($(".fn_validate_post").length>0) {
        $(".fn_validate_post").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_feedback").length>0) {
        $(".fn_validate_feedback").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                message: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                message: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_cart").length>0) {
        $(".fn_validate_cart").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha
            }
        });

		var submitted_cart = false;
        $('.fn_validate_cart').on('submit', function () {
            if ($('.fn_validate_cart').valid() === true) {
                if (submitted_cart === true) {
                    return false;
                } else {
                    submitted_cart = true;
                }
            }
        });
    }

    if($(".fn_validate_login").length>0) {
        $(".fn_validate_login").validate({
            rules: {
                email: "required",
                password: "required",
            },
            messages: {
                email: form_enter_email,
                password: form_enter_password
            }
        });
    }

    if($(".fn_validate_register").length>0) {
        $(".fn_validate_register").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha,
                password: form_enter_password
            }
        });
    }

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_design_block'][0], array( array('block'=>"front_scripts_after_validate"),$_smarty_tpl ) );?>


    <?php if ($_smarty_tpl->tpl_vars['settings']->value->sj_shares) {?>
         if($(".fn_share").length>0) {
        <?php if ($_smarty_tpl->tpl_vars['js_custom_socials']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_custom_socials']->value, 'params', false, 'social');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
        jsSocials.shares.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social']->value, ENT_QUOTES, 'UTF-8', true);?>
 = <?php echo json_encode($_smarty_tpl->tpl_vars['params']->value);?>
;
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
                $(".fn_share").jsSocials({
                    showLabel: false,
                    showCount: false,
                    shares: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value->sj_shares);?>

            });
        }
    <?php }?>

    /* Звёздный рейтинг товаров */
    let ratingBlock = $(".fn_rating");
    if (ratingBlock.length>0) {
        $(function() {
            ratingBlock.rater({ postHref: ratingBlock.data('rating_post_url') });
        });
        $.fn.rater = function (options) {
            var opts = $.extend({}, $.fn.rater.defaults, options);
            return this.each(function () {
                var $this = $(this);
                var $on = $this.find('.rating_starOn');
                var $off = $this.find('.rating_starOff');
                opts.size = $on.height();
                if (opts.rating == undefined) opts.rating = $on.width() / opts.size;

                $off.mousemove(function (e) {
                    var left = e.clientX - $off.offset().left;
                    var width = $off.width() - ($off.width() - left);
                    width = Math.ceil(width / (opts.size / opts.step)) * opts.size / opts.step;
                    $on.width(width);
                }).hover(function (e) { $on.addClass('rating_starHover'); }, function (e) {
                    $on.removeClass('rating_starHover'); $on.width(opts.rating * opts.size);
                }).click(function (e) {
                    var r = Math.round($on.width() / $off.width() * (opts.units * opts.step)) / opts.step;
                    $off.unbind('click').unbind('mousemove').unbind('mouseenter').unbind('mouseleave');
                    $off.css('cursor', 'default'); $on.css('cursor', 'default');
                    opts.id = $this.attr('id');
                    $.fn.rater.rate($this, opts, r);
                }).css('cursor', 'pointer'); $on.css('cursor', 'pointer');
            });
        };

        $.fn.rater.defaults = {
            postHref: location.href,
            units: 5,
            step: 1
        };

        $.fn.rater.rate = function ($this, opts, rating) {
            var $on = $this.find('.rating_starOn');
            var $off = $this.find('.rating_starOff');
            $off.fadeTo(600, 0.4, function () {
                $.ajax({
                    url: opts.postHref,
                    type: "POST",
                    data: 'id=' + opts.id + '&rating=' + rating,
                    complete: function (req) {
                        if (req.status == 200) { /* success */
                            opts.rating = parseFloat(req.responseText);

                            if (opts.rating > 0) {
                                opts.rating = parseFloat(req.responseText);
                                $off.fadeTo(200, 0.1, function () {
                                    $on.removeClass('rating_starHover').width(opts.rating * opts.size);
                                    var $count = $this.find('.rating_count');
                                    $count.text(parseInt($count.text()) + 1);
                                    $this.find('.rating_value').text(opts.rating.toFixed(1));
                                    $off.fadeTo(200, 1);
                                });
                            }
                            else
                            if (opts.rating == -1) {
                                $off.fadeTo(200, 0.6, function () {
                                    $this.find('.rating_text').text('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->rating_error, ENT_QUOTES, 'UTF-8', true);?>
');
                                });
                            }
                            else {
                                $off.fadeTo(200, 0.6, function () {
                                    $this.find('.rating_text').text('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->rating_voted, ENT_QUOTES, 'UTF-8', true);?>
');
                                });
                            }
                        } else { /* failure */
                            alert(req.responseText);
                            $on.removeClass('rating_starHover').width(opts.rating * opts.size);
                            $this.rater(opts);
                            $off.fadeTo(2200, 1);
                        }
                    }
                });
            });
        };
    }

<?php echo '</script'; ?>
>
<?php }
}
