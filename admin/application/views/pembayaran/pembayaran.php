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
          <h1>Bank Pembayaran</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Bank Pembayaran</a></li>
            <li class="active"><i class="fa fa-dashboard"></i> Data</li>
          </ol>
        </section>

        <div class="col-md-6 col-md-offset-3">
        <section class="content-header">
            <form action="<?php echo base_url(); ?>" method="post" class="chart-box">
                <h4>Input Data Bank Pembayaran</h4>
                <br/>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Nama Bank</label>
                      <input class="form-control" name="nama_bank" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Atas Nama</label>
                      <input class="form-control" name="atas_nama" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>No Rekening</label>
                      <input class="form-control" name="no_rekening" id="basicInput" type="text" />
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Gambar Bank</label>
                      <input class="form-control" name="gambar" id="basicInput" type="file" />
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
        </section>
        </div>

        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="chart-box">
                        <h4>Data Bank Pembayaran</h4>
                        <div class="table-responsive m-top-2">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Bank</th>
                                    <th>Atas Nama</th>
                                    <th>No Rekening</th>
                                    <th>Gambar</th>
                                    <th>Tools</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                   
                                ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <center>
                                                <a href="<?php echo base_url(); ?>"><i class="fa fa-edit fa-lg"></i></a>
                                                <span class="spasi">
                                                <a href="<?php echo base_url() ?>"></span><i class="fa fa-trash fa-lg"></a></i>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                    
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div> 

    <?php $this->load->view('layout/footer'); ?>
</div>

<?php $this->load->view('layout/js'); ?>

</body>
</html>