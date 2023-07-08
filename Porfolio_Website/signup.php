<?php
require("includes/header.php");

// session_start();

$word="";

// Check if the user is already logged in
if (isset($_SESSION['name'])) {
    header("Location: index.php"); // Redirect to index.php if the user is already logged in
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Connect to the MySQL database
    $conn = new mysqli('localhost', 'root', 'usbw', 'geomano');

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the query to check if the username already exists
    $query = "SELECT name FROM users WHERE name = '$name'";
    $result = $conn->query($query); 

    // Check if the username already exists
    if ($result->num_rows > 0) {
        $word="Username already exists. Please choose a different username.";
        
    } else {
        // Prepare the query to insert a new user
        $insertQuery = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
        if ($conn->query($insertQuery) === TRUE) {

            $query = "SELECT name, password FROM users WHERE name = '$name' AND password = '$password'";
            $result = $conn->query($query);

                if ($result->num_rows === 1) {
                    // Fetch the user details
                    $row = $result->fetch_assoc();
            
                    // Set the session variables
                    $_SESSION['username'] = $row['name'];

                    // echo "Registration successful. You can now <a href='signin.php'>sign in</a>.";
                    header("Location: index.php");
                    exit();
                 }
            
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

<br></br>
<div class="container">
    <h2>Sign Up</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        
        <span style="color:#ff0000;"> <?php echo $word ?> </span>
        <br><br>
        <button class="col-lg-1 col-2 mt-0 form-group" type="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
<br></br>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php require("includes/footer.php"); ?>
