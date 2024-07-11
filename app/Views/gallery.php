<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="<?= base_url() . 'public/assets/img/portfolio/A.png'; ?>">
  <link rel="apple-touch-icon" href="<?= base_url() . 'public/assets/img/apple-touch-icon.png'; ?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>public/assets/css/main.css" rel="stylesheet" type="text/css">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="public/assets/img/logo.png" alt=""> -->
        <img src="<?php echo base_url('public/assets/img/portfolio/A.png'); ?>" alt="">
        <h1><img src="<?php echo base_url('public/assets/img/portfolio/askar.png'); ?>"></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo base_url('askar') ?>">Home</a></li>
          <li><a href="<?php echo base_url('about') ?>">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a class="active" href="<?php echo base_url('gallery') ?>">Photo</a></li>
              <li><a href="<?php echo base_url('gallerytwo') ?>">Video</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('faq') ?>">F.A.Q</a></li>
          <li><a href="<?php echo base_url('contact') ?>">Contact</a></li>
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
            <h2>Photograph Wedding</h2>
            <p>.</p>

            <a class="cta-btn" href="contact.html">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center">

          <?php foreach ($media as $item) { ?>

            <?php if ($item->media_filetype == 'image/png' || $item->media_filetype == 'image/jpeg' || $item->media_filetype == 'image/jpg') { ?>
              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                  <img src="<?= base_url($item->media_filepath) ?>" class="img-fluid" alt="">
                  <div class="gallery-links d-flex align-items-center justify-content-center">
                    <a href="public/assets/img/gallery/gallery-1.jpg" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                    <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div><!-- End Gallery Item -->
          <?php }
          } ?>




        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() . 'public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
  <script src="<?= base_url() . 'public/assets/vendor/swiper/swiper-bundle.min.js'; ?>"></script>
  <script src="<?= base_url() . 'public/assets/vendor/glightbox/js/glightbox.min.js'; ?>"></script>
  <script src="<?= base_url() . 'public/assets/vendor/aos/aos.js'; ?>"></script>
  <script src="<?= base_url() . 'public/assets/vendor/php-email-form/validate.js'; ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('public/assets/js/main.js'); ?>"></script>

</body>

</html>