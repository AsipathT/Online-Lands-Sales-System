<!DOCTYPE html>
<html>
  <head>
    <title>Land Sellind</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <header style="display: block;">
    <h1>PLOTPERFECT</h1><br>
		<h3>Online Land Sale</h3>
	</header>
  
    <nav class="nav">
        <h2>
            Land Sell
        </h2>
        <ul>
        <li><a href="../admin/index.php">Home</a></li>
        <li><a href="ItemCart.php" class="cart">Cart</a></li>
        </ul>
    </nav>
    <div class="main">
      <!--cards -->

      <div class="card">
        <div class="image">
          <img
            src="./image/aa-4.jpg"
            height="150px"
          />
        </div>
        <div class="title">
          <h1>ROSEN BURG-LAND FOR SALE IN NUWARA ELIYA</h1>
        </div>
        <div class="des">
          <p>1 Perch : 5490000.00/=</p><br>
          <form action="./DB/insert.php" method="post">
            <input type="hidden" name="perice" value="54900">
            <input type="hidden" name="landName" value="ROSEN BURG-LAND FOR SALE IN NUWARA ELIYA">
            <input type="hidden" name="imgAddress" value="./image/aa-4.jpg">
            <input type="number" min="1" max="20" name="qty" id="" style="width: 50px;padding: 10px;">
            <input type="submit" value="Add to Cart" name="submit"  style="padding: 10px;">
          </form>
          <br><br>
        </div>
      </div>



      <div class="card">
        <div class="image">
          <img
            src="./image/hh-2.jpg"

            height="150px"
            width="200px"
          />
        </div>
        <div class="title">
          <h1>THE TERANCE-LAND FOR SALE IN KOSGAMA</h1>
        </div>
        <div class="des">
          <p>1 Perch : 1700000.00/=</p><br>
          <form action="./DB/insert.php" method="post">
            <input type="hidden" name="perice" value="170000">
            <input type="hidden" name="landName" value="THE TERANCE-LAND FOR SALE IN KOSGAMA">
            <input type="hidden" name="imgAddress" value="./image/hh-2.jpg">
            <input type="number" min="1" max="20" name="qty" id="" style="width: 50px;padding: 10px;">
            <input type="submit" value="Add to Cart" name="submit" style="padding: 10px;">
          </form>
          <br><br>
        </div>
      </div>


      <div class="card">
        <div class="image">
          <img
            src="./image/ee-3.jpg"

            height="170px"
            width="200px"
          />
        </div>
        <div class="title">
          <h1>MED CITY-LAND FOR SALE IN KARAPITIYA</h1>
        </div>
        <div class="des">
          <p>1 Perch : 100000.00/=</p><br>
          <form action="./DB/insert.php" method="post">
            <input type="hidden" name="perice" value="10000">
            <input type="hidden" name="landName" value="MED CITY-LAND FOR SALE IN KARAPITIYA">
            <input type="hidden" name="imgAddress" value="./image/ee-3.jpg">
            <input type="number" min="1" max="20" name="qty" id="" style="width: 50px;padding: 10px;">
            <input type="submit" value="Add to Cart" name="submit" style="padding: 10px;">
          </form>
          <br><br>
        </div>
      </div>

      <div class="card">
        <div class="image">
          <img
            src="./image/aa-4.jpg"

            height="150px"
            width="200px"
          />
        </div>
        <div class="title">
          <h1>CITY POINT-LAND FOR SALE IN KOCHCHIKADE</h1>
        </div>
        <div class="des">
          <p>1 Perch : 3300000.00/=</p><br>
          <form action="./DB/insert.php" method="post">
            <input type="hidden" name="perice" value="33000">
            <input type="hidden" name="landName" value="MED CITY-LAND FOR SALE IN KARAPITIYA">
            <input type="hidden" name="imgAddress" value="./image/aa-4.jpg">
            <input type="number" min="1" max="20" name="qty" id="" style="width: 50px;padding: 10px;">
            <input type="submit" value="Add to Cart" name="submit" style="padding: 10px;">
          </form>
          <br><br>
        </div>
      </div>
     

      
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
            <li><a href="../admin/index.php" style="color: #f44336;">Home</a></li>
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
