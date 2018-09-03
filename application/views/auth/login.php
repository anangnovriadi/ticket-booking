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
                <div style="margin-top: 6%;">
                    <div class="modal-content md-cs">
                        <div class="modal-header bg-purple text-white">
                            <h3 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Login</h3>
                        </div>
                        <form action="<?php echo base_url('login/auth') ?>" method="post">
                            <div class="modal-body">
                                <input type="text" name="username" class="form-control" placeholder="Username" autofocus=""><br>
                                <input type="password" name="password" class="form-control" placeholder="Password" autofocus=""><br>
                                <input type="submit" class="btn btn-block bg-purple" value="LOGIN"><br>
                                <div class="reg">
                                <p>Belum punya akun? Register <a href="">disini</a></p>     
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>

	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>
    
    <?php
        if($this->session->flashdata('message')) {
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            text: "<?php echo $this->session->flashdata('message'); ?>",
            icon: "error",
            button: true
        });
    </script>
    <?php } ?>

<?php $this->load->view('layout/js'); ?>
</body>
</html>