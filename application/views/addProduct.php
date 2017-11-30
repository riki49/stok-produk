<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>husnudzon food</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <p>Tambah Stok</p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- <p class="login-box-msg">Form Login</p> -->
    <form action="<?php echo base_url('manageStock/addStock') ?>" method="post">

      <div class="form-group has-feedback">
          <input name="tanggal" type="date" class="form-control"></input>
      </div>

      <div class="form-group has-feedback">
      <select name="nama" class="form-control">  
           <option value="">nama produk</option>  
           <option value="makaroni">Makaroni</option>  
           <option value="Pangsit">Pangsit</option>  
           <option value="Bihun">Bihun</option>  
           <option value="Batagor">Batagor</option>  
           <option value="Lumpia">Lumpuia</option>  
           <option value="Cimol">Cimol</option>  
           <option value="Siomay">Siomay</option>  
          </select>
      </div>
      <div class="form-group has-feedback">
      <select name="level" class="form-control">  
           <option value="">level</option>  
           <option value="Aman">Aman</option>  
           <option value="Siaga">Siaga</option>  
           <option value="Waspada">Waspada</option>  
           <option value="Bahaya">Bahaya</option>    
          </select>
      </div>
      <div class="form-group has-feedback">
      <select name="harga" class="form-control">  
           <option value="">harga</option>  
           <option value="1500">1500</option>  
           <option value="4000">4000</option>   
          </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
      </div>
      <div class="row">
        <!-- /.col -->
        
      <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Tambah Stok</button>
      </div>
      <div class="col-xs-12">
        <button type="reset" class="btn btn-primary btn-block btn-flat">Reset</button>
      </div>
      <div class="col-xs-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat" formaction="<?php echo base_url('admin')?>">Cancel</button>
      </div>
        
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
