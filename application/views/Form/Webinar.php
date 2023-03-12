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
    <script src="<?=base_url()?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	  <script src="<?=base_url()?>assets/dist/js/adminlte.js"></script>
	  <script src="<?=base_url()?>assets/dist/js/demo.js"></script>

	  <script src="<?=base_url()?>assets/dist/js/tempusdominus.js"></script>

</head>
<body class="hold-transition layout-top-nav">
	<div class="wrapper">
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
            <div class="card">
              <form action="webinar" id="frmwebinar" method="post" enctype="multipart/form-data">
              <!-- <div class="card-header">
                <center>
                  
                </center>
              </div> -->
              <div class="card-body ">
                <center>
                  <img src="" alt="">
                  <h1>Form Pendaftaran Webinar Fixcup</h1>
                  <hr>
                </center>
                <div class="form-group mb-3">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Isi Nama Lengkap" required>
                </div>
                <div class="form-group mb-3">
                  <label for="email">Email Adress</label>
                  <input type="email" class="form-control" name="email" id="nama" placeholder="Email Yang Bisa Dihubungi" required>
                </div>
                <div class="form-group mb-3">
                  <label for="no_wa">No HP (Whatsapp Aktif)</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">+62</span>
                    </div>
                    <input type="number" class="form-control" name="no_wa" placeholder="Nomor Whatsapp Yang Bisa dihubungi" required>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <label for="domisili">Domisili</label>
                  <input type="text" class="form-control" name="domisili" id="domisili" placeholder="ex. Semarang" required>
                </div>
                <div class="form-group">
                    <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="ktp" class="custom-file-input" id="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <small>PNG & JPG Only</small>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="sdk" required>
                    <label class="form-check-label" for="sdk">Saya Sudah Membaca dan Telah Menyetujui <a href="<?=base_url()?>assets/SYARAT DAN KETENTUAN WEBINAR.docx" target="_blank">Syarat dan Ketentuan</a> Yang Berlaku</label>
                </div>
              </div>
              <div class="card-footer">
                <button id="regs" type="submit" class="btn btn-block btn-success">Submit</button>
              </div>
              </form>
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
    <strong>Copyright &copy; 2021 <a href="https://dinus.ac.id">BEM Fakultas Ilmu Komputer Universitas dian nuswantoro</a>.</strong> All rights reserved.
  </footer>
</div>
<script>
  $(function () {
    bsCustomFileInput.init();
     $('#frmwebinar').submit(function(e){
              e.preventDefault();

              $("#regs").html("<i class='fas fa-spinner fa-spin'></i> &nbsp Loading");
              var fileData = $('#exampleInputFile').prop('files')[0];
              var formData = new FormData($(this)[0]);
              
              formData.append('file', fileData);
              // var formData = new FormData($(this)[0]);
              $.ajax({
                url:$(this).attr('action'),
                dataType: 'text',  // what to expect back from the PHP script, if anything
                  data: formData,
                  // async: false,
                  cache: false,
                  processData: false,
                  contentType: false,                        
                  type: 'post',
                success: function(dt){
                  var d = JSON.parse(dt);
                  if(d['res']!='success') {
                    Toast.fire({
                    icon: 'error',
                        title: d['res'],
                        showConfirmButton: false,
                        timer: 4000,
                    });
                  } else {
                    window.location.href = "<?=base_url()?>C_Daftar/r_webinar";
                  }
                  $("#regs").html("Submit");
                }
              });
            })                 
            var Toast = Swal.mixin({
              toast: false,
            });

  });
 
</script>
</body>
</html>