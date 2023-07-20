<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>

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
                                    <h4 class="card-title"> Edit Data Kategori </h4>
                                </div>
                                <?php foreach ($datakategori->result_array() as $datketegori)?>
                                <form class="forms-sample" action="<?php echo base_url('c_travelbaliku/editkategori/').$datketegori['id_kategori']?>" method="post">
                                <div class="card-content">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="status-info-vertical">Nama Kategori</label>
                                                            <input type="hidden" readonly name = "id_kategori" value="<?php echo $datketegori['id_kategori']?>">
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="nama_kategori"
                                                                placeholder="Nama Kategori" value="<?php echo $datketegori['nama_kategori']?>">
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