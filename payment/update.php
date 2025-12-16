<?php

require 'config.php';

$CardNumber=$_POST["number"];
$date=$_POST["e_date"];
$Cvv=$_POST["cvv"];
$Email=$_POST["email"];

if(empty($CardNumber)||empty($date)||empty($Cvv)||empty($Email))
{
    echo "All Required";
}
else{
  $sql="UPDATE Payment1 set Card_number='$CardNumber',Date='$date',Cvv='$Cvv',Email='$Email' WHERE Card_number='$CardNumber'";

  if($con->query($sql))
  {
    echo "Updated";
  }
  else{
    echo "Not Updated";
  }
}