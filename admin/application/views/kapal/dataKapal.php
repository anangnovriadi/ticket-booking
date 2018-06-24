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
          <h1>Kapal</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Kapal</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-box">
                        <h4>Data Tiket Kapal</h4>
                        <div class="table-responsive m-top-2">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kapal</th>
                                    <th>Kode Kapal</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Jam Berangkat</th>
                                    <th>Jam Tiba</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Tools</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($tmpKapal as $rows) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows->nama_kapal; ?></td>
                                        <td><?php echo $rows->kode_kapal; ?></td>
                                        <td><?php echo $rows->pelabuhan_asal; ?></td>
                                        <td><?php echo $rows->pelabuhan_tujuan; ?></td>
                                        <td><?php echo $rows->jam_keberangkatan; ?></td>
                                        <td><?php echo $rows->jam_tiba; ?></td>
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
                                                <a href="<?php echo base_url('admin/kapal/edit/'.$rows->id); ?>"><i class="fa fa-edit fa-lg"></i></a>
                                                <span class="spasi">
                                                <a href="<?php echo base_url('admin/kapal/delete/'.$rows->id) ?>"></span><i class="fa fa-trash fa-lg"></a></i>
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