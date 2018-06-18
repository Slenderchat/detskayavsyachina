<?php
    session_start();
    if(!empty($_SESSION['islogedin'])){
        header('Location: /account');
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $thirdname = $_POST['thirdname'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $metro = $_POST['metro'];
    $conn = new mysqli("localhost", "id6035521_detskayavsyachina", "detskayavsyachina", "id6035521_users");
    if($conn->query("SELECT username, email, phonenumber FROM credentails WHERE username='$username' OR email='$email' OR phonenumber='$phonenumber'")->num_rows == 0){
        $conn->query("INSERT INTO credentails (username, password, email, firstname, lastname, thirdname, phonenumber, address, metro) VALUES ('$username', '$password', '$email', N'$firstname', N'$lastname', N'$thirdname', '$phonenumber', N'$address', N'$metro')");
        echo('<h3 class="registerinfo">Регистрация прошла успешно!</h3><br>');
        header("Location: /account");
    }else{
        if($conn->query("SELECT username FROM credentails WHERE username='$username'")->num_rows != 0){
            echo('<h3 class="error">Такое имя пользователя уже используется в другом аккаунте</h3>');
        }
        if($conn->query("SELECT email FROM credentails WHERE email='$email'")->num_rows != 0){
            echo('<h3 class="error">Такой email уже используется в другом аккаунте</h3>');
        }
        if($conn->query("SELECT phonenumber FROM credentails WHERE phonenumber='$phonenumber'")->num_rows != 0){
            echo('<h3 class="error">Такой номер телефона уже используется в другом аккаунте</h3>');
        }
        echo('<h3 class="registerinfo">Попробуйте зарегистрироваться снова</h3>');
    }
    $conn->close();