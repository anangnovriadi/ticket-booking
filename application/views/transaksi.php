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
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <?php
                foreach($query as $row) {
            ?>
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
                                        <input type="hidden" value="<?php echo $row->id; ?>" />
                                        <p class="left-c"><span class="badge">Nama Pesawat</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->nama_pesawat ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Keberangkatan</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->keberangkatan ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Tujuan</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->tujuan ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Jam Keberangkatan</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->jam_keberangkatan ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Jam Tiba</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->jam_tiba ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Kelas Penerbangan</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->kelas_penerbangan ?></span></a></p>
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
                                            <input type="number" style="text-align: center;float: right;width: 50%;" id="jumlahPen" value="0" onkeyup="hitung()" class="form-control">
                                        </p>
                                    </div>
                                    <div style="padding-top: 14px;" class="bag-c-details">
                                        <p class="left-c"><span class="bold">Harga</span></a></p>
                                        <p class="left-a left-c"><input type="text" class="input-trans" value="<?php echo $row->harga ?>" onkeyup="hitung()" id="harga"></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="bold">Jumlah Penumpang</span></a></p>
                                        <p class="left-a left-c"><input type="text" class="input-trans" id="jumlahPenTxt" value="0"></input></a></p>
                                    </div>
                                    <div class="bag-c-details bag-tot-d">
                                        <p class="left-c"><span class="bold">Total</span></a></p>
                                        <p class="left-a left-c"><input class="bold input-trans" value="0" id="totalHarga"></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="pt-inner2">
                    <div class="row row-set">
                        <div class="col-md-6">
                            <a href="<?php echo base_url('/') ?>" class="btn btn-danger white">Cancel</a>
                        </div>
                        <div class="col-md-6">
                            <a href="<?php echo base_url('/pembayaran') ?>" class="btn btn-success white">Pesan Sekarang</a>
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
<script>
    function hitung() {
        var harga = $('#harga').val();
        var jumlahPen = $('#jumlahPen').val();
        var total = harga * jumlahPen;

        $('#jumlahPenTxt').val(jumlahPen);
        $('#totalHarga').val(total);
    }
</script>
</body>
</html>