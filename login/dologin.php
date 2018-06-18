<?php
    session_start();
    if(!empty($_SESSION['islogedin'])){
        header("Location: /account");
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli('a236477.mysql.mchost.ru', 'a236477_1', 'fwvm52cy9N5A', 'a236477_1');
    $uname = $conn->query("SELECT username, email, password FROM credentails WHERE username='$username' OR email='$username'");
    $upass = $conn->query("SELECT password FROM credentails WHERE password='$password'");
    if($uname->num_rows == 1 && $upass->num_rows == 1){
        $_SESSION['islogedin'] = true;
        $_SESSION['username'] = $conn->query("SELECT username FROM credentails WHERE username='$username' OR email='$username'")->fetch_assoc()['username'];
    }
    $conn->close();
    if(!empty($_SESSION['islogedin'])){
        echo '<h3 class="registerinfo">Добро пожаловать ' . $_SESSION['username'] . '</h3><br>';
        header("Location: /account");
    }else{
        if($uname->num_rows != 1){
            echo('<h3 class="error">Неверное имя пользователя или email</h3>');
        }
        if($upass->num_rows != 1){
            echo('<h3 class="error">Неверный пароль</h3>');
        }
        echo('<h3 class="registerinfo">Попробуйте снова</h3>');
    }