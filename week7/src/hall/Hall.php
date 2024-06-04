<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
?>


<!DOCTYPE html>
<html>
	<head>
		<title> Society Management System </title>
		<link rel="stylesheet" type="text/css" href="hall.module.css">
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
				<li><a href="../Index.php"><i class="fa fa-sign-out"></i>Log-out</a></li>
				<li><a href="../Tables.php"><i class="fa fa-address-book"></i>Database</a></li>
			</ul>
		</div>
	</div>

	<div class="container">
		<?php
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
		?>

		<!-- Administrator view of hall details -->
		<h1>Hall</h1>
		<h2>Details</h2>

		<!-- Getting data of ID, name and charges of hall -->
		<form action="" method="GET">
			ID <input type="text" name="unique_id" value=""><br></br>
			Name <input type="text" name="name" value=""><br></br>
			Charges <input type="text" name="hall_charges" value=""><br></br>
			<input type="submit" name="submit" value="submit">
		</form>

		<?php 
			//Accepting hall details from administrator
			$uid=$_GET['unique_id'];
			$nm=$_GET['name'];
			$hc=$_GET['hall_charges'];

			if($_GET['submit']){
				if($uid!=""&&$nm!=""&&$hc!=""){
				$query="INSERT INTO hall VALUES('$uid','$nm','$hc')";
				$data=mysqli_query($conn,$query);
				if($data){
					echo "Data is inserted";
				}
				else{
					echo "data is not inserted";
				}
			}
			else{
				echo "All fields are required";
			}
		}
	?>

		</div> <!-- End of container class -->
	</body>
</html>

<div class="container">
	<h2>Display</h2>
	<?php
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);

		//Declaring global variables query, data and total
		$query="SELECT * FROM hall";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);

		if($total > 0) {
	?>
			<table>
				<tr>
					<th>Hall_id</td>
					<th>Name</td>
					<th>Charges</td>
				</tr>
				
				<?php
					while($result=mysqli_fetch_assoc($data)) {
						echo "<tr>
							<td>".$result['hall_id']."</td>
							<td>".$result['hall_name']."</td>
							<td>".$result['hall_charges']."</td>
						</tr>";
					}
		}
		else{
			echo "result not found";
		}
	?>
	</table>
	
<div class="container">
	<a href="Hall_occupancy.php">Cick here</a>
</div>