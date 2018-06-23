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
                    <li><a href="<?php echo base_url('admin/pesawat/addPesawat'); ?>"><i class="fa fa-angle-right"></i> Add Data</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-archive"></i> <span>Tiket Kapal</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="kapal/dataTiketKapal.php"><i class="fa fa-angle-right"></i> Data Tiket</a></li>
                    <li><a href="kapal/inputTiketKapal.php"><i class="fa fa-angle-right"></i> Input Data</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-briefcase"></i> <span>Data Pemesanan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="dataPemesanan/dataPemesananPesawat.php"><i class="fa fa-angle-right"></i> Data Pemesanan Pesawat</a></li>
                    <li><a href="dataPemesanan/dataPemesananKapal.php"><i class="fa fa-angle-right"></i> Data Pemesanan Kapal</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-map-marker"></i> <span>Wilayah</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="wilayah/dataWilayahPesawat.php"><i class="fa fa-angle-right"></i> Data Wilayah Bandara</a></li>
                    <li><a href="wilayah/dataWilayahKapal.php"><i class="fa fa-angle-right"></i> Data Wilayah Pelabuhan</a></li>
                </ul>
            </li>
            <li><a href="laporan/laporanPesawat.php"><i class="fa fa-file"></i> Laporan</a></li>
            <li><a href="setting/pengaturan.php"><i class="fa fa-gears"></i> Pengaturan</a></li> 
            </li>
        </ul>
    </section>
</aside>