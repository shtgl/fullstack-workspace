<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}


$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user_reg (name, email, address, state, country_code, phonenumber, birthday, skills, school, interests)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssssssss",
                  $_POST["name"],
                  $_POST["email"],
                  $_POST["address"],
                  $_POST["state"],
                  $_POST["country_code"],
                  $_POST["phonenumber"],
                  $_POST["birthday"],
                  $_POST["skills"],
                  $_POST["school"],
                  $_POST["interests"]);
                  
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








