<?php
session_start();
require_once("../db-connect.php");
$account=$_POST["account"];
$password=md5($_POST["password"]);
// $password=$_POST["password"];

$sql="SELECT * FROM user WHERE account='$account' AND password='$password'";
// echo $sql;
if($conn -> query($sql) == TRUE) {
    $result = $conn->query($sql);
    $userCount=$result->num_rows;

    if($userCount>0) {
        // echo "success";
        $user=$result->fetch_assoc();
        $data=[
            "account"=>$user["account"]
        ];
        $_SESSION["user"]=$data;
        unset($_SESSION["error"]);
        // var_dump($_SESSION["user"]);
        echo json_encode($data);
        // header("location: ./dashboard.php");
    } else {
        // echo "failed";
        if(isset($_SESSION["error"]["times"])){
            $_SESSION["error"]["times"]++ ;
        } else{
            $_SESSION["error"]["times"]=1;
        }
        $_SESSION["error"]["message"]="帳號或密碼錯誤";
        $data=[
            "error"=>[
                "message"=>$_SESSION['error']['message'],
                "time"=>$_SESSION['error']['message']
            ]
            ];
        echo json_encode($data);
    };
    // header("location: ./login.php");
} else{
    echo "Error: ". $conn->error;
}
?>