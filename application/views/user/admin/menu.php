<?php 
$nama = $_SESSION['nama'];
$id = 1;
?>
<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" 
          class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i></a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!--  -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cc"></i> <span>Input Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("pengiriman") ?>"><i class="fa fa-circle-o"></i>+ barang keluar</a></li>
            <!-- <li ><a href="#"><i class="fa fa-circle-o"></i> Pengembalian</a></li> -->
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-clone"></i> <span>Lihat Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>laporan/readUser"><i class="fa fa-circle-o"></i> Daftar Reseller</a></li>
            <li ><a href="<?php echo base_url()?>laporan/readTransaksi"><i class="fa fa-circle-o"></i> Daftar transaksi</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clone"></i> <span>pesan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url()?>admin/readMail"><i class="fa fa-circle-o"></i> semua pesan </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="<?php echo base_url('admin/editDashboard') ?>"><i class="fa fa-circle-o"></i>Edit Dashboard Public</a></li>
            <li ><a href="<?php echo base_url()?>admin/editProfil"><i class="fa fa-circle-o"></i>Edit akun</a></li>
          </ul>
        </li>    
    </section>