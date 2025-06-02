<?php
include 'connect.php'; //database connection
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid']; // Corrected variable name

    $sql="UPDATE FROM crud WHERE message='$id'"; // Corrected SQL query
    $result=mysqli_query($con, $sql);
    if($result){
        header('location: contact_us.php');
    } else {
        echo "NOT Updated";
        
        
    }
}


?>


<form action="" method="POST">

			
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