<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'databaselab';

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE std (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
phone INT(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP,
semester VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table std created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE result (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
semester VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table result created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE course (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
cr_code VARCHAR(30) NOT NULL,
reg_date TIMESTAMP,
semester VARCHAR(30)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table course created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>