<?php
include("database.php");
error_reporting(0);
$_GET['rn'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
    <h2>Update</h2>
<form action="" method="GET">
    ISBN <input type="number" name="isbn" value="<?php echo $_GET['rn'];?>"><br></br>
    <input type="submit" name="submit" value="UPDATE">


</form>

<?php 

    if($_GET['submit']){
        $rn1=$_GET['empid'];


        $query="DELETE FROM user_reg where empid='$rn1'";
        $data=mysqli_query($mysqli,$query);
        if($data){
            echo "<font color='green'>Record deleted successfully";}
        }
        else{
            echo "<font color='blue'>Click on update button to save changes";
        }


    ?>

</body>
</html>

<?php
include("database.php");
error_reporting(0);
$query="SELECT * FROM user_reg";
$data=mysqli_query($mysqli,$query);
$total=mysqli_num_rows($data);




if($total>0){

    ?>
    <table>
        <tr>
            <th>Employee id</td>
            <th>Employee name</td>
            <th>Department name</td>
            <th>Phone number</td>
            <th>Date of joining</td>    
        </tr>
    
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['empid']."</td>
                <td>".$result['name']."</td>
                <td>".$result['deptname']."</td>
                <td>".$result['phonenumber']."</td>
                <td>".$result['joiningdata']."</td>
                
            </tr>";
    }
    
}
else{
    echo "result not found";

}

?>

</table>
