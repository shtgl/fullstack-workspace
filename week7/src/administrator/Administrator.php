<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
		<link rel="stylesheet" type="text/css" href="administrator.module.css">
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
			<img src = "..\..\public\logo.png" class="logo">
			<div class="menu-bar">
				<ul>
					<li><a href="../Index.html"><i class="fa fa-home"></i>Home</a></li>
					<li><a href="../Index.html"><i class="fa fa-sign-out"></i>Log-out</a></li>
					<li><a href="../Tables.php"><i class="fa fa-address-book"></i>Database</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<?php
				include("C:/xampp/htdocs/Society/src/login/Connect.php");
				error_reporting(0);
			?>
			<h1>Administrator</h1>
		</div>
	</body>
</html>


<div class="container">
	<style>
		
	</style>

	<?php
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
	?>
	<form action="" method="GET">
		<h2>Mark Maintenance</h2>
		<input type="submit" name="submit" value="Mark Maintenance">
		<br><br><br>
	</form>


	<?php 
		if($_GET['submit']){
			$query="CALL mark_maintenance_all()";
			$data=mysqli_query($conn,$query);
			if($data){
			echo "EXECUTED";}
			else{
				echo "NOT EXECUTED";
			}
		}
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
	?>

	<form action="" method="GET">
		<h5>Mark Employee Monthly Salary</h5>
		<input type="submit" name="submit1" value="Mark Salary">
		<br>
		<h5>Mark Employee Bonus</h5>
		<input type="submit" name="submit2" value="Mark Bonus">
		<br>
	</form>


	<?php 
		if($_GET['submit1']){
			$query="CALL mark_salary()";
			$data=mysqli_query($conn,$query);
			if($data){
			echo "EXECUTED";}
			else{
				echo "NOT EXECUTED";
			}
		}
	?>
	
	<?php 
		if($_GET['submit2']){
				$query="CALL mark_bonus()";
				$data=mysqli_query($conn,$query);
				if($data){
				echo "EXECUTED";}
				else{
					echo "NOT EXECUTED";
				}
		}
	?>


	<h2>Mark Expenses</h2>
	<form action="" method="GET">
		Electricity </br><input type="text" name="elec" value=""><br/>
	  Water</br><input type="text" name="water" value=""><br/>
		Legal</br><input type="text" name="leg" value=""><br/>
		Miscellaneous</br><input type="text" name="misc" value=""><br/>
		<br>
		<input type="submit" name="submit2" value="submit expenses">
		<br><br>
	</form>

	<?php 
	//Accepting hall details from administrator
		$elec=$_GET['elec'];
		$wat=$_GET['water'];
		$leg=$_GET['leg'];
		$misc=$_GET['misc'];

		if($_GET['submit2']){
			if($elec!=""&&$wat!=""&&$leg!=""&&$misc!=""){
				$query="INSERT INTO expenses(Electricity,Water,Legal,Miscellaneous) VALUES('$elec','$wat','$leg','$misc')";
				$data=mysqli_query($conn,$query);
				if($data) {
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

	<br><br>
	<?php
		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
		$query="SELECT SUM(Electricity+Water+Legal+Miscellaneous) as TOTAL_EXPENSE FROM expenses";
		$data1=mysqli_query($conn,$query);
		echo $total;
		if(1){
	?>

		<table>
			<tr>
				<th>TOTAL EXPENSES</td>			
			</tr>
		
		<?php
			while($result=mysqli_fetch_assoc($data1)) {
				echo "<tr> <td>".$result['TOTAL_EXPENSE']."</td> </tr>";
			}
		}
		else{
			echo "result not found";
		}

		include("C:/xampp/htdocs/Society/src/login/Connect.php");
		error_reporting(0);
		$query="SELECT SUM(Maintenance + Visitor_Parking+Hall_Booking+Extra_Parking) as TOTAL_INCOME FROM charges ";
		$data=mysqli_query($conn,$query);
	 
		if(1){
		?>
			<table>
				<tr>
					<th>TOTAL_INCOME</td>
				</tr>
		
		<?php
			while($result1=mysqli_fetch_assoc($data)) {
				echo "<tr>
					<td>".$result1['TOTAL_INCOME']."</td>
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
		$query="SELECT SUM(amount) as TOTAL_EMPLOYEE_EXPENSE FROM employee_expense ";
		$data=mysqli_query($conn,$query);
		if(1){
	?>
	<table>
		<tr>
			<th>TOTAL_EMPLOYEE_EXPENSE</td>
		</tr>
	
	<?php
			while($result1=mysqli_fetch_assoc($data)) {
				echo "<tr>
						<td>".$result1['TOTAL_EMPLOYEE_EXPENSE']."</td>
					</tr>";
			}
		}
		else{
			echo "result not found";
		}
	?>
</table>
