<?php


require_once './db.php';

if(isset($_POST['update'])){
    $price = intval($_POST['price']);
    $id = intval($_POST['mid']);
    $qty = intval($_POST['qty']);
    $total = $price * $qty ;

    $sql = "UPDATE `cartitems` SET `qty`=$qty,`total`=$total WHERE id = $id";

    $conn->query($sql);
    header("Location: ../ItemCart.php");
}


?>