<!-- login_process.php -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve the submitted credentials
  $username = $_POST["name"];
  $password = $_POST["password"];

  // Check the credentials against the database or any other authentication method
  if ($username === "valid_username" && $password === "valid_password") {
    // Start a session and set the logged-in status
    session_start();
    $_SESSION["loggedin"] = true;

    // Redirect to index.php
    header("Location: index.php");
    exit;
  } else {
    // Display an error message
    echo "Invalid username or password.";
  }
}
?>
