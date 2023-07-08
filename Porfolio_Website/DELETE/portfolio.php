<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Λίστα προσφορών</a>
    <!-- ... Navbar content ... -->
  </nav>

  <!-- Display Section -->
  <section id="display" class="py-5">
    <div class="container">
      <h2 class="text-center">Λίστα Προσφορών</h2>
      <div id="table-container">
        <?php
        // Connect to MySQL server
        require('includes/db_connection.php');

        // Retrieve data from the database
        $sql = "SELECT * FROM pliro";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Start generating the HTML table
            echo '<table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>';

            // Iterate over each row and generate table rows
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['email'] . '</td>
                      </tr>';
            }

            // Close the HTML table
            echo '</tbody></table>';
        } else {
            echo "No data found";
        }

        $conn->close();
        ?>
      </div>
    </div>
  </section>

</body>
</html>
