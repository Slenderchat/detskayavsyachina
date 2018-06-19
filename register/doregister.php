<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $thirdname = $_POST['thirdname'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $metro = $_POST['metro'];
    $resp = array('isUnameInv' => 0, 'isEmailInv' => 0, 'isPhonenumberInv' => 0, 'isSuccessful' => 0);
    $conn = new mysqli('a236477.mysql.mchost.ru', 'a236477_1', 'fwvm52cy9N5A', 'a236477_1');
    if($conn->query("SELECT username, email, phonenumber FROM credentails WHERE username='$username' OR email='$email' OR phonenumber='$phonenumber'")->num_rows == 0){
        $conn->query("INSERT INTO credentails (username, password, email, firstname, lastname, thirdname, phonenumber, address, metro) VALUES ('$username', '$password', '$email', N'$firstname', N'$lastname', N'$thirdname', '$phonenumber', N'$address', N'$metro')");
        $resp['isSuccessful'] = 1;
    }else{
        if($conn->query("SELECT username FROM credentails WHERE username='$username'")->num_rows != 0){
            $resp['isUnameInv'] = 1;
        }
        if($conn->query("SELECT email FROM credentails WHERE email='$email'")->num_rows != 0){
            $resp['isEmailInv'] = 1;
        }
        if($conn->query("SELECT phonenumber FROM credentails WHERE phonenumber='$phonenumber'")->num_rows != 0){
            $resp['isPhonenumberInv'] = 1;
        }
        $resp['isSuccessful'] = 0;
    }
    $conn->close();
    header("Content-type: application/json");
    echo(json_encode($resp));