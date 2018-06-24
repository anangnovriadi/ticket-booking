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
                                    <th>Nama Kapal</th>
                                    <th>Kode Pesawat</th>
                                    <th>Keberangkatan</th>
                                    <th>Tujuan</th>
                                    <th>Jam Berangkat</th>
                                    <th>Jam Tiba</th>
                                    <th>Kelas Penerbangan</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Tools</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($tmpPesawat as $rows) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows->nama_pesawat; ?></td>
                                        <td><?php echo $rows->kode_pesawat; ?></td>
                                        <td><?php echo $rows->keberangkatan; ?></td>
                                        <td><?php echo $rows->tujuan; ?></td>
                                        <td><?php echo $rows->jam_keberangkatan; ?></td>
                                        <td><?php echo $rows->jam_tiba; ?></td>
                                        <td><?php echo $rows->kelas_penerbangan; ?></td>
                                        <td><?php echo $rows->harga; ?></td>
                                        <td>
                                            <?php
                                                if($rows->tersedia == 1) {
                                                    echo "<span class='lable-tag tag-success'>Tersedia</span>";
                                                } else if($rows->tersedia == 0) {
                                                    echo "<span class='lable-tag tag-unpaid'>Habis</span>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <center>
                                                <a href="<?php echo base_url('admin/pesawat/edit/'.$rows->id); ?>"><i class="fa fa-edit fa-lg"></i></a>
                                                <span class="spasi">
                                                <a href="<?php echo base_url('admin/pesawat/delete/'.$rows->id) ?>"></span><i class="fa fa-trash fa-lg"></a></i>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
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