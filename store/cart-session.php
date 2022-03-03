<?php
session_start();
// $cart=[
//     //product id => amount
//     [1=>1],
//     [2=>2]
// ];

// echo json_encode($cart);
if(isset($_SESSION["cart"])){
    var_dump($_SESSION["cart"]);
}

?>