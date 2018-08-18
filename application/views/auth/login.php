<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>Esthana - House Rent</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div class="pt-inner2">
                <h4>Login</h4>  
            </div>
        </div>
    </div>
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>

	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>

<?php $this->load->view('layout/js'); ?>
</body>
</html>