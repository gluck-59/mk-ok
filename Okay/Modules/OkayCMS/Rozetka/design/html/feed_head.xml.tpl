<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE yml_catalog SYSTEM 'shops.dtd'>
<yml_catalog date="{date('Y-m-d H:i')}">
    <shop>
        <name>{$settings->site_name|escape}</name>
        {if $settings->okaycms__rozetka_xml__company}
            <company>{$settings->okaycms__rozetka_xml__company|escape}</company>
        {else}
            <company>{$settings->site_name|escape}</company>
        {/if}
        <url>{$rootUrl}</url>
        <platform>Motokofr</platform>
        <version>{$config->version|escape} {$config->version_type|escape}</version>
        <currencies>
            {foreach $currencies as $c}
                <currency id="{$c->code|escape}" rate="{$c->rate_to/$c->rate_from*$main_currency->rate_from/$main_currency->rate_to}"/>
            {/foreach}
        </currencies>

        <categories>
            {function name=categories_tree}
                {if $categories}
                    {foreach $categories as $c}
                        <category id="{$c->id}"{if $c->parent_id>0} parentId="{$c->parent_id|escape}"{/if}>{$c->name|escape}</category>
                        {if $c->subcategories && $c->count_children_visible && $level < 3}
                            {categories_tree categories=$c->subcategories}
                        {/if}
                    {/foreach}
                {/if}
            {/function}
            {categories_tree categories=$categories}
        </categories>
        {get_design_block block=OkayCMS_Rozetka_head}
            <offers>
                