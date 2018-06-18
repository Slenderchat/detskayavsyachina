<?php
    session_start();
    if(!empty($_SESSION['islogedin'])){
        header("Location: /account");
    }
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.html'; ?>
        <title>Регистрация</title>
        <meta name="description" id="description" content="Регистрация" />
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
                <form name="login" action="doregister.php" method="post" class="userForm">
                    <label for="username">Только символы латиницы и цифры, без пробелов</label>
                    <input type="text" name="username" id="username" required placeholder="Имя пользователя" maxlength="255" pattern="(([a-zA-Z0-9])+)">
                    <label for="password">Только символы латиницы, кирилицы и цифры, без пробелов</label>
                    <input type="password" name="password" id="password" required placeholder="Пароль" maxlength="255" pattern="(([a-zA-Zа-яА-Я0-9])+)">
                    <label for="email">Например: formerror@domain.com</label>
                    <input type="text" name="email" id="email" required placeholder="Email" maxlength="50" pattern="(([a-zA-Z])+@([a-zA-Z])+\.([a-zA-Z])+)">
                    <label for="firstname">С большой буквы, только символы кирилицы, без пробелов</label>
                    <input type="text" name="firstname" id="firstname" required placeholder="Имя" maxlength="30" pattern="([А-Я]([а-я])+)">
                    <label for="lastname">С большой буквы, только символы кирилицы, без пробелов</label>
                    <input type="text" name="lastname" id="lastname" required maxlength="30" placeholder="Фамилия" pattern="([А-Я]([а-я])+)">
                    <label for="thirdname">С большой буквы, только символы кирилицы, без пробелов</label>
                    <input type="text" name="thirdname" id="thirdname" required placeholder="Отчество" maxlength="30" pattern="([А-Я]([а-я])+)">
                    <label for="phonenumber">Например: +79999999999</label>
                    <input type="tel" name="phonenumber" id="phonenumber" placeholder="Номер телефона" required maxlength="12" pattern="(\+7([0-9]){10})">
                    <label for="address">Только символы кирилицы, цифры, пробел, точка и запятая</label>
                    <input type="text" name="address" id="address" placeholder="Адрес" required maxlength="255" pattern="(([а-яА-Я0-9 .,])+)">
                    <label for="metro">Только символы кирилицы, запятая и пробел</label>
                    <input type="text" name="metro" id="metro" placeholder="Метро" required maxlength="50" pattern="(([а-я А-Я])+)">
                    <input type="submit" value="Зарегистрироваться">
                </form>
            </div>
        </div>
    <script src="/scripts/index.js"></script>
    </body>
</html>