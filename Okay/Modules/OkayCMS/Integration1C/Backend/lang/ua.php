<?php

$lang['okaycms__integration_ic__description_title'] = "Інтеграція з 1C";
$lang['okaycms__integration_ic__description_part_1'] = "Для налаштування обміну даними сайту з 1С вам потрібно вказати в 1С у розділі 'Сервіс - Обмін даними з Web-сайтом' наступне посилання";
$lang['okaycms__integration_ic__description_part_2'] = "і вказати логін/пароль адміністратора сайту, який має права для синхронізації з 1С. Можна зробити окремого користувача для роботи з 1С";
$lang['okaycms__integration_ic__description_part_2_1'] = "У налаштуваннях вказується лише адреса сторінки імпорту без GET параметрів. Параметри підставляє сам 1С при тих чи інших діях.";
$lang['okaycms__integration_ic__description_part_3'] = "Докладніше з параметрами можна ознайомитися нижче, а також з інформацією в статті на сайті";
$lang['okaycms__integration_ic__description_part_4'] = "Логіка роботи модуля приблизно така: 1С викликає вказаний вище URL (далі - точка входу) з набором певних GET параметрів, які запускають ті чи інші дії з боку сайту.";
$lang['okaycms__integration_ic__description_part_5'] = "Нижче наведено кілька прикладів цих параметрів для розуміння дій, які запускає 1С на стороні сайту.";
$lang['okaycms__integration_ic__description_part_6'] = "На прикладі імпорту товарів:";
$lang['okaycms__integration_ic__description_part_7'] = "Першою дією зазвичай йде так звана ініціалізація, яка готує папки до початку імпорту, очищаючи їх від файлів попереднього циклу. Запускається за допомогою ";
$lang['okaycms__integration_ic__description_part_8'] = "Далі 1С завантажує набір ресурсів у тимчасову папку на сайт, це можуть бути зображення товарів або файли XML з даними для імпорту.";
$lang['okaycms__integration_ic__description_part_9'] = "При завантаженні ресурсів у GET параметр filename вказується ім'я створюваного файлу, який при подальшій роботі буде використовуватися/викликаний за цим ім'ям. Сам вміст файлу передається в тілі запиту";
$lang['okaycms__integration_ic__description_part_10'] = "filename - ім'я файлу, що створюється, може бути індивідуально під ваші завдання. Далі 1С може звертатися до завантаженого файлу по цьому імені.";
$lang['okaycms__integration_ic__description_part_11'] = "Після завантаження всіх ресурсів зазвичай запускається імпорт категорій і товарів";
$lang['okaycms__integration_ic__description_part_12'] = "Файл імпорту категорій та товарів повинен містити в назві слово import. Подальша назва файлу індивідуальна. А також мати розширення xml";
$lang['okaycms__integration_ic__description_part_13'] = "Далі продовження імпорту, це запуск імпорту файлу з кількістю, цінами, одиницями виміру яке зазвичай міститься в xml файлі, ім'я якого починається на offers (побудова імені файлу описано на прикладі import.xml) і запускається";
$lang['okaycms__integration_ic__description_part_14'] = "Також є можливість зробити імпорт замовлень з 1С на сайт, це робиться за допомогою завантаження файлу із замовленнями та запуску за адресою";
$lang['okaycms__integration_ic__description_part_15'] = "На цих діях імпорт товарів закінчується.";
$lang['okaycms__integration_ic__description_part_16'] = "1С також може отримати XML вивантаження нових замовлень на сайті. На сторінку експорту замовлень до 1С виводяться тільки нові замовлення (відображаються замовлення з часу минулого звернення за цією адресою) при зверненні";
$lang['okaycms__integration_ic__settings'] = "Налаштування параметрів інтеграції";
$lang['okaycms__integration_ic__settings_brandOptionName'] = "Назва властивості товару, що використовується як бренд";
$lang['okaycms__integration_ic__settings_guidPriceFrom1C'] = "ID типу ціни в 1С, яку потрібно завантажити як основну";
$lang['okaycms__integration_ic__settings_guidComparePriceFrom1C'] = "ID типу ціни в 1С, яку потрібно завантажити як стару";
$lang['okaycms__integration_ic__settings_fullUpdate'] = "Оновлювати всі дані під час кожної синхронізації";
$lang['okaycms__integration_ic__settings_onlyEnabledCurrencies'] = "Враховувати лише включені валюти";
$lang['okaycms__integration_ic__settings_stockFrom1c'] = "Враховувати кількість товару з 1с";
$lang['okaycms__integration_ic__settings_importProductsOnly'] = "Імпортувати тільки товари, без послуг та іншого (ВидНоменклатури == Товар)";
$lang['okaycms__integration_1c__settings_exportPurchasesDiscountsSeparate'] = "Експортувати знижки товарів у замовленні окремо";
$lang['okaycms__integration_1c__settings_exportPurchasesDiscountsSeparate_tooltip'] = "Якщо налаштування включено, то при наявності у товару в замовленні знижок (знижки поширюються тільки на цей товар), до товару буде додаватися знижка, що є сумою всіх знижок знижок замовлення.";
$lang['okaycms__integration_ic__settings_eraseComparePrice'] = "Скидати стару ціну варіантів, якщо вона не прийшла з 1С";
$lang['okaycms__integration_ic__settings_eraseComparePriceEqual'] = "Скидати стару ціну варіантів, якщо дорівнює або менше основної ціни";