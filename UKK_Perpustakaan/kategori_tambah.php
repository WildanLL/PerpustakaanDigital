<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/img/logobook2.png" rel="icon">
  <title>PERPUSTAKAAN</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <img src="assets/img/logobook2.png">
        </div>
        <div class="sidebar-brand-text mx-3">Perpustakaan Digital</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        NAVIGASI
      </div>
      <?php
            if($_SESSION['user']['level'] !='peminjam'){
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="kategori.php">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Kategori</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="buku.php">
          <i class="fas fa-book"></i>
          <span>Buku</span>
        </a>
      </li>
      <?php
         }else{
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="peminjaman.php">
          <i class="fas fa-book-open"></i>
          <span>Peminjaman</span>
        </a>
      </li>
      <?php
        }
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="ulasan.php">
          <i class="fas fa-comments"></i>
          <span>Ulasan</span>
        </a>
      </li>
      <?php
            if($_SESSION['user']['level'] !='peminjam'){
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="detail_pinjam.php">
          <i class="fas fa-book-open"></i>
          <span>Detail Pinjam</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="laporan.php">
          <i class="fas fa-book"></i>
          <span>Laporan Peminjaman</span>
        </a>
      </li>
      <?php
            if($_SESSION['user']['level'] !='petugas'){
        ?>
        <li class="nav-item">
        <a class="nav-link collapsed" href="register_petugas.php">
          <i class="fas fa-plus"></i>
          <span>Register Petugas</span>
        </a>
      </li>
      <?php
            }
          }
        ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php">
          <i class="fas fa-power-off"></i>
          <span>Logout</span>
        </a>
      </li>
     
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="assets/img/boy.jpg" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">  <?php echo $_SESSION['user']['nama']; ?></span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Kategori Buku</h1>
          </div>
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="aksi/aksi_kategori_tambah.php">
                            <div class="row mb-3">
                                <div class="col-md-2">Nama Kategori</div>
                                <div class="col-md-8"><input type="text" class="form-control" name="kategoribuku"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <a href="kategori.php" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>