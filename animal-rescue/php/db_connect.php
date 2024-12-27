<?php
$host = "localhost"; // Database host
$db_user = "root"; // Database username
$db_pass = ""; // Database password
$db_name = "animal_rescue"; // Database name

// Create a new connection
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
