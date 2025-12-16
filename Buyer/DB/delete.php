<?php

require_once './db.php';

$_id = $_POST['mid'];


if(isset($_POST['delete'])){
    $id = intval($_POST['mid']);

    $sql = "DELETE FROM `cartitems` WHERE id = $id";
    $conn->query($sql);
    header("Location: ../ItemCart.php");
}




?>