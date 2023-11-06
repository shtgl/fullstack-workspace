<!DOCTYPE html>
<html>
<head>
    <title>Register - FMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Register</h1>
    
    <!-- <?php
        // define variables and set to empty values
        /*$nameErr = $fromErr = $deptErr = $toErr = $arrErr = $phnErr = $emailErr = "";
        $name = $fromdate = $todate = $deptdate = $arrivaldate = $phonenumber = $emailid = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input($_POST["name"]);
          }
          
          if (empty($_POST["fromdate"])) {
            $fromErr = "From date is required";
          } else {
            $fromdate = test_input($_POST["fromdate"]);
          }
            
          if (empty($_POST["todate"])) {
            $toErr = "To date is required";
          } else {
            $todate = test_input($_POST["website"]);
          }

          if (empty($_POST["deptdate"])) {
            $deptErr = "Departure date is required";
          } else {
            $deptdate = test_input($_POST["deptdate"]);
          }

          if (empty($_POST["arrivaldate"])) {
            $arrErr = "Arrival date is required";
          } else {
            $arrivaldate = test_input($_POST["arrivaldate"]);
          }

          if (empty($_POST["phonenumber"])) {
            $phnErr = "Phone number is required";
          } else {
            $phonenumber = test_input($_POST["phonenumber"]);
          }

          if (empty($_POST["emailid"])) {
            $emailErr = "Email id is required";
          } else {
            $emailid = test_input($_POST["emailid"]);
          }
        }

        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        } */
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  -->
    <form action="process-register.php" method="post" id="register" novalidate>
        <label for="name">Passenger name</label>
        <input type="text" name="name" class="form-control" id="name" autocomplete="username" required>

        <label for="fromdate">From</label>
        <input type="date" name="frmdate" class="form-control" id="frmdate" autocomplete="username" required>

        <label for="todate">To</label>
        <input type="date" name="todate" class="form-control" id="todate" autocomplete="username" required>

        <label for="deptdate">Dept. date</label>
        <input type="date" name="departd" class="form-control" id="departd" autocomplete="username" required>

        <label for="arrivaldate">Arrival date</label>
        <input type="date" name="arrivald" class="form-control" id="arrivald" autocomplete="username" required>

        <label for="phonenumber">Phone number</label>
        <input type="number" name="phonenumber" class="form-control" id="phonenumber" autocomplete="username" required>

        <label for="emailid">Email id</label>
        <input type="text" name="emailid" class="form-control" id="emailid" autocomplete="username" required>
        
        <button>Register</button><br>
        <p><a href="register_del.php">Delete</a> or <a href="register_up.php">Update</a></p>
    </form>
    <i> Please keep a forward gap between the from date and to date. Thank you </i>


</body>
</html>








