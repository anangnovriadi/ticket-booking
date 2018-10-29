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
        <h2 class="font-white">Pembatalan Tiket</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div class="alert alert-danger">
                <b>Jika anda sudah terlanjur memesan tiket dan melakukan pembayaran, berikut peraturan dan tata cara pembatalannya :</b>
                <ul>
                    <li>Kunjungi kantor kami di Jalan Johar No.14, Surabaya pada Jam Kerja 08.00 - 17.00</li>
                    <li>Bawa struk pembayaran</li>
                    <li>Refund akan pembelian tiket hanya akan mendapatkan sebesar 50% dari harga tiket</li>
                    <li>Bawa ticket booking / data ticket</li>
                    <li>Pembatalan dapat dilakukan paling lambat 1 jam sebelum keberangkatan terjadwal pesawat / kapal</li>
                    <li>Jika pembatalan dilakukan lebih dari itu, maka tiket yang dipesan akan dinyatakan hangus</li>
                </ul>
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