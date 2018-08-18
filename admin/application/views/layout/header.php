<header class="main-header dark-bg"> 
    <a href="<?php echo base_url('admin') ?>" class="logo dark-bg"> 
    <span class="logo-mini"><img src="<?php echo base_url('assets/admin/img/logo.png'); ?>" alt="Ovio" /></span> 
    <span class="logo-lg"><img src="<?php echo base_url('assets/admin/img/logo-admin.png'); ?>" alt="Ovio" /></span> </a> 
    <nav class="navbar navbar-static-top" role="navigation"> 
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url('assets/admin/img/img1.jpg'); ?>" class="user-image" alt="User Image" /> <span class="hidden-xs">Administrator</span> </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <form action="<?php echo base_url('admin/login/logout'); ?>" method="post" class="chart-box">
                        <li><button type="submit"><i class="fa fa-power-off"></i> Logout</button></li>
                    </form>
                </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>