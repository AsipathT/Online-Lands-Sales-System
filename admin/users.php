<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 
	
	if (!isset($_SESSION['user_id'])) {
		header('Location: login.php');
	}

    $user_list = '';

    
    $query = "SELECT * FROM user WHERE is_deleted=0 ORDER BY first_name";
    $users = mysqli_query($connection, $query);

    verify_query($users);

    while ($user = mysqli_fetch_assoc($users)) {
            $user_list .= "<tr>";
            $user_list .= "<td>{$user['first_name']}</td>";
            $user_list .= "<td>{$user['last_name']}</td>";
            $user_list .= "<td>{$user['last_login']}</td>";
            $user_list .= "<td><button class='btn-edit' onclick=\"window.location.href='modify-user.php?user_id={$user['id']}';\">Update</button></td>";
            $user_list .= "<td><button class='btn-delete' onclick='showConfirmation({$user['id']})'>Delete</button></td>";
            $user_list .= "<tr>";
        }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="css/users.css">

  <script>
    function confirmLogout() {
        var confirmation = confirm("Are you sure you want to logout?");
        if (confirmation) {
            window.location.href = "logout.php";
        }
      }
  </script>
</head>

<body>
	<header>
		<div class="appname"> User Management System </div>
		<div class="loggedin"> Welcome <?php echo $_SESSION['first_name']; ?> ! <button onclick="confirmLogout()" class="logoutbutton">Logout</button>
	</header>

    <main>
	    <h1> Users <span><a href="add-user.php"> +Add New </a></span></h1>

        <table class="masterlist">
            <tr>
                <th> First Name </th>
                <th> Last Name </th>
                <th> Last login </th>
                <th> Update </th></button>
                <th> Delete </th>
            </tr>
            <?php echo $user_list; ?>

        </table>
    </main>

    <!-- Delete confirm Table html -->
<div id="confirmationModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
            <h2>Confirm Deletion</h2>
            <p>Are you sure you want to delete this user?</p>
        <div class="modal-buttons">
            <button id="confirmDelete">Delete</button>
            <button id="cancelDelete">Cancel</button>
        </div>
    </div>
</div>
    
</html>

<script>
var modal = document.getElementById("confirmationModal");
var confirmBtn = document.getElementById("confirmDelete");
var cancelBtn = document.getElementById("cancelDelete");
var span = document.getElementsByClassName("close")[0];

function showConfirmation(userId) {
  modal.style.display = "block";
  confirmBtn.onclick = function() {
    window.location.href = `delete-user.php?user_id=${userId}`;
    modal.style.display = "none";
  }
  cancelBtn.onclick = function() {
    modal.style.display = "none";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
</script>
