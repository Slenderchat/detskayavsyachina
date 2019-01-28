<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Детская всячина</title>
        <link rel="stylesheet" href="/index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="logo">
            <img src="/images/logo.jpg" width="795" height="200" alt="Логотип проката &quot;Детская Всячина&quot;">
        </div>
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/templates/menu.html");?>
        <div class="content">
            <h1>Главная</h1>
            <h2>Местоположение</h2>
            <p>Мы находимся по адресу: <em>Санкт-Петербург, улица Большая Пушкарская, дом 20, офис 2-204</em><br>
                Необходима предварительная запись по телефону: <a href="tel:+79006215678">+7-(900)-621-56-78</a> или в личном сообщении <a href="http://vk.com/write9074">Юлии Добровольской</a></p>
            <div class="spoiler">
                <div class="spoilerHead">
                    <i class="material-icons">keyboard_arrow_down</i>
                    <span>"Детская Всячина" на Google Картах</span>
                </div>
                <div class="spoilerContent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7989.802930000844!2d30.3013821!3d59.9578465!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3da210eb9d933b84!2z0JTQtdGC0YHQutCw0Y8g0JLRgdGP0YfQuNC90LA!5e0!3m2!1sru!2sru!4v1548256316098" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <h2>Расписание работы офиса</h2>
            <table border>
                <tr>
                    <td>Понедельник</td>
                    <td>с 10 до 13 часов</td>
                </tr>
                <tr>
                    <td>Вторник</td>
                    <td>с 17 до 20 часов</td>
                </tr>
                <tr>
                    <td>Среда</td>
                    <td>выходной</td>
                </tr>
                <tr>
                    <td>Четверг</td>
                    <td>с 10 до 13 часов</td>
                </tr>
                <tr>
                    <td>Пятница</td>
                    <td>с 17 до 20 часов</td>
                </tr>
                <tr>
                    <td>Суббота</td>
                    <td>с 10 до 13 часов</td>
                </tr>
                <tr>
                    <td>Воскресенье</td>
                    <td>выходной</td>
                </tr>
            </table>
            <h2>Особенности нашего проката</h2>
            <h3>Любимые вещи</h3>
            <hr>
            <p>Мы тщательно отбираем товары для проката на основе личного опыта, отзывов знакомых мам и экспертов. Мы выбираем самые лучшие вещи для вас!</p>
            <h3>Реальные фотографии</h3>
            <hr>
            <p>В описании вещей присутствуют реальные фотографии. Вы можете убедиться, что вещи в хорошем состоянии.</p>
            <h3>Доброе дело</h3>
            <hr>
            <p>Часть прибыли мы переводим на помощь особым детям в Благотворительную организацию «Шаг навстречу» <a title="Шаг Навстречу" href="http://shag-navstrechu.ru">сайт</a> <a title="Шаг Навстречу ВК" href="http://vk.com/shagnavstrechu">группа ВК</a></p>
            <h3>Индивидуальный подход</h3>
            <hr>
            <p>Если у вас есть особый запрос: вы хотите взять вещь на нестандартный срок или вам так понравилась вещь, что вы хотели бы ее выкупить и т.п., напишите нам. Мы постараемся вам помочь!</p>
            <h2>Дополнительная информация</h2>
            <hr>
            <p>Забрать/вернуть вещи вы можете по предварительной договоренности по адресу: <em>Санкт-Петербург, улица Большая Пушкарская, дом 20, офис 2-204</em> в рабочие часы офиса.</p>
            <p>Также есть доставка. Стандартная стоимость пешей доставки <span class="price">340 рублей</span>, автомобильной <span class="price">450 рублей</span>. <a title="Номер телефона" href="tel:+79006215678">+7-900-621-56-78</a> (в т.ч. WhatsApp, Viber и Telegram)</p>
        </div>
    </body>
    <script type="text/javascript" src="/scripts/spoiler.js"></script>
</html>