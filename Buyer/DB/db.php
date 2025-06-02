<?php

$ServerName = "localhost";
$UserName = "root";
$Password = "" ;
$DbName = "project";

$conn = new mysqli($ServerName , $UserName , $Password , $DbName);

if($conn->connect_error){
    echo "connection Fail";
}else{
    // echo "Connection successfull";
   
}



?>