<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if($db->connect_error){
    error_log("Database connection failed: " . $db->connect_error); // Log the error for debugging
    die("Connection failed. Please check the logs for more details."); // User-friendly message
}

?>
