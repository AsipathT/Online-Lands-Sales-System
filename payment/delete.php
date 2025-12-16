<?php

require 'config.php';

$CardNumber=$_POST["number"];

$sql="DELETE FROM payment1 WHERE card_number='$CardNumber'";

if($con->query($sql))
{
    echo "Deleted Successfully";
}
else{
    echo "NOT Deleted";
}

