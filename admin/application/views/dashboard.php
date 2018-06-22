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
          <h1>Dashboard</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
          </ol>
        </section>

        <section class="content container-fluid">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <div class="media-box">
                <div class="media-icon pull-left"><i class="icon-bargraph"></i> </div>
                <div class="media-info">
                  <h5>Total Pemesanan Tiket Pesawat</h5>
                  <h3>4</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="media-box bg-sea">
                <div class="media-icon pull-left"><i class="icon-wallet"></i> </div>
                <div class="media-info">
                  <h5>Total Pemesanan Tiket Kapal</h5>
                  <h3>4</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="media-box bg-blue">
                <div class="media-icon pull-left"><i class="icon-basket"></i> </div>
                <div class="media-info">
                  <h5>Stok Tiket Pesawat</h5>
                  <h3>32</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <div class="media-box bg-green">
                <div class="media-icon pull-left"><i class="icon-layers"></i> </div>
                <div class="media-info">
                  <h5>Stok Tiket Kapal</h5>
                  <h3>30</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="chart-box">
                <h4>Halaman Admin - Reni Jaya Travel</h4>
                <div class="chart">
                  <div id="container"></div>
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