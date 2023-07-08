<?php
require('includes/db_connection.php');

// Retrieve data from the database
$sql = "SELECT * FROM pliro";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br><br>";
    }
} else {
    echo "No data found";
}

$conn->close();
?>
