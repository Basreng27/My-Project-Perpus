<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perpustakaan dan Arsip SDN 234 Saluyu</title>

  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href=<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>rel="stylesheet">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href=<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css') ?>>

  <script src=<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js') ?>></script>
  <script src=<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js') ?>></script>

  <?php
  if (isset($_POST['tahun'])) {
    $GLOBALS = $_POST['tahun'];
  } else {
    $GLOBALS = date('Y');
  }

  $content = $this->db->get('transaksi');
  $count2 = $a = $b = $c = $d = $e = $f = $g = $h = $i = $j = $k = $l = 0;
  $jsonArray = array();

  foreach ($content->result() as $key2) :
    $tahun = date("Y", strtotime($key2->date_pinjam));

    if ($tahun == $GLOBALS) {
      $thn2 = date("m", strtotime($key2->date_pinjam));
      if ($thn2 == "01") {
        $a = ++$a;
      } elseif ($thn2 == "02") {
        $b = ++$b;
      } elseif ($thn2 == "03") {
        $c = ++$c;
      } elseif ($thn2 == "04") {
        $d = ++$d;
      } elseif ($thn2 == "05") {
        $e = ++$e;
      } elseif ($thn2 == "06") {
        $f = ++$f;
      } elseif ($thn2 == "07") {
        $g = ++$g;
      } elseif ($thn2 == "08") {
        $h = ++$h;
      } elseif ($thn2 == "09") {
        $i = ++$i;
      } elseif ($thn2 == "10") {
        $j = ++$j;
      } elseif ($thn2 == "11") {
        $k = ++$k;
      } elseif ($thn2 == "12") {
        $l = ++$l;
      }
    }
  endforeach;
  ?>

  <script type="text/javascript">
    var a = <?php echo $a; ?>;
    var b = <?php echo $b; ?>;
    var c = <?php echo $c; ?>;
    var d = <?php echo $d; ?>;
    var e = <?php echo $e; ?>;
    var f = <?php echo $f; ?>;
    var g = <?php echo $g; ?>;
    var h = <?php echo $h; ?>;
    var i = <?php echo $i; ?>;
    var j = <?php echo $j; ?>;
    var k = <?php echo $k; ?>;
    var l = <?php echo $l; ?>;
  </script>

</head>

<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <img class="img-profile" src="assets/img/Saluyu2.png" width="225" height="70">
        </div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item active">
        <a class="nav-link" href="home">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Service
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-book"></i>
          <span>Buku</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Layanan Pada Buku:</h6>
            <a class="collapse-item" href="daftar_buku">Daftar Buku</a>
            <a class="collapse-item" href="tambah_buku">Tambah Buku</a>
            <a class="collapse-item" href="peminjaman_buku">Peminjaman Buku</a>
            <a class="collapse-item" href="pengembalian_buku">Pengembalian Buku</a>
            <a class="collapse-item" href="denda_buku">Laporan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - User -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Anggota</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Layanan Pada Anggota:</h6>
            <a class="collapse-item" href="daftar_anggota">Daftar Anggota</a>
            <a class="collapse-item" href="tambah_anggota">Tambah Anggota</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Akun</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Layanan Pada Akun:</h6>
            <a class="collapse-item" href="ganti_password">Ganti Password</a>
            <a class="collapse-item" data-toggle="modal" href="#" data-target="#myModal">Logout</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'topbar.php' ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
          </div>
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Peminjam Buku Tahun <?php echo $GLOBALS; ?></h6>
                  <div class="dropdown no-arrow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" name="form" action="" method="post">
                      <div class="input-group">
                        <input type="text" class="form-control border-0 small" onkeypress="return isNumberKey(event)" placeholder="Masukkan Tahun" id="tahun" name="tahun" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                          </button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
        <!-- Modal -->

        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Logout</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <p>Apakah anda yakin ingin keluar?</p>
              </div>
              <div class="modal-footer">
                <a type="button" class="alert alert-info" href=<?php echo base_url('logout') ?>>Ya</a>
                <button type="button" class="alert alert-info" data-dismiss="modal">Tidak</button>
              </div>
            </div>

          </div>
        </div>
        <?php include 'footer.php' ?>

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <script src="assets/js/is-number.js"></script>

</body>

</html>