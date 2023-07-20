<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pesanan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../th2/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="../th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../th2/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../th2/dist/assets/css/app.css">
    <link rel="shortcut icon" href="../th2/dist/assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
<div id="main">
 <section id="basic-vertical-layouts">
                    <div class="row match-height">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="text-align: center;"> Tambah Data Pesanan </h4>
                                </div>
                                <form action="<?php echo base_url('c_travelbaliku/addpesananbooking')?>" method = "POST">
                                <div class="card-content" >
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Tanggal Pesanan</label>
                                                            <input type="date" id="email-id-vertical"
                                                                class="form-control" name="tanggal_pesanan"
                                                                placeholder="Tanggal Pesanan">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="status-info-vertical">Pembayaran</label>
                                                            <input type="text" id="Pembayaran-info-vertical"
                                                                class="form-control" name="pembayaran"
                                                                placeholder="Pembayaran">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="status-info-vertical">ID User</label>
                                                            <input type="text" id="Pembayaran-info-vertical"
                                                                class="form-control" name="id_user"
                                                                placeholder="ID User">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="status-info-vertical">Username</label>
                                                            <input type="text" id="Pembayaran-info-vertical"
                                                                class="form-control" name="username"
                                                                placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="status-info-vertical">Kode Paket</label>
                                                            <input type="text" id="Pembayaran-info-vertical"
                                                                class="form-control" name="kode_paket"
                                                                placeholder="Kode Paket">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
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
                </section>
                <!-- // Basic Vertical form layout section end -->
</body>
</html>