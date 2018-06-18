<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
        <title>Прокат</title>
        <meta name="description" content="Прокат" />
    </head>
    <body onload="removeAd()">
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        </header>
        <div class="wrap">
            <div class="menu">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
            </div>
            <div class="content sell">
                <div class="sellControls" onchange="loadGoodies('prodazha')">
                    <div>
                        <label for="category">Поиск</label><br>
                        <input type="search" placeholder="Поиск" name="search" id="srch">
                    </div>
                    <div>
                        <label for="category">Категория</label><br>
                        <select id="category" name="category" onchange="switchCategory(this)">
                            <option <?php if(@$_GET['category'] == "Все"){echo "selected";} ?> value="Все">Все</option>
                            <option <?php if(@$_GET['category'] == "Бустеры"){echo "selected";} ?> value="Бустеры">Бустеры</option>
                            <option <?php if(@$_GET['category'] == "Ж/Д манежи"){echo "selected";} ?> value="Ж/Д манежи">Ж/Д Манежи</option>
                            <option <?php if(@$_GET['category'] == "Горшки детские складные"){echo "selected";} ?> value="Горшки детские складные">Горшки детские складные</option>
                            <option <?php if(@$_GET['category'] == "Прочее"){echo "selected";} ?> value="Прочее">Прочее</option>
                        </select>
                    </div>
                </div>
                <script src="/scripts/index.js"></script>
                <div class="sellView" id="sellView"><script>loadGoodies('prodazha');</script></div>
            </div>
        </div>
    </body>
</html>