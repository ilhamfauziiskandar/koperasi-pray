<?php
error_reporting(0);
session_start();
if ($_SESSION['status'] != 'login') {
  echo "<meta http-equiv='refresh' content='1;url=login.php'>";
}

include_once('config/database.php');
$db = new database(); 
$utang = $db->belum_lunas();
$nucanmayar= mysql_num_rows($utang);

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Koperasi Mandiri</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="img/koperasi.png" />
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-navy">
      <div class="container">
        <a href="index.php?pages=home" class="navbar-brand">
          <span class="brand-text font-weight-light">
          <img src="img/koperasi.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
            <b>KOPERASI MANDIRI</b>
          </span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link"></a>
            </li>
            <li class="nav-item">
              <a href="index.php?pages=anggota" class="nav-link">Anggota</a>
            </li>
            <li class="nav-item">
              <a href="index.php?pages=simpan" class="nav-link">Simpan</a>
            </li>
            <li class="nav-item">
              <a href="index.php?pages=pinjam" class="nav-link">Pinjam</a>
            </li>
            <li class="nav-item">
              <a href="index.php?pages=pembukuan" class="nav-link">Pembukuan</a>
            </li>
          </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <?php echo $_SESSION['username'];?>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge"><?php echo $nucanmayar;?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header"> Notifications</span>
              <div class="dropdown-divider"></div>
              <?php  
                $anggota = new database();
                $belum_lunas = $anggota->belum_lunas();
                while ($d1 = mysql_fetch_array($belum_lunas)) {
                $cokot = $d1;
              ?>
              <a href="index.php?pages=cicilan&id_pinjaman=<?= $cokot['id_pinjaman'] ?>" class="dropdown-item"> 
                <i class="fas fa-user mr-2"><?php echo $cokot['nama_anggota'] ?></i> 
                <span class="float-right text-muted text-sm">Rp.<?php echo $cokot['sisa'] ?></span>
              </a>
              
              <?php }?>
              
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php" role="button"  onclick="return confirm('Anda yakin ingin keluar ?')"><i class="fas fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->
<?php
array_key_exists('pages', $_GET) ? $page = $_GET['pages'] : $page = 'koperasi' ;  
//if (!isset($_SESSION["username"])) {
  //  echo "<script>alert('Anda harus Login terlebih dahulu');</script>";
    //echo "<script>location='login.php';</script>";
//} 
?> 

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item"><?php echo $page;?></li>
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
                <div class="card-body">
                  <?php
                    // Untuk Pindah Halaman
                    if($page=="home") {
                      include "home.php";
                    }
                    if($page=="anggota") {
                      include "anggota.php";
                    }
                    if($page=="laporan") {
                      include "laporan.php";
                    }
                    if($page=="lap_simpan") {
                      include "lap_simpan.php";
                    }
                    if($page=="tambah_anggota") {
                      include "anggota/tambah.php";
                    }
                    if($page=="edit_anggota") {
                      include "anggota/edit.php";
                    }
                    if($page=="cicilan") {
                      include "cicilan.php";
                    }
                    if($page=="user") {
                      include "user.php";
                    }
                    if ($page=="simpanan") {
                      include 'simpanan.php';
                    }
                    if ($page=="simpan") {
                      include 'simpan.php';
                    }
                    if ($page=="tambah_simpanan") {
                      include 'simpanan/tambah.php';
                    }
                    if($page=="tambah_cicilan") {
                      include "cicilan/tambah.php";
                    }
                    if($page=="edit_cicilan") {
                      include "cicilan/edit.php";
                    }
                    if($page=="ketidak_aktifan") {
                      include "ketidak_aktifan.php";
                    }
                    if($page=="tambah_ketidak_aktifan") {
                      include "ketidak_aktifan/tambah.php";
                    }
                    if($page=="edit_ketidak_aktifan") {
                      include "ketidak_aktifan/edit.php";
                    }
                    if($page=="pinjaman") {
                      include "pinjaman.php";
                    }
                    if($page=="pinjam") {
                      include "pinjam.php";
                    }
                    if($page=="tambah_pinjaman") {
                      include "pinjaman/tambah.php";
                    }
                    if($page=="edit_pinjaman") {
                      include "pinjaman/edit.php";
                    }
                    if($page=="nabung") {
                      include "menabung.php";
                    }
                    if($page=="cetak_cicilan") {
                      include "cetak_cicilan.php";
                    }
                    if($page=="cetak_laporan") {
                      include "cetak.php";
                    }
                    if($page=="belum_lunas") {
                      include "belum_lunas.php";
                    }
                    if($page=="pembukuan") {
                      include "pembukuan.php";
                    }
                  ?>
                </div>
              </div>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer bg-navy">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        KOPERASI MANDIRI
      </div>
      <!-- Default to the left -->
      <strong>Prayoga &copy 2020</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

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