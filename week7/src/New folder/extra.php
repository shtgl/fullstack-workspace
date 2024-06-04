<div class="container">
<h2>Update</h2>
<form action="" method="GET">
	Pincode <input type="text" name="pincode" value="<?php echo $_GET['rn'];?>"><br></br>
	City <input type="text" name="city" value="<?php echo $_GET['n'];?>"><br></br>
	<input type="submit" name="submit" value="submit">


</form>

<?php 

if($_GET['submit']){
	$rn1=$_GET['pincode'];
	$nm1=$_GET['city'];

	$query="UPDATE location SET loc_city='$nm1' where loc_pin='$rn1'";
	$data=mysqli_query($conn,$query);
	if($data){
		echo "<font color='green'>Record Updated successfully <a href='display.php'>Check updated list here</a>";}
		else{
			echo "<font color='red'>Record NOT updated!!";
		}

		
	}
	else{
		echo "<font color='blue'>Click on update button to save changes";
	}


?>



</div>

<!--Delete-->
<?php
include("C:/xampp/htdocs/Society/src/login/Connect.php");
error_reporting(0);
?>
<div class="container">
<h2>Delete</h2>

<form action="" method="GET">
	Pincode <input type="text" name="pincode" value="<?php echo $_GET['rn'];?>"><br></br>
	City <input type="text" name="city" value="<?php echo $_GET['n'];?>"><br></br>
	<input type="submit" name="submit" value="DELETE">


</form>

<?php 

if($_GET['submit']){
	$rn1=$_GET['pincode'];
	$nm1=$_GET['city'];

	$query="DELETE FROM location where loc_pin='$rn1'";
	$data=mysqli_query($conn,$query);
	if($data){
		echo "<font color='green'>Record deleted successfully <a href='display.php'>Check updated list here</a>";}
		else{
			echo "<font color='red'>Record NOT deleted!!";
		}

		
	}
	else{
		echo "<font color='blue'>Click on update button to save changes";
	}


?>	


</div>
<!--Search -->