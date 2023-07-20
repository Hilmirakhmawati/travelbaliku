<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?php echo base_url('th1/css/animate.css')?>">
  
  <link rel="stylesheet" href="<?php echo base_url('th1/css/owl.carousel.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('th1/css/owl.theme.default.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('th1/css/magnific-popup.css')?>">

  <link rel="stylesheet" href="<?php echo base_url('th1/css/bootstrap-datepicker.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('th1/css/jquery.timepicker.css')?>">

  
  <link rel="stylesheet" href="<?php echo base_url('th1/css/flaticon.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('th1/css/style.css')?>">
</head>
<body>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('th1/images/bg_1.jpg')?>);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span> Booking <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Booking Paket</h1>
     </div>
 </div>
</div>
</section>
<h1 style="margin-top: 20px"></h1>
<h1></h1>
<h1 style="text-align: center; font-size: 40px; color: #f15d30;"></h1>
<section class="ftco-section contact-section ftco-no-pt">

  <div class="container" style="margin-top: 100px;">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="<?php echo base_url('c_travelbaliku/addbooking')?>" method = "POST">
          <div class="form-group">
            <input type="date" class="form-control" placeholder="tanggal_pesanan" name="tanggal_pesanan" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Paket" name="nama_paket">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Cash/Transfer" name="metode_bayar">
          </div>
          <div class="form-group">
            <input  type="file" class="form-control" placeholder="Bukti Pembayaran Digital" name="bukti"></input>
          </div>
          <div class="form-group">
            <input type="submit" value="Booking" class="btn btn-primary py-3 px-5">
          </div>
        </form>
        
      </div>

      <div class="col-md-6 d-flex">
       <div class="bg-white" style=" height: 400px; width: 800px; background-image: url(<?= base_url('th1/images/destination-10.jpg')?>);"></div>
     </div>
   </div>
 </div>
</section>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?php echo base_url('th1/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/jquery-migrate-3.0.1.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/jquery.easing.1.3.js')?>"></script>
<script src="<?php echo base_url('th1/js/jquery.waypoints.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/jquery.stellar.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo base_url('th1/js/bootstrap-datepicker.js')?>"></script>
<script src="<?php echo base_url('th1/js/scrollax.min.js')?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo base_url('th1/js/google-map.js')?>"></script>
<script src="<?php echo base_url('th1/js/main.js')?>"></script>

</body>
</html>