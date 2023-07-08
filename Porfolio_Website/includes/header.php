<!DOCTYPE html>
<html lang="gr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GeoMano Design</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets\img\GeoManoLogo.png" rel="icon">
  <link href="assets\img\GeoManoLogo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

       <style>
          .item img {
            width: 450px; /* Adjust the width as needed */
            height: 400px; /* Adjust the height as needed */
            object-fit: cover; /* Preserve aspect ratio and fill the container */
          }
        </style>

  <!-- =======================================================
  * Template Name: MyPortfolio
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Navbar ======= -->
  <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
    <div class="container py-2 py-md-5">
      <div class="row align-items-start">
        <div class="col-md-10">
          <ul class="custom-menu">
            <li><a href="index.php">Αρχική</a></li>
            <li><a href="about.php">Σχετικά με εμάς</a></li>
            <li><a href="services.php">Υπηρεσίες</a></li>
            <li><a href="categories.php">Έργα για έμπνευση</a></li>
            <li><a href="work_upload.php">Μοιράσου το έργο σου</a></li>
            <li><a href="Upload_image.php">Ζήτα προσφορά</a></li>
            <li><a href="portfolio.php"></a></li>
            <!-- <li><a href="Upload_image.php">ArtForm</a></li>
            <li><a href="portfolio.php">Γίνε μία από εμάς</a></li> -->
          </ul>
        </div>
        <div class="col-md-2  d-md-block">
          <ul class="custom-menu">
            <li> <?php

        session_start();

        // Check if the user is already logged in
        if (isset($_SESSION['username'])) {
            echo 'Hello, ' . $_SESSION['username'] . '!'; // Display the user's name
            echo '<br><a href="logout.php">Αποσύνδεση</a>'; // Provide a logout link
        } else {
            echo '<div><a href="signin.php">Σύνδεση</a></div>';
            echo '<div><a href="signup.php">Εγγραφή</a></div>'; // Display the "Sign In" link if the user is not logged in
        }
     ?> 
    <!-- <p><a href="admin.php">Admin</a></p> -->
    </li>
          </ul>
          <p> <br><a href="mailto:geomano@gmail.com">geomano@gmail.com</a></p>
        </div> 
        <!-- <div class="col-md-6 d-none d-md-block  mr-auto"> -->
          <!-- <div class="tweet d-flex"> -->
            <!-- <span class="bi bi-twitter text-white mt-2 mr-3"></span> -->
            <!-- <div>
              <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis explicabo inventore. <br> <a href="#">t.co/v82jsk</a></em></p>
            </div> -->
          <!-- </div> -->
        <!-- </div> -->

          
        </div>
      </div>
        
      </div>

    </div>
  </div>

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">OurPortfolio.</a>
      <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
        <span></span>
      </a>
    </div>
  </nav>