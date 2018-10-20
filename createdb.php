<?php
$host = 'localhost';
$user = 'root';
$pass = '';
// Create connection
$conn = new mysqli($host, $user, $pass);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE databaselab";
if ($conn->query($sql) === TRUE) {
    echo "Databaselab created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>