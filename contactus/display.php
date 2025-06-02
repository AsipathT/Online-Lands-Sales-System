<!DOCTYPE html>
   <html lang="en">
   <head>

   <link rel="stylesheet" href="./display.css">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="styles">
   

</head>
    
<body style="margin: 50px;"> 
      
    <h1> Dispaly Message</h1>
    <br>
      <table class = "table">
     
        <thead>
            <tr>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>

<tbody>
<?php
include 'connect.php'; //database connecation

//check connection
if($con->connect_error){                             
    die("connection failed: " . $con->connect_error);

}

// read message row frm detabase table
$sql = "SELECT * FROM  crud";
$result=$con->query($sql);


if (!$result) {
    die("Invalid query: " . $con->error);
}

// read deta of each row
while($row = $result->fetch_assoc()) {

    echo "<tr>
    <td>" .$row["message"] ."</td>
    <td>
    <button><a href='update.php' class='text-light' style='text-decoration:none;'>Update</a></button>
    <button><a href='delete.php? deleteid=" .$row['message']."' class='text-light' style='text-decoration:none;'>Delete</a></button>
        
 </tr>";
  }
  
?>
</tbody>
 </table>
</body>
</html> 
