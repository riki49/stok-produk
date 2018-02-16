<?php 
  $nama = $_SESSION['nama'];
  $id = $_SESSION['id'];
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
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!--  -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cc"></i> <span>Tanya Kami</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url("reseller/sendMail") ?>"><i class="fa fa-circle-o"></i>tulis</a>
            </li>
            <li ><a href="<?php echo base_url("reseller/readMail/$id") ?>"><i class="fa fa-circle-o"></i>Semua pesan</a></li>
            <!-- <li><a href="#"><i class="fa fa-circle-o"></i>Belum Dibaca</a></li> -->
          </ul>
        </li>ss      
    </section>