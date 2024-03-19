<?php
$servername = "localhost";
$username = "roots";
$password = "root";
$dbname = "department";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
