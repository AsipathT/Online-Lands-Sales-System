<?php
include 'connect.php';
if(isset($_POST['submit'])){
    
    $title=$_POST['title'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $sql="INSERT INTO crud (title,name,email,mobile,subject,message) values('$title','$name','$email','$mobile','$subject','$message')";           
    
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "DATA inserterd successfully";
        header('location:display.php')
    } else{
        die(mysqli_error($con));
    }


    }
?>



















