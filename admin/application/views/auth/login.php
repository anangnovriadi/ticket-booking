<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('layout/meta'); ?>
<?php $this->load->view('layout/css'); ?>

<body class="body-bg-color">
<div class="wrapper">
  <div class="form-body">
    <form action="" class="col-form" novalidate="" />
    <div class="col-logo"><a href="../index.html"><img alt="" src="<?php echo base_url('assets/admin/img/reni.png'); ?>" /></a></div>
      <fieldset>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Username</label>
            <input class="form-control" placeholder="Username" type="text" />
            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
        </section>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label">Password</label>
            <input class="form-control" placeholder="Password" type="password" />
            <span class="fa fa-lock form-control-feedback" aria-hidden="true"></span> </div>
        </section>
      </fieldset>
      <footer class="text-right">
        <button type="button" class="btn btn-info pull-left">Login</button>
    </form>
  </div>
</div>

<?php $this->load->view('layout/js'); ?>

</body>
</html>