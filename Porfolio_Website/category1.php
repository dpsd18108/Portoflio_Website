<?php require('includes/header.php'); ?>

<main id="main">

  <!-- ======= Works Section ======= -->
  <section class="section site-portfolio">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          <h2>Projects</h2>
          <!-- <p class="mb-0">Eλεύθεροι επαγγελματίες &amp; Επαγγελματίες μηχανικοί σχεδίασης.</p> -->
        </div>
        <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
          <!-- <div id="filters" class="filters">
            <a href="#" data-filter="*" class="active">All</a>
            <a href="#" data-filter=".1">Web</a>
            <a href="#" data-filter=".2">Produact</a>
            <a href="#" data-filter=".3">Service</a>
            <a href="#" data-filter=".4">Game</a>
            <a href="#" data-filter=".5">Videography</a>
          </div> -->
        </div>
      </div>
      <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">

 

<?php
// Database connection parameters (same as before)
require('includes/db_connection.php');

// Fetch works from the database where the category contains the number 2
$sql = "SELECT * FROM works WHERE category LIKE '%1%'";
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
        
        <div class="item <?php echo $category; ?> col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">

                <div class="work-info">
                    <h3><?php echo $title; ?></h3>
                    <span><?php echo 'by '.$creator.''  ; ?></span> 
                </div>
                <img class="img-fluid" src="<?php echo $work_picture; ?>">
            </a>
        </div>
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

        </div>

</div>

</div>
</div>
  </div>
</section><!-- End  Works Section -->

<!-- ======= Clients Section ======= -->
<!-- <section class="section">
  <div class="container">
    <div class="row justify-content-center text-center mb-4">
      <div class="col-5">
        <h3 class="h3 heading">My Clients</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-4 col-sm-4 col-md-2">
        <a href="#" class="client-logo"><img src="assets/img/logo-adobe.png" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4 col-sm-4 col-md-2">
        <a href="#" class="client-logo"><img src="assets/img/logo-uber.png" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4 col-sm-4 col-md-2">
        <a href="#" class="client-logo"><img src="assets/img/logo-apple.png" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4 col-sm-4 col-md-2">
        <a href="#" class="client-logo"><img src="assets/img/logo-netflix.png" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4 col-sm-4 col-md-2">
        <a href="#" class="client-logo"><img src="assets/img/logo-nike.png" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-4 col-sm-4 col-md-2">
        <a href="#" class="client-logo"><img src="assets/img/logo-google.png" alt="Image" class="img-fluid"></a>
      </div>

    </div>
  </div>
</section> -->
<!-- End Clients Section -->



</main><!-- End #main -->



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

<?php require("includes/footer.php");?>