<?php
include 'connect.php'; //database connection
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid']; // Corrected variable name

    $sql="DELETE FROM crud WHERE message='$id'"; // Corrected SQL query
    $result=mysqli_query($con, $sql);
    if($result){
        header('locaion: display.php');
    } else {
        echo "NOT Deleted";
        
        
    }
    
}
if(isset($_GET['deleted']) && $_GET['deleted'] == 'success') {
    echo "Deleted successfully";
}
?>
