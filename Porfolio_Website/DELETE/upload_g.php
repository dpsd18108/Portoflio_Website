<?php
    //Store from data into variables
                // -- 9 - Holds the customer name

    $file_tmp_name = $_FILES['fileToUpload']['tmp_name'];                 // -- 10a -- holds the temp name (and temp directory)
    $file_name = $_FILES['fileToUpload']['name'];                         // -- 10b -- holds the filename
    $file_size = $_FILES['fileToUpload']['size'];                         // -- 10c -- holds the file size
    $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); // -- 10d -- holds the file extension of the file (in lower case)
    
    $target_dir = "uploads/";                                     // -- 11a -- Specifies the directory where the file is going to be placed
    $target_file = $target_dir .time()."_".basename($file_name);  // -- 11b -- Set the new filename (with directory and timestamp)
    
    $uploadOk = 1;                                                // -- 12 -- Flag for testing some conditions/restrictions
      
    
    if(isset($_POST['submit'])) {                                 // -- 13 -- Check if the user came to this page by pressing the submit button    
        // Check if image file is an actual image or fake image
        $check = getimagesize($file_tmp_name);                    // -- 14 --
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".<br />";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      } else {
        echo "You shouldn't be here!";
      }
      
      
      if (file_exists($target_file)) {                         //-- 15 -- Check if file already exists   
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }


      if ($file_size > 500000) {                               // -- 16 -- Check file size
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }


      // -- 17 -- Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
      }   


      if ($uploadOk == 0) {                                       // -- 18 -- Check if $uploadOk is set to 0 by an error
        echo "Sorry, your file was not uploaded.";
      } else {                                                    // if everything is ok, try to upload file
        if (move_uploaded_file($file_tmp_name, $target_file)) {   // -- 18b -- move the file from temp to the upload folder           
                                                                  
          require('includes/db_connection.php'); //Εδώ προσοχή

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if(!$conn){                                           // -- 18d -- check connection
                echo "No connection ";
            }
            
            $sql = "INSERT INTO arts (name, images) VALUES ('$customer', '$target_file')"; // -- 18e -- Create a SQL INSERT statement     

            mysqli_query($conn, $sql);                            // -- 18f --Execute the SQL statement
            
            mysqli_close($conn);                                  // -- 18g -- Close the database connection

            echo "The file ". htmlspecialchars(basename($file_name)). " has been uploaded.";  // -- 18h -- display a confirmation message
         
        } else {                                                  // -- 18a -- at least one problem occured 
          echo "Sorry, there was an error uploading your file.";
        }
      }