<?php
  require_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pariwisata</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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
                        <li class="breadcrumb-item"><a href="about.php">Tentang kami</a></li>
                        <li class="breadcrumb-item"><a href="index.php#layanan">Layanan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Pariwisata</li>
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
            <!-- Yogyakarta -->
            <div class="row g-4 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-3 col-md-3 wow fadeInUp text-center">
                    <a href="jogja.php" > <img src="carserv/img/jogja.jpg" class="services_img" width="250px" 
                    style="max-width:540px; 
                                box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                                border-radius: 20px;  
                                "></a>
                </div>  
                <div class="col-lg-9">
                    <div class="ms-4">
                        <h2>Yogyakarta</h2>
                        <p align="justify">Yogyakarta adalah destinasi yang memukau di Indonesia yang harus Anda sertakan dalam daftar perjalanan Anda. Terletak di Pulau Jawa, Yogyakarta menyajikan kombinasi sempurna antara warisan budaya yang kaya dan keindahan alam yang menakjubkan.</p>
                        <a href="jogja.php"><button class="btn btn-primary mt-2" style="border-radius:100px;">SELENGKAPNYA</button></a>
                    </div>
                </div>
            </div>
            <!-- Pacitan -->
            <div class="row g-4 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-3 col-md-3 wow fadeInUp text-center">
                    <a href="pacitan.php" > <img src="carserv/img/pacitan.jpg" class="services_img" width="250px" 
                    style="max-width:540px; 
                                box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                                border-radius: 20px;  
                                "></a>
                </div>  
                <div class="col-lg-9">
                    <div class="ms-4">
                        <h2>Pacitan</h2>
                        <p align="justify">Datanglah dan temukan pesona alami yang tak tertandingi di Pacitan! Dengan pantai-pantai yang memikat hati dan budaya yang mempesona, Pacitan adalah destinasi tersembunyi yang wajib Anda kunjungi. Segeralah rasakan keindahan alamnya, dan nikmati keramahan penduduknya. </p>
                        <a href="pacitan.php"><button class="btn btn-primary mt-2" style="border-radius:100px;">SELENGKAPNYA</button></a>
                    </div>
                </div>
            </div>
            <!-- Dieng  -->
            <div class="row g-4 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-3 col-md-3 wow fadeInUp text-center">
                    <a href="dieng.php" > <img src="carserv/img/dieng.jpg" class="services_img" width="250px" 
                    style="max-width:540px; 
                                box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                                border-radius: 20px;  
                                "></a>
                </div>  
                <div class="col-lg-9">
                    <div class="ms-4">
                        <h2>Wonosobo/Dieng</h2>
                        <p align="justify">Selamat datang di Wonosobo, sebuah surga tersembunyi yang menawarkan keindahan alam alpine, udara segar pegunungan, serta budaya yang kaya dan unik. Temukan pesona gunung Dieng, air terjun, sawah terasering, dan kuliner autentik kami yang tak terlupakan.</p>
                        <a href="dieng.php"><button class="btn btn-primary mt-2" style="border-radius:100px;">SELENGKAPNYA</button></a>
                    </div>
                </div>
            </div>
            <!-- Gunung kidul -->
            <div class="row g-4 mt-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-3 col-md-3 wow fadeInUp text-center">
                    <a href="gunungkidul.php" > <img src="carserv/img/gunungkidul.jpg" class="services_img" width="250px" 
                    style="max-width:540px; 
                                box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                                border-radius: 20px;  
                                "></a>
                </div>  
                <div class="col-lg-9">
                    <div class="ms-4">
                        <h2>Gunung Kidul</h2>
                        <p align="justify">Selamat datang di Gunungkidul, persembahan keindahan alam yang tak terlupakan. Di sini, Anda akan menemukan pantai-pantai eksotis, yang memadukan kecantikan alam dengan keramahan penduduk lokal serta pengalaman budaya yang mendalam.</p>
                        <a href="gunungkidul.php"><button class="btn btn-primary mt-2" style="border-radius:100px;">SELENGKAPNYA</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('layout/_footer.php') ?>
    <?php require_once('layout/_js.php') ?>
</body>

</html>