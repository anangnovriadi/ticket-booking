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
        <h2 class="font-white">Transaksi Tiket</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 10%;">
        <div class="mt-inner">
            
            <div class="pt-inner2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <div class="caption inner-details">
                                <div class="bag-j-details">
                                    <h4>Details Tiket</h4>
                                </div>
                                <div class="bag-t-details">
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Nama Pesawat</span></a></p>
                                        <p class="left-a left-c"><span class="badge">Batik Air</span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Keberangkatan</span></a></p>
                                        <p class="left-a left-c"><span class="badge">Malang</span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Tujuan</span></a></p>
                                        <p class="left-a left-c"><span class="badge">Surabaya</span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="thumbnail">
                            <div class="caption inner-details">
                                <div class="bag-j-details">
                                    <h4>Transaksi</h4>
                                </div>
                                <div class="bag-t-details">
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge badge-a">Pilih Jumlah Penumpang</span></a></p>
                                        <p class="left-a left-c">
                                            <select class="form-control">
                                                <option>Jumlah Penumpang</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div style="padding-top: 14px;" class="bag-c-details">
                                        <p class="left-c"><span class="bold">Harga</span></a></p>
                                        <p class="left-a left-c"><span class="bold">Rp.100.000</span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="bold">Jumlah Penumpang</span></a></p>
                                        <p class="left-a left-c"><span class="bold">2</span></a></p>
                                    </div>
                                    <div class="bag-c-details bag-tot-d">
                                        <p class="left-c"><span class="bold">Total</span></a></p>
                                        <p class="left-a left-c"><span class="bold">Rp.200.000</span></a></p>
                                    </div>
                                </div>
                            </div>
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