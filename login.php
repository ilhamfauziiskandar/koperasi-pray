<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Koperasi | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="img/koperasi.png" />
</head>

<body class="hold-transition login-page bg-lightgray">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <span>
          <h2 class="login-box-msg"><img width="10%" src="img/koperasi.png">KOPERASI</h2>
        </span>
        <p class="login-box-msg">Silahkan login untuk mengakses</p>

        <form action="cek_login.php" method="post">
          <div class="input-group mb-3">
            <input type="username" name="username" class="form-control" placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br />
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script>
    $(function () {
 
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
      });
      
      <?php if ($_SESSION['alert'] == 'sukses') {
      
      $eusi = $_SESSION['isialert'];
      
      echo "$('#swalDefaultSuccess')
      Toast.fire({
        icon: 'success',
        title: '$eusi'
      })";
      
      unset($_SESSION['alert']);
      
      unset($_SESSION['isialert']);

     }?>

    <?php if ($_SESSION['alert'] == 'warning') {
      
      $eusi = $_SESSION['isialert'];
      
      echo "$('#swalDefaultWarning')
      Toast.fire({
        icon: 'warning',
        title: '$eusi'
      })";
      
      unset($_SESSION['alert']);
      
      unset($_SESSION['isialert']);

     }?>
  });
    

</script>
</body>

</html>
