<?php
include("database.php");
error_reporting(0);
$_GET['rn'];
$_GET['n'];
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
    ID <input type="text" name="id" value="<?php echo $_GET['rn'];?>"><br></br>
    Username <input type="text" name="name" value="<?php echo $_GET['n'];?>"><br></br>
    Password <input type="password" name="password" value="<?php echo $_GET['n'];?>"><br></br>
    <input type="submit" name="submit" value="UPDATE">


</form>

<?php 

    if($_GET['submit']){
        $rn3=$_GET['id'];
        $rn1=$_GET['name'];
        $rn2=$_GET['password_hash'];


        $query="UPDATE user SET name='$rn1',password_hash='$rn2' where id='$rn3'";
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
$query="SELECT * FROM user";
$data=mysqli_query($mysqli,$query);
$total=mysqli_num_rows($data);




if($total>0){

    ?>
    <table>
        <tr>
            <th>ID</td>
            <th>Name</td>
            <th>Email</td>
            <th>Password_hash</td>
        </tr>
    
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['name']."</td>
                <td>".$result['email']."</td>
                <td>".$result['password_hash']."</td>
                
            </tr>";
    }
    
}
else{
    echo "result not found";

}

?>

</table>
