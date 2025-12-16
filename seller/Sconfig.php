<?php
$con=new mysqli("localhost","root","","sellerms");

if($con->connect_error)
{

    die("Connection failed ".$con->connection_error);
}

?>
