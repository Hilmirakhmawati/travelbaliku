<!DOCTYPE html>
<html lang="en">
<head>
	<title>travelbaliku</title>
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
	
	
	<div class="hero-wrap js-fullheight" style="background-image: url('../th1/images/bg_2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-12 ftco-animate">
					<span class="subheading">Hi! <?php echo $this->session->userdata('name');  ?> Selamat datang di Website Travelbaliku</span>
					<h1 class="mb-4">TEMUKAN PAKET ANDA <br> BERSAMA KAMI</h1>
					<p class="caps">Travel to the any corner of the world, without going around in circles</p>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ftco-search d-flex justify-content-center">
						<div class="row">
							<div class="col-md-12 nav-link-wrap">
								<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Cari Paket</a>

								</div>
							</div>
							<div class="col-md-12 tab-wrap">
								
								<div class="tab-content" id="v-pills-tabContent">

									<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
										<form action="#" class="search-property-1">
											<div class="row no-gutters">
												<div class="col-md d-flex">
													<div class="form-group p-4 border-0">
														<label for="#">PAKET TRAVEL</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-search"></span></div>
															<input type="text" class="form-control" placeholder="Cari Paket">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">TANGGAL CHECK-IN</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkin_date" placeholder="Tanggal Check In">
														</div>
													</div>
												</div>
												<div class="col-md d-flex">
													<div class="form-group p-4">
														<label for="#">TANGGAL CHECK OUT</label>
														<div class="form-field">
															<div class="icon"><span class="fa fa-calendar"></span></div>
															<input type="text" class="form-control checkout_date" placeholder="Tanggal Check Out">
														</div>
													</div>
												</div>
												<div class="col-lg d-flex">
													<div class="form-group d-flex w-100 border-0">
														<div class="form-field w-100 align-items-center d-flex">
															<input type="submit" value="CARI" class="align-self-stretch form-control btn btn-primary p-0">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section services-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
						<div class="w-100">
							<span class="subheading">-Travelbaliku-</span>
							<h2 class="mb-4" style=" font-size: 25px;">Mengapa Harus Travelbaliku?</h2>
							<p>Travelbaliku adalah sebuah perusahaan yang bergerak dalam bidang Biro Perjalanan Wisata Lokal Bali, Indonesia.
							<p>Travelbaliku Dimulai pada Tahun 2022 di Bali, Indonesia.  Fokus dengan kepuasan pelanggan dan kepedulian lingkungan Kami akan membawa Anda pada liburan yang berbeda, seperti hal nya mengambil bagian dalam budaya dan menunjukkan keindahan alam pulau Dewata. Kami memastikan liburan Anda menyenangkan dan mengesankan. Bersama dengan kami tentunya biaya Anda akan sebanding dengan kenyamanan yang Anda dapatkan.</p>
							<p>Travelbaliku Dikelola langsung oleh agen lokal Bali, harga lebih terjangkau dengan pelayanan yang ramah khas Bali dengan Pelaayanan Ramah, Lebih Terjangkau, Berkualitas, Pemesanan Mudah</p>
							<p><a href="<?php echo base_url('c_travelbaliku/vpaketwisata')?>" class="btn btn-primary py-3 px-4">Cari Destinasi</a></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-1 d-block img" style="background-image: url(../th1/images/services-1.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Pelayanan Ramah</h3>
										<p>Pelayanan Travelbaliku Ramah.</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-2 d-block img" style="background-image: url(../th1/images/services-2.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Lebih Terjangkau</h3>
										<p>Harga Travelbaliku Lebih Terjangkau dari Travel Lainnya.</p>
									</div>
								</div>    
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-3 d-block img" style="background-image: url(../th1/images/services-3.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Berkualitas</h3>
										<p>Travelbaliku Memastikan perjalanan yang Berkualitas</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-4 d-block img" style="background-image: url(../th1/images/services-4.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Pemesanan Mudah</h3>
										<p>Travelbaliku Dapat Dipesan Dengan Mudah</p>
									</div>
								</div>      
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Destination</span>
						<h2 class="mb-4">Pilihan Kategori Paket Wisata</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="<?php echo base_url('c_travelbaliku/kvdatakeluarga')?>" class="img" style="background-image: url(../th1/images/destination-1.jpg);">
								
							</a>
							<div class="text p-4">
								
								<h3><a href="<?php echo base_url('c_travelbaliku/kvdatakeluarga')?>">Paket Keluarga</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Bali,Indonesia</p>
								<p><a href="<?php echo base_url('c_travelbaliku/kvdatakeluarga')?>" class="btn btn-primary">Lihat Lainya</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="<?php echo base_url('c_travelbaliku/kvdatahoneymoon')?>" class="img" style="background-image: url(../th1/images/destination-2.jpg);">
							</a>
							<div class="text p-4">
								
								<h3><a href="<?php echo base_url('c_travelbaliku/kvdatahoneymoon')?>">Paket Honeymoon</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Bali,Indonesia</p>
								<p><a href="<?php echo base_url('c_travelbaliku/kvdatahoneymoon')?>" class="btn btn-primary">Lihat Lainya</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
							<a href="<?php echo base_url('c_travelbaliku/kvdatagrup')?>" class="img" style="background-image: url(../th1/images/destination-3.jpg);">
								
							</a>
							<div class="text p-4">
								
								<h3><a href="<?php echo base_url('c_travelbaliku/kvdatagrup')?>">Paket Grup</a></h3>
								<p class="location"><span class="fa fa-map-marker"></span> Bali,Indonesia</p>
								<p><a href="<?php echo base_url('c_travelbaliku/kvdatagrup')?>" class="btn btn-primary">Lihat Lainya</a></p>
							</div>
						</div>
					</div>
		</section>
		
		<section class="ftco-section ftco-about img"style="background-image: url(../th1/images/bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container py-md-5">
				<div class="row py-md-5">
					<div class="col-md d-flex align-items-center justify-content-center">
						
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-about ftco-no-pt img">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-12 about-intro">
						<div class="row">
							<div class="col-md-6 d-flex align-items-stretch">
								<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(../th1/images/about-1.jpg);">
								</div>
							</div>
							<div class="col-md-6 pl-md-5 py-5">
								<div class="row justify-content-start pb-3">
									<div class="col-md-12 heading-section ftco-animate">
										<span class="subheading">Tentang</span>
										<h2 class="mb-4">TRAVELBALIKU</h2>
										<p>Travelbaliku adalah travel agent terdepan di Indonesia yang telah berdiri sejak 2022. Dengan kantor yang terletak di Politeknik Negeri Bali dan situs Website, kami hadir untuk menjadi pintu gerbang Anda menuju dunia perjalanan yang luar biasa.</p>
										<p><a href="<?php echo base_url('c_travelbaliku/vpaketwisata')?>" class="btn btn-primary">Pesan Paket Wisata</a></p>
									</div>
								</div>
							</div>
						</div>
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