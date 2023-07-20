<!DOCTYPE html>
<html>
<head>
    <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('th1/css/animate.css')?>">
    
    <link rel="stylesheet" href="<?= base_url('th1/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('th1/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('th1/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?= base_url('th1/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?= base_url('th1/css/jquery.timepicker.css')?>">

    
    <link rel="stylesheet" href="<?= base_url('th1/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?= base_url('th1/css/style.css')?>">
</head>
<body>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('th1/images/bg_1.jpg')?>);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tour List <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Tours List</h1>
     </div>
 </div>
</div>
</section>


<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
               <span class="subheading">Destination</span>
               <h2 class="mb-4">Pilihan Paket Keluarga</h2>
            </div>
      </div>
       <div class="row">
          <div class="col-md-12 ">
            <?php foreach ($vpaket_perkategori -> result_array() as $key):?>
             <div class="project-wrap">
                <a href="#" class="img" style="background-image: url(<?= base_url('th1/images/bg_2.jpg')?>);">
                   <span class="price">Rp <?php echo $key['harga_paket']?> K</span>
               </a>
               <div class="text p-4">
                   <span class="days"><?php echo $key['nama_paket']?></span>
                   <h3><a href="#">Banaue Rice Terraces</a></h3>
                   <p> <?php echo $key['id_kategori']?></p>
                   <ul>
                      <li><span class="flaticon-shower"></span>2</li>
                      <li><span class="flaticon-king-size"></span>3</li>
                      <li><span class="flaticon-mountains"></span>Near Mountain</li>
                  </ul>
              </div>
          </div>
          <?php endforeach ?>
      </div>
   </div>
</section>


<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12 text-center">
          <div class="img"  style="background-image: url(<?= base_url('th1/images/bg_2.jpg')?>);">
             <div class="overlay"></div>
             <h2>We Are Pacific A Travel Agency</h2>
             <p>We can manage your dream building A small river named Duden flows by their place</p>
             <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
         </div>
     </div>
 </div>
</div>
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?= base_url('th1/js/jquery.min.js')?>"></script>
<script src="<?= base_url('th1/js/jquery-migrate-3.0.1.min.js')?>"></script>
<script src="<?= base_url('th1/js/popper.min.js')?>"></script>
<script src="<?= base_url('th1/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('th1/js/jquery.easing.1.3.js')?>"></script>
<script src="<?= base_url('th1/js/jquery.waypoints.min.js')?>"></script>
<script src="<?= base_url('th1/js/jquery.stellar.min.js')?>"></script>
<script src="<?= base_url('th1/js/owl.carousel.min.js')?>"></script>
<script src="<?= base_url('th1/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?= base_url('th1/js/jquery.animateNumber.min.js')?>"></script>
<script src="<?= base_url('th1/js/bootstrap-datepicker.js')?>"></script>
<script src="<?= base_url('th1/js/scrollax.min.js')?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('th1/js/google-map.js')?>"></script>
<script src="<?= base_url('th1/js/main.js')?>"></script>
</body>
</html>