<?php
require_once('../koneksi.php');
if(isset($_GET['edit_motor'])){
    $id = $_GET['edit_motor'];
    $query = "SELECT * FROM s_motor where id='$id'";
    $data= mysqli_query($conn,$query);
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
    <title>Edit sewa motor</title>
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
                    <h5 class="card-header">Form edit sewa motor</h5>
                    <div class="card-body">
                        <?php foreach($data as $a){ ?>
                      <div>
                        <label for="judul" class="form-label">Judul</label>
                        <input type="hidden" name="id" value="<?=$a['id'];?>">
                        <input type="hidden" name="foto" value="<?=$a['foto'];?>">
                        <input class="form-control" type="text" value="<?=$a['judul'];?>" name="judul" id="judul">
                      </div>
                      <div>
                        <label for="foto" class="form-label mt-2">Foto motor</label>
                        <input class="form-control" type="file" name="foto"  value="<?=$a['foto'];?>" id="foto">
                      </div>
                      <div>
                        <label for="paket1" class="form-label mt-2">Paket 1</label>
                        <input class="form-control" type="number" name="paket1"  value="<?=$a['paket1'];?>" id="paket1">
                      </div>
                      <div>
                        <label for="paket2" class="form-label">Paket 2</label>
                        <input class="form-control" type="number" name="paket2"  value="<?=$a['paket2'];?>" id="paket2">
                      </div>
                      <div>
                        <label for="paket3" class="form-label">Paket 3</label>
                        <input class="form-control" type="number" name="paket3"  value="<?=$a['paket3'];?>"id="paket3">
                      </div>
                      <div>
                        <label for="kelengkapan" class="form-label">Kelengkapan</label>
                        <input class="form-control" type="text" name="kelengkapan"  value="<?=$a['kelengkapan'];?>" id="kelengkapan">
                      </div>
                      <div> 
                        <button class="btn btn-primary mt-3" type="submit" name="edit_motor">Submit</button>
                      </div>
                      <?php } ?>
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
 