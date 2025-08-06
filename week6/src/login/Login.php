<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
		<link rel="stylesheet" href="login.module.css">

	</head>
	<body>
		<div oncontextmenu="return false;">
			<nav>
			<ul> 
				<li><a href="../Index.html">Home</a></li>
				<li><a href="../login/Login.php">Login</a></li>
			</ul>
			</nav>
			<div class = "image">
			</div>
					<form class='class1' action="Validation.php" method="post">
					 <p>
					 <label>Login</label><br>
							<label>Username</label>
							<input type="text" name="user"><br>
							<label>Password</label>
							<input type="password" name="password"><br>
						<button class = 'pushable' type="submit"><span class = "front">
      		Log in
  		</span></button>
					</p>
					</form><br>
				
					<form class='class1' action="Registration.php" method="post">
							<p>
					 <label>Sign Up</label><br>
							<label>Username</label>
							<input type="text" name="user"><br>
							<label>Password</label>
							<input type="password" name="password"><br>
						<button class = 'pushable' type="submit"><span class = "front">
      		Sign up
  		</span></button></p>
					</form>

	</div>
	</body>
</html>