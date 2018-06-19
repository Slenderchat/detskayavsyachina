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
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        </header>
        <div class="wrap">
            <div class="menu">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php'; ?>
            </div>
            <div class="content">
                <form name="login" method="post" id="login" class="userForm">
                    <label for="login" class="userFormError">Неверное имя пользователя и/или пароль</label>
                    <input type="text" name="username" id="username" placeholder="Введите имя пользователя или номер телефона">
                    <input type="password" name="password" id="password" placeholder="Введите пароль">
                    <input type="button" onclick="doLogin()" value="Войти">
                </form>
            </div>
        </div>
    <script src="/scripts/index.js"></script>
    </body>
</html>
                            