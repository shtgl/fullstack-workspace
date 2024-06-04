<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting(0);
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
					<li><a href="../Index.html"><i class="fa fa-sign-out"></i>Log-out</a></li>
					<li><a href="../Tables.php"><i class="fa fa-address-book"></i>Database</a></li>
				</ul>
			</div>
		</div>

		<div class="container">
		<h2>Information search by Visitor ID</h2>
		<form action="" method="GET">
				Visitor ID<input type="text" name="id" value=""><br></br>
				<input type="submit" name="submit" value="submit">
		</form>

		<?php
			if($_GET['submit']){
				$rn45=$_GET['id'];
				$query="SELECT * FROM visitor where vis_id=$rn45";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				if($total>0){
		?>
					<table>
						<tr>
							<th>Visitor_ID</td>
							<th>Name</td>
							<th>Phone.No</td>
							<th>Soc.ID</td>
						</tr>
					<?php
					echo "<font color='green'> Reult found";
					while($result=mysqli_fetch_assoc($data)) {
						echo "<tr>
								<td>".$result['vis_id']."</td>
								<td>".$result['vis_name']."</td>
								<td>".$result['vis_phone']."</td>
								<td>".$result['soc_id']."</td>
							</tr>";
					}	
				}	
			else{
				echo "<font color='red'>result not found";
			}
		}
		else{
			echo "<font color='blue'>click on search button";
		}
		?>

		</table>
		</div>
	</body>
</html>