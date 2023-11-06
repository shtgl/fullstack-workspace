<?php

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user_reg (name, empid, deptname, phonenumber, joiningdata)
        VALUES (?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssss",
                  $_POST["name"],
                  $_POST["empid"],
                  $_POST["deptname"],
                  $_POST["phonenumber"],
                  $_POST["joiningdata"]
              );
                  
if ($stmt->execute()) {

    header("Location: register-success.html");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}








