<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting(0);
	$_GET['rn'];
	$_GET['n'];
?>



<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
		<link rel="stylesheet" type="text/css" href="resident.module.css">
			<!-- CSS only -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- JS, Popper.js, and jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="top-nav-bar">
			<img src="../../public/logo.png" class="logo">
			<div class="menu-bar">
				<ul>
					<li><a href="../Index.html"><i class="fa fa-home"></i>Home</a></li>
					<li><a href="../Index.html"><i class="fa fa-sign-out"></i>Log-out</a></li>
					<li><a href="../Tables.php"><i class="fa fa-address-book"></i>Database</a></li>
				</ul>
			</div>
		</div>

		<div class="container">
			<h2>Procedure</h2>
			<h3>If you want more parking just give your Flat.No</h3>
			<form action="" method="GET">
				Flat no<input type="text" name="flatno" value="<?php echo $_GET['rn'];?>"><br></br>
				<input type="submit" name="submit" value="submit">
			</form>
			<?php 
			if($_GET['submit']){
				$rn1=$_GET['flatno'];
				$ans_proc=0;
				$query="call newparking('$rn1')";
				$data=mysqli_query($conn,$query);
				
				if($data){
					echo "<font color='green'>Record Updated successfully <a href='Resident.php'>Check updated list here</a>";
				}
				else{
					echo "<font color='red'>Record NOT updated!!";
				}	
			}
			else{
				echo "<font color='blue'>Click on submit button to save changes";
			}
			?>
		</div>
	</body>
</html>