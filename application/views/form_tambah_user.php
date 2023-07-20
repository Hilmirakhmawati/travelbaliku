<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User </title>

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
                                    <h4 class="card-title"> Tambah Data </h4>
                                </div>
                                <form class="forms-sample" action="<?php echo base_url('c_travelbaliku/adduser')?>" method="post">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical"> Nama Pengguna</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="nama"
                                                                placeholder=" Nama Pengguna" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Email</label>
                                                            <input type="email" id="email-id-vertical"
                                                                class="form-control" name="email"
                                                                placeholder="Email" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="alamat-info-vertical">Alamat</label>
                                                            <input type="text" id="alamat-info-vertical"
                                                                class="form-control" name="alamat"
                                                                placeholder="Alamat" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="username-vertical">Username</label>
                                                            <input type="username" id="username-vertical"
                                                                class="form-control" name="username"
                                                                placeholder="Username" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password-vertical">Password</label>
                                                            <input type="password" id="password-vertical"
                                                                class="form-control" name="password"
                                                                placeholder="Password" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1" name="proses">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                </section>
                <!-- // Basic Vertical form layout section end -->
</body>
</html>