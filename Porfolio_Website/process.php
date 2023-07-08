<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];

// Connect to MySQL server
require("includes/db_connection.php");

// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Insert data into the database
$sql = "INSERT INTO pliro (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
