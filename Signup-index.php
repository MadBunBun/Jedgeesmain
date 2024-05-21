<?php

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$phoneNumber = $_POST['phoneNumber'];
$address = $_POST['address'];

$servername = "localhost";
$username = "root";
$password = "";  // Replace with your actual MySQL root password
$dbname = "digi_dreamers";       // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Perform a query, example: insert data
$sql = "INSERT INTO users (email, password, name, phoneNumber, address) VALUES ('john@example.com', 'securepassword', 'john_doe', '09451300880', '8692 Fortuna.');
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

?>
