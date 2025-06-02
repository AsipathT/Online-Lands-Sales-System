<!DOCTYPE html>
<html>

<head>
  <title>Plot Perfect Lands</title>
  <link rel="stylesheet" type="text/css" href="Sstyles/Sstyle.css">
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
            <li><a href="../admin/index.php">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="../Buyer/cart.php">Search Land</a></li>
            <li><a href="Sindex.php">Sell Your Land</a></li>
            <li><a href="../admin/login.php">Admin Login</a></li>
          </ul>
        </nav>
        
      </header>

  <main>

    <div class="sell-your-land">
        <h1>Sell Your Land</h1>
    </div>

    <div class="contact-info-container">

    <div class="contact-information">
        <h2>Contact Information</h2>
    </div>

    <form method="post" action="Sprocess.php">
  
        <lable>ID</lable><br>
        <input type="text" name="Isid" disabled>
        No need to enter an ID, System will update it
        <br><br><br>
        
        <label for="name">Full Name:</label><br>
        <input type="text" name="Ifullname" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" name="Iemail" required><br><br>
        
        <label for="phone">Telephone:</label><br>
        <input type="text" name="Iphone" required><br><br>
        
        <label for="mobile">Mobile:</label><br>
        <input type="text" name="Imobile"><br><br><br>
    
 
    <div class="land-info-container">

    <div class="land-information">
      <h2>land Information</h2>
    </div>

        <lable>ID</lable><br>
        <input type="text" name="Ilid" disabled>
        No need to enter an ID, System will update it
        <br><br><br>
        
        <label >Description:</label><br>
        <textarea name="Idescription" rows="5" cols="50" required></textarea><br><br>
        
        <label>City/Town:</label>
        <input type="text" name="Icity" required>

        <label >Location:</label>
        <input type="text" name="Ilocation" required><br><br>
        
        <label >Extent (Perches):</label>
        <input type="text" name="Iextent" required><br>
        
        <label >Price (Per Perch):</label>
        <input type="text" name="Iprice" required><br><br>
        
    </div>      

      <div class="button-container">
        <button id="submit-button" type="submit" >Submit Land</button>
        <button id="reset-button" type="reset">Reset Details</button>
        <button id="view-land-button" type="button" onclick="redirectToViewLand()">View Your Land</button>

<script>
function redirectToViewLand() {
    var landId = prompt("Please enter your land ID:");
    if (landId !== null && landId !== "") {
        window.location.href = "Sview.php?land_id=" + landId;
    } else {
        alert("Invalid land ID. Please enter a valid land ID.");
    }
}
</script>
      </div>

      <p>* After you <strong>click the Submit button</strong>, a popup box will display your Land ID.</p> 
      <p><strong>Returning back to this page</strong>, click View Your Land Button and enter the ID then <strong>you can check the accuracy of the your land's data in the database.</strong></p>
    
      </form>
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


