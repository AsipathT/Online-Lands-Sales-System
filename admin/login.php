<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 

	// check for form submission
	if (isset($_POST['submit'])) {

		$errors = array();

		// check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}

		// check if there are any errors in the form
		if (empty($errors)) {
			// save username and password into variables
			$email 		= mysqli_real_escape_string($connection, $_POST['email']);
			$password 	= mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);

			// prepare database query
			$query = "SELECT * FROM user 
						WHERE email = '{$email}' 
						AND password = '{$hashed_password}' 
						LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			verify_query($result_set);

			if (mysqli_num_rows($result_set) == 1) {
				// valid user found
				$user = mysqli_fetch_assoc($result_set);
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['first_name'] = $user['first_name'];
				// updating last login
				$query = "UPDATE user SET last_login = NOW() ";
				$query .= "WHERE id = {$_SESSION['user_id']} LIMIT 1";

				$result_set = mysqli_query($connection, $query);

				verify_query($result_set);

				// redirect to users.php
				header('Location: users.php');
			} else {
				// user name and password invalid
				$errors[] = 'Invalid Username / Password';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In - User Management System</title>
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
	<header style="display: block;">
  		<h1>PLOTPERFECT</h1><br>
		<h3>Online Land Sale </h3>
	</header>

	<ul class="nav" style="display: flex; justify-content: space-between;">
    <div style="display: flex;">
        <li><a href="index.php">Home</a></li>
        <li><a href="#news">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </div>
    <div style="display: flex;">
		<li><a href="../payment/index.php">Payment</a></li>
        <li><a href="../Buyer/cart.php">Search Lands</a></li>
        <li><a href="../seller/Sindex.php">Sell Your Land</a></li>
        <li><a href="login.php">Admin Login</a></li>
    </div>
</ul>


    <div class="content">

            <div class="image">
                <img src="https://i.pinimg.com/564x/0a/b4/ad/0ab4ad5e9cf2b7b193df004d2596bf53.jpg" alt="Image" class="image">
            </div>

	    <div class="login">

		    <form action="login.php" method="post">
			
			    <fieldset>
				    <legend><h1>Log In</h1></legend> 

				    <?php 
					    if (isset($errors) && !empty($errors)) {
						    echo '<p class="error">Invalid Username / Password</p>';
					    }
				    ?>

				    <?php 
					    if (isset($_GET['logout'])) {
						    echo '<p class="info">You have successfully logged out from the system</p>';
					    }
				    ?>
					<div class="fields">
				    	<p>
							<label for="">Username:</label>
					    	<input type="text" name="email" id="" placeholder="Email Address">
				    	</p>

				    	<p>
					    	<label for="">Password:</label>
					    	<input type="password" name="password" id="" placeholder="Password">
				    	</p>

					</div>

				    <p>
					    <button type="submit" name="submit" class="logsubmit">Log In</button>
				    </p>

			    </fieldset>

		    </form>		

	    </div> <!-- .login -->
    </div>
	<br><br><br>
	

	<!-- footer -->
	<footer style="border-top : 1px solid black">
      <div class="f-row" >
        <div class="f-col">
          <h3>Quick - Contact</h3>
          <p>Hettiwaththa</p>
          <p>Denipitiya , Weligama</p>
          <p>Mathara , 81700 , Sri Lanka</p>
          <p class="email-id">Mail - Plotperfect@gmail.com</p>
          <h4>076-1234567</h4>
        </div>
        <div class="f-col">
          <h3>Quick Links</h3>
          <ul style="display:flex;flex-direction: column ; color: #f44336;">
            <li><a href="index.php" style="color: #f44336;">Home</a></li>
            <li><a href="#" style="color: #f44336;">About Us</a></li>
            <li><a href="#" style="color: #f44336;">Contact Us</a></li>
          </ul>
          <br>
        </div>
        <div class="f-col">
          <h3>Subscribe Now</h3>
          <form action="">
            <i class="fa-regular fa-envelope"></i>
            <input type="email" name="sub-email" id="" placeholder="  abc@gmail.com" style="background-color: transparent;border: none;color: #fff;outline: none;">
            <button type="submit" style="background-color: transparent;border: none;color: #fff;cursor: pointer;"><i class="fa-solid fa-arrow-right" class="form-btn"></i></button>
          </form>
        </div>
      </div>
    </footer>
</body>
</html>
<?php mysqli_close($connection); ?>