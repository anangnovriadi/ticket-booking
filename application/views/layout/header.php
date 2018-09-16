<div class="container-fluid bg-white" id="navbar">
	<div class="row">
		<div class="section font-purple-darken">
			<div class="col-md-2 col-xs-8"><a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('assets/front/images/logo-reni.png'); ?>" width="100%"></a></div>
			<div class="col-xs-4 toggle text-right"><button class="btn btn-default btn-lg" id="btn-toggle"><i class="fa fa-bars"></i></button></div>
			<div class="col-md-10 col-xs-12 font-sm font-medium text-right">
				<ul>
					<li class="hvr-underline-from-left"><a href="<?php echo base_url('/'); ?>">Home</a></li>
					<li class="hvr-underline-from-left"><a href="<?php echo base_url('/destinasi'); ?>">Destinasi</a></li>
					<li class="hvr-underline-from-left"><a href="#">About Us</a></li>
					<?php 
						if($this->session->userdata('hak_akses') == 'user') {
					?>
					<li class="hvr-underline-from-left" style="overflow: unset;">
						<a><?php echo $this->session->userdata('username') ?></a>
					</li>
					<li class="hvr-underline-from-left" style="overflow: unset;">
						<div class="dropdown">
							<button style="background: transparent; border: none;" type="button" data-toggle="dropdown">
								<span class="caret"></span></button>
							</button>
							<ul class="dropdown-menu" style="min-width: 85px; padding: 8px 12px;">
								<form action="<?php echo base_url('login/logout') ?>" method="post">
									<button type="submit" style="border: none;background: transparent;">Logout</button>
								</form>
							</ul>
						</div>
					</li>
					<?php } else { ?>
						<li class="log-reg"><a href="<?php echo base_url('/login'); ?>" class="btn bg-purple btn-sm">Login</a></li>
						<li class="log-reg"><a href="<?php echo base_url('/register'); ?>" class="btn btn-default btn-sm">Register</a></li>
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