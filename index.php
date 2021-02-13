<?php include('server.php'); 
	
	// for controlling user have an account or not. if user is not logged in, they cannot access home page
	if (empty($_SESSION['username'])) {
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Sign Up System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- style of table -->
	<style type="text/css">
		table {
			border: 2px solid red;
			background-color: white;
			color: black;
			margin-left: auto;
			margin-right: auto;
		}
		th {
			border-bottom: 5px solid #000: 
		}
		td {
			border-bottom: 2px solid #666;
		}
	</style>
</head>

<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	
	<form>
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
		<?php endif ?>	

	<h2>Existing Users</h2>
	</div>
	
	<!-- for showing existing users -->
	<?php 
	// query for showing existing users in database
	$sqlget = "SELECT * FROM users";
	$data = mysqli_query($db, $sqlget);

	echo "<table>";
	echo "<tr><th>Username</th><th>Email</th></tr>";

	while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
		echo "<tr><td>";
		echo $row['username'];
		echo "</td><td>";
		echo $row['email'];
		echo "</td><tr>";
	}

	echo "</table>";
	 ?>

	</form>
</body>
</html>