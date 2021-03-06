<?php include('server.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Login and Sign Up System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<!-- for showing errors whlie signing up -->
		<?php include('errors.php'); ?>

		<!-- for taking parameters from users -->
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Do not have an account? <a href="register.php">Sign up</a>
		</p>
	</form>	
</body>
</html>