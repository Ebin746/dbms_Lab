<?php
$host = "localhost";
$user = "root"; // Change if necessary
$password = ""; // Change if necessary
$database = "appointment_system";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
