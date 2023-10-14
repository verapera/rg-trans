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
    <title>Form input Private charter</title>
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
                    <h5 class="card-header">Form Private Charter</h5>        
                    <div class="card-body">
                      <div>
                        <label for="rute" class="form-label">Rute</label>
                        <input class="form-control" type="text" name="rute" id="rute" placeholder="Masukan rute...">
                      </div>
                      <div>
                        <label for="sheat" class="form-label mt-2">Sheat</label>
                        <input class="form-control" type="text" name="sheat" id="sheat" placeholder="Masukan keterangan sheat...">
                      </div>
                      <div>
                        <label for="harga" class="form-label mt-2">Harga</label>
                        <input class="form-control" type="number" name="harga" id="harga" placeholder="Masukan Harga...">
                      </div>
                      <button class="btn btn-primary mt-3" type="submit" name="pc">Submit</button>
                      <a href="pcadmin.php" class="btn btn-outline-primary mt-3">
                          <span class="tf-icons bx bx-task"></span>&nbsp; Data Private Charter
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
 