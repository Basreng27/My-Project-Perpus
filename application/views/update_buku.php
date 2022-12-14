<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perpustakaan dan Arsip SDN 234 Saluyu</title>

  <!-- Custom fonts for this template-->
  <link href=<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?> rel="stylesheet" type="text/css">
  <link href=<?php echo base_url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') ?> rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href=<?php echo base_url('assets/css/sb-admin-2.min.css') ?> rel="stylesheet">
  <link href=<?php echo base_url('assets/css/sb-admin-2.css') ?> rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <img class="img-profile" src=<?php echo base_url('assets/img/Saluyu2.png') ?> width="225" height="70">
        </div>
        <!-- <div class="sidebar-brand-text mx-3">Perpustakaan Umum</div> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Home -->
      <li class="nav-item">
        <a class="nav-link" href=<?php echo base_url('home') ?>>
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Service
      </div>
      <!-- Nav Item - Books -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-book"></i>
          <span>Buku</span>
        </a>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Layanan Pada Buku:</h6>
            <a class="collapse-item active" href=<?php echo base_url('daftar_buku') ?>>Daftar Buku</a>
            <a class="collapse-item" href=<?php echo base_url('tambah_buku') ?>>Tambah Buku</a>
            <a class="collapse-item" href=<?php echo base_url('peminjaman_buku') ?>>Peminjaman Buku</a>
            <a class="collapse-item" href=<?php echo base_url('pengembalian_buku') ?>>Pengembalian Buku</a>
            <a class="collapse-item" href=<?php echo base_url('denda_buku') ?>>Laporan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - User -->
      <li class="nav-item">
        <a class="nav-link collapsed" href=<?php echo base_url('daftar_buku') ?> data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
            <a class="collapse-item" href=<?php echo base_url('ganti_password') ?>>Ganti Password</a>
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
            <h1 class="h3 mb-0 text-gray-800">Buku</h1>
          </div>
          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Buku</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->

                <?php foreach ($content->result() as $key) : ?>
                  <form action="<?php echo base_url(); ?>crud/action_update_buku/<?php echo $key->id ?>" method="post">
                    <div class="card-body">
                      <!--main content start-->
                      <section id="main-content">
                        <section class="wrapper">
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">ISBN Number</label>
                              <div class="col-sm-10">
                                <input required type="text" onkeypress="return isNumberKey(event)" class="form-control round-form" name="isbn_number" value="<?php echo $key->isbn ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <!-- /form group -->
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                              <div class="col-sm-10">
                                <input required type="text" class="form-control round-form" name="judul" value="<?php echo $key->judul ?>">
                              </div>
                            </div>
                          </div>
                          <!-- /form group -->
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Pengarang</label>
                              <div class="col-sm-10">
                                <input required type="text" class="form-control round-form" name="pengarang" value="<?php echo $key->pengarang ?>">
                              </div>
                            </div>
                          </div>
                          <!-- /form group -->
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Penerbit</label>
                              <div class="col-sm-10">
                                <input required type="text" class="form-control round-form" name="penerbit" value="<?php echo $key->penerbit ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                              <div class="col-sm-10">
                                <select class="form-control" name="kategori" id="kategori">
                                  <option value="<?php echo $key->kategori ?>"><?php echo $key->kategori ?></option>
                                  <option value="Agama">Agama</option>
                                  <option value="Matematika">Matematika</option>
                                  <option value="IPS">IPS</option>
                                  <option value="IPA">IPA</option>
                                  <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                  <option value="PKN atau Sejarah">PKN atau Sejarah</option>
                                  <option value="Seni Budaya">Seni Budaya</option>
                                  <option value="PJOK atau Olahraga">PJOK atau Olahraga</option>
                                  <option value="Bahasa Sunda">Bahasa Sunda</option>
                                  <option value="Umum">Umum</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Kelas</label>
                              <div class="col-sm-10">
                                <select class="form-control" name="kelas" id="kelas">
                                  <option value="<?php echo $key->kelas ?>"><?php echo $key->kelas ?></option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="Umum">Umum</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <!-- /form group -->
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun</label>
                              <div class="col-sm-10">
                                <input required type="text" class="form-control round-form" onkeypress="return isNumberKey(event)" name="tahun" value="<?php echo $key->tahun ?>">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Stok</label>
                              <div class="col-sm-10">
                                <input required type="text" class="form-control round-form" name="stok" value="<?php echo $key->stok ?>">
                              </div>
                            </div>
                          </div>
                          <!-- /form group -->
                          <div class="form-group">
                            <div class="row">
                              <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                              <div class="col-sm-10">
                                <input required type="text" onkeypress="return isNumberKey(event)" class="form-control round-form" name="jumlah" value="<?php echo $key->jumlah ?>">
                              </div>
                            </div>
                          </div>
                          <!-- /form group -->
                          <div class="showback">
                            <button type="submit" class="btn btn-round btn-primary" value="save">Save</button>
                            <button type="submit" class="btn btn-round btn-danger" name="cancel" value="cancel" formnovalidate>Cancel</button>
                          </div>
                    </div>
                    </section>
                    </section>
              </div>
              </form>
            <?php endforeach ?>
            </form>
            </div>
          </div>
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
        <!-- Footer -->
        <?php include 'footer.php' ?>
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src=<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>></script>
    <script src=<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?php echo base_url('assets/js/sb-admin-2.min.js') ?>></script>

    <!-- Page level plugins -->
    <script src=<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>></script>

    <!-- Page level custom scripts -->
    <script src=<?php echo base_url('assets/js/demo/chart-area-demo.js') ?>></script>
    <script src=<?php echo base_url('assets/js/demo/chart-pie-demo.js') ?>></script>
    <script src=<?php echo base_url('assets/js/is-number.js') ?>></script>


</body>

</html>