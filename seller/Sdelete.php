<?php
require 'Sconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['land_id'])) {
        $landId = $_GET['land_id'];
        $sql = "DELETE FROM land_information WHERE Land_ID = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $landId);

        if ($stmt->execute()) {
            echo "<script>alert('Your Land deleted Successfully');</script>";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "<p>Error: Land ID not provided.</p>";
    }
}

$con->close();
?>

<h3>By backing out of this page, you can access the sell your land and view your land pages again</h3>