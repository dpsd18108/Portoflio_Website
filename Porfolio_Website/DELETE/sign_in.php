<?php
// Establish database connection
require("includes/db_connection.php");

// $conn = mysqli_connect($host, $username, $password, $database);
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Function to validate user credentials and open the list.php file
function signin($name, $password) {
    global $conn;
    $name = mysqli_real_escape_string($conn, $name);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT password FROM users WHERE name='$name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];
        if (password_verify($password, $hashedPassword)) {
            // Sign in successful
            header("Location: display.php");
            exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}

// Example usage
if (isset($_POST['signin'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    signin($name, $password);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
</head>
<body>
    <h2>Sign In</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="signin" value="Sign In">
    </form>
</body>
</html>
