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
          <h1>Pesawat</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Pesawat</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Add</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">

            <?php if($this->session->flashdata('message')) { ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php } ?>
            
              <form action="<?php echo base_url('admin/pesawat/create'); ?>" method="post" class="chart-box">
                <h4>Input Data Tiket Pesawat</h4>
                <br/>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Nama Pesawat</label>
                      <input class="form-control" name="nama_pesawat" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Keberangkatan</label>
                      <input class="form-control" name="keberangkatan" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Tujuan</label>
                      <input class="form-control" name="tujuan" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Jam Keberangkatan</label>
                      <input class="form-control" id="datepicker" name="jam_keberangkatan" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Jam Tiba</label>
                      <input class="form-control" name="jam_tiba" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Harga</label>
                      <input class="form-control" name="harga" placeholder="Rp." id="harga" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Kode Pesawat</label>
                      <input class="form-control" name="kode_pesawat" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Kelas Penerbangan</label>
                      <input class="form-control" name="kelas_penerbangan" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <button type="submit" name="insert" class="btn btn-primary">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
        </section>
        
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<?php $this->load->view('layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#harga').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
    });
</script>

</body>
</html>