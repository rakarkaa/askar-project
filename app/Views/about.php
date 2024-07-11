<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - About</title>
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
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" type="text/css">
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
          <li><a class="active" href="<?php echo base_url('about') ?>">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="<?php echo base_url('gallery') ?>">Photo</a></li>
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
          <div class="col-lg-7 text-center">
            <h2>About</h2>
            <h3>Tentang Kami</h3>
            <p>Askar Photography adalah perusahaan yang menangani jasa Photography, Videography, dan Video Editing. Melayani liputan wedding serta prewedding mulai dari foto liputan, candid, foto produk, wedding clip, company profile bahkan sampai dengan pembuatan video clip. 

              Selain itu, kami juga menangani liputan berbagai event yang diadakan dari perusahaan ataupun dari sebuah event organizer seperti meeting, outbound, konser musik, ulang tahun perusahaan atau berbagai bentuk promosi yg diadakan oleh sebuah perusahaan dalam bentuk dokumentasi foto dan video.</p>

            <a class="cta-btn" href="contact.html">Available for hire</a>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?php echo base_url('assets/img/askartim.png'); ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 content">
            <h2>Professional Photographer</h2>
            <p class="fst-italic py-3">
            Askar Photography adalah perusahaan yang menangani jasa Photography & Videography
            Kami memiliki tim yang ramah, energik, dan juga berdedikasi tinggi dalam mengabadikan moment kalian
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
</section>

      <!-- about 2 -->
      <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="row justify-content-between gy-4 mt-4">

<div class="col-lg-8">
  <div class="portfolio-description">
    <h2>VISI & PRINSIP KERJA</h2>
    <p>
    Visi : Menjadi penyedia jasa photography & videography terbaik untuk semua kalangan

    </p>
    <h2>Prinsip Kerja :</h2>
    <p> Cepat : Datang Tepat Waktu dan Menyelesaikan job dengan tepat waktu. </p>
    <p> Tepat : Menyelesaikan job sesuai dengan permintaan </p>
    <p> Kreatif : Memberikan ide yang kreatif dalam pelayanan dan hasil jasa </p>
    <p> Inovatif : Menghasilkan jasa berkualitas dan terbaru seiring perkembangan teknologi serta zaman </p>
    <p> Efisien : Cermat dan teliti dalam mengerjakan job yang diberikan </p>

    <div class="testimonial-item">
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        Kepuasan Anda Menjadi Kebanggaan Kami <strong>"HARGA MURAH HASIL MEWAH"</strong>
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
      <div>
        <img src="<?php echo base_url('assets/img/mastommy.png'); ?>" class="testimonial-img" alt="">
        <h3>Yazid Busthomi</h3>
        <h4> (Founder & Fotographer)</h4>
      </div>
    </div>

    <p>
    Pengalaman memotret sudah dari tahun 2005, dulu awalnya saya terjun di bidang videography, kemudian saya tertarik untuk mencoba dunia photography, karena memang hobi ya saya senang walaupun awalnya emang agak susah siiihh..
    dulunya memang saya bekerja di bidang advertising (design grafis) ya ga jauh lah tetep dalam satu bidang yaitu SENI. Nah untuk itu saya padukan aliran seni design saya dengan hobi motret saya di dalam ASKAR PHOTOGRAPHY.

    <p>
    Kurang lebih 100x an kali sessi pemotretan dari tahun 2006 yang saya dapat dan yang paling mengesankan semua bilang “PUAS” dengan hasil yang saya berikan.
    Askar Photography sendiri berdiri pada september 2012 lalu, yang tadinya nama yang saya pakai adalah jasmine photography  ( sejak tahun 2005 ). Dengan konsep yang baru saya coba membuat nama baru. Dengan hasil-hasil yang baru pula tentunya yang pasti lebih Bagus dari yang sebelumnya.
    </p>

  </div>
</div>

<div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> <span>Photography</span></li>
                <li><strong>Client</strong> <span></span></li>
                <li><strong>Project date</strong> <span>2024</span></li>
                <li><strong>Project URL</strong> <a href="#">www.photography.com</a></li>
                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section>
    
    <!-- End About Section -->

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
       Copyright <strong><span>PhotoFolio</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        2024 <link href="<?php echo base_url() . 'https://askarphoto.com/'; ?>"> Inc </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() . 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/swiper/swiper-bundle.min.js'; ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/glightbox/js/glightbox.min.js'; ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/aos/aos.js'; ?>"></script>
  <script src="<?= base_url() . 'assets/vendor/php-email-form/validate.js'; ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>