<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('layout/meta'); ?>
	<title>About - Reni Jaya Travel</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="back-banner box-shadow-bt">
    <div class="title-all">
        <h2 class="font-white">About Us</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div class="alert alert-info">
                <strong>Reni Jaya Travel</strong> merupakan perusahaan yang bergerak pada pemesanan tiket pesawat dan kapal, sudah banyak tiket terjual mulai dari lion air, sriwijaya, pelni dll.
                Perusahaan banyak bekerja sama dengan perusahaan lain seperti Garuda dan Lion.
            </div>
            <div class="alert alert-info">
                <h3>Kirim Masukan atau Komplain anda</h3>
                <br />
                <form method="post" action="<?php echo base_url('komplainmasukan/create') ?>">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis</label>
                        <select name="jenis" class="form-control">
                            <option value="Komplain">Komplain</option>
                            <option value="Masukan">Masukan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Telepon</label>
                        <input type="text" name="no_telpon" class="form-control" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pesan</label>
                        <textarea type="text" name="pesan" class="form-control" placeholder="Pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>
	<a href="#header" id="backtotop" class="bg-purple"><i class="fa fa-chevron-up fa-2x"></i></a>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
        if($this->session->flashdata('message_success')) {
    ?>
    <script>
        swal({
            text: "<?php echo $this->session->flashdata('message_success'); ?>",
            icon: "success",
            button: false,
            timer: 1200
        });
    </script>
    <?php
        }
    ?>
<?php $this->load->view('layout/js'); ?>
</body>
</html>