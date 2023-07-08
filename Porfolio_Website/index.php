<?php require("includes/header.php"); ?>



<main id="main">

<!-- ======= Works Section ======= -->
<section class="section site-portfolio">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
        <h2>Γεια σας, είμαστε μηχανικοί σχεδίασης που αναζητούν το καλύτερο αποτέλεσμα.</h2>
        <p class="mb-0">Freelancers &amp; Επαγγελματίες μηχανικοί σχεδίασης.</p>
      </div>
      <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
        <div id="filters" class="filters">
          <a href="#" data-filter="*" class="active">All</a>
          <a href="#" data-filter=".web">Web</a>
          <a href="#" data-filter=".product">Product</a>
          <a href="#" data-filter=".service">Service</a>
          <a href="#" data-filter=".game">Game</a>
          <a href="#" data-filter=".photography">Videography</a>
          
        </div>
      </div>
    </div>
    <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
      <!-- Web -->
      <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
        <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">
          <div class="work-info">
            <h3>TheAnimators</h3>
            <span>Website</span> 
          </div>
          <img class="img-fluid" src="assets\img\Στιγμιότυπο οθόνης 2023-06-04 201337.png">
        </a>
      </div>

      <!-- Product -->
      <div class="item product col-sm-6 col-md-4 col-lg-4 mb-4">
      <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">
          <div class="work-info">
            <h3>TheGods</h3>
            <span>Game</span>
          </div>
          <img class="img-fluid" src="assets/img/img_4.jpg">
        <!-- </a> -->
      </div>

      <!-- Service -->
      <div class="item service col-sm-6 col-md-4 col-lg-4 mb-4">
        <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">
          <div class="work-info">
            <h3>Cocooil</h3>
            <span>Branding</span>
          </div>
          <img class="img-fluid" src="assets/img/img_3.jpg">
        </a>
      </div>
      <div class="item service col-sm-6 col-md-4 col-lg-4 mb-4">
        <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">
          <div class="work-info">
            <h3>Amazon</h3>
            <span>brandingn</span>
          </div>
          <img class="img-fluid" src="assets/img/img_6.jpg">
        </a>
      </div>

      <!-- Game -->
      <div class="item game col-sm-6 col-md-4 col-lg-4 mb-4">
        <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">
          <div class="work-info">
            <h3>Nike Shoe</h3>
            <span>Design</span>
          </div>
          <img class="img-fluid" src="assets/img/game.jpg">
        </a>
      </div>

      <!-- Videography -->
      <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
        <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">
          <div class="work-info">
            <h3>Build Indoo</h3>
            <span>Photography</span>
          </div>
          <img class="img-fluid" src="assets/img/img_2.jpg">
        </a>
      </div>
      <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
        <a href="work-single.php?image=<?php echo urlencode($work_picture); ?>" class="item-wrap fancybox">
          <div class="work-info">
            <h3>Kitchen Sink</h3>
            <span>Photography</span>
          </div>
          <img class="img-fluid" src="assets/img/img_5.jpg">
        </a>
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


  <!-- ======= Footer ======= -->
  <?php require("includes/footer.php"); ?>