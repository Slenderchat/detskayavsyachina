<?php
    session_start();
    if(!empty($_SESSION['islogedin'])){
        header('Location: /account');
    }
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
        <title>Вход</title>
        <meta name="description" content="Вход" />
    </head>
    <body onload="removeAd()">
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        </header>
        <div class="wrap">
            <div class="menu">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
            </div>
            <div class="content">
                <form name="login" method="post" action="/dologin.php" class="userForm">
                    <input type="text" name="username" placeholder="Введите имя пользователя или номер телефона">
                    <input type="password" name="password" placeholder="Введите пароль">
                    <input type="submit" value="Войти">
                </form>
            </div>
        </div>
    <script src="/scripts/index.js"></script>
    </body>
</html>
                            