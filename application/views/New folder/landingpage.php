<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartDry, Smart Laundry</title>
    <link rel="stylesheet" href="<?php echo base_url('landingpage/assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('landingpage/assets/css/fontawesome.css')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="<?php echo base_url('landingpage/images/logo.png')?>" alt="logo image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">About</a></li>
          
          <li class="nav-item"><a class="nav-link" href="login">Login</a>
          </li>
        </ul>
        <button type="button" class="rounded-pill btn-rounded">
          0895410962726
          <span>
            <i class="fas fa-phone-alt"></i>
          </span>
        </button>
      </div>
    </div>
  </nav>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro">SmartDry</span>
          <span class="display-2--description lh-base">
          SmartDry adalah aplikasi berbasis web yang dibuat khusus untuk membantu pengusaha laundry. 
          Mulai dari Produksi, hingga Akuntansi, semuanya dapat dikelola dengan lebih mudah dan efisien.

          </span>
        </h1>
        <button type="button" class="rounded-pill btn-rounded">Get Started
          <span><i class="fas fa-arrow-right"></i></span>
        </button>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros text-end">
        <div class="video-box">
          <img src="<?php echo base_url('landingpage/images/arts/laundry1.png')?>" alt="video illutration" class="img-fluid">
          <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
            <span>
              <i class="fas fa-play-circle"></i>
            </span>
            <span class="border-animation border-animation--border-1"></span>
            <span class="border-animation border-animation--border-2"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->

 
    
<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES  
///////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="services" class="services">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold">Our Services</h1>
      <div class="heading-line mb-1"></div>
    </div>
  <!-- START THE DESCRIPTION CONTENT  -->
    <div class="row pt-2 pb-2 mt-0 mb-3">
      <div class="col-md-6 border-right">
        <div class="bg-white p-3">
          <h2 class="fw-bold text-capitalize text-center">
          
          </h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 text-start">
          <p class="fw-light">
          
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE SERVICES  -->
  <div class="container">
    <!-- START THE MARKETING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-paper-plane"></div>
          <h3 class="display-3--title mt-1">Pantau Keuangan Dengan Mudah</h3>
          <p class="lh-lg">
          Tak perlu mencari akuntan professional, Smartlink telah menerapkan sistem akuntansi yang sesuai standar untuk menangani keuangan usaha anda.
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="<?php echo base_url('landingpage/images/services/service-1.png')?>" alt="marketing illustration" class="img-fluid">
        </div>
      </div>
    </div>
    <!-- START THE WEB DEVELOPMENT CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
        <div class="services__pic">
          <img src="<?php echo base_url('landingpage/images/services/service-2.png')?>" alt="web development illustration" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code"></div>
          <h3 class="display-3--title mt-1">Nota Digital & Otomatis</h3>
          <p class="lh-lg">
          Nota konsumen dapat berbentuk digital, bisa dikirim melalui SMS atau WhatsApp secara otomatis. Tanpa perlu membuka aplikasinya secara manual satu persatu.
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
    </div>
    <!-- START THE CLOUD HOSTING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-cloud-upload-alt"></div>
          <h3 class="display-3--title mt-1">Terintegrasi Dalam Satu Sistem</h3>
          <p class="lh-lg">
          Anda dapat mengelola banyak outlet, kasir, kurir, serta produksi tanpa perlu dipusingkan dengan rekonsiliasi data.
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="<?php echo base_url('landingpage/images/services/service-3.png')?>" alt="cloud hosting illustration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="testimonials" class="testimonials">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="container">
    <div class="row text-center text-white">
      <h1 class="display-3 fw-bold">Caption</h1>
      <hr style="width: 100px; height: 3px; " class="mx-auto">
      <p class="lead pt-1">What our teams are saying</p>
    </div>

    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row align-items-center">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- CAROUSEL ITEM 1 -->
          <div class="carousel-item active">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Semoga dengan adanya SmartDry ini dapat membantu usaha laundry.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="<?php echo base_url('landingpage/images/testimonials/client-1.jpg')?>" alt="client-1 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Rizky Pratama</h3>
              <p class="fw-light">CEO & founder</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 2 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                SmartDry tentunya dapat meningkatkan umkm.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="<?php echo base_url('landingpage/images/testimonials/client-2.jpg')?>" alt="client-2 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Paijat Kurniawati</h3>
              <p class="fw-light">Finance Manager</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 3 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                SmartDry memiliki interface yang keren dan menarik
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="<?php echo base_url('landingpage/images/testimonials/client-3.jpg')?>" alt="client-3 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Ajinomoto kun</h3>
              <p class="fw-light">Global brand manager</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 4 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Tidak membuat catatan dan hitung manual karena menggunakan SmartDry.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="<?php echo base_url('landingpage/images/testimonials/client-4.jpg')?>" alt="client-4 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Ekameck</h3>
              <p class="fw-light">C.E.O & Founder</p>
            </div>
          </div>     
        </div>
        <div class="text-center">
          <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        </button>
        <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        </button>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>





    

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
              START SECTION 8 - GET STARTED  
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="contact" class="get-started">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
      <div class="heading-line"></div>
      <p class="lh-lg">
        
      </p>
    </div>

    

<!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER  
///////////////////////////////////////////////////////////////////////////////////////////////-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- CONTENT FOR THE MOBILE NUMBER  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            <path d="M15 7a2 2 0 0 1 2 2" />
            <path d="M15 3a6 6 0 0 1 6 6" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">0895410962726</a>
          
        </div>
      </div>  
      <!-- CONTENT FOR EMAIL  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="3 9 12 15 21 9 12 3 3 9" />
            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
            <line x1="3" y1="19" x2="9" y2="13" />
            <line x1="15" y1="13" x2="21" y2="19" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">pratamarizky258@gmail.com</a>
          <p class="contact-box__info--subtitle">Online support</p>
        </div>
      </div>
      <!-- CONTENT FOR LOCATION  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="18" y1="6" x2="18" y2="6.01" />
            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
            <line x1="9" y1="4" x2="9" y2="17" />
            <line x1="15" y1="15" x2="15" y2="20" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">Jl. Cendrawasih no 28 Gianyar</a>
          <p class="contact-box__info--subtitle">Gianyar,Bali,Indonesia</p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class="footer-sm" style="background-color: #212121;">
    <div class="container">
      <div class="row py-4 text-center text-white">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          connect with us on social media
        </div>
        <div class="col-lg-7 col-md-6">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE CAMPANY INFO -->
  

  <!-- START THE COPYRIGHT INFO  -->
  <div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">
          <div class="footer-bottom__copyright">
            &COPY; Copyright 2022 <a href="#">Company</a> | Created by <a href="http://codewithpatrick.com" target="_blank">RizkyPratama</a><br><br>

            Distributed by <a href="http://themewagon.com" target="_blank">SmartDry</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- BACK TO TOP BUTTON  -->
<a href="#" class="shadow btn-primary rounded-circle back-to-top">
  <i class="fas fa-chevron-up"></i>
</a>



   
    <script src="assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
      const lightbox = GLightbox({
        'touchNavigation': true,
        'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
});
    
    </script>
     <script src="<?php echo base_url('landingpage/assets/js/bootstrap.bundle.min.js')?>"></script>
</body>
</html>