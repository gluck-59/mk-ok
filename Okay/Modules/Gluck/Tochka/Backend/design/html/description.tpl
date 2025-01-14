{$meta_title = 'Точка Settings' scope=global}

{*<pre>{$tableHeaders|print_r}</pre>*}
{*<pre>{$tableFields|print_r}</pre>*}

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                Установки Точка
            </div>
        </div>
    </div>
</div>

<div class="boxed">
    {if $errors}
        <div class="error_box mb-3">
            {$errors}
        </div>
    {/if}

    {foreach $tableFields as $item}
        <form method="post" id="tochkaSettings" enctype="multipart/form-data" class="clearfix fn_fast_button">
{*            <input type="hidden" name="session_id" value="{$smarty.session.id}">*}
{*            <input type="hidden" name="lang_id" value="{$lang_id}">*}
            <input type="hidden" name="setting_id" value="{$item->id}">
                <div class="row">
                    {foreach $item as $key => $setting}
                        {if $key == 'id'}{continue}{/if}
                        <div class="col-xs-6 col-md-3 mb-3">
                            <div class="heading_label">
                                <div class="mb-1">{$key}</div>
                                <input class="form-control" {if $key == 'id'}readonly{/if} name="settings[{$key}]" placeholder="{$key}" value="{$setting}">
                            </div>
                        </div>
                    {/foreach}
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <button type="submit" class="fn_step-15 btn btn_small btn_blue float-md-right">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 26" width="20px" height="20px"><path d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z" fill="currentColor"></path></svg>                            <span>Применить</span>
                        </button>
                    </div>
                </div>
        </form>
    {/foreach}
</div>

{literal}
<script>
    // $(window).on("load", function() {
    //  });
</script>
{/literal}

