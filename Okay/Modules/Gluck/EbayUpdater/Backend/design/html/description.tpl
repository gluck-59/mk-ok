{$meta_title = 'cronEbayUpdater' scope=global}
{*<pre>{$tableFields|print_r}</pre>*}
<link rel="stylesheet" href="design/css/table.css">
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <span>Обновление цен с Ebay cronEbayUpdater <small>— {$tableFields|count} строк</small> </span>
            </div>
        </div>
    </div>
</div>

<div class="boxed">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Новый лот</th>
                        <th>Стар.ц.</th>
                        <th>Нов.ц.</th>
                        <th>Описание</th>
                        <th>Дата</th>
                        <th>Видел</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $tableFields as $item}
                        {assign var="old_price" value="{$old_price|ceil}"}
                        <tr class="{if $item->success == 1}success{/if}">
                            <td><a href="/backend//index.php?controller=ProductAdmin&id={$item->productId}" target="_blank">{$item->productName}</a>{if $item->sku} — {$item->sku}{/if}</td>
                            <td><a href="https://www.ebay.com/itm/{$item->newEbayItem_id}" target="_blank">{$item->newEbayItem_id}</a></td>
                            <td>
                                {if $item->old_currency_id == 1}${elseif $item->old_currency_id == 5}€{else}? {/if}{$item->old_price|ceil}
                            </td>
                            <td class="{if $item->new_price|ceil < $item->old_price|ceil AND !empty($item->new_price)}green{elseif $item->new_price|ceil > $item->old_price|ceil AND !empty($item->new_price)}red{/if}">
                                {if $item->new_currency_id == 1}${elseif $item->new_currency_id == 5}€{else}? {/if}{$item->new_price|ceil}
                            </td>
                            <td>{if $item->old_currency_id != $item->new_currency_id}<b>&larr; ВАЛЮТА</b> {/if}{$item->description}</td>
                            <td>{$item->upd_date}</td>
                            <td>
                                <label class="switch switch-default ">
                                    <input class="switch-input fn_ajax_action {if $item->success}fn_active_class{/if}" data-controller="ebayUpdater" data-action="success" data-id="{$item->id}" name="success" value="1" type="checkbox"  {if $item->success}checked=""{/if}/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
        {include file='pagination.tpl'}
    </div>
</div>
</div>

{literal}
<script>
    $(document).ready(function(){
    });

    $(window).on("load", function() {
     });
</script>
{/literal}

