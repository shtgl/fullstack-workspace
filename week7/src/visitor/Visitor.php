<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
		<link rel="stylesheet" type="text/css" href="visitor.module.css">
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
			<h1>Visitor</h1>
			<h2>Insert</h2>
			<form action="" method="GET">
				Name <input type="text" name="name" value=""><br></br>
				phone <input type="text" name="phone" value=""><br></br>
				Date of Arrival <br><input type="date" name="date_arrive"><br></br>
				Do you wish to avail parking
				<select class="form-select" name="wish" aria-label="Default select example">
					<option value="1">Yes</option>
					<option value="4">No</option>
				</select>
				Flat Number <input type="text" name="flat_no" value=""><br></br>
				<input type="submit" name="submit" value="submit">
			</form>

			<?php 
				$rn="";
				$nm=$_GET['name'];
				$rn1=$_GET['phone'];
				$dt1=$_GET['date_arrive'];
				$av1=$_GET['wish'];
				$fn1=$_GET['flat_no'];

				if($_GET['submit']){
					if($nm!=""&&$rn1!=""){
						$query="INSERT INTO visitor VALUES('$rn','$nm','$rn1',1,'$fn1')";
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

				if($_GET['submit']){
					if($nm!=""&&$av1!=4 &&$fn1!=""&&$dt1!=""){
						$query="INSERT INTO parking_request (name,type, faltno, date_request) VALUES('$nm','$av1','$fn1','$dt1')";
						$data=mysqli_query($conn,$query);
						if($data){
						echo "Data is inserted";}
						else{
							echo "data is not inserted";
						}
						include("C:/xampp/htdocs/Society/src/login/Connect.php");
						error_reporting(0);
						$query="CALL date_remove()";
						$data=mysqli_query($conn,$query);
						if($data){
							echo "Date remove executed ";}
						else{
							echo "Date remove failed";
						}

						include("C:/xampp/htdocs/Society/src/login/Connect.php");
						error_reporting(0);
						$query="SELECT max(ID) FROM parking_request";
						$data=mysqli_query($conn,$query);
						$total=mysqli_num_rows($data);
						$result=mysqli_fetch_assoc($data);
						$myid=$result['max(ID)'];
						if($myid!=""){
							echo $myid." ";
							$query1="CALL check_parking ('$myid','$fn1','$dt1')";
							$data1=mysqli_query($conn,$query1);
							if($data1){
							echo "Procedure executed";}
							else{
								echo "Failed Procedure";
							}
						}
					}
				else{
					echo "All fields are required";
				}
			}
		?>

    <!-- Displaying the fetched data -->
		<div class="container">
			<h2>Display</h2>
			<?php
				include("C:/xampp/htdocs/Society/src/login/Connect.php");
				error_reporting(0);
				$query="SELECT * FROM visitor";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				if($total>0){
				?>
				<table>
					<tr>
						<th>Visitor_ID</td>
						<th>Name</td>
						<th>Phone.No</td>
					</tr>
				
				<?php
					while($result=mysqli_fetch_assoc($data)) {
						echo "<tr>
								<td>".$result['vis_id']."</td>
								<td>".$result['vis_name']."</td>
								<td>".$result['vis_phone']."</td>
							</tr>";
					}
			}
			else{
				echo "result not found";
			}
		?>

		</table>

		<?php
			include("C:/xampp/htdocs/Society/src/login/Connect.php");
			error_reporting(0);
			$query="SELECT * FROM parking_request";
			$data=mysqli_query($conn,$query);
			$total=mysqli_num_rows($data);
			if($total>0){
				?>
				<table>
					<tr>
						<th>Request ID</td>
						<th>Name</td>
						<th>FlatNo</td>
						<th>Date</td>
						<th>Status</td>
						<th>Alloted</td>
					</tr>
				
				<?php
				while($result=mysqli_fetch_assoc($data)) {
					echo "<tr>
							<td>".$result['ID']."</td>
							<td>".$result['name']."</td>
							<td>".$result['faltno']."</td>
							<td>".$result['date_request']."</td>
							<td>".$result['status']."</td>
							<td>".$result['parking_alloted']."</td>
						</tr>";
				}
			}
			else{
				echo "result not found";
			}
		?>

		</table>

		<?php
			include("C:/xampp/htdocs/Society/src/login/Connect.php");
			error_reporting(0);
			$query="SELECT * FROM visitor_timings";
			$data=mysqli_query($conn,$query);
			$total=mysqli_num_rows($data);
			if($total>0){
		?>
			<table>
				<tr>
					<th>Time ID</td>
					<th>Visitor_ID</td>
					<th>Entry Time</td>
				</tr>
		
			<?php
				while($result=mysqli_fetch_assoc($data)) {
					echo "<tr>
							<td>".$result['time_id']."</td>
							<td>".$result['vis_id']."</td>
							<td>".$result['entry_time']."</td>
						</tr>";
				}
			}
			else{
				echo "result not found";
			}
		?>

		</table>

		</div>
		<div class="container"><a href="Visitor_upd.php">Update</a>
			<a href="Visitor_search.php">Search</a>
		</div>
	</body>
</html>