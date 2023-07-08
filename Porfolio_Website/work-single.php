<?php require('includes/header.php') ?>

<?php
// Database connection parameters (same as before)
require('includes/db_connection.php');


$imageUrl = isset($_GET['image']) ? $_GET['image'] : '';

// Fetch the work from the database where the work_picture matches the provided image URL
$sql = "SELECT * FROM works WHERE work_picture = '$imageUrl'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<main id="main">';
    echo '<section class="section">';
    echo '<div class="container">';
    echo '<div class="row mb-4 align-items-center">';
    echo '<div class="col-md-6" data-aos="fade-up">';
    
    while ($row = mysqli_fetch_assoc($result)) {
        $creator = $row['creator'];
        $category = $row['category'];
        $date = $row['date'];
        $description = $row['description'];
        $title = $row['title'];
        $work_picture = $row['work_picture'];
?>

          <h2><?php echo $title; ?></h2>
          <p>By <?php echo $creator; ?></p>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-8" data-aos="fade-up">
            <img src="<?php echo $work_picture; ?>" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="sticky-content">
              <h3 class="h3"><?php echo $title; ?></h3>
              <p class="mb-4"><span class="text-muted"><?php echo $date; ?></span></p>

              <div class="mb-5">
                <p><?php echo $description; ?></p>

                <!-- <p>Creator: <?php echo $creator; ?></p> -->
                <p> <?php  
                    switch ($category) {
                      case 1:
                          echo "Web Design";
                          break;
                      case 2:
                          echo "Product Design";
                          break;
                      case 3:
                          echo "Service Design";
                          break;
                      case 4:
                          echo "Game Design";
                          break;
                      case 5:
                          echo "Videography";
                          break;
                      // default:
                      //     echo "Invalid number";
                      }
                ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Include the testimonials section -->
  <?php require('includes/testimonials.php'); ?>

</main><!-- End #main -->

<?php
    }
    echo '</div>';
    echo '</div>';
} else {
    echo "<p>No works found.</p>";
}

// Close the database connection
mysqli_close($conn);
?>


<?php require('includes/footer.php') ?>