<?php
  require_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pacitan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php require_once('layout/_css.php') ?>
    <style>
        .text-decoration-none{
            text-decoration:none;
            list-style-type: none;
        }
    </style>    
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
                        <li class="breadcrumb-item"><a href="about.php">Tentang kami</a></li>
                        <li class="breadcrumb-item"><a href="pariwisata.php">Pariwisata</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Pacitan</li>
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
                <h2 class="mb-3">Pariwisata</h2>
                
            </div>
            <div class="row g-4 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-12">
                    <div class="ms-4">
                        <h2>Pacitan</h2>
                        <p align="justify">Datanglah dan temukan pesona alami yang tak tertandingi di Pacitan! Dengan pantai-pantai yang memikat hati dan budaya yang mempesona, Pacitan adalah destinasi tersembunyi yang wajib Anda kunjungi. Segeralah rasakan keindahan alamnya, dan nikmati keramahan penduduknya. </p>
                        <h4>Tempat Wisata yang akan menjadi kunjungan di Pacitan Tour :</h4>

                    </div>
                    <!-- klayar -->
                    <div class="row g-1 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="mt-4 col-lg-3 col-md-3  wow fadeInUp text-center">
                            <img src="carserv/img/klayar.jpg" class="services_img" width="200px" 
                            style="max-width:540px; 
                                        box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                                        border-radius: 20px;  
                                        ">
                        </div>
                        <div class="mt-4 col-lg-9">
                            <div >
                                <h4>1. Pantai Klayar</h4>
                                <p align="justify">Pantai Klayar, Surga Eksotis di Ujung Timur Jawa! Pasir putih yang lembut, ombak besar yang menggoda para peselancar, dan pemandangan matahari terbenam yang luar biasa menjadikan Pantai Klayar sebagai destinasi impian.</p>
                            </div>
                         </div>
                    </div>
                    <!-- srau -->
                    <div class="row g-4 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="mt-4 col-lg-3 col-md-3  wow fadeInUp text-center">
                            <img src="carserv/img/srau.jpg" class="services_img" width="200px" 
                            style="max-width:540px; 
                                        box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                                        border-radius: 20px;  
                                        ">
                        </div>
                        <div class="mt-4 col-lg-9">
                            <div >
                                <h4>2. Pantai Srau</h4>
                                <p align="justify">Selamat datang di Pantai Srau, Permata Tersembunyi di Pacitan! Pasir putihnya yang lembut, ombak yang tenang, dan hamparan karang yang indah menciptakan suasana damai yang sempurna untuk bersantai dan menjalani liburan yang tak terlupakan. </p>
                            </div>
                         </div>
                    </div>
                    <!-- ngiroboyo -->
                    <div class="row g-4 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="mt-4 col-lg-3 col-md-3  wow fadeInUp text-center">
                            <img src="carserv/img/ngiroboyo.jpg" class="services_img" width="200px" 
                            style="max-width:540px; 
                                        box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                                        border-radius: 20px;  
                                        ">
                        </div>
                        <div class="mt-4 col-lg-9">
                            <div >
                                <h4>3. Pantai Ngiroboyo</h4>
                                <p align="justify">Keindahan Alam Tersembunyi salah satunya adalah Pantai Ngiroboyo di Pacitan! Terletak di pesisir selatan Jawa, Pantai Ngiroboyo adalah persembunyian eksotis yang menunggu untuk dijelajahi. Nikmati makanan laut segar dan ramah-tamah penduduk setempat. 
                                </p>
                            </div>
                         </div>
                    </div>
                    <br><br>
                    <div>
                        <h4 >Keterangan paket Pacitan Tour :</h4>       
                        <p><strong>* Catatan paket sudah termasuk (MMT,Sanck,Makan 2x,Tiket,Parkir)</strong></p> 
                        <ul class="text-decoration-none">
                            <li>

                                Paket 1 : Menggunakan Big Bus Dengan kapasitas 55 Seat 
                            </li>
                            <li>

                                Paket 2 : Menggunakan Medium Bus Dengan kapasitas 35 Seat 
                            </li>
                        </ul>
                        <p><strong>* Catatan Non paket belum termasuk (MMT,Sanck,Makan 2x,Tiket,Parkir)</strong></p> 
                        <ul  class="text-decoration-none">
                            <li>

                                Paket 1 : Menggunakan Big Bus Dengan kapasitas 55 Seat 
                            </li>
                            <li>

                                Paket 2 : Menggunakan Medium Bus Dengan kapasitas 35 Seat 
                            </li>
                        </ul>

                        <h4 class="mt-5 mb-2"><strong>Keterangan Harga paket :</strong></h4> 
                        <p><strong>* Harga sudah termasuk paket :</strong></p> 
                        <ul class="text-decoration-none">
                            <li>
                                Paket 1 : Rp.10.525.000
                               
                            </li>
                            <li>
                                Paket 2 : Rp.7.375.000
                            </li>
                        </ul>
                        <p><strong>* Harga belum termasuk paket :</strong></p> 
                        <ul class="text-decoration-none">
                            <li>
                                Paket 1 : Rp.4.600.000
                               
                            </li>
                            <li>
                                Paket 2 : Rp.2.600.000
                            </li>
                        </ul>
                        <p><strong>Keterangan :</strong></p>
                        <ul>
                            <li>
                                Program Tour dan Pariwisata dapat menyesuaikan bedasarkan permintaan Anda
                            </li>
                            <li>
                                Tour akan dibantu oleh supir yang ramah dan berpengalaman
                            </li>
                            <li>
                                Pemandu wisata dapat diminta, Hubungi kami jika anda ingin meminta pemandu wisata selama perjalanan
                            </li>
                            <li>
                                Harga Tour yang jelas, berarti tidak ada biaya yang tersembunyi
                            </li>
                        </ul>
                        <p><strong>Pembayaran :</strong></p>
                        <ul>
                            <li>
                                Pembayaran bisa dilakukan di "Tempat penjemputan"
                            </li>
                            <li>
                                Pembayaran bisa dilakukan Tunai / Bank Transfer
                            </li>
                        </ul>
                        <h4 class="mt-4 mb-2"><strong>Layanan pemesanan :</strong></h4> 
                         <a href="https://wa.me/6281333166131" target="blank" >
                             <h4><img src="logo/waa.png" width="50"/>081333166131</h4>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('layout/_footer.php') ?>
    <?php require_once('layout/_js.php') ?>
</body>

</html>