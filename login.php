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
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        <div class="stretchrow row">
            <div class="table">
                <div class="cell content">
                    <form name="login" method="post" action="/dologin.php">
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="username" placeholder="Введите имя пользователя или номер телефона">
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="password" name="password" placeholder="Введите пароль">
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="submit" value="Войти">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="/scripts/index.js"></script>
    </body>
</html>
                            