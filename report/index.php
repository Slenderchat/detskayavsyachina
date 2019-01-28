<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Обратная связь</title>
        <link rel="stylesheet" href="/index.css">
    </head>
    <body>
        <div class="logo">
            <img src="/images/logo.jpg" width="795" height="200" alt="Логотип проката &quot;Детская Всячина&quot;">
        </div>
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/templates/menu.html");?>
        <div class="content">
            <h1>Отзыв</h1>
            <p>С помощью этой формы вы можете отправить нам сообщение связанное с <em>работой сайта</em> или <em>работой проката</em></p>
            <form id="report" method="post" onsubmit="formSubmit(this)">
                <input type="text" name="fio" title="ФИО" placeholder="ФИО" maxlength="50" required>
                <input type="tel" name="tel" title="Номер мобильного телефона" placeholder="+7 (999) 123-456-78" maxlength="15" required>
                <input type="email" name="email" title="Адрес электронной почты" placeholder="Адрес электронной почты">
                <textarea name="message" title="Описание" placeholder="Сообщение" maxlength="1000"></textarea>
                <input type="submit">
            </form>
        </div>
    </body>
    <script type="text/javascript" src="/scripts/submit.js"></script>
</html>