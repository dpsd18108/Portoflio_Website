<?php
// Assuming you have a pre-defined list of usernames and passwords stored in an array or database
require("includes/db_connection.php");
// Database connection parameters
// $servername = "localhost";
// $username = "root";
// $password = "usbw";
// $dbname = "geomano";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered username and password from the form
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Connect to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement to select the username and password from the database
    $sql = "SELECT * FROM adminusers WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
    $result = $conn->query($sql);

    // Check if a matching row is found
    if ($result->num_rows > 0) {
        // Redirect to index.php upon successful login
        header("Location: prosfores.php");
        exit();
    } else {
        $loginError = "Invalid username or password.";
    }

    // Close the database connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 100px;
        }

        .login-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            margin-bottom: 30px;
            text-align: center;
            color: #4a148c;
        }

        .form-label {
            color: #4a148c;
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #4a148c;
        }

        .btn {
            background-color: #4a148c;
            border: none;
            color: #ffffff;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #6a1b9a;
        }

        .error-message {
            color: #ff1744;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2>Admin</h2>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-block">
                        </div>
                        <?php if(isset($loginError)) { echo "<p class='error-message'>$loginError</p>"; } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
