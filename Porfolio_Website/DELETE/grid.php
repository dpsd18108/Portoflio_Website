<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Works</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Uploaded Works</h1>

        <div class="dropdown mb-3">
            <button class="btn btn-primary dropdown-toggle" type="button" id="categoryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter by Category
            </button>
            <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                <a class="dropdown-item filter-btn" data-category="" href="#">Show All</a>
                <a class="dropdown-item filter-btn" data-category="1" href="#">Category 1</a>
                <a class="dropdown-item filter-btn" data-category="2" href="#">Category 2</a>
                <a class="dropdown-item filter-btn" data-category="3" href="#">Category 3</a>
                <a class="dropdown-item filter-btn" data-category="4" href="#">Category 4</a>
                <a class="dropdown-item filter-btn" data-category="5" href="#">Category 5</a>
            </div>
        </div>

        <div class="row" id="works-grid">
            <?php
            // Database connection parameters
            require('includes/db_connection.php');

            // Fetch works from the database
            $sql = "SELECT * FROM works";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $category = $row['category'];
                    $creator = $row['creator'];
                    $date = $row['date'];
                    $description = $row['description'];
                    $title = $row['title'];
                    $work_picture = $row['work_picture'];

                    // Display each work in a Bootstrap card with a category class
                    echo '
                    <div class="col-md-4 work-item category-' . $category . '">
                        <div class="card mb-3">
                            <img src="' . $work_picture . '" class="card-img-top" alt="' . $title . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $title . '</h5>
                                <p class="card-text">' . $description . '</p>
                                <p class="card-text"><strong>Creator:</strong> ' . $creator . '</p>
                                <p class="card-text"><strong>Date:</strong> ' . $date . '</p>
                                <p class="card-text"><strong>Category:</strong> ' . $category . '</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo "<p>No works found.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            // Filter works by category
            $(".filter-btn").click(function () {
                var category = $(this).data("category");
                $(".work-item").hide();
                if (category === "") {
                    $(".work-item").show();
                } else {
                    $(".category-" + category).show();
                }
            });
        });
    </script>

</body>
</html>
