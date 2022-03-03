<?php
session_start();

// $id=$_GET["id"];
$id=$_POST["id"];

$newItem=[
    $id=>1
];

if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=[];
}
//檢查產品是否已在購物車中
$product_exist=0;
foreach($_SESSION["cart"] as $value) {
    if(array_key_exists($id, $value)){
        $product_exist=1;
    }
}
//如果尚未在購物車中，push產品到購物車中
if($product_exist===0) {
    array_push($_SESSION["cart"],$newItem);
}else{

}

// array_push($_SESSION["cart"],$newItem);

echo json_encode($newItem);

?>