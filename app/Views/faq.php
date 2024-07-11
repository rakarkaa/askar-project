<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="<?= base_url() . 'assets/img/portfolio/A.png'; ?>">
  <link rel="apple-touch-icon" href="<?= base_url() . 'assets/img/apple-touch-icon.png'; ?>">

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
  <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/imagebox.css" rel="stylesheet" type="text/css">

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
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="<?php echo base_url('assets/img/portfolio/A.png'); ?>" alt="">
        <h1><img src="<?php echo base_url('assets/img/portfolio/askar.png'); ?>"></h1>
      </a>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a href="<?php echo base_url('askar') ?>">Home</a></li>
          <li><a href="<?php echo base_url('about') ?>">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo base_url('gallery') ?>">Photo</a></li>
              <li><a href="<?php echo base_url('gallerytwo') ?>">Video</a></li>
            </ul>
          </li>
          <li><a class="active" href="<?php echo base_url('faq') ?>">F.A.Q</a></li>
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
            <h2>FAQ (Frequently Asked Question)</h2>
            <p>FAQ (Frequently Asked Questions) di website fotografi kami menyediakan jawaban untuk pertanyaan umum tentang layanan yang kami berikan, FAQ ini membantu menjelaskan layanan kami dan mempermudah pengalaman Anda. Jika ada pertanyaan lebih lanjut, silakan hubungi kami. .</p>

            <a class="cta-btn" href="contact.html">Available for hire</a>
           

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
                <img src="<?php echo base_url('assets/img/gallery/JIE222.jpg'); ?>" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo base_url('assets/img/gallery/JIE111.jpg'); ?>" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo base_url('assets/img/gallery/KMA111.jpg'); ?>" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo base_url('assets/img/gallery/JIE222.jpg'); ?>" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo base_url('assets/img/gallery/JIE111.jpg'); ?>" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo base_url('assets/img/gallery/KMA111.jpg'); ?>" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>
</div>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-question-circle"></i>
              <h4><a href="" class="stretched-link">Kenapa Memilih Askar Photography</a></h4>
              <p>Team yang profesional dan kreatif yang
                 Menangani lebih dari 800 client per tahun terjamin Keamanan Data - data dan
                 Dapat mengakses File Google Drive Selama 2 Tahun</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-body-text"></i>
              <h4><a href="" class="stretched-link">Syarat & Ketentuan</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="" class="stretched-link">Kapan Mendapatkan File Edit Foto dan Video</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-cash-coin"></i>
              <h4><a href="" class="stretched-link">Pembayaran</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>

            <div class="col-xl-3 col-md-6 d-flex">
            <div class="service-item position-relative">
              <i class="bi bi-file-earmark-arrow-down"></i>
              <h4><a href="" class="stretched-link">Apakah Mendapatkan Original File</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-header">
          <h2>Prices</h2>
          <p>Check my adorable pricing</p>
        </div>

        <div class="row gy-4 gx-lg-5">

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>Portrait Photography</h3>
              <h4>$160.00</h4>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>Fashion Photography</h3>
              <h4>$300.00</h4>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>Sports Photography</h3>
              <h4>$200.00</h4>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>Still Life Photography</h3>
              <h4>$120.00</h4>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>Wedding Photography</h3>
              <h4>$500.00</h4>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="pricing-item d-flex justify-content-between">
              <h3>Photojournalism</h3>
              <h4>$200.00</h4>
            </div>
          </div>

        </div> -->
    <!-- </section>End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Review, What they are saying</p>
        </div>

        <div class="slides-3 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                “Aaaa love Askar!!!. Semoga ada rejeki buat pake kalian lagi di siraman dan pengajian !! sukaakkkk. Makasih buat mas ramdhan dan mas arul. Uda arahin gaya aku yg kaku dan tegang. Makasih banyak dr aku dan mas bayu”.  
                </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url('assets/img/testimonials/saribayu.png'); ?>" class="testimonial-img" alt="">
                  <h3>Sari & Bayu, 23 Desember 2020  </h3>
                  <h4>Clien</h4>
                </div>
              </div>
        

            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                “Lanjut vendor selanjutnya , yaitu vendor dokumentsi yang terpenting mengabadikan moment penikahan kami. Karena dengan adanya photo dan video itu yang bia kami lihat terus dan kenang, jadi sebisa mungkin jangan sampai salah pilih karena harus benar – benar sesuai selera kalian. Dan pilihanku jatuh kepada @Askar_photography. Masya Allah beruntung banget ketemu para team askar yang bertugas pada acara pernikahanku kemarin, baik – baik banget, dan gak usah di ragukan lagi hasilnya, photo dan videonya bagus banget. I’m so happy!!!!”.
                </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url('assets/img/testimonials/anggita.png'); ?>" class="testimonial-img" alt="">
                  <h3>Anggita & Zahran</h3>
                  <h4>Clien</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                “Alhamdulillah. Terimakasih banyak, Askarr… resultnya oke sekaliii. Sy & pasangan suka hahahaha. Once again thank you ,yaa…”  
                </p>
                <div class="profile mt-auto">
                  <img src="<?php echo base_url('assets/img/testimonials/erdzy.png'); ?>" class="testimonial-img" alt="">
                  <h3>Erdzy & Riady</h3>
                  <h4>Clien</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                “Masya Allah MasyaAllah… baguusss bgt kaaaa vidionyaaa.. sukaaa bgt bgt bgt bgt kaa.. jd gasaabar mau kesana.. makasih banyak bgt yaa kaa”. 
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/ilmi.png" class="testimonial-img" alt="">
                  <h3>Ilmi & Fiqi</h3>
                  <h4>Clien</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                “Assalamualaikum, Boleh tolong bilangin team yg kemarin di 165, aku minta SDE yg diputer pas acara resepsi. Makasih ya maas, bagus bgt hasilnya”.  
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/zaza.png" class="testimonial-img" alt="">
                  <h3>Zaza & Fikri</h3>
                  <h4>Clien</h4>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>