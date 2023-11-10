<?php
  require_once('../koneksi.php');
  session_start();
  if(!isset($_SESSION['id_admin'])){
    header("Location:loginadmin.php");
  }
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="sneat/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Halaman petugas</title>
  <meta name="description" content="" />
  <!-- CSS -->
  <?php require_once('layout2/_CSS.php')?>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Sidebar -->
      <?php require_once('layout2/_Sidebar.php')?>
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php require_once('layout2/_Navbar.php')?>
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y ">
            <div class="row">
              <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations! 🎉</h5>
                        <p class="mb-4">
                          Hallo, Selamat datang admin! <span class="fw-bold"> </span> For more information, let see at
                          your profile!
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="sneat/assets/img/illustrations/man-with-laptop-light.png" height="140"
                          alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card-title d-flex align-items-start justify-content-between">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card-title d-flex align-items-start justify-content-between">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->
        <!-- Footer -->
        <?php require_once('layout2/_Footer.php')?>
        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- JS -->
  <?php require_once('layout2/_JS.php')?>
</body>

</html>