<?php require("includes/header.php");

$word = '';
// session_start();

// Check if the user is already logged in
if (isset($_SESSION['name'])) {
    header("Location: index.php"); // Redirect to index.php if the user is already logged in
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['username'];
    $password = $_POST['password'];

    // Connect to the MySQL database
    $conn = new mysqli('localhost', 'root', 'usbw', 'geomano');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the query to fetch user details
    $query = "SELECT name, password FROM users WHERE name = '$name' AND password = '$password'";
    $result = $conn->query($query);

    // Check if a matching user is found
    if ($result->num_rows === 1) {
        // Fetch the user details
        $row = $result->fetch_assoc();

        // Set the session variables
        $_SESSION['username'] = $row['name'];

        // Redirect to index.php
        header("Location: index.php");
        exit();
    } else {
        $word = "Invalid credentials. Please try again.";
    }

    $conn->close();
}
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Sign In</title> -->
    <!-- Add Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body> -->
<br><br>
    <div class="container">
        <h2>Sign In</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <span style="color:#ff0000;"> <?php echo $word ?> </span>
            <br><br>
            <button class="col-lg-1 col-2 mt-0 form-group" type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>



        <!-- Add Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <br><br>

<?php require("includes/footer.php"); ?>
