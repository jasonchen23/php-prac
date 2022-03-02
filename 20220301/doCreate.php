<?php
require_once("./db-connect.php");

// if(!isset($_POST["account"]) || !isset($_POST["password"])) {
//     echo "請透過正常管道進入";
//     exit;
// }
// if(isset($_POST["account"])) {
//     echo "Have Account!!!";
//     exit;
// }
// if(isset($_POST["password"])) {
//     echo "Have Password!!!";
//     exit;
// }
$account=$_POST["account"];
$password=md5($_POST["password"]);
$gender=$_POST["gender"];
// if($gender == 1) $gender= "male";
// else $gender = "female";
$phones=$_POST["phones"];
$phones=array_filter($phones);
$phones_string=implode(', ',$phones); //090000000, 094548153, 
// var_dump($phones);

// if(empty($account)) {
//     echo "請輸入帳號";
//     header('Location: ./form.php');
//     exit;
// }
// if(empty($password)) {
//     echo "請輸入密碼";
//     header('Location: ./form.php');
//     exit;
// }

// echo "account is $account, password is $password.";
// echo "$gender, $phones[0]";

// date_default_timezone_set("Asia/Taipei");
$now=date('Y-m-d H:i:s');

$sql="INSERT INTO user(account,password,gender,phone,create_time,valid)
VALUES ('$account','$password','$gender','$phones_string','$now',1)";
if ($conn->query($sql) === TRUE) {
    echo "新資料輸入成功";
    $last_id = $conn -> insert_id;
    echo "id : $last_id" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};

// echo $sql;
$conn->close(); //mysqli_close($conn);
header("location: user-list.php"); 
?>