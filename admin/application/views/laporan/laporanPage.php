<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<?php $this->load->view('layout/css'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('layout/header') ?>
    <?php $this->load->view('layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          <h1>Laporan</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Laporan</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-8 col-md-offset-2">
            <form action="<?php ?>" method="post" class="chart-box">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group text-center">
                            <h4>Laporan Tiket Pesawat</h4>
                            <br />
                            <div class="col-md">
                                <input class="form-control input-cus" placeholder="Pilih Tanggal" name="tgl_keberangkatan" type="text" id="dateP">
                            </div>
                            <br />
                            <a style="margin-right: 10px;" href="<?php echo base_url('admin/laporan/pesawat') ?>" class="btn btn-primary">Cetak</a>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group text-center">
                            <h4>Laporan Tiket Kapal</h4>
                            <br />
                            <div class="col-md">
                                <input class="form-control input-cus" placeholder="Pilih Tanggal" name="tgl_keberangkatan" type="text" id="datePKapal">
                            </div>
                            <br />
                            <a style="margin-left: 10px;" href="<?php echo base_url('admin/laporan/kapal') ?>" class="btn btn-primary">Cetak</a>
                        </fieldset>
                    </div>
                </div>
            </form>
          </div>
        </section>
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $('#dateP').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-30d',
        todayHighlight: true
    });
    $('#datePKapal').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-30d',
        todayHighlight: true
    });
</script>

</body>
</html>