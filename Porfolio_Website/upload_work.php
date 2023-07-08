<?php
    // Store form data into variables
    $creator = $_POST['creator'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $title = $_POST['title'];
    

    $file_tmp_name = $_FILES['fileToUpload']['tmp_name'];
    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $imageFileType = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $target_dir = "uploads/";
    $target_file = $target_dir . time() . "_" . basename($file_name);

    $uploadOk = 1;

    $message = ""; // Variable to store the message to be displayed

    if (isset($_POST['submit'])) {
        // Check if image file is an actual image or fake image
        $check = getimagesize($file_tmp_name);
        if ($check !== false) {
            $message = "File is an image - " . $check["mime"] . ".<br />";
            $uploadOk = 1;
        } else {
            $message = "File is not an image.";
            $uploadOk = 0;
        }
    } else {
        $message = "You shouldn't be here!";
    }

    if (file_exists($target_file)) {
        $message = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($file_size > 500000) {
        $message = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        $message = "Sorry, something went wrong.";
    } else {
        if (move_uploaded_file($file_tmp_name, $target_file)) {
            require('includes/db_connection.php'); //εδώ προσοχή

            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // For Greek characters with USBwebServer
            $query = "SET NAMES utf8";
            mysqli_query($conn, $query);

            if (!$conn) {
                $message = "No connection";
            }

            $sql = "INSERT INTO works (category, creator, date, description, title, work_picture) VALUES ('$category', '$creator', '$date', '$description', '$title', '$target_file')";

            mysqli_query($conn, $sql);

            mysqli_close($conn);

            $message = "The file " .htmlspecialchars(basename($file_name)) . " has been uploaded.";
            
            // header("Location: index.php");
            //         exit();
        } else {
            $message = "Sorry, there was an error uploading your file.";
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Upload Form</title>
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-success" role="alert">
            <?php echo $message; ?>
        </div>
        <div class="mt-3">
            <a href="work_upload.php" class="btn btn-success">Try Again</a>
            <a href="index.php" class="btn btn-danger">Back to Home</a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
