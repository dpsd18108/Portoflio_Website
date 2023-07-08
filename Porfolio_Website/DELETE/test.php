<?php require("includes/header.php");?>

<main id="main">

  <!-- ======= Works Section ======= -->
  <section class="section site-portfolio">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          <h2>Γεια σας, είμαστε μηχανικοί σχεδίασης που αναζητούν το καλύτερο αποτέλεσμα.</h2>
          <p class="mb-0">Eλεύθεροι επαγγελματίες &amp; Επαγγελματίες μηχανικοί σχεδίασης.</p>
        </div>
        <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
          <div id="filters" class="filters">
            <a href="#" data-filter="*" class="active">All</a>
            <a href="#" data-filter=".1">Web</a>
            <a href="#" data-filter=".2">Produact</a>
            <a href="#" data-filter=".3">Service</a>
            <a href="#" data-filter=".4">Game</a>
            <a href="#" data-filter=".5">Videography</a>
          </div>
        </div>
      </div>
      <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">

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
                  $work_picture = $row['work_picture']; ?>

                  // Display each work in a Bootstrap card with a category class
                  <div class="item <?php $category ?>col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="work-single.html" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3> <?php $title ?> </h3>
                      <span><?php $category ?></span> 
                    </div>
                    <img class="img-fluid" src="<?php $work_picture ?>">
                  </a>
                </div> <?php

              }
          } else {
              echo "<p>No works found.</p>";
          }

          // Close the database connection
          mysqli_close($conn);
          ?>
          
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

  <!-- ======= Services Section ======= -->
  <section class="section services">
    <div class="container">
      <div class="row justify-content-center text-center mb-4">
        <div class="col-5">
          <h3 class="h3 heading">Οι υπηρεσίες μας</h3>
          <p>Τι μπορούμε να σας παρέχουμε.</p>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <i class="bi bi-card-checklist"></i>
          <h4 class="h4 mb-2">Web Design</h4>
          <p>Αν θέλετε το Website σας να είναι κάτι από τα παρακάτω εμπιστευτείτε μας</p>
          <ul class="list-unstyled list-line">
            <li>Καινοτόμο και οπτικά εντυπωσιακό</li>
            <li>Απρόσκοπτη εμπειρία χρήστη</li>
            <li>Βελτιστοποιημένα σχέδια για κινητά τηλέφωνα</li>
            <li>Προσαρμοσμένες λύσεις</li>
            <li>Εκπληκτικοί, διαισθητικοί ιστότοποι</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <i class="bi bi-binoculars"></i>
          <h4 class="h4 mb-2">Mobile Applications</h4>
          <p>Δώστε στην εφαρμογή σας τα παρακάτω στοιχεία και δεν θα μετανιώσετε</p>
          <ul class="list-unstyled list-line">
            <li>Ανάπτυξη εφαρμογών αιχμής</li>
            <li>Διαισθητική εμπειρία χρήστη</li>
            <li>Συμβατότητα πολλαπλών πλατφορμών</li>
            <li>Προσαρμοσμένες λύσεις</li>
            <li>Καινοτόμες λύσεις για κινητά</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <i class="bi bi-brightness-high"></i>
          <h4 class="h4 mb-2">Graphic Design</h4>
          <p>Περάστε το μύνημα σας χωρίς πολλά λόγια</p>
          <ul class="list-unstyled list-line">
            <li>Δημιουργικές οπτικές λύσεις</li>
            <li>Εντυπωσιακά σχέδια</li>
            <li>Βελτίωση της ταυτότητας της μάρκας</li>
            <li>Προσαρμοσμένες γραφικές λύσεις</li>
            <li>Καινοτόμες σχεδιαστικές ιδέες</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <i class="bi bi-calendar4-week"></i>
          <h4 class="h4 mb-2">SEO</h4>
          <p>Δεν θα ταν άσχημο να στε πάντα στην πρώτη δεκάδα των αναζητήσεων</p>
          <ul class="list-unstyled list-line">
            <li>Στοχευμένη βελτιστοποίηση λέξεων-κλειδιών</li>
            <li>Βελτιωμένη κατάταξη αναζήτησης</li>
            <li>Οργανική αύξηση της κυκλοφορίας
            </li>
            <li>Προσαρμοσμένες στρατηγικές SEO</li>
            <li>Αποτελεσματική ψηφιακή ορατότητα</li>
          </ul>
        </div>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <section class="section pt-0">
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial">
                <img src="assets\img\image00008.jpeg" alt="Image" class="img-fluid">
                <blockquote>
                  <p>"Αναβαθμίζοντας τη διαδικτυακή σας παρουσία, ενισχύοντας την ανάπτυξή σας σε όποιο τομέα και αν είστε"</p>
                </blockquote>
                <p>&mdash; Γιώργος Γλέζος</p>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial">
                <img src="assets\img\IMG_6282.jpg" alt="Image" class="img-fluid">
                <blockquote>
                  <p>"Ενισχύοντας την επιτυχία σας στην ψηφιακή εποχή"</p>
                </blockquote>
                <p>&mdash; Στριλιγκάς Μάνος</p>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

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