<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
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
					<li><a href="../login/Login.php"><i class="fa fa-sign-out"></i>Log-out</a></li>
					<li><a href="../Tables.php"><i class="fa fa-address-book"></i>Database</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<?php
				include("C:/xampp/htdocs/Society/src/login/Connect.php");
				error_reporting(0);
			?>

			<h1>Resident</h1>
			<h2>Insert</h2>
			<form action="" method="GET">
				Name <input type="text" name="name" value=""><br></br>
				type <input type="text" name="type" value=""><br></br>
				flat_no <input type="text" name="flat_no" value=""><br></br>
				soc_id <input type="text" name="soc_id" value=""><br></br>
				<input type="submit" name="submit" value="submit">
			</form>

			<?php 
				$rn='';
				$nm=$_GET['name'];
				$rn1=$_GET['type'];
				$rn11=$_GET['flat_no'];
				$nm1=$_GET['soc_id'];


				if($_GET['submit']){
					if($nm!=""&&$rn1!=""&&$nm1!=""){		
						$query="INSERT INTO resident(res_name,res_type,res_flatno,soc_id) VALUES('$nm','$rn1','$rn11','$nm1')";
						$data=mysqli_query($conn,$query);
						if($data){
							echo "Data is inserted";}
						else{
							echo "data is not inserted";
						}
					}
					else{
						echo "All fields are required";
					}
				}
			?>
		</div>
	</body>
</html>


<div class="container">
	<h2>Display</h2>
	<?php
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
		$query="SELECT * FROM resident";
		$data=mysqli_query($conn,$query);
		$total=mysqli_num_rows($data);
		if($total>0){
		?>
			<table>
				<tr>
					<th>Resident_ID</td>
					<th>Name</td>
					<th>Type</td>
					<th>Flat.No</td>
					<th>Soc.ID</td>
				</tr>
			
			<?php
				while($result=mysqli_fetch_assoc($data)) {
					echo "<tr>
							<td>".$result['res_id']."</td>
							<td>".$result['res_name']."</td>
							<td>".$result['res_type']."</td>
							<td>".$result['res_flatno']."</td>
							<td>".$result['soc_id']."</td>
						</tr>";
				}
		}
		else{
			echo "result not found";
		}
	?>
			</table>


	<h2>Parking Information</h2>

	<?php
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
		$query="SELECT * FROM parking";
		$data=mysqli_query($conn,$query);
		$total=mysqli_num_rows($data);
		if($total>0){
		?>
			<table>
				<tr>
					<th>Parking ID</td>
					<th>Soc.ID</td>
					<th>Resident Flat.No</td>
					<th>Parking.No</td>
				</tr>
			
			<?php
			while($result=mysqli_fetch_assoc($data)) {
				echo "<tr>
						<td>".$result['parking_id']."</td>
						<td>".$result['soc_id']."</td>
						<td>".$result['res_flatno']."</td>
						<td>".$result['parking_no']."</td>
						
					</tr>";
			}
		}
		else{
			echo "result not found";
		}
		?>
			</table>

<div class="container">
	<a href="Resident_upd.php">Update</a>
	<a href="Resident_del.php">Delete</a>
	<a href="Resident_search.php">Search</a>
	<a href="Resident_procedure.php">ADD PARKING</a>
</div>