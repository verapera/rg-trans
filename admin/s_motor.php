<?php
    session_start();
    if(!isset($_SESSION['id_admin'])){
      header("Location:loginadmin.php");
    }
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="sneat/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Input sewa motor</title>
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
            <div class="container-xxl flex-grow-1 container-p-y ">
            <div class="row">
             <!-- Sewa motor Start -->
        
             <form enctype="multipart/form-data" action="proses.php" method="POST">
             <div class="col-md-8">
             <div class="card align-center">
                    <h5 class="card-header">Form input sewa motor</h5>
                    
                    <div class="card-body">
                      <div>
                        <label for="judul" class="form-label">Jenis motor</label>
                        <input class="form-control" type="text" name="judul" id="judul">
                      </div>
                      <div>
                        <label for="foto" class="form-label mt-2">Foto motor</label>
                        <input class="form-control" type="file" name="foto" id="foto">
                      </div>
                      <div>
                        <label for="paket1" class="form-label mt-2">Harga Paket 1</label>
                        <input class="form-control" type="number" name="paket1" id="paket1">
                      </div>
                      <div>
                        <label for="paket2" class="form-label">Harga Paket 2</label>
                        <input class="form-control" type="number" name="paket2" id="paket2">
                      </div>
                      <div>
                        <label for="paket3" class="form-label">Harga Paket 3</label>
                        <input class="form-control" type="number" name="paket3" id="paket3">
                      </div>
                      <div>
                        <label for="kelengkapan" class="form-label">Kelengkapan</label>
                        <input class="form-control" type="text" name="kelengkapan" id="kelengkapan">
                      </div>
                      <button class="btn btn-primary mt-3" type="submit" name="data_motor">Submit</button>
                      <a href="ds_motor" class="btn btn-outline-primary mt-3">
                          <span class="tf-icons bx bx-task"></span>&nbsp; Data Motor
                      </a> 
                  </div>
                </div>
             </form>   
             <!-- Sewa motor end -->
            </div>
            </div>
            </div>         
            <!-- / Content -->  
            <!-- Footer -->
            <?php require_once('layout2/_Footer.php')?> 
        </div>
        </div>
      </div>
      </div>
    </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- JS -->
    <?php require_once('layout2/_JS.php')?> 
  </body>
</html>
 

