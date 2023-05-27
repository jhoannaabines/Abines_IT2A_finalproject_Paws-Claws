<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Paws&Claws - Contact</title>
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
          <li class="dropdown"><a href="#"><span><?php echo "Gallery" ?></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
          <li><a href="contact.php"class="active"><?php echo "Contact"?></a></li>
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
            <h2><?php echo "Contact"?></h2>
            <p><?php echo "We love receiving feedback from readers and other pet enthusiasts like you! We would be delighted to hear from you whether you have a query, a recommendation, or simply want to share your pet's experiences."?></p> <br>
            <p><?php echo "Please feel free to contact us via phone or email. We're here to support you, offer knowledge, and spread the joy of pet ownership."?></p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4><?php echo "Location:"?></h4>
                <p><?php echo "Tanza, Boac, Marinduque"?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4><?php echo "Email:"?></h4>
                <p><?php echo "paws&claws@gmail.com"?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4><?php echo "Call:"?></h4>
                <p><?php echo "+63 951-6664-502"?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading"><?php echo "Loading"?></div>
                <div class="error-message"></div>
                <div class="sent-message"><?php echo "Your message has been sent. Thank you!"?></div>
              </div>
              <div class="text-center"><button type="submit"><?php echo "Send Message"?></button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

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