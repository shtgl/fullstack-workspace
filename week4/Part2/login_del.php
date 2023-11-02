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
    <h2>Delete data</h2>
    <form action="" method="GET">
        id <input type="text" name="id" value="<?php echo $_GET['rn'];?>"><br></br>
        <input type="submit" name="submit" value="DELETE">


    </form>

    <?php 

    if($_GET['submit']){
        $rn1=$_GET['id'];

        $query="DELETE FROM user where id='$rn1'";
        $data=mysqli_query($mysqli,$query);
        if($data){
            echo "<font color='green'>Record deleted successfully";}
        }
        else{
            echo "<font color='blue'>Click on Delete button to delete a specific value";
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
