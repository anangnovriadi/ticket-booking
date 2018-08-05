<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Esthana - House Rent</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="back-banner box-shadow-bt">
    <div class="title-all">
        <h2 class="font-white">Destinasi</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
        <div class="row p-0" id="city">
            <div class="section">
                <div class="col-md-8">
                    <div class="city-panel bg-img" style="background-image: url(assets/front/images/city/surabaya.jpg);">
                        <a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> SURABAYA</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="city-panel bg-img" style="background-image: url(assets/front/images/city/malang.jpg);">
                        <a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> MALANG</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="city-panel bg-img" style="background-image: url(assets/front/images/city/blitar.jpg);">
                        <a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> BLITAR</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="city-panel bg-img" style="background-image: url(assets/front/images/city/pasuruan.jpg);">
                        <a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> PASURUAN</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="city-panel bg-img" style="background-image: url(assets/front/images/city/probolinggo.jpg);">
                        <a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> PROBOLINGGO</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="city-panel bg-img" style="background-image: url(assets/front/images/city/kediri.jpg);">
                        <a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> KEDIRI</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="city-panel bg-img" style="background-image: url(assets/front/images/city/batu.jpg);">
                        <a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> BATU</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>

<?php $this->load->view('auth/login'); ?>

	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>

<?php $this->load->view('layout/js'); ?>
</body>
</html>