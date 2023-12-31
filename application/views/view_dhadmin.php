<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../th2/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="../th2/dist/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../th2/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../th2/dist/assets/css/app.css">
    <link rel="shortcut icon" href="../th2/dist/assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
    <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Selamat Datang Di Admin Travelbaliku</h3>
                <?php echo $this->session->userdata('name');  ?>
            </div>
           
            
            <script src="../th2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="../th2/dist/assets/js/bootstrap.bundle.min.js"></script>

            <script src="../th2/dist/assets/vendors/apexcharts/apexcharts.js"></script>
            <script src="../th2/dist/assets/js/pages/dashboard.js"></script>

            <script src="../th2/dist/assets/js/main.js"></script>
        </div>

</body>
</html>