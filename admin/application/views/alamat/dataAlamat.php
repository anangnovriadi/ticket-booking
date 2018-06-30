<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<?php $this->load->view('layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Data Alamat</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Alamat</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-8 col-md-offset-2">

            <?php if($this->session->flashdata('message')) { ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php 
            } 
            
                foreach($tmpAlamat as $rows) {
            ?>
            
              <form action="<?php echo base_url('admin/alamat/update'); ?>" method="post" class="chart-box">
                <h4>Ubah Data Alamat Jika Diperlukan</h4>
                <br/>
                <div class="row">
                    <input class="form-control" name="id" value="<?php echo $rows->id; ?>" type="hidden" />
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label>Alamat Kantor</label>
                            <textarea class="form-control" name="alamat" rows="5"><?php echo $rows->nama_kantor; ?></textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label>No Telepon</label>
                            <input class="form-control" name="no_telepon" value="<?php echo $rows->telepon; ?>" type="text" />
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Handphone</label>
                            <input class="form-control" name="no_hp" value="<?php echo $rows->hp; ?>" type="text" />
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <button style="margin-left: 16px;" type="submit" name="insert" class="btn btn-primary">Ubah</button>      
                    <a style="margin-left: 10px;" href="<?php echo base_url('admin/') ?>" class="btn btn-danger">Kembali ke Beranda</a>
                </div>
              </form>
                <?php } ?>
          </div>
        </section>
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<?php $this->load->view('layout/js'); ?>

</body>
</html>