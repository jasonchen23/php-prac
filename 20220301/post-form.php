<?php
if(!isset($_POST["account"]) || !isset($_POST["password"])) {
    echo "請透過正常管道進入";
    exit;
}
// if(isset($_POST["account"])) {
//     echo "Have Account!!!";
//     exit;
// }
// if(isset($_POST["password"])) {
//     echo "Have Password!!!";
//     exit;
// }
$account=$_POST["account"];
$password=$_POST["password"];

if(empty($account)) {
    echo "請輸入帳號";
    header('Location: ./form.php');
    exit;
}
if(empty($password)) {
    echo "請輸入密碼";
    header('Location: ./form.php');
    exit;
}

echo "account is $account, password is $password.";
?>