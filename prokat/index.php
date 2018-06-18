<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
        <title>Прокат</title>
        <meta name="description" content="Прокат" />
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        </header>
        <div class="wrap">
            <div class="menu">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
            </div>
            <div class="content sell">
                <div class="sellControls" onchange="loadGoodies('prokat')">
                    <div>
                        <label for="category">Поиск</label><br>
                        <input type="search" placeholder="Поиск" name="search" id="srch">
                    </div>
                    <div>
                        <label for="category">Категория</label><br>
                        <select id="category" name="category" onchange="switchCategory(this)">
                            <option <?php if(@$_GET['category'] == "Все"){echo "selected";} ?> value="Все">Все</option>
                            <option <?php if(@$_GET['category'] == "Автокресла"){echo "selected";} ?> value="Автокресла">Автокресла</option>
                            <option <?php if(@$_GET['category'] == "Беговелы"){echo "selected";} ?> value="Беговелы">Беговелы</option>
                            <option <?php if(@$_GET['category'] == "Детские весы"){echo "selected";} ?> value="Детские весы">Детские весы</option>
                            <option <?php if(@$_GET['category'] == "Каталки, ходунки, прыгунки"){echo "selected";} ?> value="Каталки, ходунки, прыгунки">Каталки, ходунки, прыгунки</option>
                            <option <?php if(@$_GET['category'] == "Книги на английском"){echo "selected";} ?> value="Книги на английском">Книги на английском</option>
                            <option <?php if(@$_GET['category'] == "Коляски"){echo "selected";} ?> value="Коляски">Коляски</option>
                            <option <?php if(@$_GET['category'] == "Манежи"){echo "selected";} ?> value="Манежи">Манежи</option>
                            <option <?php if(@$_GET['category'] == "Качели, матрасы"){echo "selected";} ?> value="Качели, матрасы">Качели, матрасы</option>
                            <option <?php if(@$_GET['category'] == "Ж/Д манежи"){echo "selected";} ?> value="Ж/Д манежи">Ж/Д манежи</option>
                            <option <?php if(@$_GET['category'] == "Переноски"){echo "selected";} ?> value="Переноски">Переноски</option>
                            <option <?php if(@$_GET['category'] == "Радионяни и молокоотсосы"){echo "selected";} ?> value="Радионяни и молокоотсосы">Радионяни, молокоотсосы</option>
                            <option <?php if(@$_GET['category'] == "Стульчики для кормления"){echo "selected";} ?> value="Стульчики для кормления">Стульчики для кормления</option>
                            <option <?php if(@$_GET['category'] == "Шезлонги"){echo "selected";} ?> value="Шезлонги">Шезлонги</option>
                        </select>
                    </div>
                </div>
                <script src="/scripts/index.js"></script>
                <div class="sellView" id="sellView"><script>loadGoodies("prokat");</script></div>
            </div>
        </div>
    </body>
</html>