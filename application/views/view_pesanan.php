<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/css/bootstrap.css')?>">

    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/css/app.css')?>">
    <link rel="shortcut icon" href="<?= base_url('th2/dist/assets/images/favicon.svg" type="image/x-icon')?>">
</head>

<body>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Pesanan</h3>
                            <a class="btn btn-primary" href="<?php echo base_url('c_travelbaliku/kbooking')?>">Tambah</a><br><br>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Data Pesanan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Striped rows start -->
                <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID PESANAN</th>
                                                    <th>TANGGAL PESANAN</th>
                                                    <th>METODE PEMBAYARAN</th>
                                                    <th>NAMA PAKET</th>
                                                    <th>USERNAME</th>
                                                    <th>BUKTI</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php foreach ($booking -> result_array() as $key):?>
                                                <tr>
                                                    <td class="text-bold-500"><?php echo $key['id_pesanan']?></td>
                                                    <td><?php echo $key['tanggal_pesanan']?></td>
                                                    <td class="text-bold-500"><?php echo $key['metode_bayar']?></td>
                                                    <td class="text-bold-500"><?php echo $key['nama_paket']?></td>
                                                    <td class="text-bold-500"><?php echo $key['username']?></td>
                                                    <td class="text-bold-500"><?php echo $key['bukti']?></td>
                                                    <td>
                                                        <a href="#">
                                                            <i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i>
                                                        </a>
                                                          <a class="btn btn-primary" href="<?php echo base_url('c_travelbaliku/ubahpesanan/'.$key['id_pesanan'])?>">Edit</a>
                                                         <a class="btn btn-danger" href="<?php echo base_url('c_travelbaliku/deletepesanan/'.$key['id_pesanan'])?>">Delete</a>
                                                    </td>
                                                   
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Striped rows end -->
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url('th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
    <script src="<?= base_url('th2/dist/assets/js/bootstrap.bundle.min.js')?>"></script>

    <script src="<?= base_url('th2/dist/assets/js/main.js')?>"></script>
</body>

</html>