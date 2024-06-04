<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
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

			<!-- Administrator view of hall details -->
			<h1>Hall</h1>
			<h2>Reserve</h2>

			<form action="" method="GET"> SELECT HALL 
		    <select class="form-select" name="unique_id" aria-label="Default select example">
			    <option value="1">Yoga</option>
			    <option value="2">Zumba</option>
			    <option value="3">Party</option>
			    <option value="4">Entertainment</option>
			    <option value="5">Amphitheatre</option>
		    </select>
				Booking Date </br><input type="date" name="dateFrom" value=""><br/>
		    FLat Number</br><input type="text" name="flat_no" value=""><br/>
				<input type="submit" name="submit" value="submit">
			</form>
		
			<?php 
			//Accepting hall details from administrator
				$uid=$_GET['unique_id'];
				$df=$_GET['dateFrom'];
				$fn=$_GET['flat_no'];


				if($_GET['submit']){
					if($uid!=""&&$df!=""){
						$query="INSERT INTO hall_occupancy(f_hall_id,date_from,Flat_Number) VALUES('$uid','$df','$fn')";
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

				include("C:/xampp/htdocs/Society/src/login/Connect.php");
				error_reporting(0);
				$query="SELECT max(Request_ID) FROM hall_occupancy";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				$result=mysqli_fetch_assoc($data);
				$myid=$result['max(Request_ID)'];

		    $query="SELECT res_type FROM resident where res_flatno='$fn'";
				$data=mysqli_query($conn,$query);
				$total=mysqli_num_rows($data);
				$result=mysqli_fetch_assoc($data);
				$myid2=$result['res_type'];
				
				if($myid!=""){
					echo $myid." ";
					$query1="CALL check_hall ('$myid','$uid','$df','$fn','$myid2')";
					$data1=mysqli_query($conn,$query1);
					if($data1){
					echo "Procedure executed";}
					else{
						echo "Failed Procedure";
					}
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
		$query="SELECT * FROM hall_occupancy";
		$data = mysqli_query($conn,$query);
		$total = mysqli_num_rows($data);

		if($total > 0) {
	?>
	<table>
		<tr>
    	<th>Request ID</td>
			<th>Hall_id</td>
			<th>Date Requested</td>
	    <th>Status</td>
      <th>Flat Number</td>
	</tr>
	
	<?php
		while($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
                <td>".$result['Request_ID']."</td>

				<td>".$result['f_hall_id']."</td>
				<td>".$result['date_from']."</td>
				<td>".$result['Status']."</td>
                <td>".$result['Flat_Number']."</td>
				</tr>";
		}
	}
	else{
		echo "result not found";
	}
	?>
</table>