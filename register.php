<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Sign Up System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Sign Up</h2>
	</div>
	<form method="post" action="register.php">
		<!-- for showing errors whlie signing up -->
		<?php include('errors.php'); ?>
		
		<!-- for taking parameters from users -->
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already have an account? <a href="login.php">Login</a>
		</p>

	</form>	
</body>
</html>