<?php
require 'config.php';

$CardNumber=$_POST["number"];
$date=$_POST["e_date"];
$Cvv=$_POST["cvv"];
$Email=$_POST["email"];

$sql="INSERT INTO  payment1 VALUES ('$CardNumber','$date','$Cvv','$Email')";

if($con->query($sql))
   {
       echo "<br>"."<h1>"."<center>"."<b>"."Insert successful"."</b>"."<center>"."</h1>";
   }
   else{
       echo "error".$con->error;
   }

   $con->close();

?>
