<div id="main">
<section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Total Penjualan</h3>
                                </div>
                                <div class="card-content">
                                    
                                    <!-- table striped -->
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NAMA</th>
                                                    <th>JENIS PAKET</th>
                                                    <th>BERAT</th>
                                                    <th>ALAMAT</th>
                                                    <th>STATUS</th>
                                                    <th>TANGGAL</th>
                                                    <th>TOTAL</th>
                                                    <th>STATUS</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($Laundry -> result_array() as $key):?>
                                                
                                                <tr>
                                                <td><?php echo $key['nama']?></td>
                                                <td><?php echo $key['jenispaket']?></td>
                                                <td><?php echo $key['berat']?></td>
                                                <td><?php echo $key['alamat']?></td>
                                                <td><?php echo $key['date']?></td>
                                                <td><?php echo $key['harga']?></td>
                                                <td><?php echo $key['total']?></td>
                                                <td><?php echo $key['status']?></td>
                                                <td><a href="<?php echo base_url('C_Laundry/ubahpesanan/'.$key['id_pemesanan']) ?>" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="">
                                            <i class="material-icons">edit</i>
                                            </a>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                            <i class="material-icons">delete</i>
                                                
                                                
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
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
</div>