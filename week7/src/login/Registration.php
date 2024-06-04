<?php
	session_start();
	header('location:Login.php');
	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();

	$name=$_POST['user'];
	$pass=$_POST['password'];

	$query="select * from signin where name ='$name' && password='$pass'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);

	if ($num) {
		echo "Duplicate Data";
	}
	else {
		$qy="insert into signin(name,password) values ('$name','$pass')";
		mysqli_query($conn,$qy);
	}
?>