<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Paws&Claws - Gallery Single</title>
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
            <h2><?php echo "Gallery Single"?></h2>
            <p><?php echo "It is a charming section dedicated to exhibiting our adorable and cherished pets. You can immerse yourself in the happiness and beauty that pets bring by browsing through the treasure trove of memorable memories that have been preserved in images and narratives within these virtual walls."?></p><br>
            <p><?php echo "From the moment you enter the gallery, you'll notice the welcoming ambiance, gently lit exhibits, and arresting artwork lining the walls. With its natural colors and quirky details that foster a sense of harmony and tranquillity, the blog's aesthetic shows a love for animals and the natural world."?></p>

            <a class="cta-btn" href="contact.php"><?php echo "Contact us"?></a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src=<?php echo "assets/img/gallery/corgi.jpg"?> alt="">
              </div>
              <div class="swiper-slide">
                <img src=<?php echo"assets/img/gallery/dog.jpg"?> alt="">
              </div>
              <div class="swiper-slide">
                <img src=<?php echo"assets/img/gallery/fuzzy.jpg"?> alt="">
              </div>
              <div class="swiper-slide">
                <img src=<?php echo"assets/img/gallery/persian1.jpg"?> alt="">
              </div>
              <div class="swiper-slide">
                <img src=<?php echo"assets/img/gallery/lovebirds.jpg"?> alt="">
              </div>
              <div class="swiper-slide">
                <img src=<?php echo"assets/img/gallery/pets.jpg"?> alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2><?php echo "Brief Story of the Life of a Pet Groomer"?></h2>
              <p>
              <?php echo "From an early age, I had a special bond with animals. I found solace and joy in their presence, and they seemed to be drawn to my gentle and caring nature."?>
              </p>
              <p>
              <?php echo "As I grew older, I would spend hours observing their behaviors, understanding their needs, and showering them with love and affection. It was during this time that I discovered my calling—to become a pet groomer and make a difference in the lives of furry companions."?>
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <?php echo "Pets have an extraordinary ability to fill our lives with unconditional love, joy, and endless tail wags. Embracing them in our hearts and caring for them is a privilege that brings immense happiness and purpose to our lives."?>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src=<?php echo "assets/img/testimonials/testimonial.jpg"?> class="testimonial-img" alt="">
                  <h3><?php echo "Jhoanna Mae R. Abines"?></h3>
                  <h4><?php echo "Professional Pet Groomer"?></h4>
                </div>
              </div>

              <p>
              <?php echo "Driven by my deep love for animals, I dedicated myself to learning the art of pet grooming. I sought out mentors, attended workshops, and eagerly devoured books on the subject. With each passing day, my skills improved, and my understanding of different breeds and their specific grooming requirements expanded."?>

              <p>
              <?php echo "My journey as a pet groomer not only fulfilled my passion but also enriched the lives of countless furry friends. Through my tireless dedication, I created a lasting bond between pets and their owners, reminding everyone that love, compassion, and a good grooming session can truly bring happiness to the hearts of both humans and animals alike."?>
              </p>
              

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3><?php echo "Paws & Claws Information"?></h3>
              <ul>
                <li><strong><?php echo "Category"?></strong> <span><?php echo "Pet Photography"?></span></li>
                <li><strong><?php echo "Photographer"?></strong> <span><?php echo "Kisha Mangubat"?></span></li>
                <li><strong><?php echo "Project date"?></strong> <span><?php echo "8 May, 2023"?></span></li>
                <li><strong><?php echo "Project URL</strong"?> <a href="#"><?php echo "www.paws&claws.com"?></a></li>
                <li><a href="#" class="btn-visit align-self-start"><?php echo "Visit Website"?></a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

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