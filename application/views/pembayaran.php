<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Pembayaran - Reni Jaya Travel</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="back-banner box-shadow-bt">
    <div class="title-all">
        <h2 class="font-white">Pembayaran Tiket</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div>
                <div class="alert alert-info" role="alert">
                    <a>Terima kasih telah memesan di <b>Reni Jaya Travel</b></a> 
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="alert alert-success">
                            <h4><b>Tata cara pembayaran :</b></h4>
                            <li>Lakukan pembayaran sesuai jumlah yang tercantum list disamping(transfer bank)</li>
                            <li>Lakukan konfirmasi segera setelah pembayaran dikirimkan melaui sms / whatsapp</li>
                            <li>SMS / Whatsapp : 082 143463188</li>
                            <br>
                            <h4><b>Daftar Rekening Bank :</b></h4>
                            <li>BCA : 3810155271</li>
                            <li>Mandiri : 140005069563</li>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="alert alert-warning" role="alert">
                            <li>
                                Nama Pesawat : <b><?php print_r($this->session->userdata('nama_pesawat')); ?></b>                            
                            </li>
                            <li>
                                Tanggal Keberangkatan : <b><?php print_r($this->session->userdata('tgl_keberangkatan')); ?></b>                            
                            </li>
                            <li>
                                Jumlah Tiket : <b> <?php print_r($this->session->userdata('jumlah_tiket')); ?> </b>                            
                            </li>
                            <li>
                                Harga : <b>Rp. <span class="format"><?php print_r($this->session->userdata('harga')); ?></span></b>                            
                            </li>
                            <li>
                                Harga Total : <b>Rp. <span class="format"><?php print_r($this->session->userdata('harga_total')); ?></span></b>                            
                            </li>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>

	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>

<?php $this->load->view('layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/front/js/simple.money.format.js'); ?>"></script>
<script>
    $('.format').simpleMoneyFormat();
</script>
</body>
</html>