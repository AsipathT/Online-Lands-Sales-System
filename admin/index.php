<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In - User Management System</title>
	<link rel="stylesheet" href="css/main.css">
  <script>
    let slideIndex = 1;
  showSlides(slideIndex);


  function plusSlides(n) {
  showSlides(slideIndex += n);
}


function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>

</head>
<body>
	<header style="display: block;">
    <h1>PLOTPERFECT</h1><br>
		<h3>Online Land Sale</h3>
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

    <div class="hero">
        <h1 style="text-align: center;">Welcome to PLOTPERFECT Online Land Sale</h1>
    </div>

    <!-- Slideshow container -->
<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://i.pinimg.com/564x/4d/8b/56/4d8b56f0fd9cb365104b6e60c97cde47.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://i.pinimg.com/564x/cc/77/01/cc7701c07494f96a9241a23f252f70fa.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://i.pinimg.com/564x/15/b8/72/15b872cf724e548c5e6953f26a385c93.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
<br>
<div>
  <h2 style="text-align: center;"> Discover your Dream lands</h2>
</div>

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
</body>
</html>
<?php mysqli_close($connection); ?>