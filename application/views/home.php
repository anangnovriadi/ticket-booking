<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Esthana - House Rent</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>
<!-- NAVBAR -->
<?php $this->load->view('layout/header'); ?>
<!-- NAVBAR END -->

<!-- MAIN CONTENT -->
<div class="container-fluid">
	<!-- HEADER -->
	<div class="row bg-img" id="header">
		<div class="section">
			<div class="col-md-7 font-white">
				<h1 class="font-bold font-xl">Reni Jaya Travel</h1>
				<p class="font-regular font-md">Pemesanan Tiket Pesawat dan Kapal</p>
			</div>
			<div class="col-md-12 bg-white font-black">
				<form class="form-inline" method="post" action="list.html">
					<select class="form-control input-lg">
						<option>-- Type --</option>
						<option>House</option>
						<option>Apartment</option>
						<option>Villa</option>
						<option>Other</option>
					</select>
					<select class="form-control input-lg">
						<option>-- City --</option>
						<option>Batu</option>
						<option>Blitar</option>
						<option>Kediri</option>
						<option>Malang</option>
						<option>Pasuruan</option>
						<option>Probolinggo</option>
						<option>Surabaya</option>
					</select>
					<input type="text" class="form-control input-lg" placeholder="Search Keyword..">
					<input type="submit" value="SEARCH" class="btn bg-purple btn-lg">
				</form>
			</div>
		</div>
	</div>
	<!-- HEADER END -->

	<!-- CITY -->
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
	<!-- CITY END -->
	<!-- RENT YOUR PROPERTIES -->
	<div class="row bg-img" id="rentyour">
		<div class="section font-white">
			<div class="col-md-9">
				<h2 class="font-lg font-bold">Jasa dan Layanan</h2><br>
				<p class="font-md font-medium">Reni Jaya Travel adalah jasa yang menjual tiket pesawat maupun kapal antar propinsi maupun pulau.</p><br>
				<a href="#" class="btn btn-lg bg-purple font-bold">CONTACT US</a>
			</div>
		</div>
	</div>
	<!-- RENT YOUR PROPERTIES END-->

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
	
	<!-- FOOTER -->
	<div class="row bg-purple-darken font-white" id="footer">
		<div class="section">
			<div class="col-md-5">
				<h2 class="font-bold font-lg">Alamat</h2>
				<section class="line"></section>
				<p class="font-sm font-medium"><i class="fa fa-map-marker"></i> Jalan Johar No.14, Surabaya</p>
				<p class="font-sm font-medium"><i class="fa fa-phone"></i> (031) 70120731</p>
				<p class="font-sm font-medium"><i class="fa fa-whatsapp"></i> 082 143463188</p>
			</div>
			<div class="col-md-7 txt-right">
				<h2 class="font-bold font-lg pb-3">Kunjungi Kami</h2>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-instagram fa-2x"></i></a>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-facebook fa-2x"></i></a>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-twitter fa-2x"></i></a>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-google-plus fa-2x"></i></a>
			</div>
			<div class="col-md-12 text-center">
				<hr>
			</div>
			<div class="col-md-6">
				<b>Copyright &copy; Reni Jaya Travel</b>
			</div>
			<div class="col-md-6 text-right">
				<b>Created by <a href="#"><u>Anang Novriadi and Team</u></a></i></b>
			</div>
		</div>
	</div>
	<!-- FOOTER END -->
</div>
<!-- MAIN CONTENT END -->

<!-- LOGIN MODAL -->
<form class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-purple text-white"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Login</h3>
      </div>
      <div class="modal-body">
        <input type="text" name="search_keyword" class="form-control" placeholder="Username" autofocus=""><br>
        <input type="password" name="search_keyword" class="form-control" placeholder="Password" autofocus=""><br>
        <input type="submit" class="btn btn-block bg-purple" value="LOGIN" name=""><br>
        <center>OR</center><br>
        <button class="btn btn-default btn-block"><i class="fa fa-google font-purple-darken"></i> &nbsp; Sign In with Google</button>
      </div>
    </div>
  </div>
</form>
<!-- LOGIN MODAL END -->

<!-- BACK TO TOP -->
	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>
<!-- BACK TO TOP END -->

<?php $this->load->view('layout/js'); ?>
</body>
</html>