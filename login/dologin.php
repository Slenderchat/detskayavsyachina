<?php
session_start();
$invalid = array('isUnameInv' => 0, 'isPassInv' => 0);
$uname = $_POST['username'];
$pass = $_POST['password'];
$conn = new mysqli('a236477.mysql.mchost.ru', 'a236477_1', 'fwvm52cy9N5A', 'a236477_1');
$res1 = $conn->query("SELECT username, phonenumber FROM credentails WHERE username = '$uname' OR phonenumber = '$uname'");
$res2 = $conn->query("SELECT password FROM credentails WHERE password = '$pass'");
$conn->close();
if($res1->num_rows !== 1){
    $invalid['isUnameInv'] = 1;
}
if($res2->num_rows !== 1){
    $invalid['isPassInv'] = 1;
}
if($res1->num_rows === 1 && $res2->num_rows === 1){
    $_SESSION['isLogedIn'] = true;
    $_SESSION['user'] = $res1->fetch_assoc()['username'];
}
header("Content-type: application/json");
echo(json_encode($invalid));