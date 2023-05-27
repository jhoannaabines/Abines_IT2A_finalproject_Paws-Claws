<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Paws&Claws - Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="main.php" class="logo d-flex align-items-center  me-auto me-lg-0">
        
        <i class="bi bi-camera"></i>
        <h1>
        <?php 
          echo "Paws & Claws";
          ?>
        </h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a href="main.php"><?php echo "Home" ?></a></li>
          <li><a href="about.php"><?php echo "About" ?></a></li>
          <li class="dropdown"><a href="#" class="active"><span><?php echo "Gallery" ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            <li><a href="golden-retriever.php"><?php echo "Golden Retriever" ?></a></li>
            <li><a href="corgi.php"><?php echo "Corgi" ?></a></li>
            <li><a href="chihuahua.php"><?php echo "Chihuahua" ?></a></li>
            <li><a href="siamese.php"><?php echo "Siamese" ?></a></li>
            <li><a href="persian.php"><?php echo "Persian Cat" ?></a></li>
            <li><a href="lovebirds.php"><?php echo "Lovebirds" ?></a></li>
            <li><a href="macaws.php"><?php echo "Macaws" ?></a></li>
            <li><a href="doves.php"><?php echo "Doves" ?></a></li>
            <li><a href="thrianta.php"><?php echo "Thrianta" ?></a></li>
            <li><a href="florida.php"><?php echo "Florida White Rabbit" ?></a></li>
            <li><a href="betta-fish.php"><?php echo "Betta Fish" ?></a></li>
            <li><a href="oscar-fish.php"><?php echo "Oscar Fish" ?></a></li>
            </ul>
          </li>
          <li><a href="contact.php"><?php echo "Contact"?></a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2><?php echo"Adorable Pets"?></h2>
            <p><?php echo"Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem."?></p>

            <a class="cta-btn" href="contact.php"><?php echo"Contact us"?></a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src= <?php echo"assets/img/gallery/gold-retriever.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/gold-retriever.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/persian-cat.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/persian-cat.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/rabbit.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/rabbit.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/betta-fish.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/betta-fish.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/siamese-cat.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/siamese-cat.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/macaws.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/macaws.jpg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/dove.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/dove.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/corgi.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/corgi.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/dog.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/dog.jpg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/fuzzy.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/fuzzy.jpg" title="Gallery 10" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/persian1.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/persian1.jpg" title="Gallery 11" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/lovebirds.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/lovebirds.jpg" title="Gallery 12" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/pets.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/pets.jpg" title="Gallery 13" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/doggy.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/doggy.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/catty.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/catty.jpg" title="Gallery 15" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src=<?php echo"assets/img/gallery/birds.jpg"?> class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="assets/img/gallery/birds.jpg" title="Gallery 16" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single.php" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

    
    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
      &copy; <?php echo"Copyright"?> <strong><span><?php echo"2023"?> <strong><span><?php echo"Paws & Claws"?></span></strong><?php echo". All Rights Reserved"?>
      </div>
      <div class="credits">
        
          
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>