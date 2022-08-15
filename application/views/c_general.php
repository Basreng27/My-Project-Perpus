<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perpustakaan dan Arsip SDN 234 Saluyu</title>

  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href=<?php echo ('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?>rel="stylesheet">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    .small-box {
      border-radius: 2px;
      position: relative;
      display: block;
      margin-bottom: 20px;
      box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    }

    .small-box>.inner {
      padding: 10px;
    }

    .small-box .icon {
      -webkit-transition: all 0.3s linear;
      -o-transition: all 0.3s linear;
      transition: all 0.3s linear;
      position: absolute;
      top: -10px;
      right: 10px;
      z-index: 0;
      font-size: 90px;
      color: rgba(0, 0, 0, 0.15);
    }

    .small-box>.small-box-footer {
      position: relative;
      text-align: center;
      padding: 3px 0;
      color: #fff;
      color: rgba(255, 255, 255, 0.8);
      display: block;
      z-index: 10;
      background: rgba(0, 0, 0, 0.1);
      text-decoration: none;
    }

    .bg-aqua {
      background: #00c0ef;
    }

    .bg-blue {
      background: #0073b7;
    }

    .bg-green {
      background: #00a65a;
    }

    .bg-red {
      background: #dd4b39;
    }

    .small-box:hover {
      cursor: pointer;
    }
  </style>
  <script src=<?php echo ('https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js') ?>></script>
  <script src=<?php echo ('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js') ?>></script>

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
          <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua text-white">
                  <div class="inner">
                    <h3><?= $count_pengguna; ?></h3>

                    <p>Anggota</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-edit"></i>
                  </div>
                  <a href="<?= base_url('daftar_anggota') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-3 col-xs-6">
                <!--small box-->
                <div class="small-box bg-blue text-white">
                  <div class="inner">
                    <h3><?= $count_buku; ?></h3>

                    <p>Daftar Buku</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-book"></i>
                  </div>
                  <a href="<?= base_url('daftar_buku') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green text-white">
                  <div class="inner">
                    <h3><?= $count_pinjam; ?></h3>

                    <p>Buku Di Pinjam</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                  <a href="<?= base_url('pengembalian_buku') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red text-white">
                  <div class="inner">
                    <h3><?= $count_kembali; ?></h3>

                    <p>Laporan Buku Di Kembalikan</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <a href="<?= base_url('denda_buku') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

            </div>
          </section>
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
    <script src="assets/js/is-number.js"></script>

</body>

</html>