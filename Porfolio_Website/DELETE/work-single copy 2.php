<?php require('includes/header.php') ?>

<?php
// Database connection parameters (same as before)
require('includes/db_connection.php');



// Fetch works from the database where the category contains the number 2
// $sql = "SELECT * FROM works WHERE work_id LIKE '%$id%'";
$sql = "SELECT * FROM works WHERE work_id LIKE %1%";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="container">';
    echo '<div class="row">';
    while ($row = mysqli_fetch_assoc($result)) {
        $creator = $row['creator'];
        $category = $row['category'];
        $date = $row['date'];
        $description = $row['description'];
        $title = $row['title'];
        $work_picture = $row['work_picture'];
        
        
        ?>

  <main id="main">

    <section class="section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">
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

                  <p><?php echo $category; ?></p>

                </div>

                <!-- <h4 class="h4 mb-3">What I did</h4>
                <ul class="list-unstyled list-line mb-5">
                  <li>Design</li>
                  <li>HTML5/CSS3</li>
                  <li>CMS</li>
                  <li>Logo</li>
                </ul>

                <p><a href="#" class="readmore">Visit Website</a></p> -->
              </div>
            </div>
          </div>
        </div>
    </section>

        <?php
          }
          echo '</div>';
          echo '</div>';
          } else {
              echo "<p>No works found.</p>";
          }

        // Close the database connection (same as before)
        mysqli_close($conn);
        ?>

    <!-- ======= Testimonials Section ======= -->
    <?php require('includes/testimonials.php') ?>

  </main><!-- End #main -->

<?php require('includes/footer.php') ?>