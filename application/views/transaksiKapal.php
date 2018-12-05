<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Transaksi - Reni Jaya Travel</title>
	<?php $this->load->view('layout/css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <?php echo form_open(base_url('transaksi/pembayaranKapal'), 'class="form-inline col-ce"'); ?>
        <div class="mt-inner">
            <?php
                foreach($query as $row) {
                    $this->session->set_userdata('nama_kapal', $row->nama_kapal);
                    $this->session->set_userdata('harga', $row->harga);
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
                                        <input type="hidden" name="id_kapal" value="<?php echo $row->id; ?>" />
                                        <input type="hidden" name="tgl_keberangkatan" value="<?php echo $this->session->userdata('tgl'); ?>" />
                                        <p class="left-c"><span class="badge">Nama Kapal</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->nama_kapal ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Pelabuhan Asal</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->pelabuhan_asal ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Pelabuhan Tujuan</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->pelabuhan_tujuan ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Jam Keberangkatan</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->jam_keberangkatan ?></span></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="badge">Jam Tiba</span></a></p>
                                        <p class="left-a left-c"><span class="badge"><?php echo $row->jam_tiba ?></span></a></p>
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
                                            <input type="text" style="text-align: center;float: right;width: 50%;" id="jumlahPen" value="0" onkeyup="hitung()" class="form-control">
                                        </p>
                                    </div>
                                    <div style="padding-top: 14px;" class="bag-c-details">
                                        <p class="left-c"><span class="bold">Harga</span></a></p>
                                        <p class="left-a left-c"><input type="text" class="input-trans" value="<?php echo $row->harga ?>" onkeyup="hitung()" id="harga"></a></p>
                                    </div>
                                    <div class="bag-c-details">
                                        <p class="left-c"><span class="bold">Jumlah Penumpang</span></a></p>
                                        <p class="left-a left-c"><input type="text" name="jumlah_pen" class="input-trans" id="jumlahPenTxt" value="0" /></a></p>
                                    </div>
                                    <div class="bag-c-details bag-tot-d">
                                        <p class="left-c"><span class="bold">Total</span></a></p>
                                        <p class="left-a left-c"><input class="bold input-trans" value="0" name="total_harga" id="totalHarga"></a></p>
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
                            <button type="submit" class="btn btn-success white" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading">Pesan Sekarang</button>
                            <!-- <input type="submit" class="btn btn-success white" value="Pesan Sekarang"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
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
<script>
    $('.btn').on('click', function() {
        var $this = $(this);
        $this.button('loading');
    });
</script>
</body>
</html>