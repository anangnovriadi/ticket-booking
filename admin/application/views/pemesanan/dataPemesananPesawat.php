<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Pesawat</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Pesawat</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-box">
                        <h4>Data Tiket Pesawat</h4>
                        <div class="table-responsive m-top-2">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Pemesan</th>
                                    <th>Nama Pesawat</th>
                                    <th>Tanggal Keberangkatan</th>
                                    <th>Kode Transaksi</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Harga</th>
                                    <th>Harga Total</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Bayar</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($tmpPemPesawat as $rows) {
                                        // foreach($tmpPesawat as $kapal) {
                                            // foreach($tmpUsers as $users) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows->username; ?></td>
                                        <td><?php echo $rows->nama_pesawat; ?></td>
                                        <td><?php echo $rows->tgl_keberangkatan; ?></td>
                                        <td><?php echo $rows->kode_transaksi; ?></td>
                                        <td><?php echo $rows->keberangkatan; ?></td>
                                        <td><?php echo $rows->tujuan; ?></td>
                                        <td><?php echo $rows->jumlah_tiket; ?></td>
                                        <td><?php echo $rows->harga; ?></td>
                                        <td><?php echo $rows->harga_total; ?></td>
                                        <td><?php echo $rows->tgl_pemesanan; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/pemesanan/pemesananPesawat/edit/'.$rows->id); ?>">
                                                <?php 
                                                    if($rows->bayar == 0) {
                                                        echo "<span class='lable-tag tag-unpaid'>Belum</span>";
                                                    } else {
                                                        echo "<span class='lable-tag tag-success'>Dibayar</span>";
                                                    }
                                                ?>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                        //     }
                                        // }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<?php $this->load->view('layout/js'); ?>

</body>
</html>