<!DOCTYPE html>
<html>
<head>
    <title>Register - EMS</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Register</h1>
    
    <form action="process-register.php" method="post" id="register" novalidate>
        <label for="name">Employee name</label>
        <input type="text" name="name" class="form-control" id="name" autocomplete="username">

        <label for="empid">Employee id</label>
        <input type="number" name="empid" class="form-control" id="empid" autocomplete="username">

        <label for="deptname">Department name</label>
        <input type="text" name="deptname" class="form-control" id="deptname" autocomplete="username">

        <label for="phonenumber">Phone number</label>
        <input type="number" name="phonenumber" class="form-control" id="phonenumber" autocomplete="username">

        <label for="joiningdata">Date of joining</label>
        <input type="date" name="joiningdata" class="form-control" id="joiningdata" autocomplete="username">


        
        
        <button>Register</button><br>
        <p><a href="register_del.php">Delete</a> or <a href="register_up.php">Update</a></p>
    </form>
    


</body>
</html>








