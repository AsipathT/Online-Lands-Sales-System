<?php

require 'Sconfig.php';

// Extract form data
$Sfullname = $_POST["Ifullname"];
$Semail = $_POST["Iemail"];
$Sphone = $_POST["Iphone"];
$Smobile = $_POST["Imobile"];
$Sdescription = $_POST["Idescription"];
$Scity = $_POST["Icity"];
$Slocation = $_POST["Ilocation"];
$Sextent = $_POST["Iextent"];
$Sprice = $_POST["Iprice"];

// Insert contact information into the database
$sql_contact = "INSERT INTO contact_information 
VALUES ('','$Sfullname', '$Semail', '$Sphone', '$Smobile')"; 

if ($con->query($sql_contact)) 
{
    // Get the auto-incremented ID of the inserted row
    $contact_id = $con->insert_id;
    
    // Insert land information into the database
    $sql_land = "INSERT INTO land_information 
    VALUES ('','$Sdescription', '$Scity', '$Slocation', '$Sextent', '$Sprice')";
    
    if ($con->query($sql_land)) {
        // Get the auto-incremented ID of the inserted row
        $land_id = $con->insert_id;
        
        // Close the database connection
        $con->close();
        
        // Display an alert with the land ID
        echo "<script>alert('Your land ID is: $land_id');</script>";
    } else {
        // Handle query error
        echo "<script>alert('Error submitting land.');</script>";
    }
} else {
    // Handle query error
    echo "<script>alert('Error submitting contact information.');</script>";
}

?>

<h3>By backing out of this page, you can access the sell your land page again</h3>