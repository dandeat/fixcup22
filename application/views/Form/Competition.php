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
                
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#data1">
                      <button type="button" class="step-trigger" role="tab" aria-controls="data1" id="data1-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Team</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#data2">
                      <button type="button" class="step-trigger" role="tab" aria-controls="data2" id="data2-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Anggota Team</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                  <form action="competition/compe_team" method="post" id="compe_team" enctype="multipart/form-data">
                    <div id="data1" class="content" role="tabpanel" aria-labelledby="data1-trigger">
                      <div class="card card-warning mb-3">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" href="#infoteam">
                                  Click Me For Info
                                </a>
                              </h4>
                            </div>
                            <div id="infoteam" class="collapse">
                              <p class ='m-2'>Seluruh peserta yang telah mendaftar untuk mengikuti ‘FIX CUP Turnamen PUBG’ secara otomatis mendapatkan fasilitas untuk dapat mengikuti WEBINAR FIX CUP yang dilaksanakan pada Sabtu, 29 Mei 2021. Pada WEBINAR tersebut terdapat Technical Meeting (TM) terkait turnamen PUBG, sehingga peserta diharapkan dapat mengikuti WEBINAR FIX CUP.</p>
                              </div>
                            </div>
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
                          <input type="checkbox" class="form-check-input" id="sdk" required>
                          <label class="form-check-label" for="sdk">Saya Sudah Membaca dan Telah Menyetujui <a href="<?=base_url()?>assets/SYARAT DAN KETENTUAN PUBG FIXCUP.docx" target="_blank">Syarat dan Ketentuan</a> Yang Berlaku</label>
                      </div>
                      <button type="submit" class="btn btn-primary" id="btn-team">Simpan dan Lanjut</button>
                      <button type="button" class="btn btn-info next d-none" onclick="stepper.next()" id="btn-team-next">Next</button>
                    </div>
                  </form>
                    <div id="data2" class="content" role="tabpanel" aria-labelledby="data2-trigger">
                        <!-- <a href="#"  onclick="copyUrl()">Klik Untuk Membagikan Link Kepada Anggota</a> -->
                        <div class="row mb-3">
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="url-field" value="">
                            <small>Klik Copy Untuk Membagikan Link Kepada Anggota</small>
                          </div>
                          <div class="col-sm-2">
                            <a href="#" class="btn btn-block btn-info" id="btnCopy">Copy</a>
                          </div>
                        </div>
                        <div id="accordion">
                          <div class="card card-info" id="crdketua">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100 collapsed" id="hdrketua" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                  Ketua
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                            <form action="competition/compe_ketua" method="post" class="agt" id="ketua" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap" id="nama_lengkap_ketua" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname" id="nickname_ketua" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg" id="id_pubg_ketua" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                      </div>
                                      <input type="number" class="form-control" name="no_wa" id="no_wa_ketua" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email" id="email_ketua" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp" class="custom-file-input" id="ktp-ketua" required>
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
                          <div class="card card-info" id="crdagt1">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" id="hdragt1" href="#collapseTwo">
                                  Anggota 1
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                              <form action="competition/compe_agt1" method="post" class="agt" id="agt1" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap" id="nama_lengkap_agt1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname" id="nickname_agt1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg" id="id_pubg_agt1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                      </div>
                                      <input type="number" class="form-control" name="no_wa" id="no_wa_agt1" required>
                                  </div>                                
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email" id="email_agt1" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp" class="custom-file-input" id="ktp-agt1" required>
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
                          <div class="card card-info" id="crdagt2">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" id="hdragt2" href="#collapseThree">
                                  Anggota 2
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                              <form action="competition/compe_agt2" method="post" class="agt" id="agt2" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap" id="nama_lengkap_agt2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname" id="nickname_agt2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg" id="id_pubg_agt2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                      </div>
                                      <input type="number" class="form-control" name="no_wa" id="no_wa_agt2" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email" id="email_agt2" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp" class="custom-file-input" id="ktp-agt2" required>
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
                          <div class="card card-info" id="crdagt3">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" id="hdragt3" href="#collapseFour">
                                  Anggota 3
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                              <form action="competition/compe_agt3" method="post" class="agt" id="agt3" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap" id="nama_lengkap_agt3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname" id="nickname_agt3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg" id="id_pubg_agt3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                      </div>
                                      <input type="number" class="form-control" name="no_wa" id="no_wa_agt3" required>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email" id="email_agt3" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp" class="custom-file-input" id="ktp-agt3">
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
                          <div class="card card-info" id="crdagt4">
                            <div class="card-header">
                              <h4 class="card-title w-100">
                                <a class="d-block w-100" data-toggle="collapse" id="hdragt4" href="#collapseFour">
                                  Cadangan (Optional)
                                </a>
                              </h4>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                              <form action="competition/compe_agt4" method="post" class="agt" id="agt4" enctype="multipart/form-data">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" name="nama_lengkap" id="nama_lengkap_agt4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nickname</label>
                                  <input type="text" name="nickname" id="nickname_agt4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Id Pubg</label>
                                  <input type="text" name="id_pubg" id="id_pubg_agt4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Whatsapp</label>
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                      </div>
                                      <input type="number" class="form-control" name="no_wa" id="no_wa_agt4" required>
                                  </div>

                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="email" id="email_agt4" placeholder="" class="form-control" required>
                                </div>
                                <div class="form-group">
                                  <label for="ktp">Upload KTP/KTM/Kartu Pelajar</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" name="ktp" class="custom-file-input" id="ktp-agt4">
                                      <label class="custom-file-label" for="ktp">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                      <span class="input-group-text">Upload</span>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card-footer">
                                  <button class="btn btn-primary float-right" type="submit" id="btn-agt4">Simpan</button>
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
    bsCustomFileInput.init();
    var id_team = '0';
    var counter = 0;
    var isok = 

    // $('.next').click(function(){
    //   if(counter == 0){
    //   if($('#nama_team').val().length == 0 || $('#email').val().length == 0 || $('#domisili').val().length == 0 || $('#nomor_contact_wa').val().length == 0 || !$('#sdk').is(':checked')){
    //     alert('harap isi Form data Team terlebih dahulu');
    //     return false;
    //   }      
    // }
    // counter++;
    // console.log(counter);
    // // stepper.next();
    // })
    $('#btnCopy').click(function() {
      $('#url-field').select();
      document.execCommand( 'copy' );
    });
    $('.prev').click(function(){
      stepper.previous();
      // counter--;
      // console.log(counter);  
    })
    <?php
    if(isset($_GET['id_team'])){
      ?>
        id_team = "<?=$_GET['id_team']?>";
        get_team(id_team);
        get_anggota(id_team);
        $('#url-field').val(window.location.href);
      <?php
    }
    ?>

    function get_team(id){
      $.post('competition/get_by_id',{id_team : id}).done(function(dt){
          var d = JSON.parse(dt);
          console.log("hellow");
          if(d['res']!='success'){
            window.location.href = "<?=base_url()?>competition";
            return false;
          }
          $('#nama_team').val(d['nama_tim']);
          $('#email').val(d['email']);
          $('#domisili').val(d['domisili']);
          $('#nomor_contact_wa').val(d['nomor_contact_wa']);
          $('#sdk').prop('checked',true);
          $("#btn-team").html("Tersimpan");
          $("#btn-team").removeClass("btn-primary").addClass("btn-success");
          $("#btn-team").prop("disabled", true);
          $("#btn-team-next").removeClass("d-none");
          stepper.next();
       });
    }

    function get_anggota(id){
      $.post('competition/get_agt_by_id',{id_team : id}).done(function(dt){
          var d = JSON.parse(dt);
          // console.log("hellow");
          // if(d['res']!='success'){
          //   window.location.href = "<?=base_url()?>competition";
          //   return false;
          // }
          $.each(d['data'],function(k,v){
            // console.log(v);
            $("#nama_lengkap_"+v['role']).val(v['nama_lengkap']);
            $("#nickname_"+v['role']).val(v['nickname']);
            $("#id_pubg_"+v['role']).val(v['id_pubg']);
            $("#no_wa_"+v['role']).val(v['no_wa']);
            $("#email_"+v['role']).val(v['email']);
            $("#btn-"+v['role']).html("Tersimpan");
            $("#btn-"+v['role']).removeClass("btn-primary").addClass("btn-success");
            $("#btn-"+v['role']).prop("disabled", true);
            $("#crd"+v['role']).removeClass("card-info").addClass("card-success");
            $("#hdr"+v['role']).append(" <b>Tersimpan</b>");
          });
          // $('#nama_team').val(d['nama_tim']);
          // $('#email').val(d['email']);
          // $('#domisili').val(d['domisili']);
          // $('#nomor_contact_wa').val(d['nomor_contact_wa']);
          // $('#sdk').prop('checked',true);
          // $("#btn-team").html("Tersimpan");
          // $("#btn-team").removeClass("btn-primary").addClass("btn-success");
          // $("#btn-team").prop("disabled", true);
          // $("#btn-team-next").removeClass("d-none");
          stepper.next();
       });
    }


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
                        timer: 4000,
                    });
                    $("#btn-team").html("Simpan dan Lanjut");
                  } else {
                    Toast.fire({
                    icon: 'success',
                        title: 'Data Team Berhasil Di Simpan.',
                        showConfirmButton: false,
                        timer: 4000,
                    });
                    id_team = d['id'];
                    window.location.href = "<?=base_url()?>Competition?id_team="+id_team;
                    // get_team(id_team);
                    // stepper.next();
                    // $("#btn-team").html("Tersimpan");
                    // $("#btn-team").removeClass("btn-primary");
                    // $("#btn-team").addClass("btn-success");
                    // $("#btn-team").prop("disabled", true);
                  }
                  
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
              formData.append('id_team', id_team);
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
                    $("#btn-"+id).html("Simpan");
                  } else {
                    Toast.fire({
                    icon: 'success',
                        title: 'Data Anggota Berhasil Disimpan',
                        showConfirmButton: false,
                        timer: 4000,
                    });
                    $("#btn-"+id).html("Tersimpan");
                    $("#btn-"+id).removeClass("btn-primary").addClass("btn-success");
                    $("#btn-"+id).prop("disabled", true);
                    $("#crd"+id).removeClass("card-info").addClass("card-success");
                    $("#hdr"+id).append(" <b>Tersimpan</b>");
                  }
                  
                }
              });
            });
    $('#selesai').click(function(e){
      e.preventDefault();
      $("#selesai").html("<i class='fas fa-spinner fa-spin'></i> &nbsp Loading");
      $.post( "competition/cek_selesai", { id_team: id_team } ).done(function(data){
        var d = JSON.parse(data);
        if(d['res']!="success"){
          Toast.fire({
            icon: 'error',
            title: d['res'],
            showConfirmButton: false,
            timer: 4000,
          });
          $("#selesai").html("Selesai dan Simpan");
        } else {
          Toast.fire({
            icon: 'success',
            title: 'Form Berhasil di Submit',
            showConfirmButton: false,
            timer: 4000,
          });
          window.location.href = "<?=base_url()?>C_Daftar/r_compe";
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