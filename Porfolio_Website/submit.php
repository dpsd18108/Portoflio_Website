<?php
    require("includes/header.php");
    // Database connection configuration
    require("includes/db_connection.php");

    // Get form data
    $name = $_POST['name'];
    $category = $_POST['category'];
    $designer = $_POST['designer'];
    $email = $_POST['email'];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO arts (name, category, designer, email) VALUES ('$name', '$category', '$designer', '$email')";

    if ($conn->query($sql) === true) {
        echo '<br><br> <div class="container"><div class="alert alert-success">Σωστή υποβολή φόρμας. Θα ενημερωθείτε εντός 24ώρου για την εξέλιξη της προσφοράς σας</div></div>';
        // echo '<div class="container"><button class="btn btn-primary" onclick="location.href=\'index.php\'">Go Back</button></div>';
    } else {
        echo '<br><br> <div class="container"><div class="alert alert-danger">Error: ' . $sql . '<br>' . $conn->error . '</div></div>';
        echo ' <div class="container"><button class="btn btn-primary" onclick="location.href=\'submid.php\'">Try Again</button></div>';
    }

    // Close the database connection
    $conn->close();
    ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<br><br>
   <?php require("includes/footer.php"); ?>
