<?php 
 define("DB_HOST", "127.0.0.1:3307");
 define("DB_USER", "admin");
 define("DB_PASS", "1234");
 define("DB_NAME", "php_dev");

//  Create Connection

$conn = new mysqli(DB_HOST, DB_USER,DB_PASS, DB_NAME);

// Check Connection

if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
};

// echo "Connected";
