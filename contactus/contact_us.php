<?php
include 'connect.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $title = $_POST['title'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // SQL to insert user data into the database
    $sql= "INSERT INTO crud(title,name,email,mobile, subject, message) 
            VALUES ('$title', '$name', '$email', '$mobile', '$subject', '$message')";

    $result = mysqli_query($con, $sql);

    if($result){
        header('location: ./display.php');
    }
    else{
        echo "data not added";
    }

  
}


mysqli_close($con) ;  // Close database connection
?>




<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<link rel="stylesheet" href="styles\styles.css">


</head>

<body>
	
    <script src="script.js"></script>
	

	<!-- horizontal navigation bar -->
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
        <li><a href="">Search Lands</a></li>
        <li><a href="">Sell Your Land</a></li>
        <li><a href="">Admin Login</a></li>
    </div>
</ul>


	
	
	<main>
	    <section id="formC">
            <h2> Contact Us </h2>		
			<form action="" method="POST">
			<div class="form-group">
			    <input type="text" name="title" placeholder="Title-" required> <br><br>
			    <input type="text" name="name" placeholder="Name-" required> <br><br>
				<input type="email" name="email" placeholder="Email-" required> <br><br>
				<input type="text" name="mobile" placeholder="Phone No-"required> <br><br>
				<input type="text" name="subject" placeholder="Subject-"required> <br><br>

			</div>
			
		</section>
	</main>
	
	<div class="n2">
        <fieldset>
			<legend>Message:</legend>
			<textarea name="message" id="Message" placeholder="Message" required rows="8" cols="40"></textarea>
		</fieldset>
	</div>
	<section class="Sbutton">
		<div class="form-group">
			
		
			<input type="submit" value="Submit" id="submit">
			


		</div>
	</section>
</form>
<script>
    document.getElementById("submit").addEventListener("click", function() {
        alert("Registration Successful");
        
    });
</script>



</body>




	
	<!-- footer begins -->
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
            <li><a href="#" style="color: #f44336;">Home</a></li>
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


		
	
	
	
	
	

