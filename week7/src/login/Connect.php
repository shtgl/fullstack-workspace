<?php
	$servername="127.0.0.1:3306";
	$username="root";
	$password="";
	$dbname="societydata";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if($conn){}
	else{
		die("Connection failed because".mysqli_connect_error());
	}

?>





