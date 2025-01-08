{*{$allCategories|print_r}*}
{*{$allBrands|print_r}*}
<?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:yandex="http://news.yandex.ru"
     xmlns:media="http://search.yahoo.com/mrss/"
     xmlns:turbo="http://turbo.yandex.ru"
     version="2.0">
    <channel>
        {foreach $allCategories as $category}
            <item turbo="true">
                <title>{$category->name}</title>
                <link>https://motokofr.com</link>
                <turbo:content>
                    <![CDATA[
                    <header>
                        <h1>{$category->name}</h1>
                        <h2>для мотоциклов</h2>
                        <figure>
                            <img src="https://motokofr.com/files/originals/categories/{$category->image}">
                        </figure>
                    </header>
                    <p>{$category->description}</p>
                    <p>
                        {foreach $allBrands as $brand}
                            <span>
                                <a href="https://motokofr.com/catalog/{{$category->url}}/brand-{$brand->url}">{$brand->name|escape}</a>
                            </span> |
                        {/foreach}
                    </p>


{*                    <h2>Меню</h2>*}
{*                    <figure>*}
{*                        <img src="https://motokofr.com/files/originals/categories/{$category->image}">*}
{*                        <figcaption>Омлет с травами</figcaption>*}
{*                    </figure>*}
{*                    <p>В нашем меню всегда есть свежие, вкусные и полезные блюда.</p>*}
{*                    <p>Убедитесь в этом сами.</p>*}

                    <button formaction="https://motokofr.com/catalog/{$category->url}"
                            data-background-color="#e87800"
                            data-color="white"
                            data-primary="true">Найти для своего
                    </button>


{*                    <div data-block="widget-feedback" data-stick="false">*}
{*                        <div data-block="chat" data-type="whatsapp" data-url="https://whatsapp.com"></div>*}
{*                        <div data-block="chat" data-type="telegram" data-url="https://t.me/telegram"></div>*}
{*                        <div data-block="chat" data-type="vkontakte" data-url="https://vk.com/"></div>*}
{*                        <div data-block="chat" data-type="viber" data-url="https://viber.com"></div>*}
{*                    </div>*}
{*                    <p>Наш адрес: <a href="#">Nullam dolor massa, porta a nulla in, ultricies vehicula arcu.</a></p>*}
{*                    <p>Фотографии — http://unsplash.com</p>*}
                    ]]>
                </turbo:content>
            </item>
        {/foreach}
    </channel>
</rss>