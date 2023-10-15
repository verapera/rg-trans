<?php
 require_once('../koneksi.php');
 session_start();
 if(!isset($_SESSION['id_admin'])){
   header("Location:loginadmin.php");
 }
  $query = "SELECT * FROM ds_mobil ORDER BY id DESC";
  $hasil = mysqli_query($conn,$query);
  $data = mysqli_fetch_array($hasil);
  

  function noHp($t){
    $nohp= $t;
    if(!preg_match("/[^+0-9]/",trim($nohp))){
      if(substr(trim($nohp), 0, 2)=="62"){
        $hp    =trim($nohp);
    }
    // cek apakah no hp karakter ke 1 adalah angka 0
    else if(substr(trim($nohp), 0, 1)=="0"){
        $hp    ="62".substr(trim($nohp), 1);
      }
  }
  return $hp;
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
    <title>Data sewa mobil</title>
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
            <div class="col-lg-12 mb-4 order-0 mt-4">
            <!-- Table start -->
            <div class="card">
                <h5 class="card-header">Data sewa mobil</h5>
                <div class="card-body">
                <div> 
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="text-center">
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No Telepon</th>
                          <th>Tanggal waktu sewa</th>
                          <th>Alamat Penjemputan</th>
                          <th>Harga</th>
                          <th>Jenis mobil</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $no =1; foreach($hasil as $data){ ?>
                            <tr class="text-center">
                              <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no;?></strong>
                              </td>
                              <td><?= $data['nama'];?></td>
                              <td><?= $data['alamat'];?></td>
                              <td><a href="https://wa.me/<?= noHp($data['telp']);?>"><?= $data['telp'];?></a></td>
                              <td><?= $data['tglwkt_sewa'];?></td>
                              <td><?= $data['alamat_jemput'];?></td>
                              <td><?= rupiah($data['paket']);?></td>
                              <td><?= $data['jmobil'];?></td>
                              <td><a class="btn btn-outline-danger" onclick="return confirm('Yakin menghapus data <?= $data['nama'];?> dari data mobil ?')"href="proses.php?hapus_bookingmbl=<?= $data['id'] ?>">Hapus</a></td>
                              
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
 