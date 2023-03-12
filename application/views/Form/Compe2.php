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
            <div class="card">
              
              <!-- <div class="card-header">
                <center>
                  
                </center>
              </div> -->
              <div class="card-body p-3">
                <center>
                  <h1>Form Pendaftaran FIXCUP</h1>
                </center>
                
              
                  <form action="competition/compe_team" method="post" id="compe_team" enctype="multipart/form-data">
                    <div id="data1" class="content" role="tabpanel" aria-labelledby="data1-trigger">
                      <div class="form-group mb-3">
                        <label for="nama">Nama Team</label>
                        <input type="text" name="nama_tim" id="nama_team" placeholder="" class="form-control" required>
                      </div>
                      <div class="form-group mb-3">
                        <label>Alamat Email Contactable</label>
                        <input type="email" name="email" id="email" placeholder="ex. Victor@Pubg.Mobile" class="form-control" required>
                      </div>
                      <div class="form-group mb-3">
                        <label>Domisili</label>
                        <input type="text" name="domisili" id="domisili" placeholder="ex. Semarang" class="form-control" required>
                      </div>
                      <div class="form-group mb-3">
                        <label>Nomor Whatsapp Contactable</label>
                        <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">+62</span>
                              </div>
                              <input type="number" class="form-control" name="nomor_contact_wa" id="nomor_contact_wa" required>
                        </div>
                      </div>
                      <div class="form-check mb-3">
                          <input type="checkbox" class="form-check-input" id="sdk">
                          <label class="form-check-label" for="sdk">Saya Sudah Membaca dan Telah Menyetujui <a href="#" target="_blank">Syarat dan Ketentuan</a> Yang Berlaku</label>
                      </div>
                  </form>
                    <div id="data2" class="content" role="tabpanel" aria-labelledby="data2-trigger">
                        <div id="accordion">
                          <div class="card card-info">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                  Ketua
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                            <form action="competition/compe_ketua" method="post" class="agt" id="ketua" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap1" id="nama_lengkap1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname1" id="nickname1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg1" id="id_pubg1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <input type="text" name="no_wa1" id="no_wa1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email1" id="email1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp1" class="custom-file-input" id="ktp-ketua" required>
                                      <label class="custom-file-label" for="ktp">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer">
                                  <button class="btn btn-primary float-right" type="submit" id="btn-ketua">Simpan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                          <div class="card card-info">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                  Anggota 1
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                              <form action="competition/compe_agt1" method="post" class="agt" id="agt1" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap2" id="nama_lengkap2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname2" id="nickname2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg2" id="id_pubg2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <input type="text" name="no_wa2" id="no_wa2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email2" id="email2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp2" class="custom-file-input" id="ktp-agt1" required>
                                      <label class="custom-file-label" for="ktp">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card-footer">
                                  <button class="btn btn-primary float-right" type="submit" id="btn-agt1">Simpan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                          <div class="card card-info">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                  Anggota 2
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                              <form action="competition/compe_agt2" method="post" class="agt" id="agt2" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap3" id="nama_lengkap3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname3" id="nickname3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg3" id="id_pubg3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <input type="text" name="no_wa3" id="no_wa3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email3" id="email3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp3" class="custom-file-input" id="ktp-agt2" required>
                                      <label class="custom-file-label" for="ktp">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card-footer">
                                  <button class="btn btn-primary float-right" type="submit" id="btn-agt2">Simpan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                          <div class="card card-info">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                                  Anggota 3
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                              <form action="competition/compe_agt3" method="post" class="agt" id="agt3" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap4" id="nama_lengkap4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname4" id="nickname4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg4" id="id_pubg4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <input type="text" name="no_wa4" id="no_wa4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email4" id="email4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp4" class="custom-file-input" id="ktp-agt3">
                                      <label class="custom-file-label" for="ktp">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card-footer">
                                  <button class="btn btn-primary float-right" type="submit" id="btn-agt3">Simpan</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      <button type="button" id="bcksub" class="btn btn-primary prev">Previous</button>
                      <button id="selesai" class="btn btn-warning" >Selesai dan Simpan</button>
                    </div>
                   <!--  <div id="data3" class="content" role="tabpanel" aria-labelledby="data3-trigger">
                      
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" id="regs" class="btn btn-success">Submit</button>
                    </div> -->
                  </div>
                </form>
                </div>
                
              </div>
              <div class="card-footer">
               Harap Cek Data Sebelum Submit (Jika Submit Tidak bisa ditekan Cek kembali Input Data Apakah Sudah lengkap)
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
<script>  
  $(function(){
    var id_team = '0';
    var counter = 0;

    $('.next').click(function(){
      if(counter == 0){
      if($('#nama_team').val().length == 0 || $('#email').val().length == 0 || $('#domisili').val().length == 0 || $('#nomor_contact_wa').val().length == 0 || !$('#sdk').is(':checked')){
        alert('harap isi Form data Team terlebih dahulu');
        return false;
      }      
    }
    counter++;
    console.log(counter);
    stepper.next();
    })
    $('.prev').click(function(){
      stepper.previous();
      counter--;
      console.log(counter);  
    })

     $('#compe_team').submit(function(e){
              e.preventDefault();

              $("#btn-team").html("<i class='fas fa-spinner fa-spin'></i> &nbsp Loading");
              // var fileData = $('#exampleInputFile').prop('files')[0];
              var formData = new FormData($(this)[0]);
              
              // formData.append('file', fileData);
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
                        timer: 2000,
                    });
                  } else {
                    Toast.fire({
                    icon: 'success',
                        title: 'Data Team Berhasil Di Simpan.',
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    id_team = d['id'];
                  }
                  $("#btn-team").html("Edit dan Lanjut");
                }
              });
            });
    $('.agt').submit(function(e){
              e.preventDefault();
              var id = $(this).attr('id');
              $("#btn-"+id).html("<i class='fas fa-spinner fa-spin'></i> &nbsp Loading");
              var fileData = $('#ktp-'+id).prop('files')[0];
              var formData = new FormData($(this)[0]);
              
              formData.append('file', fileData);
              // var formData = new FormData($(this)[0]);
              $.ajax({
                url:$(this).attr('action')+"/"+id_team,
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
                        timer: 2000,
                    });
                  } else {
                    Toast.fire({
                    icon: 'success',
                        title: d['success'],
                        showConfirmButton: false,
                        timer: 2000,
                    });
                  }
                  $("#btn-"+id).html("Edit dan Simpan");
                }
              });
            });                 
            var Toast = Swal.mixin({
              toast: false,
            });
  });
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  });
</script>
</body>
</html>