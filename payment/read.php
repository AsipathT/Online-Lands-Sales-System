<?php
require 'config.php';

// Define the background color style
$backgroundColor = 'lightblue'; // You can change this to any color value you prefer

$sql = "SELECT Card_number, Date, Cvv, Email FROM Payment1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Start outputting HTML content with inline CSS
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Update Page</title>";
    echo "<style>";
    echo "body {";
    echo "    background-color: $backgroundColor;";
    echo "    font-family: Arial, sans-serif;";
    echo "    padding: 20px;";
    echo "}";
    echo "table {";
    echo "    width: 100%;";
    echo "    border-collapse: collapse;";
    echo "    margin-top: 20px;";
    echo "}";
    echo "table, th, td {";
    echo "    border: 1px solid black;";
    echo "}";
    echo "th, td {";
    echo "    padding: 10px;";
    echo "    text-align: left;";
    echo "}";
    echo "th {";
    echo "    background-color: #007bff;";
    echo "    color: white;";
    echo "}";
    echo "</style>";
    echo "</head>";
    echo "<body>";

    echo "<h1>Payment Details</h1>";
    echo "<table>";
    
    // Table headers (column names)
    echo "<tr>";
    echo "<th>Card Number</th>";
    echo "<th>Expiry Date</th>"; // Assuming 'Date' represents Expiry Date
    echo "<th>CVV</th>";
    echo "<th>Email</th>";
    echo "</tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["Card_number"]."</td>";
        echo "<td>".$row["Date"]."</td>"; // Display 'Date' field as Expiry Date
        echo "<td>".$row["Cvv"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "</tr>";
    }
    
    echo "</table>";

    echo "<br>";
    echo "<a href='updateindex.php'><button>UPDATE</button></a>";
    echo "         ";
    echo "<a href='deleteindex.php'><button>DELETE</button></a>";

    echo "</body>";
    echo "</html>";
} else {
    echo "No Results";
}

$con->close();
?>
