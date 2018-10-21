<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Home - Reni Jaya Travel</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="back-banner box-shadow-bt">
    <div class="title-all">
        <h2 class="font-white">About Us</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div class="alert alert-info">
                <strong>Reni Jaya Travel</strong> merupakan perusahaan yang bergerak pada pemesanan tiket pesawat dan kapal, sudah banyak tiket terjual mulai dari lion air, sriwijaya, pelni dll.
                Perusahaan banyak bekerja sama dengan perusahaan lain seperti Garuda dan Lion.
            </div>
        </div>
    </div>
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>

	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>

<?php $this->load->view('layout/js'); ?>
</body>
</html>