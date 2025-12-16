<?php

require_once './db.php';
session_start();


if(isset($_POST['submit'])){

    $price = intval($_POST['perice']);
    $landname = $_POST['landName'];
    $img = $_POST['imgAddress'];
    $qty = intval($_POST['qty']);
    $total = $price * $qty;

    echo $price;
    echo $total;

    $sql = "INSERT INTO `cartitems`( `landName`, `img`, `perchPrice`, `qty`, `total`) 
    VALUES ('$landname','$img',$price,$qty ,$total)";

    $result = $conn->query($sql);
    header("Location: ../cart.php");
}






?>