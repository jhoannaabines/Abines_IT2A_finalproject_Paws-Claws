<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Paws&Claws - About</title>
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
          <li><a href="about.php" class="active"><?php echo "About" ?></a></li>
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
            <h2><?php echo "About"?> </h2>
            <p> <?php echo "Greetings from Paws and Claws! We're thrilled to have you along on the journey as we celebrate the fascinating world of pets. Our mission is to offer insightful knowledge, practical advice, and interesting content that will help you improve the health and happiness of your pets."?> </p>

            <a class="cta-btn" href="contact.php"><?php echo "Contact us" ?></a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src=<?php echo "assets/img/jhoana-img.jpg" ?> class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2><?php echo "Professional Pet Groomer in Marinduque"?></h2>
            <p class="fst-italic py-3">
            <?php echo "Jhoanna Abines has always felt a particular bond with animals. Their adventure began with a sincere passion for animals and a desire to improve their welfare. Also, she pursued in-depth training and education in the discipline of pet grooming, and consistently honed their abilities to guarantee the best care and safety for each animal customer."?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Birthday:"?></strong> <span> <?php echo "November 18, 1993"?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Website:"?></strong> <span> <?php echo "www.petgroomer.com"?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Phone:"?></strong> <span> <?php echo "+63 945-776-8431"?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Province:"?></strong> <span> <?php echo "Marinduque"?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Age:"?></strong> <span> <?php echo "30"?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Degree:"?></strong> <span> <?php echo "Master in Animal Science"?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Email:"?></strong> <span> <?php echo "petgroomer@gmail.com"?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong><?php echo "Freelance:"?></strong> <span> <?php echo "Pet Groomer"?></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
            <?php echo "Our blog was born out of a deep love and appreciation for animals. It all started several years ago when Kisha Mangubat, the founder of Paws and Claws, welcomed their first furry companion into their life. This furry friend quickly became a beloved member of the family, igniting a passion for all things pet-related."?>

            </p>
            <div class="m-0">
            <?php echo "Driven by a desire to share their experiences, knowledge, and the joy that pets bring, Kisha Mangubat, along with Ma Angela Sanchez and Jhoanna Abines, launched Paws and Claws. What began as a personal journal to record their pet's achievements and adventures quickly transformed into a website dedicated to assisting other pet owners in navigating the ups and downs of pet ownership."?><br><br>
            <p><?php echo "Our commitment to strengthening the human-animal connection, supporting animal welfare, and encouraging responsible pet ownership remains unchanged throughout the years. The content we provide is always growing to include a wide range of subjects, such as pet health, behavior, training, and the most recent trends in the pet industry."?></p><br>
            <p><?php echo "We are incredibly appreciative of the patronage and participation of our readers, who motivate us daily to keep producing insightful content. Join our community, share your experiences, and go together with us on this enlightening adventure."?></p>
             

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

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