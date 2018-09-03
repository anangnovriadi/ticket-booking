<div class="container-fluid bg-white" id="navbar">
	<div class="row">
		<div class="section font-purple-darken">
			<div class="col-md-2 col-xs-8"><a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('assets/front/images/logo-reni.png'); ?>" width="100%"></a></div>
			<div class="col-xs-4 toggle text-right"><button class="btn btn-default btn-lg" id="btn-toggle"><i class="fa fa-bars"></i></button></div>
			<div class="col-md-10 col-xs-12 font-sm font-medium text-right">
				<ul>
					<li class="hvr-underline-from-left"><a href="<?php echo base_url('/'); ?>">HOME</a></li>
					<li class="hvr-underline-from-left"><a href="<?php echo base_url('/destinasi'); ?>">DESTINASI</a></li>
					<li class="hvr-underline-from-left"><a href="#">ABOUT US</a></li>
					<?php 
						if($this->session->userdata('hak_akses') == 'user') {
					?>
					<li class="hvr-underline-from-left">
						<a style="text-transform: uppercase;"><?php echo $this->session->userdata('username') ?>, </a>
					</li>
					<li class="hvr-underline-from-left">
					<form action="<?php echo base_url('login/logout') ?>" method="post">
						<button type="submit" style="border: none;background: transparent;">LOGOUT</button>
					</form>
					</li>
					<?php } else { ?>
						<li><a href="<?php echo base_url('/login'); ?>" class="btn bg-purple btn-sm">LOGIN</a></li>
						<li><a href="#" class="btn btn-default btn-sm">REGISTER</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- <div class="container-fluid bg-white" id="navbar">
	<div class="row">
		<div class="section font-purple-darken">
			<div class="col-md-2 col-xs-8"><a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('assets/front/images/logo-reni.png'); ?>" width="100%"></a></div>
			<div class="col-xs-4 toggle text-right"><button class="btn btn-default btn-lg" id="btn-toggle"><i class="fa fa-bars"></i></button></div>
			<div class="col-md-10 col-xs-12 font-sm font-medium text-right">
				<ul>
					<li class="hvr-underline-from-left"><a href="<?php echo base_url('/'); ?>">HOME</a></li>
					<li class="hvr-underline-from-left"><a href="<?php echo base_url('/destinasi'); ?>">DESTINASI</a></li>
					<li class="hvr-underline-from-left"><a href="#">ABOUT US</a></li>
					<li class="hvr-underline-from-left">
						<a style="text-transform: uppercase;">anang</a>
					</li>
					<li class="hvr-underline-from-left">
						<a><img src="<?php echo base_url('assets/front/images/dropdown.png') ?>" /></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div> -->