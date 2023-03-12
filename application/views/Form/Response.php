<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FIXCUP | BEM FIK UDINUS Semarang</title>

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
	  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/bs-stepper/css/bs-stepper.min.css">
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
	  <script src="<?=base_url()?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>

	  <!-- SweetAlert2 -->
	  <script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	  <!-- Select2 -->
	  <script src="<?=base_url()?>assets/plugins/select2/js/select2.full.min.js"></script>
	  <script src="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
	  <script src="<?=base_url()?>assets/dist/js/adminlte.js"></script>
	  <script src="<?=base_url()?>assets/dist/js/demo.js"></script>

	  <script src="<?=base_url()?>assets/dist/js/tempusdominus.js"></script>

</head>
<body class="hold-transition layout-top-nav">
	<div class="wrapper">

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Universitas Dian Nuswantoro</small></h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item active"><a href=".">Home</a></li> -->
              <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-dark">
              <!-- <div class="card-header">
                <center>
                  
                </center>
              </div> -->
              <div class="card-body ">
                <center>
                  <!-- <img src="" alt=""> -->
                  <h1><?=$title?></h1>
                  <hr>
                  <!-- <h4><b>Form Berhasil Di Submit</b><br></h4> -->
                  <p>
                    Terima Kasih Telah <?=$acara?><!-- Online Competition Fixcup PUBG Mobile --><br>
                    Untuk Informasi Lebih Lanjut Bisa Hubungi Contact Person <br>
                    <?=$cp1?><?=$cp2?><br>
                    <?=$lblinfo?><br>
                  </p>
                  <a href="<?=$linkconfirm?>" class="btn btn-info"><?=$lblbtn?></a>
                </center>
            </div>
          </div>
        </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://dinus.ac.id">BEM Fakultas Ilmu Komputer Universitas dian nuswantoro</a>.</strong> All rights reserved.
  </footer>
</div>
<body>
	
</body>
</html>