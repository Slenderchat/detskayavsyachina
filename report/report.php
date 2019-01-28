<?php
    $conn = new mysqli("localhost", "id8550022_detskayavsyachina", "%sha512pass%", "id8550022_detskayavsyachina");
    if($conn){
        if($_POST['fio'] && $_POST['tel'] && $_POST['time'] && $_POST['email'] && $_POST['message']){
            $fio = $_POST['fio'];
            $tel = $_POST['tel'];
            $time = $_POST['time'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $query = "INSERT INTO reports VALUES (NULL, '$fio', '$tel', '$email', '$time', DEFAULT, '$message')";
            if($conn->query($query));
            echo ('OK' . $conn->insert_id);
        }else{
            echo ('INVALID FORM!');
        }
    }else{
        echo ('DATABASE ERROR!');
    }