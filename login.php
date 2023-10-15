<?php

include 'config.php';
session_start();

if (isset($_POST['register'])) {

	$email = mysqli_real_escape_string($conn, ($_POST['email']));
	$pass = mysqli_real_escape_string($conn, $_POST['password']);

	$select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email= '$email' AND password='$pass'") or die('query failed');

	if (mysqli_num_rows($select) > 0) {
		$row = mysqli_fetch_assoc($select);
		$_SESSION['users_id'] = $row['id'];
		header('location:home.php');
	} else {
		$me = 'email and password incorrect';
		echo "<script type='text/javascript'>alert('$me');</script>";
	}
}


?>









<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="fonts/linearicons/style.css">
	<link rel="icon" href="fav/amz.ico" type="image/x-icon" title="online shopping site in india:shop<br>
                                                                    online for mobiles,books,watches...<br>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	if (isset($message)) {
		foreach ($message as $message) {
			echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
		}
	}


	?>
	<div class="wrapper">
		<div class="inner">
			<img src="" alt="" class="image-1">
			<form action="" method="POST">
				<h3>Login Here</h3>

				<div class="form-holder">
					<span class="lnr lnr-envelope"></span>
					<input type="text" class="form-control" placeholder="Email" name="email" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input type="password" class="form-control" placeholder="Password" name="password" required>
				</div>
				<button type="submit" name="register" value="register">
					<span>Login</span>
				</button><br>
				<div style="color:black;"> Do not have account <a href="register.php">Register</a></div>
			</form>
			<img src="i" alt="" class="image-2">
		</div>

	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>