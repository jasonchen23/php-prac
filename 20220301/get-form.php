<?php
if(!isset($_GET["account"]) || !isset($_GET["password"])) {
    echo "請透過正常管道進入";
    exit;
}
if(isset($_GET["account"])) {
    echo "Have Account!!!";
    exit;
}
if(isset($_GET["password"])) {
    echo "Have Password!!!";
    exit;
}
$account=$_GET["account"];
$password=$_GET["password"];

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