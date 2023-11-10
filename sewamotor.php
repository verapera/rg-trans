<?php
require_once('koneksi.php');
$query = "SELECT * FROM s_motor";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sewa Motor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="rgtrans,travel,rg,trans,rgtrans solo,travel solo,rg trans" name="keywords">
    <meta content="RG-Trans berkomiten tinggi terhadap efisiensi dan ketepatan waktu, dua nilai inti yang sangat dijunjung oleh RG-Trans. Dengan latar belakang yang kuat dalam transportasi dan logistik. RG-Trans memiliki pengalaman dalam mengelola dan menjaga kendaraan tetap dalam kondisi prima" name="description">
    <link rel="shortcut icon" href="./carserv/img/iconrg.png">
    <?php require_once('layout/_css.php') ?>

</head>

<body>
    <?php require_once('layout/_topbar.php') ?>
    <?php require_once('layout/_navbar.php') ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(carserv/img/a.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Layanan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Tentang kami</a></li>
                        <li class="breadcrumb-item"><a href="index.php#layanan">Layanan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Sewa motor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// RG-Trans Services //</h6>
                <h2 class="mb-5">Daftar layanan sewa motor</h2>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <?php foreach ($hasil as $data) { ?>
                    <div class="col-lg-3 col-md-4 wow fadeInUp text-center">
                        <h4 class="text-center font-weight-bold"><?= $data['judul'] ?></h4>
                        <img src="foto_motor/<?= $data['foto'] ?>" class="services_img" width="220px" style="max-width:540px; 
                              box-shadow:  5px 5px 5px rgba(0,0,0,0.5); 
                              border-radius: 20px;                      ">
                        <h5 class="text-center font-weight-bold mt-3 mb-0">Harga</h5>
                        <p class="text-center mt-3">Paket 1 : <?= rupiah($data['paket1']) ?> / 2 jam <br>
                            Paket 2 : <?= rupiah($data['paket2']) ?> / 4 jam <br>
                            Paket 3 : <?= rupiah($data['paket3']) ?> / 6 jam <br>
                            Kelengkapan : <br><?= $data['kelengkapan'] ?>
                        </p>
                        <div class="text-center md-3">
                            <a href="<?= 'booking_motor?motor=' . $data['id'] ?>"><button class="btn btn-primary mt-2 font-weight-bold" style="border-radius:100px;">Booking</button></a>
                            <a href="https://wa.me/6281333166131" target="blank">
                                <img src="logo/waa.png" width="58" />
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>




    <?php require_once('layout/_footer.php') ?>
    <?php require_once('layout/_js.php') ?>
</body>

</html>