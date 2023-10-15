<?php

include 'config.php';

if (isset($_POST['register'])) {
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, ($_POST['email']));
	$pass = mysqli_real_escape_string($conn, $_POST['password']);



	$select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email= '$email' AND password='$pass'") or die('query failed');

	if (mysqli_num_rows($select) > 0) {
		$message1 = 'user alredy exists';
		echo "<script type='text/javascript'>alert('$message1');</script>";
	} else {
		mysqli_query($conn, "INSERT INTO`user_form`(name,email,password) VALUES('$name','$email','$pass')") or die('query failed');

		header('location:login.php');
	}
}


?>











<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINEARICONS -->
	<link rel="stylesheet" href="fonts/linearicons/style.css">
	<link rel="icon" href="fav/amz.ico" type="image/x-icon" title="online shopping site in india:shop<br>
                                                                    online for mobiles,books,watches...<br>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/reg.css">
</head>

<body>


	<?php if (!empty($errors)) : ?>
		<div class="form-errors">
			<?php foreach ($errors as $error) : ?>
				<p><?php echo $error; ?></p>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<div class="wrapper">
		<div class="inner">
			<img src="" alt="" class="image-1">
			<form action="" method="POST">

				<h3> Welcome to MYZONE</h3>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input type="text" class="form-control" placeholder="Username" name="name" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-envelope"></span>
					<input type="email" class="form-control" placeholder="Email" name="email" required>
				</div>
				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input type="password" class="form-control" placeholder="Password" name="password" required>
				</div>

				<button type="submit" name="register" value="register">
					<span>Register</span>
				</button><br>
				<div class="login-text" style="color: black;">I have alredy account <a href="login.php">login</a> </div>
			</form>
			<img src="" alt="" class="image-2">
		</div>

	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>