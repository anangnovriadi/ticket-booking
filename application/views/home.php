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
				<h1 class="font-bold font-xl">Esthana House Rent</h1>
				<p class="font-regular font-md">Find your favorite properties for rent:</p>
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
	<!-- LISTING -->
	<div class="row" id="listing">
		<div class="section">
			<div class="col-md-12 text-center">
				<h3 class="font-purple font-bold font-lg">New For Rent</h3>
				<p class="font-medium font-md">Arcu risus quis varius quam quisque id.</p><br>
			</div>
			<div class="col-md-4">
				<div class="list-panel">
					<div class="list-panel-head bg-img font-white" style="background-image: url(assets/images/listing/1.jpg);">
						<div>
							<h4 class="font-bold font-md">Agatha House</h4>
							<p class="font-sm"><i class="fa fa-map-marker"></i> Ketintang, Surabaya</p>
						</div>
					</div>
					<div class="list-panel-body bg-white">
						<span class="badge badge-dark">$300/month</span> 
						<span class="badge badge-dark">3 Bedrooms</span> 
						<span class="badge badge-dark">Parking Area</span> 
						<span class="badge badge-dark">Pet OK</span>
					</div>
					<div class="list-panel-foot">
						<a href="detail.html" class="btn bg-purple btn-block btn-sm"><i class="fa fa-caret-right"></i> VIEW MORE</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="list-panel">
					<div class="list-panel-head bg-img font-white" style="background-image: url(assets/images/listing/2.jpg);">
						<div>
							<h4 class="font-bold font-md">Leblanc Homestay</h4>
							<p class="font-sm"><i class="fa fa-map-marker"></i> Lowokwaru, Malang</p>
						</div>
					</div>
					<div class="list-panel-body bg-white">
						<span class="badge badge-dark">$300/month</span> 
						<span class="badge badge-dark">3 Bedrooms</span> 
						<span class="badge badge-dark">Parking Area</span> 
						<span class="badge badge-dark">Pet OK</span>
					</div>
					<div class="list-panel-foot">
						<a href="detail.html" class="btn bg-purple btn-block btn-sm"><i class="fa fa-caret-right"></i> VIEW MORE</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="list-panel">
					<div class="list-panel-head bg-img font-white" style="background-image: url(assets/images/listing/3.jpg);">
						<div>
							<h4 class="font-bold font-md">Conan Doyle Villa</h4>
							<p class="font-sm"><i class="fa fa-map-marker"></i> Nongkojajar, Pasuruan</p>
						</div>
					</div>
					<div class="list-panel-body bg-white">
						<span class="badge badge-dark">$300/month</span> 
						<span class="badge badge-dark">3 Bedrooms</span> 
						<span class="badge badge-dark">Parking Area</span> 
						<span class="badge badge-dark">Pet OK</span>
					</div>
					<div class="list-panel-foot">
						<a href="detail.html" class="btn bg-purple btn-block btn-sm"><i class="fa fa-caret-right"></i> VIEW MORE</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4 text-center">
				<a href="listing.html" class="btn bg-purple btn-lg btn-block"><i class="fa fa-caret-right"></i> VIEW ALL PROPERTIES</a>
			</div>
		</div>
	</div>
	<!-- LISTING END -->
	<!-- HOW TO RESERVE -->
	<div class="row bg-img" id="howtoreserve">
		<div class="section font-white text-center">
			<div class="col-md-4">
				<i class="fa fa-search fa-5x"></i><br>
				<h3 class="font-bold font-lg">Search Properties</h3>
				<p class="font-sm">Odio tempor orci dapibus ultrices in iaculis nunc sed augue lacus viverra vitae congue eu consequat ac.</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-edit fa-5x"></i><br>
				<h3 class="font-bold font-lg">Fill Reserve Form</h3>
				<p class="font-sm">Ac ut consequat semper viverra nam libero justo laoreet sit amet cursus sit amet dictum sit amet.</p>
			</div>
			<div class="col-md-4">
				<i class="fa fa-handshake-o fa-5x"></i><br>
				<h3 class="font-bold font-lg">Deal with Owner</h3>
				<p class="font-sm">Amet volutpat consequat mauris nunc congue nisi vitae suscipit tellus mauris a diam maecenas sed enim ut.</p>
			</div>
		</div>
	</div>
	<!-- HOW TO RESERVE END -->
	<!-- CITY -->
	<div class="row" id="city">
		<div class="section">
			<div class="col-md-12 text-center">
				<h3 class="font-purple font-bold font-lg">Available in 7 Cities</h3>
				<p class="font-medium font-md">Volutpat blandit aliquam etiam erat velit scelerisque.</p>
			</div>
			<div class="col-md-8">
				<div class="city-panel bg-img" style="background-image: url(assets/images/city/surabaya.jpg);">
					<a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> SURABAYA</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="city-panel bg-img" style="background-image: url(assets/images/city/malang.jpg);">
					<a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> MALANG</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="city-panel bg-img" style="background-image: url(assets/images/city/blitar.jpg);">
					<a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> BLITAR</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="city-panel bg-img" style="background-image: url(assets/images/city/pasuruan.jpg);">
					<a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> PASURUAN</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="city-panel bg-img" style="background-image: url(assets/images/city/probolinggo.jpg);">
					<a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> PROBOLINGGO</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="city-panel bg-img" style="background-image: url(assets/images/city/kediri.jpg);">
					<a href="#" class="btn bg-purple font-medium"><i class="fa fa-caret-right"></i> KEDIRI</a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="city-panel bg-img" style="background-image: url(assets/images/city/batu.jpg);">
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
				<h2 class="font-lg font-bold">Want to Rent Your Property?</h2><br>
				<p class="font-md font-medium">Amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque massa placerat duis.</p><br>
				<a href="#" class="btn btn-lg bg-purple font-bold">CONTACT US</a>
			</div>
		</div>
	</div>
	<!-- RENT YOUR PROPERTIES END-->
	<!-- SUBSCRIBE -->
	<div class="row bg-white" id="subscribe">
		<div class="section">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h3 class="font-purple font-bold font-lg">Subscribe New Information</h3>
				<p class="font-medium font-md">Venenatis urna cursus eget nunc scelerisque viverra.</p><br>
				<form class="input-group input-group-lg">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input type="text" class="form-control" placeholder="Your Email...">
					<a href="" class="input-group-addon bg-purple">Subscribe</a>
				</form>
			</div>
		</div>
	</div>
	<!-- SUBSCRIBE END -->
	<!-- FOOTER -->
	<div class="row bg-purple-darken font-white" id="footer">
		<div class="section">
			<div class="col-md-5">
				<img src="assets/images/logo-light.png" width="50%"><br><br>
				<p class="font-sm font-medium"><i class="fa fa-map-marker"></i> Jl. Gajah Mada No. 01, Nongkojajar, Pasuruan</p>
				<p class="font-sm font-medium"><i class="fa fa-envelope"></i> inbox@esthana.co.id</p>
				<p class="font-sm font-medium"><i class="fa fa-phone"></i> (+62) 822 4584 9926</p><br>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-instagram fa-2x"></i></a>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-facebook fa-2x"></i></a>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-twitter fa-2x"></i></a>
				<a href="#" class="follow hvr-rectangle-out"><i class="fa fa-google-plus fa-2x"></i></a>
			</div>
			<div class="col-md-7">
				<h2 class="font-bold font-lg">About Us</h2>
				<section class="line"></section>
				<p class="font-medium font-sm">Esthana House Rent is a house rent service based in East Java, Indonesia. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis convallis convallis tellus id interdum.</p>
				<a href="about.html" class="btn btn-default font-purple"><i class="fa fa-caret-right"></i> Read More</a>
			</div>
			<div class="col-md-12 text-center">
				<hr>
			</div>
			<div class="col-md-6">
				<b>Copyright &copy; Esthana - House Rent HTML Template.</b>
			</div>
			<div class="col-md-6 text-right">
				<b>Created by <a href="http://instagram.com/esafriansya/"><u>Esafriansya</u></a> with <i class="fa fa-heart"></i></b>
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