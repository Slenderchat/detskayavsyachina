<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="/index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="logo">
            <img src="/images/logo.jpg" width="795" height="200" alt="Логотип проката &quot;Детская Всячина&quot;">
        </div>
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/templates/menu.html");?>
            <div class="content">
                <h1>Каталог</h1>
                <div class="catalogWrap">
                    <div class="catalogControls">
                        <input style="flex-grow: 1;" type="search" placeholder="Поиск">
                        <select title="Категория">
                            <option disabled selected>Категория</option>
                            <optgroup label="Прокат">
                                <option>Переноски: слинги, рюкзачки, хипситы и т.д.</option>
                                <option>Автокресла</option>
                                <option>Шезлонги BabyBjorn и игрушки к ним</option>
                                <option>Весы детские электронные</option>
                                <option>Игрушки</option>
                                <option>Стульчики для кормления</option>
                                <option>Электронные качели и люльки</option>
                                <option>Библиотека английской литературы</option>
                                <option>Спорт</option>
                                <option>Коляски</option>
                                <option>Манежи в поезд</option>
                                <option>Радионяни и молокоотсосы</option>
                                <option>Товары для Нового Года</option>
                                <option>Кровать-манежи</option>
                            </optgroup>
                            <optgroup label="Продажа">
                                <option>Манежи в поезд</option>
                                <option>Новые бустеры</option>
                                <option>Горшки детские складные</option>
                                <option>Б/У Игрушки</option>
                                <option>Одежда</option>
                                <option>Новые деревянные игрушки PIPPO TOYS</option>
                                <option>Книги для мамы и ребенка</option>
                                <option>Прочее</option>
                            </optgroup>
                        </select>
                        <i class="material-icons">keyboard_arrow_up</i>
                    </div>
                    <div class="catalog"></div>
                    <div class='pageControls'></div>
                </div>
            </div>
    </body>
    <script type="text/javascript" src="/scripts/catalog.js"></script>
</html>