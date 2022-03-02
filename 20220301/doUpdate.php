<?php
require_once("./db-connect.php");

$id=$_POST["id"];
$account=$_POST["account"];
// $password=md5($_POST["password"]);
$gender=$_POST["gender"];
$phones=$_POST["phone"];
$phones=array_filter($phones);
$phones_string=implode(', ',$phones);
$now=date('Y-m-d H:i:s');
// echo $id,$account,$gender,$phones_string,$now;

$sql="UPDATE user SET account='$account',gender='$gender',phone='$phones_string',create_time='$now' where id=$id";
if ($conn->query($sql) === TRUE) {
    echo "更新資料成功";
    echo "id : $id" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};

$conn->close();
header("location: ./userinfo.php?id=$id");
?>