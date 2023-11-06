<?php

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user_reg (name, frmdate, todate, departd, arrivald, phonenumber, emailid)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssssss",
                  $_POST["name"],
                  $_POST["frmdate"],
                  $_POST["todate"],
                  $_POST["departd"],
                  $_POST["arrivald"],
                  $_POST["phonenumber"],
                  $_POST["emailid"]
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








