<?php
 require_once('koneksi.php');
  session_start();
  if(!isset($_SESSION['id_admin'])){
    header("Location:loginadmin.php");
  }
  $query = "SELECT * FROM s_mobil ORDER BY id DESC";
  $hasil = mysqli_query($conn,$query);
  $data = mysqli_fetch_array($hasil);
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
    <title>Halaman data motor</title>
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
            <div> 
                <a href="s_mobil.php" class="btn btn-outline-primary  ">
                  <span class="tf-icons bx bx-task"></span>&nbsp; Input data Mobil
                </a>      
              </div>
            <div class="row">
            <div class="col-lg-12 mb-4 order-0 mt-3">
            <!-- Table start -->
            <div class="card">
                <h5 class="card-header">Data sewa mobil</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Foto</th>
                          <th>H.Paket1</th>
                          <th>H.Paket2</th>
                          <th>H.Paket3</th>
                          <th>H.Paket4</th> 
                          <th>H.Paket5</th> 
                          <th>H.Paket6</th> 
                          <th>H.Paket7</th> 
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no =1; foreach($hasil as $data){ ?>
                        <tr>
                          <td>
                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no;?></strong>
                          </td>
                          <td><?= $data['judul'];?></td>
                          <td><img src="foto_mobil/<?= $data['foto']; ?>" width=100></td>
                          <td><?= rupiah($data['paket1']);?></td>
                          <td><?= rupiah($data['paket2']);?></td>
                          <td><?= rupiah($data['paket3']);?></td>
                          <td><?= rupiah($data['paket4']);?></td> 
                          <td><?= rupiah($data['paket5']);?></td> 
                          <td><?= rupiah($data['paket6']);?></td> 
                          <td><?= rupiah($data['paket7']);?></td> 
                          <td>
                          <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                                <div class="dropdown-menu" data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-90.5px, 27.5px, 0px);">
                                    <a class="dropdown-item"  href="edit_mobil.php?edit_mobil=<?=$data['id']?>" ><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                    <a class="dropdown-item" onclick="return confirm('Yakin menghapus data <?= $data['judul'];?> dari data mobil ?')"href="proses.php?hapus_mobil=<?= $data['id'] ?>"><i class="bx bx-trash me-1"></i> Hapus</td>
                                </div>
                            </div>
                          </td>
                        </tr>
                        <?php $no++; }?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            <!-- End -->
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
 