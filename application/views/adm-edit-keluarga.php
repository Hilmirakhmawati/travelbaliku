<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Paket Wisata </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/css/bootstrap.css')?>">

    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/css/app.css')?>">
    <link rel="shortcut icon" href="<?= base_url('th2/dist/assets/images/favicon.svg')?>" type="image/x-icon">
</head>
<body>
<div id="main">
 <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Edit Data Paket Wisata Keluarga</h4>
                                </div>
                                <?php foreach ($datapaketkeluarga->result_array() as $dklr)?>
                                <form class="forms-sample" action="<?php echo base_url('c_travelbaliku/editpaketkeluarga/').$dklr['id-keluarga']?>" method="post">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> Nama Paket</label>
                                                            <input type="hidden" readonly name = "id-keluarga" value="<?php echo $dklr['id-keluarga']?>">
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="nama-paket"
                                                                placeholder=" Nama Paket" value="<?php echo $dklr['nama-paket']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="alamat-info-vertical">Harga</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="harga-paket"
                                                                placeholder="Harga" value="<?php echo $dklr['harga-paket']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="username-vertical">Deskripsi</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="deskripsi"
                                                                placeholder="Deskripsi" value="<?php echo $dklr['deskripsi']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Hotel</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="hotel"
                                                                placeholder="Hotel" value="<?php echo $dklr['hotel']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Fasilitas</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="fasilitas"
                                                                placeholder="Fasilitas" value="<?php echo $dklr['fasilitas']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Tempat Wisata</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="tempat-wisata"
                                                                placeholder="Tempat Wisata" value="<?php echo $dklr['tempat-wisata']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Tempat Makan</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="tempat-makan"
                                                                placeholder="tempat-makan" value="<?php echo $dklr['tempat-makan']?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        
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