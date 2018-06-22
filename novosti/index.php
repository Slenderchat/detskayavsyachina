<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
        <title>Новости</title>
        <meta name="description" content="Новости" />
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        </header>
        <div class="wrap">
            <div class="menu">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
            </div>
            <script src="/scripts/index.js"></script>
            <div class="content news" id="news"><script>loadNews();</script></div>
        </div>
    <script src="/scripts/index.js"></script>
    </body>
</html>