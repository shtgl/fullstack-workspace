<?php
	session_start();

	include("C:/xampp/htdocs/Society/src/login/Connect.php");
	error_reporting();

	$name=$_POST['user'];
	$pass=$_POST['password'];

	$query="select * from signin where name ='$name' && password='$pass'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);

	if ($num) {
		$_SESSION['username']=$name;
		header('location:../Tables.php');
	}
	else {
		header('location:Login.php');
	}
?>