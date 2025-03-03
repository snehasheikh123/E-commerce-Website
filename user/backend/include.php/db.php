<?php
$servername = "localhost";
$username = "root";
$password = ""; // XAMPP me default password blank hota hai
$dbname = "eshop"; // Yahan database name define karna zaroori hai

// Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully";
}
?>
