<aside class="main-sidebar dark-bg">
    <section class="sidebar">
        <div class="user-panel black-bg">
            <div class="pull-left image"> <img src="<?php echo base_url('assets/admin/img/img1.png'); ?>" class="img-circle" alt="User Image" /> </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <a href="#"><i class="fa fa-circle"></i> Online</a> </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header dark-bg">Menu</li>
            <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="treeview"> <a href="#"><i class="fa fa-archive"></i> <span>Tiket Pesawat</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/pesawat'); ?>"><i class="fa fa-angle-right"></i> Data Tiket</a></li>
                    <li><a href="<?php echo base_url('admin/pesawat/add'); ?>"><i class="fa fa-angle-right"></i> Add Data</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-archive"></i> <span>Tiket Kapal</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/kapal') ?>"><i class="fa fa-angle-right"></i> Data Tiket</a></li>
                    <li><a href="<?php echo base_url('admin/kapal/add'); ?>"><i class="fa fa-angle-right"></i> Input Data</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-user"></i> <span>Pelanggan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/pelanggan'); ?>"><i class="fa fa-angle-right"></i> Data Pelanggan</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-briefcase"></i> <span>Data Pemesanan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/pemesanan/pemesananPesawat'); ?>"><i class="fa fa-angle-right"></i> Pesawat</a></li>
                    <li><a href="<?php echo base_url('admin/pemesanan/pemesananKapal'); ?>"><i class="fa fa-angle-right"></i> Kapal</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-globe"></i> <span>Kelola Front Web</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('admin/alamat'); ?>"><i class="fa fa-angle-right"></i> Alamat</a></li>
                    <li><a href="<?php echo base_url('admin/pembayaran'); ?>"><i class="fa fa-angle-right"></i> Bank Pembayaran</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('admin/laporan'); ?>"><i class="fa fa-file"></i> Laporan</a></li>
            <li><a href="<?php echo base_url('admin/pengaturan'); ?>"><i class="fa fa-gears"></i> Pengaturan</a></li> 
            </li>
        </ul>
    </section>
</aside>