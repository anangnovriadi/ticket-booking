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
          <h1>Pengaturan</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Pengaturan</a></li>
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
            
                foreach($tmpPengaturan as $rows) {
            ?>
            
              <form action="<?php ?>" method="post" class="chart-box">
                <h4>Data Pengaturan</h4>
                <br/>
                <div style="padding-bottom: 14px;">
                    <button type="button" id="clickEdit" class="btn btn-info btn-rounded btn-cus-info">Click to Edit</button>
                </div>
                <div class="row">
                    <input class="form-control" name="id" value="" type="hidden" />
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label>Nama User</label>
                            <input class="form-control" readonly="readonly" value="<?php echo $rows->nama_admin; ?>" name="no_telepon" type="text"  />
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Email</label>
                            <input class="form-control" readonly="readonly" name="no_hp" value="<?php echo $rows->email; ?>" type="text" />
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group">
                            <label>Username</label>
                            <input class="form-control" readonly="readonly" name="no_telepon" value="<?php echo $rows->username; ?>" type="text" />
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Password</label>
                            <input class="form-control" readonly="readonly" name="no_hp" value="<?php echo $rows->password; ?>" type="password" />
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <button style="margin-left: 16px;" type="submit" name="insert" class="btn btn-primary">Submit</button>      
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
<script>
    $('#clickEdit').click(function () {
        $('.form-control').removeAttr('readonly');
    })
</script>

</body>
</html>