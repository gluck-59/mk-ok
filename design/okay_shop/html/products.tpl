<!-- The Categories page -->
<div class="clearfix">
    {* Sidebar with filters *}
    <div class="fn_mobile_toogle sidebar d-lg-flex flex-lg-column">
        <div class="fn_mobile_toogle sidebar__header sidebar__boxed hidden-lg-up">
            <div class="fn_switch_mobile_filter sidebar__header--close">
                {include file="svg.tpl" svgId="remove_icon"}
                <span data-language="mobile_filter_close">{$lang->mobile_filter_close}</span>
            </div>
            {if $category}
                <div class="sidebar__header--reset">
                    <form method="post">
                        <button type="submit" name="prg_seo_hide" class="fn_filter_reset mobile_filter__reset" value="{url_generator route="category" url=$category->url absolute=1}">
                            {include file="svg.tpl" svgId="reset_icon"}
                            <span>{$lang->mobile_filter_reset}</span>
                        </button>
                    </form>
                </div>
            {elseif $brand}
                <div class="sidebar__header--reset">
                    <form method="post">
                        <button type="submit" name="prg_seo_hide" class="fn_filter_reset mobile_filter__reset" value="{url_generator route="brand" url=$brand->url absolute=1}">
                            {include file="svg.tpl" svgId="reset_icon"}
                            <span>{$lang->mobile_filter_reset}</span>
                        </button>
                    </form>
                </div>
            {/if}
        </div>

        <div class="fn_selected_features">
            {if !$settings->deferred_load_features}
                {include file='selected_features.tpl'}
            {/if}
        </div>

        <div class="fn_features">
            {if !$settings->deferred_load_features}
                {include file='features.tpl'}
            {else}
                {* Deferred load features *}
                <div class='fn_skeleton_load'>
                    {section name=foo start=1 loop=7 step=1}
                        <div class='skeleton_load__item skeleton_load__item--{$smarty.section.foo.index}'></div>
                    {/section}
                </div>
            {/if}
        </div>

        {* Browsed products *}
        <div class="browsed products">
            {include file='browsed_products.tpl'}
        </div>
    </div>
{*{debug}*}
{*<pre>{$keyword|print_r}</pre>*}

    <div class="products_container d-flex flex-column">
        <div class="products_container__boxed">
            <div class="d-flex align-items-center justify-content-between">
                {assign var="myH1" value=""}
                <h1 class="h1" {if $category} data-category="{$category->id}"{/if}{if $brand} data-brand="{$brand->id}"{/if}>
                    {if $category}
    {*                    1a*}
                        {$myH1|cat:$category->name}
                    {elseif $manufacturer}
                         {$lang->product_manufacturer_name} {$myH1}
                    {else}
    {*                    1b*}
                        {if $keyword}
                            {$lang->general_search|escape} {$keyword}:
                        {else}
                            {$myH1|cat:$lang->products}
                        {/if}
                    {/if}
                    {if $brand OR in_array('brand', $selected_catalog_other_filters)}
    {*                    2*}
                        {$myH1|cat:" для "|cat:{$brand->name}}
                    {elseif !$category AND $brand OR in_array('brand', $selected_catalog_other_filters)}
    {*                    2a*}
                        {$myH1|cat:" для ":$lang->products}
                    {/if}
                    {if !$brand AND $filtersUrl|strstr:"brand"}
    {*                    3*}
                        {if $brands AND $selected_catalog_brands_ids}
                            {foreach $selected_catalog_brands_ids as $id}
                                {append var="brand_to_show" value=$brands.$id->name}
                            {/foreach}
                        {/if}
                        {$myH1|cat:" для ":{', '|implode:$brand_to_show}}
                    {/if}
                    {if $isPseudoDiscount OR in_array('discounted', $selected_catalog_other_filters)}
    {*                    4*}
                        {$myH1|cat:$lang->features_filter_discounted_lowcase}
                    {/if}

                    {if !$category
                        AND !$brand
                        AND (!in_array('brand', $selected_catalog_other_filters) OR !$filtersUrl|strstr:"brand")
                        AND !$isPseudoDiscount
                        AND !in_array('discounted', $selected_catalog_other_filters)
                        AND !$keyword
                    }
    {*                    0*}
                        {$h1|escape}
                    {/if}
                </h1>
                <div class="product-brand-logo">
                    {if $brand->image && !$is_mobile}
                        <img src="{$brand->image|resize:55:55:false:$config->resized_brands_dir}" alt="{$brand->name}" />
                    {/if}
                    {if $manufacturer->image && !$is_mobile}
                        <img src="{$manufacturer->image|resize:55:55:false:$config->resized_manufacturers_dir}" alt="{$manufacturer->name}" />
                    {/if}
                </div>
            </div>
            {if !empty($annotation)}
                <div class="boxed boxed--big">
                    <div class="">
                        <div class="fn_readmore">
                            <div class="block__description">
                                {$annotation}
                            </div>
                        </div>
                    </div>
                </div>
            {/if}

            {if $products}
                <div class="products_container__sort d-flex align-items-center justify-content-between">
                    {* Product Sorting *}
                    <div class="fn_products_sort">
                        {include file="products_sort.tpl"}
                    </div>
                    {* Mobile button filters *}
                    <div class="fn_switch_mobile_filter switch_mobile_filter hidden-lg-up">
                        {include file="svg.tpl" svgId="filter_icon"}
                        <span data-language="filters">{$lang->filters}</span>
                    </div>
                </div>
            {/if}

            {* Product list *}
            <div id="fn_products_content" class="fn_categories products_list row">
                {include file="products_content.tpl"}
            </div>

            {if $products}
                {* Friendly URLs Pagination *}
                <div class="fn_pagination products_pagination">
                    {include file='chpu_pagination.tpl'}
                </div>
            {/if}

            {if $description AND !$keyword}
                <div class="boxed boxed--big">
                    {* Table contents *}
                    {if !empty($table_of_content)}
                        <div class="post__table_contents">
                            <div class="post__table_contents_title">{$lang->blog_table_contents}</div>
                            <ol>
                                {foreach $table_of_content as $content_item}
                                    <li style="margin-left: {$content_item.header_level*15-15}px">
                                        <a class="fn_ancor_post" href="{$content_item.url|escape}">{$content_item.anchor_text|escape}</a>
                                    </li>
                                {/foreach}
                            </ol>
                        </div>
                    {/if}
                    <div class="">
                        <div class="block__description">{$description}</div>
                    </div>
                </div>
            {/if}
        </div>
    </div>
</div>
<script>
    window.dataLayer = window.dataLayer || [];
    let products = $('.product_preview');
    let brands = '{if $brands}{$brands|json_encode:true}{/if}';
    let impressions = [];

    $(products).each(function(idx,product){
        let impression = new Object();
        impression.id = $(product).find('.product_preview__name_link').data('product');
        impression.name = $(product).find('#productName').val();
        impression.price = $(product).find('.fn_price').text().replaceAll(' ', '');
        impression.brand = JSON.parse(brands)[$(product).find('#brandId')[0].value].name;
        impression.category = $('.products_container__boxed h1').text();
        impression.position = idx;
        impressions.push(impression)
    })
    window.dataLayer.push({
        "ecommerce": {
            "currencyCode": "RUB",
            "impressions": impressions
        }
    });
</script>