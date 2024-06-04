<?php
include("C:/xampp/htdocs/Society/src/login/Connect.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Insert Page</title>
</head>
<body>
<form action="" method="GET">
	Pincode <input type="text" name="pincode" value=""><br></br>
	<input type="submit" name="submit" value="submit">


</form>

<?php
if($_GET['submit']){
	$rn=$_GET['pincode'];
	$query="SELECT * FROM location where loc_pin=$rn";
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
	echo "<font color='green'> Reult found";
	while($result=mysqli_fetch_assoc($data))
	{
		echo "<tr>
				<td>".$result['loc_pin']."</td>
				<td>".$result['loc_city']."</td>
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