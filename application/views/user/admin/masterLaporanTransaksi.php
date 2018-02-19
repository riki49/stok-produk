    <?php 
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
        Stok Toko Anda Saat ini
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('') ?>">
        <i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">trasnsaksi</li>
      </ol>
    </section>

    <!-- Main content -->
<section class="content">
      <div class="row">

        <div class="col-xs-12">
        <a href="<?php echo base_url()?>admin"><button 
        type="button" class="btn bg-olive btn-flat margin">
        kembali</button></a>
        <a href="<?php echo base_url()?>admin/cetak"><button 
        type="button" class="btn bg-olive btn-flat margin">
        Print</button></a>
          <!-- /.box -->

          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Data produk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th class="col-md-1">Tanggal Transaksi</th>
                    <th class="col-md-1">Id transaksi</th>
                    <th class="col-md-1">Id Produk</th>
                    <th class="col-md-1">harga</th>
                    <th class="col-md-1">jumlah</th>
                    <th class="col-md-1">pembeli</th>
                    <!-- <th class="col-md-1">Opsi</th> -->
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($trasnsaksi as $m_trasnsaksi) : 
                ?>
                    <tr>
                        <td><?=$m_trasnsaksi->tanggal?></td>
                        <td><?=$m_trasnsaksi->idtrx?></td>
                        <td><?=$m_trasnsaksi->idproduk?></td>
                        <td><?=$m_trasnsaksi->jumlah?></td>
                        <td><?=$m_trasnsaksi->harga?></td>
                        <td><?=$m_trasnsaksi->reseller?></td>
                       <!--  <td>
                          
                            <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){
                             location.href='<?php echo base_url()?>trasnsaksi/delete/<?php echo $m_trasnsaksi->idtrx;?>'
                              }" class="btn btn-danger">Hapus</a>
                        </td> -->
                    </tr>
                   <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
    </div>
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
