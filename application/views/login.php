<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perpustakaan dan Arsip SDN 234 Saluyu</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="assets/img/Saluyu.jpeg">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <hr>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Website Admin Perputakaan dan Arsip SDN 234 Saluyu
                    </h1>
                  </div>
                  <hr>
                  <form class="user" method="post" action="<?php echo base_url('action_login'); ?>">
                    <div class="form-group">
                      <div class="row">
                        <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Masukkan Password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <input type="text" class="form-control form-control-user" placeholder="Masukkan Kode Verifikasi Disamping" name="vercode" maxlength="5" autocomplete="off" required style="height:25px; width:80%" />&nbsp;
                        <img src="verif">
                      </div>
                      <span id="alert"></span>
                    </div>
                    <hr>
                    <button type="submit" name="login" value="login" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>