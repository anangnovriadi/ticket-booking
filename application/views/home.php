<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Esthana - House Rent</title>
	<?php $this->load->view('layout/css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="container-fluid">
	<div class="row bg-img" id="header">
		<div class="section p-relative tp-30">
			<div class="col-md-7 font-white">
				<h1 class="font-bold font-xl">Reni Jaya Travel</h1>
				<p class="font-regular font-md">Pemesanan Tiket Pesawat dan Kapal</p>
			</div>
		</div>
		<div class="section p-relative">	
			<div class="col-md-12 bg-white font-black">
				<?php echo form_open(base_url('search/result'), 'class="form-inline col-ce"'); ?>
					<div class="col-md-3">
						<select name="kota_asal" class="form-control input-cus">
							<option>Pilih Kota Asal</option>
							<?php
								foreach($all as $row) {
									echo '<option>'.$row->keberangkatan.'</option>';
								}
							?>
						</select>
					</div>
					<div class="col-md-3">
						<select name="kota_tujuan" class="form-control input-cus">
							<option>Pilih Kota Tujuan</option>
							<?php
								foreach($all as $row) {
									echo '<option>'.$row->tujuan.'</option>';
								}
							?>
						</select>
					</div>
					<div class="col-md-3">
						<input class="form-control input-cus" type="text" id="datepicker">
					</div>

					<!-- <select name="jam_keberangkatan" class="form-control input-lg">
						<option>Jam Keberangkatan</option>
						<?php
							foreach($all as $row) {
								echo '<option>'.$row->jam_keberangkatan.'</option>';
							}
						?>
					</select> -->
					<div class="col-md-3">
						<input type="submit" value="Cari Penerbangan" class="btn bg-purple btn-lg">	
					</div>
				<?php echo form_close(); ?>
			</div>
			<?php 
				
			?>
			
		</div>
		<div class="section p-relative">	
			<div class="col-md-12 bg-white cus-kapal font-black">
				<form class="form-inline col-ce" method="post" action="list.html">
					<select class="form-control input-lg">
						<option>Pelabuhan Asal</option>
						<option>House</option>
						<option>Apartment</option>
						<option>Villa</option>
						<option>Other</option>
					</select>
					<select class="form-control input-lg">
						<option>Pelabuhan Tujuan</option>
						<option>Batu</option>
						<option>Blitar</option>
						<option>Kediri</option>
						<option>Malang</option>
						<option>Pasuruan</option>
						<option>Probolinggo</option>
						<option>Surabaya</option>
					</select>
					<select class="form-control input-lg">
						<option>Jam Keberangkatan</option>
						<option>Batu</option>
						<option>Blitar</option>
						<option>Kediri</option>
						<option>Malang</option>
						<option>Pasuruan</option>
						<option>Probolinggo</option>
						<option>Surabaya</option>
					</select>
					<input type="submit" value="Cari Kapal" class="btn bg-purple btn-lg">
				</form>
			</div>
		</div>
	</div>
	
	<div class="row" id="city">
		<div class="section">
			<div class="col-md-12 text-center">
				<h3 class="font-purple font-bold font-lg">Available in 7 Cities</h3>
				<p class="font-medium font-md">Volutpat blandit aliquam etiam erat velit scelerisque.</p>
			</div>
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
			<div class="col-md-12 mt-inner txt-center">
				<a href="<?php echo base_url('/destinasi'); ?>"><span class="badge badge-a">See more</span></a>
			</div>
		</div>
	</div>
	
	<div class="row bg-img" id="rentyour">
		<div class="section font-white">
			<div class="col-md-9">
				<h2 class="font-lg font-bold">Jasa dan Layanan</h2><br>
				<p class="font-md font-medium">Reni Jaya Travel adalah jasa yang menjual tiket pesawat maupun kapal antar propinsi maupun pulau.</p><br>
				<a href="#" class="btn btn-lg bg-purple font-bold">CONTACT US</a>
			</div>
		</div>
	</div>
	
	<div class="row bg-white" id="subscribe">
		<div class="section section-p">
			<div class="section-c">
				<h3>Partner Tiket Pesawat dan Kapal</h3>
			</div>
			<div class="row row-w">
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/airasia.jpg'); ?>">
				</div>
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/lion.png'); ?>">
				</div>
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/citilink.jpg'); ?>">
				</div>
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/garuda.jpg'); ?>">
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('layout/footer'); ?>

</div>

	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
	<script>
		$('#datepicker').datepicker({
			format: 'mm-dd-yyyy',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>
	<?php $this->load->view('layout/js'); ?>
</body>
</html>