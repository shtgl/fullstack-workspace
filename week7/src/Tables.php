<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
		<link rel="stylesheet" type="text/css" href="index.module.css">
	</head>
	<body>
		<div oncontextmenu="return false;">
				<nav>
				<ul>
					<li><a href="Index.html"><i class="fa fa-home"></i>Home</a></li>
					<li><a href="Index.html"><i class="fa fa-sign-out"></i>Log-out</a></li>
					<li><a href="#"><i class="fa fa-address-book"></i>Contact-Us</a></li>
				</ul>
			</nav>
			<p>
				Hi <?php echo $_SESSION['username'];?>
			</p>
			<div class = "image">
			</div>
			<div class="item">
				<div class="card">
				  <img src="../public/resident1.png" style="max-width:47%;">
				    <h5 class="card-title">Residents Details</h5>
				    <a href="resident/Resident.php" class="card2">View</a>
				</div>

				<div class="card">
				  <img src="../public/employee1.png" style="max-width:47%;">
				    <h5 class="card-title">Employee Details</h5>
				    <a href="employee/Employee.php" class="card2">View</a>
				 </div>

				<div class="card">
				  <img src="../public/admin.webp" style="max-width:47%;">
				    <h5 class="card-title">Administrator Details</h5>
				    <a href="administrator/Administrator.php" class="card2">View</a>
				</div>

				<div class="card">
				  <img src="../public/car.png" style="max-width:47%;">
				    <h5 class="card-title">Parking Details</h5>
				    <a href="resident/Resident_procedure.php" class="card2">View</a>
				</div>

				<div class="card">
				  <img src="../public/hall.png" style="max-width:47%;">
				    <h5 class="card-title">Hall Details</h5>
				    <a href="hall/Hall_occupancy.php" class="card2">View</a>
				</div>

				<div class="card">
				  <img src="../public/visitor1.png" style="max-width:47%;" class="card-img-top" alt="...">
				    <h5 class="card-title">Visitor Details</h5>
			    	<a href="visitor/Visitor.php" class="card2">View</a>
				</div>
			</div>
		</div>
	</body>
</html>