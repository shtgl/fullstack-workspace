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
        $rn3=$_GET['empid'];
        $rn1=$_GET['name'];
        $rn2=$_GET['deptname'];
        $rn4=$_GET['phonenumber'];
        $rn5=$_GET['joiningdata'];


        $query="UPDATE user_reg SET name='$rn1',deptname='$rn2', phonenumber='$rn4', joiningdata='$rn5' where empid='$rn3'";
        $data=mysqli_query($mysqli,$query);
        if($data){
            echo "<font color='green'>Record updated successfully";}
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
            <th>ISBN</td>
            <th>Name of book</td>
            <th>Name of author</td>
            <th>Title of book</td>
            <th>Publisher of book</td>    
        </tr>
    
    <?php
    while($result=mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['isbn']."</td>
                <td>".$result['name']."</td>
                <td>".$result['book_title']."</td>
                <td>".$result['author_name']."</td>
                <td>".$result['publisher_name']."</td>
                
            </tr>";
    }
    
}
else{
    echo "result not found";

}

?>

</table>
