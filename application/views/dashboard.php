<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/css/bootstrap.css')?>">

    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/vendors/iconly/bold.css')?>">

    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')?>">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')?>">
    <link rel="stylesheet" href="<?= base_url('th2/dist/assets/css/app.css')?>">
    <link rel="shortcut icon" href="<?= base_url('th2/dist/assets/images/favicon.svg" type="image/x-icon')?>">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo base_url('c_travelbaliku/dhadmin')?>" style="margin-left : 80px; margin-top : -60px;"><img src="<?= base_url('th2/dist/assets/images/logo/Travel.png" alt="Logo" srcset=""')?>" style=" width: 100px; height:auto;" >TRAVELBALIKU</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="<?php echo base_url('c_travelbaliku/dhadmin')?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Kelola</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('c_travelbaliku/kelolauser')?>">Data Pengguna</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('c_travelbaliku/kelolakeluarga')?>">Data Paket Keluarga</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('c_travelbaliku/kelolahoneymoon')?>">Data Paket Honeymoon</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('c_travelbaliku/kelolagrup')?>">Data Paket Grup</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="<?php echo base_url('c_travelbaliku/kelolapesanan')?>">Data Pesanan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item ">
                            <a href="<?php echo base_url('c_travelbaliku/logout')?>" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    </div>
    <script src="<?= base_url('th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
    <script src="<?= base_url('th2/dist/assets/js/bootstrap.bundle.min.js')?>"></script>

    <script src="<?= base_url('th2/dist/assets/vendors/apexcharts/apexcharts.js')?>"></script>
    <script src="<?= base_url('th2/dist/assets/js/pages/dashboard.js')?>"></script>

    <script src="<?= base_url('th2/dist/assets/js/main.js')?>"></script>
</body>

</html>