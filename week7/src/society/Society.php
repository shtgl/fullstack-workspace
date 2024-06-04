<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
		<link rel="stylesheet" type="text/css" href="society.module.css">
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
		<h1>Society</h1>
		<h2>Insert</h2>
		<?php
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
		?>

		<form action="" method="GET">
			Pincode <input type="text" name="pincode" value=""><br></br>
			City <input type="text" name="city" value=""><br></br>
			<input type="submit" name="submit" value="submit">
		</form>
		<?php 
			$rn=$_GET['pincode'];
			$nm=$_GET['city'];

			if($_GET['submit']){
				if($rn!=""&&$nm!=""){
					echo $rn;
					echo "-";
					echo $nm;
					echo " ";
					$query="INSERT INTO location VALUES('$rn','$nm','Maharashtra')";
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

		<!--Display-->
		<div class="container">
			<h2>Display</h2>
			<div class="container">
				<?php
					include("C:/xampp/htdocs/Society/src/login/Connect.php");
					error_reporting(0);
					$query="SELECT * FROM location";
					$data=mysqli_query($conn,$query);
					$total=mysqli_num_rows($data);
					if($total>0){
				?>
					<table>
						<tr>
							<th>Pincode</td>
							<th>City</td>
						</tr>
					<?php
						while($result=mysqli_fetch_assoc($data)) {
							echo "<tr>
									<td>".$result['loc_pin']."</td>
									<td>".$result['loc_city']."</td>
								</tr>";
						}
					}
					else{
						echo "result not found";
					}
				?>
		</div>
		</table>

		<!--CRUD operations-->
		<div class="container">
			<a href="Society_upd.php">Update</a>
			<a href="Society_del.php">Delete</a>
			<a href="Society_search.php">Search</a>
		</div>
		
		<div class="container">
			<form action="" method="GET">
				Name <input type="text" name="name" value=""><br></br>
				pincode <input type="text" name="pincode" value=""><br></br>
				avail_parking <input type="text" name="avail_parking" value=""><br></br>
				<input type="submit" name="submit" value="submit">
			</form>


			<?php 
				$rn='';
				$nm=$_GET['name'];
				$rn1=$_GET['pincode'];
				$nm1=$_GET['avail_parking'];
				if($_GET['submit']){
					if($nm!=""&&$rn1!=""&&$nm1!=""){
						echo $nm." ";
						$query="INSERT INTO society(soc_name,soc_pin,avail_parking) VALUES('$nm','$rn1','$nm1')";
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
		
		<?php
			include("C:/xampp/htdocs/Society/src/login/Connect.php");
			error_reporting(0);
			$query="SELECT * FROM society";
			$data=mysqli_query($conn,$query);
			$total=mysqli_num_rows($data);
			if($total>0){
		?>
				<table>
					<tr>
						<th>Society_ID</td>
						<th>Name</td>
						<th>Pincode</td>
						<th>Available_parking</td>
					</tr>
				
				<?php
					while($result=mysqli_fetch_assoc($data)) {
						echo "<tr>
								<td>".$result['soc_id']."</td>
								<td>".$result['soc_name']."</td>
								<td>".$result['soc_pin']."</td>
								<td>".$result['avail_parking']."</td>
							</tr>";
					}
			}
			else{
				echo "result not found";
			}
		?>
		</table>
	</body>
</html>