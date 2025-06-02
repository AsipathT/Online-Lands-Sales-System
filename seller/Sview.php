<!DOCTYPE html>
<html>

<head>
    <title>View Land Details</title>
    <link rel="stylesheet" type="text/css" href="Sstyles/Sstyle.css">
    <style>
        /* Custom styles for the view land details section */
        .land-details-container {
            margin-top: 50px; /* Add more space above */
            margin-bottom: 50px; /* Add more space below */
        }

        .land-details {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .delete-land-button-container {
            text-align: center;
            margin-top: 30px;
        }

        .delete-land-button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header>

        <div class="header-text">
            <p><strong>PLOT PERFECT LANDS</strong></p>
        </div>

        <div class="login-register">
            <button>Login</button>
            <button>Register</button>
        </div>

        <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Search Land</a></li>
            <li><a href="#">Sell Your Land</a></li>
            <li><a href="#">Admin Login</a></li>
          </ul>
        </nav>

    </header>

    <main>

        <div class="view-land-container">
            <div class="land-details-container">
                <div class="land-details">
                    <?php
                    require 'Sconfig.php';

                    if (isset($_GET['land_id'])) {
                        $landId = $_GET['land_id'];
                        $sql = "SELECT * FROM land_information WHERE Land_ID = $landId";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo "<hr><hr><h2 style='text-align: center;' >Your Land Details:</h2><hr><hr><br><br>"; 
                            echo "<hr><p><strong>Description :</strong> " . $row['Description'] . "</p>" . "<hr>";
                            echo "<p><strong>City/Town :</strong> " . $row['City/Town'] . "</p>". "<hr>";
                            echo "<p><strong>Location :</strong> " . $row['Location'] . "</p>". "<hr>";
                            echo "<p><strong>Extent (Perches) :</strong> " . $row['Extent'] . "</p>". "<hr>";
                            echo "<p><strong>Price (Per Perch) :</strong> " . $row['Price'] . "</p>". "<hr>";
                        } else {
                            echo "<p>No land found with the provided ID.</p>";
                        }
                    } else {
                        echo "<p>Error: Land ID not provided.</p>";
                    }

                    $con->close();
                    ?>
                </div>
            </div>
        </div>

        <div class="delete-land-button-container">
    <button class="delete-land-button" onclick="deleteLand()">Delete Land</button>
</div>

<script>
    function deleteLand() {
        var landId = prompt("Please enter the ID of the land you want to delete:");
        if (landId !== null && landId !== "") {
            window.location.href = "Sdelete.php?land_id=" + landId;
        } else {
            alert("Invalid land ID. Please enter a valid land ID.");
        }
    }
</script>


    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-item">
                <img src="Simages/SLocFooter.jpg" alt="Location icon">
                Sri Lanka
            </div>
            <div class="footer-item">
                <img src="Simages/SconFooter.jpg" alt="Contact icon">
                077xxxxxxx
            </div>
            <div class="footer-item">
                <img src="Simages/SmailFooter.jpg" alt="Email icon">
                plotperfectlands@gmail.com
            </div>
        </div>
    </footer>
</body>

</html>
