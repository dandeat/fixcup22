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
              <!-- <div class="card-header">
                <center>
                  
                </center>
              </div> -->
              <div class="card-body ">
                <center>
                  <img src="" alt="">
                  <h1>Form Konfirmasi Pembayaran</h1>
                  <hr>
                </center>
                <form action="javascript:myFunction();" method="post" id="hdrform">
                  <div class="form-group mb-3">
                    <label for="slct">Konfirmasi Pembayaran Untuk</label>
                    <select name="slct" id="slct" class="form-control">
                      <option value="webinar" selected>FIXCUP Webinar Passion To Career</option>
                      <option value="compe">FIXCUP Online Competition Pubg Mobile</option>
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="email">Email Adress</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Yang Digunakan Saat Mendaftar" required>
                  </div>
                  <input type="submit" class="d-none">
                </form>
                <div id="dtl" class="d-none">
                  <hr>
                  <label>Detail</label>
                  <form action="." method="post" id="dtlform">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group mb3">
                          <label for="nama" id="nama_lbl"></label>
                          <input type="text" class="form-control disabled" name="nama" id="nama" placeholder="" disabled required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-6">
                        <div class="form-group mb3">
                          <label for="tagihan">Status</label>
                          <input type="text" class="form-control disabled" name="status" id="status" placeholder="" readonly="readonly" required>
                        </div>
                        <div class="form-group mb3">
                          <label for="tagihan">Sisa Pembayaran</label>
                          <input type="number" class="form-control disabled" name="tagihan" id="tagihan" placeholder="" readonly="readonly" required>
                        </div>
                        <div class="form-group mb3">
                          <label for="terbayar">Terbayar</label>
                          <input type="number" class="form-control disabled" name="terbayar" id="terbayar" placeholder="" readonly="readonly" required>
                        </div>
                        <div class="form-group mb3">
                          <label for="bayar">Bayar (Tertulis)</label>
                          <input type="number" class="form-control" name="bayar" id="bayar" placeholder="Masukan Jumlah Pembayaran" required>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6">
                          <label for="">Upload Bukti Pembayaran</label>
                          <div style="width:100%; height: 260px;" class="bg-dark" >
                            <center>
                              <img src="#"  id="strukimg" style="max-height: 260px;max-width: 100%;" alt="No Image">
                            </center>
                          </div>
                          <div class="custom-file">
                            <input type="file" name="struk" class="custom-file-input" id="struk" required>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>                
                      </div>
                      <input type="submit" class="d-none">
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-footer">
                <button id="btn-utm" data-proses="cek_pembayaran" class="btn btn-block btn-success">Cek Detail Pembayaran</button>
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
    <strong>Copyright &copy; 2021 <a href="https://dinus.ac.id">BEM Fakultas Ilmu Komputer Universitas dian nuswantoro</a>.</strong> All rights reserved.
  </footer>
</div>
<script>
  $(function () {
    bsCustomFileInput.init();
    var nama = "Nama Team";
    
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          console.log(e.target.result);
          $('#strukimg').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#struk").change(function() {
      readURL(this);
    });

    var selisih = 0;

    $('#bayar').keyup(function(){
      selisih = $(this).val() - $('#tagihan').val();
      selisih = selisih.toFixed(3); 
      // $('#selisih').val(selisih);
      if(selisih>0){$('#btn-utm').attr('disabled',true);}
      else{$('#btn-utm').attr('disabled',false);}
      console.log(selisih);
    });

     $('#btn-utm').click(function(e){
      // e.preventDefault();
      console.log('clicked');
      if($(this).attr('data-proses') == "cek_pembayaran"){
        // console.log("tes");
        if(! $("#hdrform")[0].checkValidity()) {
          $("#hdrform").find(':submit').click();
          $(this).html("Cek Detail Pembayaran");

        } else {
          $(this).html("<i class='fas fa-spinner fa-spin'></i> &nbsp Loading").attr('disabled',true);
          // $("#hdrfrm").submit();
          // myFunction();
          $.post("Konfirmasi/cek_pembayaran", $("#hdrform").serialize()).done(function(dt){
            var d = JSON.parse(dt);
            if(d['stat'] == '404'){
              Toast.fire({
                icon: 'error',
                title: 'Email Tidak Ditemukan, Harap Hubungi Panitia Terkait',
                showConfirmButton: false,
                timer: 4000,
              });
              $('#btn-utm').html("Cek Detail Pembayaran").attr('disabled',false);
              return false;
            } else if (d['stat'] == '500') {
              Toast.fire({
                icon: 'error',
                title: 'Anda Memiliki Konfirmasi Pembayaran yang Sedang Di Proses Harap Tunggu',
                showConfirmButton: false,
                timer: 4000,
              });
              $('#btn-utm').html("Cek Detail Pembayaran").attr('disabled',false);
              return false;
            } else if (d['stat'] == '2'){
              Toast.fire({
                icon: 'info',
                title: 'Tagihan Anda Sudah Terbayar Full',
                showConfirmButton: false,
                timer: 4000,
              });
              $('#btn-utm').html("Cek Detail Pembayaran").attr('disabled',false);
              return false;
            } else {

              if($('#slct').val()=='webinar'){
                nama = "Nama Lengkap";
              }
              $('#dtl').removeClass('d-none');
              $('#nama_lbl').html(nama);
              $('#nama').val(d['nama']);
              $('#status').val(d['res']);
              $('#tagihan').val(d['tagihan']);
              $('#terbayar').val(d['terbayar']);
              $('#btn-utm').html("Konfirmasi Pembayaran").attr('disabled',false);
              $('#btn-utm').attr('data-proses','bayar');
              $('#email').attr('disabled',true);
              $('#slct').attr('disabled',true);
              return false;
            }
          });
        }        
      } else if($(this).attr('data-proses') == "bayar") {
        if(! $("#dtlform")[0].checkValidity()) {
          $("#dtlform").find(':submit').click();
          $(this).html("Konfirmasi Pembayaran");
        } else {
          $(this).html("<i class='fas fa-spinner fa-spin'></i> &nbsp Loading").attr('disabled',true);
          var fileData = $('#struk').prop('files')[0];
          var formData = new FormData($('#dtlform')[0]);
          formData.append('file', fileData);
          formData.append('email', $('#email').val());
          formData.append('slct', $('#slct').val());

          $.ajax({
                url:'Konfirmasi/bayar',
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
                        timer: 5000,
                    });
                    $("#btn-utm").html("Konfirmasi Pembayaran").attr('disabled',false);
                  } else {
                    Toast.fire({
                    icon: 'success',
                        title: d['info'],
                        showConfirmButton: false,
                        timer: 10000,
                    }).then(function(){
                      window.location.href = "<?=base_url()?>C_Daftar/r_bayar";
                    });
                    
                  }                  
                }
              });
        }
      }
     });



    var Toast = Swal.mixin({
      toast: false,
    });

  });
 
</script>
</body>
</html>