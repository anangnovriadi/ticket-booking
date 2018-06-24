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
          <h1>Kapal</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Kapal</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Edit</li>
          </ol>
        </section>
      
        <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">

            <?php 
                if($this->session->flashdata('message')) { 
            ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php 
                } 
                
                foreach($tmpEditKapal as $rows) {
            ?>
            
              <form action="<?php echo base_url('admin/kapal/update'); ?>" method="post" class="chart-box">
                <h4>Input Data Tiket Pesawat</h4>
                <br/>
                <div class="row">
                <input class="form-control" value="<?php echo $rows->id; ?>" name="id" id="basicInput" type="hidden" />
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Nama Kapal</label>
                      <input class="form-control" value="<?php echo $rows->nama_kapal; ?>" name="nama_kapal" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Pelabuhan Asal</label>
                      <input class="form-control" value="<?php echo $rows->pelabuhan_asal; ?>" name="pelabuhan_asal" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Pelabuhan Tujuan</label>
                      <input class="form-control" value="<?php echo $rows->pelabuhan_tujuan; ?>" name="pelabuhan_tujuan" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Jam Keberangkatan</label>
                      <input class="form-control" value="<?php echo $rows->jam_keberangkatan; ?>" name="jam_keberangkatan" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Jam Tiba</label>
                      <input class="form-control" value="<?php echo $rows->jam_tiba; ?>" name="jam_tiba" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Harga</label>
                      <input class="form-control" value="<?php echo $rows->harga; ?>" name="harga" placeholder="Rp." id="harga" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Kode Kapal</label>
                      <input class="form-control" value="<?php echo $rows->kode_kapal; ?>" name="kode_kapal" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Status</label>
                        <select name="status" class="form-control">
                        <?php
                            if($rows->tersedia == 1) {
                                echo "<option value='1' selected>Tersedia</option>
                                      <option value='0'>Habis</option>";
                            } else {
                                echo "<option value='1'>Tersedia</option>
                                      <option value='0' selected>Habis</option>";
                            }
                        ?>
                        </select>
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
                <?php } ?>
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