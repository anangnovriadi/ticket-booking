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
<div class="back-banner box-shadow-bt">
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 10%;">
        <div class="mt-inner">
            <h2>Hasil Pencarian</h2>
            <div class="pt-inner2">
                <div class="row">
                    <?php
                        foreach($pesawat as $row) {
                    ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="http://via.placeholder.com/300x120" class="img-responsive">
                            <div class="caption">
                                <h4><?php echo $row->nama_pesawat ?></h4>
                                <a href="#" class="btn btn-default" role="button">Pilih</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <!-- FOOTER -->
	<?php $this->load->view('layout/footer'); ?>
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