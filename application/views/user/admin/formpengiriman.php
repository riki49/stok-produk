<?php
  $id="";
  $harga="";
  $tgl_produksi="";
  $jumlah="";
  $level ="";
  $nama = "";
  if (isset($m_produk)){
    $id=$m_produk->id;
    $harga=$m_produk->harga;
    $jumlah=$m_produk->jumlah;
    // $tgl_produksi=$m_produk->tgl_produksi;
    $level = $m_produk->level;
    $namaproduk = $m_produk->nama;
  }
  $nama = $_SESSION['nama'];
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Khusnudzhon Food</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
 
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  
  <!-- Daterange picker -->
  
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>FD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Husnudzon</b> Food</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <li class="dropdown notifications-menu">
            
            
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            
            
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nama ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nama ?>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-center">
                  <a href="<?php echo base_url()?>login/doLogout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php 
        $this->load->view('user/admin/menu')
     ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaksi Pengiriman Produk
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Produk</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
      <div class="row">

        <div class="col-xs-12">
        <a href="<?php echo base_url()?>pengiriman"><button type="button" class="btn bg-olive btn-flat margin">Kembali</button></a>
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pengiriman</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
            <form action="<?php echo base_url()?>pengiriman/kurangiStok/<?php echo $id ?>" method="post" class="form-horizontal">
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product ID</label>

                  <div class="col-sm-6">
                    <input  type="text" readonly class="form-control" name="idproduk" value="<?php echo $id ?>" id="success" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-6">
                    <input type="text" name="nama" value="<?php 
                    echo $namaproduk ?>" readonly class="form-control" id="success" />
                  </div>
                </div>
               
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-6">
                    <input type="text" name="level" value="<?php 
                    echo $level ?>" readonly class="form-control" id="success" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-6">
                    <input type="text" name="harga" readonly value="<?php echo $harga ?>"  class="form-control" id="harga" onkeyup="sum();" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"  >Stock tersedia </label>

                  <div class="col-sm-6">
                    <input type="text" name="jumlah" value="<?php echo $jumlah ?>" id="stok" readonly class="form-control" />
                  </div>
                </div>
<!--                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id transaksi</label>

                  <div class="col-sm-6">
                    <input type="text" name="idtrx" value="" class="form-control" id="success" />
                  </div> -->
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">tanggal transaksi</label>

                  <div class="col-sm-6">
                    <input type="date" name="tgl_produksi"  class="form-control" id="success" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">jumlah pengambilan </label>

                  <div class="col-sm-6">
                    <input type="text" name="jumlahambil"  class="form-control" id="jumlahambil" onkeyup="sum();" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"  >jumlah bayar</label>

                  <div class="col-sm-6">
                    <input readonly type="text" name="jumlahbayar" value="<?php echo $jumlah ?>"  class="form-control" id="jumlahbayar" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" >dikirim pada</label>

                  <div class="col-sm-6">
                    <input type="text" name="reseller"  class="form-control" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Action</label>

                  <div class="col-sm-6">
                    <input type="submit" class="btn bg-olive btn-flat margin" value="Simpan">
                    <input type="reset" class="btn bg-maroon btn-flat margin" value="Ulangi">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
    $this->load->view('public/footerUser')
   ?>

<script>
  function sum() {
    var jmlharga = document.getElementById('harga').value;
    var jmlambil = document.getElementById('jumlahambil').value;
    var jmlbayar = parseInt(jmlharga) * parseInt(jmlambil);
    
    if (!isNaN(jmlbayar)) {
       document.getElementById('jumlahbayar').value = jmlbayar;
    }
  }
</script>
</body>
</html>
