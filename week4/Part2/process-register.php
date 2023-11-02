<?php

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user_reg (name, isbn, book_title, author_name, publisher_name)
        VALUES (?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sssss",
                  $_POST["name"],
                  $_POST["isbn"],
                  $_POST["book_title"],
                  $_POST["author_name"],
                  $_POST["publisher_name"]
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








