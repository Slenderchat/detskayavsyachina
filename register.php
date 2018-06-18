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
        <meta name="description" content="Регистрация" />
    </head>
    <body onload="removeAd()">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        <div class="stretchrow row">
            <div class="table">
                <div class="cell content">
                    <form name="login" action="/doregister.php" method="post">
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="username" required placeholder="Имя пользователя" maxlength="255" pattern="(([a-zA-Z0-9])+)"><span class="formerror">Только символы латиницы и цифры, без пробелов</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="password" name="password" required placeholder="Пароль" maxlength="255" pattern="(([a-zA-Zа-яА-Я0-9])+)"><span class="formerror">Только символы латиницы, кирилицы и цифры, без пробелов</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="email" required placeholder="Email" maxlength="50" pattern="(([a-zA-Z])+@([a-zA-Z])+\.([a-zA-Z])+)"><span class="formerror">Например: formerror@domain.com</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="firstname" required placeholder="Имя" maxlength="30" pattern="([А-Я]([а-я])+)"><span class="formerror">С большой буквы, только символы кирилицы, без пробелов</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="lastname" required maxlength="30" placeholder="Фамилия" pattern="([А-Я]([а-я])+)"><span class="formerror">С большой буквы, только символы кирилицы, без пробелов</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="thirdname" required placeholder="Отчество" maxlength="30" pattern="([А-Я]([а-я])+)"><span class="formerror">С большой буквы, только символы кирилицы, без пробелов</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="tel" name="phonenumber" placeholder="Номер телефона" required maxlength="12" pattern="(\+7([0-9]){10})"><span class="formerror">Например: +79999999999</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="address" placeholder="Адрес" required maxlength="255" pattern="(([а-яА-Я0-9 .,])+)"><span class="formerror">Только символы кирилицы, цифры, пробел, точка и запятая</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="text" name="metro" placeholder="Метро" required maxlength="50" pattern="(([а-я А-Я])+)"><span class="formerror">Только символы кирилицы и пробел</span>
                        </div>
                        <div class="formcontainer">
                            <input class="formelement" type="submit" value="Зарегистрироваться">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="/scripts/index.js"></script>
    </body>
</html>