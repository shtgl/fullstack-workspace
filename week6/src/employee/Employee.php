<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Society Management System</title>
		<link rel="stylesheet" type="text/css" href="employee.module.css">
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

			<h1>Employee</h1>
			<h2>Insert</h2>
			<form action="" method="GET">
				Name <input type="text" name="name" value=""><br></br>
				type <input type="text" name="type" value=""><br></br>
				sal <input type="text" name="sal" value=""><br></br>
				<input type="submit" name="submit" value="submit">
			</form>

			<?php 
				$rn='';
				$nm=$_GET['name'];
				$rn1=$_GET['type'];
				$rn11=$_GET['sal'];

				if($_GET['submit']){
					if($nm!=""&&$rn1!=""){		
						$query="INSERT INTO employee(emp_name,emp_type,emp_salary) VALUES('$nm','$rn1','$rn11')";
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
		$query="SELECT * FROM employee";
		$data=mysqli_query($conn,$query);
		$total=mysqli_num_rows($data);
		
		if($total>0){
	?>
		<table>
			<tr>
				<th>Employee_ID</td>
				<th>Name</td>
				<th>Type</td>
				<th>Sal</td>
				<th>Soc.ID</td>
			</tr>
	<?php
			while($result=mysqli_fetch_assoc($data)) {
				echo "<tr>
						<td>".$result['emp_id']."</td>
						<td>".$result['emp_name']."</td>
						<td>".$result['emp_type']."</td>
						<td>".$result['emp_salary']."</td>
						<td>".$result['soc_id']."</td>			
					</tr>";
			}
		}
		else{
			echo "result not found";
		}
	?>
	</table>


<h2>Display Employee Entry Data</h2>
<?php
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting(0);
	$query="SELECT * FROM employee_timings";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total>0){
	?>
		<table>
			<tr>
				<th>Time ID</td>
				<th>Employee_ID</td>
				<th>Entry Time</td>
			</tr>
	<?php
		while($result=mysqli_fetch_assoc($data)) {
			echo "<tr>
					<td>".$result['time_id']."</td>
					<td>".$result['emp_id']."</td>
					<td>".$result['entry_time']."</td>	
				</tr>";
		}
	}
	else{
		echo "result not found";
	}

	?>
		</table>


<div class="container"><a href="Employee_upd.php">Update</a>
	<a href="Employee_del.php">Delete</a>
	<a href="Employee_search.php">Search</a>
</div>