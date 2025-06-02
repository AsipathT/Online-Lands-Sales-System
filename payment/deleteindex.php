<!DOCTYPE html>
<html>
<head>
	<script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="style/card.css">
</head>
<body>
    <?php
      require 'config.php';
    ?>
	<div class="container">
		<div class="left">
			<p>Payment methods</p>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<div class="methods">
				<div onclick="doFun()" id="tColorA" style="color: greenyellow;"><i class="fa-solid fa-credit-card" style="color: greenyellow;"></i> Payment by card</div>
				<div onclick="doFunA()" id="tColorB"><i class="fa-solid fa-building-columns"></i> Internet banks</div>
				<div onclick="doFunB()" id="tColorC"><i class="fa-solid fa-wallet"></i> Apple/Google pay</div>
			</div>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
		</div>
		<div class="center">
			<a href="https://www.shift4shop.com/credit-card-logos.html"><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto"/></a>
			<hr style="border:1px solid #ccc; margin: 0 15px;">

			<div class="card-details">
			<fieldset>
			
			<legend>Payment</legend>
			
				<form method="post" action="delete.php">
					<p>Card number</p>
					<div class="c-number" id="c-number">
						<input type ="text" name="number" class="cc-number" placeholder="Card_number" maxlength="19" required>
						<i class="fa-solid fa-credit-card" style="margin: 0;"></i>
					</div>

					
					
					<input type="submit" value="Delete"> <input type="reset">
				</form>
				</fieldset>
			</div>
		</div>


		<div class="right">
			<p>Order information</p>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<div class="details">
				<div style="font-weight: bold; padding: 3px 0;">Order discription</div>
				<div style="padding: 3px 0;">Test payment</div>
			</div>
			<hr style="border:1px solid #ccc; margin: 0 15px;">
			<a href="https://www.shift4shop.com/credit-card-logos.html"><img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" height="auto" /></a>
		</div>
		
	</div>

	<script src="js/card.js"></script>
</body>
</html>