<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FIXCUP 2021 | Log In </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <link rel="icon" href="<?=base_url()?>assets/dist/img/favicon.ico">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-top: -100px">
  <!-- <center>
    <img src="<?=base_url()?>assets/dist/img/Udinus.png" style="width: 80%" alt="AdminLTE Logo"  style="opacity: 1">
  </center> -->
  <br><br>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a class="h1"><b>FIXCUP ADMIN</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" id="loginfrm" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url()?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  $(document).ready(function(){

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('#loginfrm').submit(function(e){
        e.preventDefault();
        $.ajax({
          type:'post',
          url :'<?=base_url()?>C_User/Login_ajax',
          data:$('#loginfrm').serialize(),
          success: function(result){
            var res = JSON.parse(result);
            if(res['status']=='success')
            {
              Toast.fire({
                icon: 'success',
                title: 'Login Berhasil.'
              });
              setTimeout(function(){
                window.location.href = "<?=base_url()?>/Home";
              }, 800); 
            } else {
              Toast.fire({
                icon: 'error',
                title: res['status']
              })
            }
          }
        });
        return false;
    });
  })
</script>
</body>
</html>
