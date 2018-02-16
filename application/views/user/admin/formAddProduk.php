<?php
  $id="";
  $harga="";
  $tgl_produksi="";
  $jumlah="";
  if (isset($m_produk)){
    $id=$m_produk->id;
    $harga=$m_produk->harga;
    $jumlah=$m_produk->jumlah;
    $tgl_produksi=$m_produk->tgl_produksi; 
  }
        $this->load->view('public/headerUser')
     ?>
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
        Tambah Stok Toko Anda
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
        <a href="<?php echo base_url()?>admin"><button type="button" class="btn bg-olive btn-flat margin">Kembali</button></a>
            <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Produk</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
            <form action="<?php echo base_url()?>produk/create" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product ID</label>

                  <div class="col-sm-6">
                    <input  type="text" class="form-control" name="id" value="<?php echo $id ?>" id="success" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Date</label>

                  <div class="col-sm-6">
                    <input type="date" name="tgl_produksi" value="<?php echo $tgl_produksi ?>"  class="form-control" id="success" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>

                  <div class="col-sm-6">
                    <select name="namaProduk" class="form-control" id="success">
                        <option value="batagor">Batagor</option> 
                        <option value="bihun">Bihun</option> 
                        <option value="cimol">Cimol</option> 
                        <option value="lumpia">Lumpia</option> 
                        <option value="makaroni">Makaroni</option> 
                        <option value="pangsit">Pangsit</option> 
                        <option value="siomay">Siomay</option>      
              </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-6">
                    <select name="level" class="form-control" id="success">
                      <option value="aman">Aman</option> 
                      <option value="siaga">Siaga</option> 
                      <option value="waspada">Waspada</option> 
                      <option value="bahaya">Bahaya</option> 
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Price</label>

                  <div class="col-sm-6">
                    <input type="text" name="harga" value="<?php echo $harga ?>"  class="form-control" id="success" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Stock</label>

                  <div class="col-sm-6">
                    <input type="text" name="jumlah" value="<?php echo $jumlah ?>"  class="form-control" id="success" />
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
    $this->load->view('public/footer')
   ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->

<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
