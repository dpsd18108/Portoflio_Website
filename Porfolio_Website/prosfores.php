<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>Λίστα προσφορών</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        table {
            margin: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Λίστα προσφορών</a>
        <!-- ... Navbar content ... -->
    </nav>

    <?php
    // Database connection configuration
   require("includes/db_connection.php");


    // Retrieve data from the database
    $sql = "SELECT * FROM arts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="table table-striped">
                <thead>
                    <tr>
                        <th>Όνομα</th>
                        <th>Προσφορά</th>
                        <th>Περιγραφή</th>
                        <th>Email</th>
                  
                        
                    </tr>
                </thead>
                <tbody>';
        
        while($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>'.$row["name"].'</td>
                    <td>'.$row["category"].'</td>
                    <td>'.$row["designer"].'</td>
                    <td><a href="mailto:'.$row["email"].'">'.$row["email"].'</a></td>
                  
                    
                </tr>';
        }
        echo '</tbody>
              </table>';

            
    } else {
        echo "No arts found.";
    }

    // Close the database connection
    $conn->close();
    ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
<div class="text-center">
                  <a class="btn btn-primary" href="index.php">Front end</a>