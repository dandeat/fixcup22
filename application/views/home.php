<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title?> | FIXCUP BEMFIK UDINUS Semarang</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Select2 -->

  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="icon" href="<?=base_url()?>assets/dist/img/favicon.ico">
  <style>
    .table td,th {
       text-align: center;   
    }
  </style>
  <script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?=base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/jszip/jszip.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Select2 -->
  <script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>
  <script src="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="<?=base_url()?>assets/dist/js/adminlte.js"></script>
  <script src="<?=base_url()?>assets/dist/js/demo.js"></script>
  <script src="<?=base_url()?>assets/dist/js/tempusdominus.js"></script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link">
      <img src="<?=base_url()?>assets/dist/img/bemfik.png" alt="Udinus Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-light">&nbsp Fixcup</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>assets/dist/img/avatar<?= rand(1,5)?>.png" style="width: 2.7rem" class="img-circle elevation-2 mt-2" alt="User Image">
        </div>
        <div class="info">
          <?php
          $role = $this->session->userdata('User')['role'];
          // if($role==1){$uname="Admin";}elseif($role==2){$uname=$this->session->userdata('User')['data_dos']['nama'];}elseif($role==3){$uname=$this->session->userdata('User')['data_mhs']['nama'];}
          ?>
          <a href="#" class="d-block"><?=$this->session->userdata('User')['username']?></a>
          <?php
          if($role==1){$role="SuperAdmin";}elseif($role==2){$role="Editor";}else{$role="Bendahara";}
          ?>
          <small class="text-white"><?=$role?></small> 
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=base_url()?>Home" id="menu_dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <?php if(in_array($this->session->userdata('User')['role'], array('1','2'))){?>
            <li class="nav-item">
            <a href="#" id="menu_data" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Data Pendaftaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url()?>WebinarData" id="menuWebinar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Webinar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url()?>FixcupData" id="menuCompe" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixcup</p>
                </a>
              </li>
            </ul>
          </li>

          <?php } else if (in_array($this->session->userdata('User')['role'], array('1','3'))) {
            # code...
          } {?>
          <li class="nav-item">
            <a href="<?=base_url()?>PembayaranData" id="menu_conf" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pembayaran
              </p>
            </a>
          </li>
        <?php }?>
<!--      
          <?php
          if($this->session->userdata('User')['role']=='1'){
            ?>
          <li class="nav-item">
            <a href="<?=base_url()?>User" id="menu_user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url()?>LogReview" id="menu_log" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Log Review
              </p>
            </a>
          </li>
            <?php
          }
          ?> -->
         <!--  <li class="nav-item">
            <a href="<?=base_url()?>Change_Pass" id="menu_pass" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="<?=base_url()?>Logout" id="menu_pengeluaran" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">BEM FIK Udinus</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">FIXCUP</li>
              <?=$breadcrumb?>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?=$content?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://bemfikudinus.com/">BEM FIK Udinus</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script>
  $(function () {
    $('.select2').select2()
    $.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
            icons: {
                time: 'fa fa-clock',
                date: 'fa fa-calendar',
                up: 'fa fa-arrow-up',
                down: 'fa fa-arrow-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-calendar-check-o',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
      } 
    });
    $('#<?=$active?>').addClass('active');
    <?php if($is_open == true) {?>
    $('#<?=$active?>').parent('.nav-item').addClass('menu-is-opening menu-open');
    $('#<?=$subactive?>').addClass('active');
    <?php } ?>
    $(".date").datetimepicker({
        format: "YYYY-MM-DD HH:mm",
    });
  });
</script>
</body>
</html>
