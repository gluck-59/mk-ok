
    {* Full base address *}
    <base href="{$base}/">

    {* Include fonts *}

    <link href="{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-SemiBold.woff2" rel="preload" as="font" crossorigin="anonymous" type="font/woff2">
    <link href="{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Bold.woff2" rel="preload" as="font" crossorigin="anonymous" type="font/woff2">
    <link href="{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Regular.woff2" rel="preload" as="font" crossorigin="anonymous" type="font/woff2">
    <link href="{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Medium.woff2" rel="preload" as="font" crossorigin="anonymous" type="font/woff2">

    <style>
        /* морда */
        :root {
            color-scheme: light dark;

            --okay-bg: light-dark(#f5f5f5, #282828);
            --okay-border-color: light-dark(#dbdbdb,#515151);

            --okay-button-color: light-dark(#3c952e, #204f19);
            --okay-button-text: light-dark(#f5f5f5, #959595);

            --okay-basic-company: light-dark(#e87800, #763f03);
            --okay-second-company: light-dark(#232f3e, #3c3c3c);
            --okay-basic-company-text: light-dark(#fff4e8, #cecece);
            --okay-second-company-text: light-dark(#fff, #999);

            --okay-boxed-color: light-dark(#FFF, #282828);
            --okay-boxed-text: light-dark(#333, #eee);
            --okay-body-heading: light-dark(#222, #999);
            --okay-body-text: light-dark(#222, #999);

            --okay-button-color-hover: light-dark(#0ec40e, #065e06);
            --okay-button-text-hover: light-dark(#fff, #000);

            --okay-button-second-color: light-dark(#ddd, #222);
            --okay-button-second-text: light-dark(#fff, #aaa);
            --okay-shadow-color: light-dark(rgba(0, 0, 0, .3), rgba(255, 255, 255, .3))
        }
        @font-face {
            font-family: 'Montserrat';
            font-display: swap;
            src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'),
            url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-SemiBold.woff2') format('woff2'),
            url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-SemiBold.woff') format('woff');
            font-weight: 600;
            font-style: normal;
        }
        @font-face {
            font-family: 'Montserrat';
            font-display: swap;
            src: local('Montserrat Bold'), local('Montserrat-Bold'),
            url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Bold.woff2') format('woff2'),
            url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Bold.woff') format('woff');
            font-weight: bold;
            font-style: normal;
        }
        @font-face {
            font-family: 'Montserrat';
            font-display: swap;
            src: local('Montserrat Regular'), local('Montserrat-Regular'),
            url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Regular.woff2') format('woff2'),
            url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
        font-family: 'Montserrat';
        font-display: swap;
        src: local('Montserrat Medium'), local('Montserrat-Medium'),
        url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Medium.woff2') format('woff2'),
        url('{$rootUrl}/design/{$settings->theme}/fonts/montserrat/Montserrat-Medium.woff') format('woff');
        font-weight: 500;
        font-style: normal;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous">

    {$ok_head}
    
    {strip}
    <script>
        const ut_tracker = {
            start: function(name) {
                performance.mark(name + ':start');
            },
            end: function(name) {
                performance.mark(name + ':end');
                performance.measure(name, name + ':start', name + ':end');
                console.log(name + ' duration: ' + performance.getEntriesByName(name)[0].duration);
            }
        }
    </script>
    {/strip}

    {* Schema Website *}
    {literal}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "{/literal}{$settings->site_name}{literal}",
        "url": "{/literal}{url_generator route='main' absolute=1}{literal}",
        "potentialAction": {
        "@type": "SearchAction",
        "target": "{/literal}{url_generator route='products' absolute=1}{literal}?keyword={search_term_string}",
        "searchAction": "required name=search_term_string"
        }
    }
    </script>
    {/literal}

    {* Schema Organization *}
    {literal}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "{/literal}{$settings->site_name}{literal}",
        "url": "{/literal}{url_generator route='main' absolute=1}{literal}",
        "logo": "{/literal}{$rootUrl}/{$config->design_images}{$settings->site_logo}{literal}"{/literal}{if $site_social}{literal},
        "sameAs": [
        {/literal}{foreach $site_social as $social}{literal}
            "{/literal}{if !preg_match('~^https?://.*$~', $social.url)}{literal}https://{/literal}{/if}{$social.url|escape}{literal}"{/literal}{if !$social@last}{literal},{/literal}{/if}{literal}
        {/literal}{/foreach}{literal}
        ]
        {/literal}{/if}{literal}
    }
    </script>
    {/literal}

{* Title *}
<title>{if $controller == 'BrandController'}Ништяки для&nbsp;{/if}
{if $controller == 'ManufacturerController'}Ништяки производства&nbsp;{/if}
{$meta_title|escape}
{if !$brand && $controller != 'ProductController'&& $controller != 'FeedbackController' && $filtersUrl == '' && $controller != 'BrandsController' && $controller != 'UserController'}
    &nbsp;на мотоцикл Honda, Kawasaki, Suzuki, Yamaha, Harley-Davidson, BMW
{/if}
{if $controller == 'ProductController'}
    {* берется $meta_title из SEO и затем -> *} {$product->partNumber}
{/if}
{if $controller == 'CategoryController' || $controller == 'BrandController' || $controller == 'BrandsController' || $controller == 'ManufacturerController'}
    &nbsp;купить в Motokofr.com
{/if}
{if $isPseudoDiscount}
    {$lang->features_filter_discounted_lowcase}
{/if}</title>


{* Meta keywords *}
{if !empty($meta_keywords)}
    {assign var="kw" value="{$meta_keywords|escape}"}
{elseif !empty($product->meta_keywords)}
    {assign var="kw" value="{$product->meta_keywords|escape}"}
{else}
    {assign var="kw" value="купить кофры, глушитель, дуги, стекло, батвинг, люстру, платформы, сиденье, спинку, багажник, защита, для мотоциклов Harley-Davidson, BMW, Honda, Kawasaki, Suzuki, Yamaha, бмв, харлей, девидсон, хонда, кавасаки, сузуки, ямаха"}
{/if}
<meta name="keywords" content="{$kw}" />

{* Meta description *}
{if $controller == 'BrandController'}
    <meta name="description" content="Купить на мотоцикл {$brand->name} кофры, глушитель, дуги, стекло, батвинг, люстру, платформы, сиденье, спинку, багажник, защиту"/>
{elseif $controller == 'BrandsController'}
    <meta name="description" content="Купить кофры, глушитель, дуги, стекло, батвинг, люстру, платформы, сиденье, спинку, багажник, защиту для мотоциклов Harley-Davidson, BMW, Honda, Kawasaki, Suzuki, Yamaha, бмв, харлей, девидсон, хонда, кавасаки, сузуки, ямаха"/>
{elseif $controller == 'MainController'}
    <meta name="description" content="Купить кофры, глушитель, дуги, стекло, батвинг, люстру, платформы, сиденье, спинку, багажник, защиту для мотоциклов Harley-Davidson, BMW, Honda, Kawasaki, Suzuki, Yamaha, бмв, харлей, девидсон, хонда, кавасаки, сузуки, ямаха"/>
{elseif $controller == 'ProductsController'}
    <meta name="description" content="Купить {if $isPseudoDiscount}{$lang->features_filter_discounted_lowcase}{/if} кофры, глушитель, дуги, стекло, батвинг, люстру, платформы, сиденье, спинку, багажник, защиту для мотоциклов Harley-Davidson, BMW, Honda, Kawasaki, Suzuki, Yamaha, бмв, харлей, девидсон, хонда, кавасаки, сузуки, ямаха"/>
{elseif $controller == 'CategoryController'}
    <meta name="description" content="Купить {if $category->meta_title}{$category->meta_title|escape|lower}{else}{$category->name|escape|lower}{/if} для мотоциклов Harley-Davidson, BMW, Honda, Kawasaki, Suzuki, Yamaha, бмв, харлей, девидсон, хонда, кавасаки, сузуки, ямаха"/>
{elseif $controller == 'ProductController'}
    {assign var="description" value="{$meta_description} {$brand->meta_keywords|escape} {$product->partNumber} цена {$product->meta_description} "}
    <meta name="description" content="{$description|truncate:180}"/>
{else}
    <meta name="description" content="Купить ништяки {if $isPseudoDiscount}{$lang->features_filter_discounted_lowcase}{/if} для мотоциклов Harley-Davidson, BMW, Honda, Kawasaki, Suzuki, Yamaha, бмв, харлей, девидсон, хонда, кавасаки, сузуки, ямаха"/>
{/if}


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
{if $noindex_nofollow}
    <meta name="robots" content="noindex,nofollow">
{elseif $noindex_follow}
    <meta name="robots" content="noindex,follow">
{else}
    <meta name="robots" content="index,follow">
{/if}

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="MotokofrCMS">



    {* rel prev next для блога *}
    {if $controller == "BlogController" && $total_pages_num > 1}
        {if $current_page_num == $total_pages_num}
            {if $current_page_num == 2}
                <link rel="prev" href="{url page=null}"/>
            {else}
                <link rel="prev" href="{url page=$current_page_num-1}"/>
            {/if}
        {elseif $current_page_num == 1}
            <link rel="next" href="{url page=2}"/>
        {else}
            {if $current_page_num == 2}
                <link rel="prev" href="{url page=null}"/>
            {else}
                <link rel="prev" href="{url page=$current_page_num-1}"/>
            {/if}
            <link rel="next" href="{url page=$current_page_num+1}"/>
        {/if}
    {/if}

    {* rel prev next для каталога товаров *}
    {$rel_prev_next}

    {* Images for social networks *}
    {if $controller == 'ProductController'}
        <meta property="og:url" content="{$canonical}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{$h1|escape}">
        <meta property="og:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
        <meta property="og:image" content="{$product->image->filename|resize:330:300}">
        <link rel="image_src" href="{$product->image->filename|resize:330:300}">
        <meta name="twitter:card" content="product"/>
        <meta name="twitter:url" content="{$canonical}">
        <meta name="twitter:site" content="{$settings->site_name|escape}">
        <meta name="twitter:title" content="{$h1|escape}">
        <meta name="twitter:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
        <meta name="twitter:image" content="{$product->image->filename|resize:330:300}">
        <meta name="twitter:data1" content="{$lang->cart_head_price}">
        <meta name="twitter:label1" content="{$product->variant->price|convert:null:false} {$currency->code|escape}">
        <meta name="twitter:data2" content="{$lang->meta_organization}">
        <meta name="twitter:label2" content="{$settings->site_name|escape}">
    {elseif $controller == "CategoryController"} 
        <meta property="og:title" content="{$h1|escape}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{$canonical}">
        <meta property="og:site_name" content="{$settings->site_name|escape}">
        <meta property="og:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
        {if $category->image}
            <meta property="og:image" content="{$category->image|resize:330:300:false:$config->resized_categories_dir}">
            <link rel="image_src" href="{$category->image|resize:330:300:false:$config->resized_categories_dir}">
            <meta name="twitter:image" content="{$category->image|resize:330:300:false:$config->resized_categories_dir}">
        {else}
            <meta property="og:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
            <link rel="image_src" href="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
            <meta name="twitter:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
        {/if}
        <meta name="twitter:url" content="{$canonical}">
        <meta name="twitter:site" content="{$settings->site_name|escape}">
        <meta name="twitter:title" content="{$h1|escape}">
        <meta name="twitter:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
    {elseif $controller == "BrandController"} 
        <meta property="og:title" content="{$h1|escape}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{$canonical}">
        <meta property="og:site_name" content="{$settings->site_name|escape}">
        <meta property="og:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
        {if $brand->image}
            <meta property="og:image" content="{$brand->image|resize:330:330:false:$config->resized_brands_dir}">
            <link rel="image_src" href="{$brand->image|resize:330:330:false:$config->resized_brands_dir}">
            <meta name="twitter:image" content="{$brand->image|resize:330:330:false:$config->resized_brands_dir}">
        {else}
            <meta property="og:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
            <link rel="image_src" href="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
            <meta name="twitter:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
        {/if}
        <meta name="twitter:url" content="{$canonical}">
        <meta name="twitter:site" content="{$settings->site_name|escape}">
        <meta name="twitter:title" content="{$h1|escape}">
        <meta name="twitter:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
    {elseif $controller == 'BlogController' && $post}
        <meta property="og:url" content="{$canonical}">
        <meta property="og:type" content="article">
        <meta property="og:title" content="{$post->name|escape}">
        {if $post->image}
            <meta property="og:image" content="{$post->image|resize:400:300:false:$config->resized_blog_dir}">
            <link rel="image_src" href="{$post->image|resize:400:300:false:$config->resized_blog_dir}">
            <meta name="twitter:image" content="{$post->image|resize:400:300:false:$config->resized_blog_dir}">
        {else}
            <meta property="og:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
            <link rel="image_src" href="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
            <meta name="twitter:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
        {/if}
        <meta property="og:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{$post->name|escape}">
        <meta name="twitter:description" content="{if !empty($annotation)}{$annotation|strip_tags|escape|trim}{else}{$description|strip_tags|escape|trim}{/if}">
        {elseif $controller == 'MainController'}
        <meta property="og:image" content="{$rootUrl}/{$config->design_images}logo_square.png">
        <link rel="image_src" href="{$rootUrl}/{$config->design_images}logo_square.png">
        <meta property="og:url" content="{$canonical}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{$settings->site_name|escape}">
        <meta property="og:description" content="{$meta_description|escape}">
        {else}
        <meta property="og:title" content="{$meta_title|escape}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{$rootUrl}">
        <meta property="og:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
        <meta property="og:site_name" content="{$settings->site_name|escape}">
        <meta property="og:description" content="{$meta_description|escape}">
        <link rel="image_src" href="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="{$meta_title|escape}">
        <meta name="twitter:description" content="{$meta_description|escape}">
        <meta name="twitter:image" content="{$rootUrl}/{$config->design_images}{$settings->site_logo}">
    {/if}
    {* The canonical address of the page *}
    {if isset($canonical)}
        <link rel="canonical" href="{$canonical|escape}">
    {/if}

    {* Language attribute *}
    {foreach $languages as $l}
        {if $l->enabled}
            <link rel="alternate" hreflang="{$l->href_lang}" href="{$l->url|escape}">
        {/if}
    {/foreach}
    {if $settings->captcha_type == "v3"}
        <script>ut_tracker.start('render:recaptcha');</script>
        <script src="https://www.google.com/recaptcha/api.js?render={$settings->public_recaptcha_v3|escape}"></script>
        <script>
            grecaptcha.ready(function () {
                {if $controller == 'ProductController' || $controller == 'BlogController'}
                    var recaptcha_action = 'product';
                {elseif $controller == 'CartController'}
                    var recaptcha_action = 'cart';
                {else}
                    var recaptcha_action = 'other';
                {/if}

                var allCaptchеs = document.getElementsByClassName('fn_recaptchav3');
                grecaptcha.execute('{$settings->public_recaptcha_v3|escape}', { action: recaptcha_action })
                    .then(function (token) {
                        for (capture of allCaptchеs) {
                            capture.value = token;
                        }
                    });
            });
        </script>
        <script>ut_tracker.end('render:recaptcha');</script>
    {elseif $settings->captcha_type == "v2"}
        <script>ut_tracker.start('render:recaptcha');</script>
        <script type="text/javascript">
            var onloadCallback = function() {
                mysitekey = "{$settings->public_recaptcha|escape}";
                if($('#recaptcha1').length>0){
                    grecaptcha.render('recaptcha1', {
                        'sitekey' : mysitekey
                    });
                }
                if($('#recaptcha2').length>0){
                    grecaptcha.render('recaptcha2', {
                        'sitekey' : mysitekey
                    });
                }
            };
        </script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
        <script>ut_tracker.end('render:recaptcha');</script>
    {elseif $settings->captcha_type == "invisible"}
        <script>ut_tracker.start('render:recaptcha');</script>
        <script>
            function onSubmit(token) {
                document.getElementById("captcha_id").submit();
            }
            function onSubmitCallback(token) {
                document.getElementById("fn_callback").submit();
            }
            function onSubmitBlog(token) {
                document.getElementById("fn_blog_comment").submit();
            }
        </script>
        <script>
            var onloadReCaptchaInvisible = function() { };
        </script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadReCaptchaInvisible"></script>
        <script>ut_tracker.end('render:recaptcha');</script>
    {/if}

    <link rel="search" type="application/opensearchdescription+xml" title="{$rootUrl} Search" href="{url_generator route='opensearch' absolute=1}" />

    {* Favicon *}
    <link href="{$rootUrl}/{$config->design_images|escape}{$settings->site_favicon|escape}?v={$settings->site_favicon_version|escape}" type="image/x-icon" rel="icon">
    <link href="{$rootUrl}/{$config->design_images|escape}{$settings->site_favicon|escape}?v={$settings->site_favicon_version|escape}" type="image/x-icon" rel="shortcut icon">

    {* JQuery *}
    <script>ut_tracker.start('parsing:page');</script>

    {if !empty($counters['head'])}
    <script>ut_tracker.start('parsing:head:counters');</script>
    {foreach $counters['head'] as $counter}
    {$counter->code}
    {/foreach}
    <script>ut_tracker.end('parsing:head:counters');</script>
    {/if}
