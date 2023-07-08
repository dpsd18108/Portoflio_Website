<?php
// Database connection parameters (same as before)
require('includes/db_connection.php');

// Fetch works from the database where the category contains the price 1
$sql = "SELECT * FROM works WHERE category LIKE '%1%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="grid-card">';
    while ($row = mysqli_fetch_assoc($result)) {
        $creator = $row['creator'];
        $category = $row['category'];
        $date = $row['date'];
        $description = $row['description'];
        $title = $row['title'];
        $work_picture = $row['work_picture'];

        echo '
        <div class="card mb-3">
            <img src="' . $work_picture . '" class="card-img-top" alt="Work Image">
            <div class="card-body">
                <h5 class="card-title">' . $title . '</h5>
                <p class="card-text">' . $description . '</p>
                <p class="card-text"><strong>Creator:</strong> ' . $creator . '</p>
                <p class="card-text"><strong>Date:</strong> ' . $date . '</p>
                <p class="card-text"><strong>Category:</strong> ' . $category . '</p>
            </div>
        </div>
        ';
    }
    echo '</div>';
} else {
    echo "<p>No works found.</p>";
}

// Close the database connection (same as before)
mysqli_close($conn);
?>
