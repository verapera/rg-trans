<?php
require_once('koneksi.php');
$motor = mysqli_query($conn, "SELECT COUNT(CONVERT(judul, SIGNED)) As Nilai FROM s_motor;");
$datamotor = mysqli_fetch_assoc($motor);
$mobil = mysqli_query($conn, "SELECT COUNT(CONVERT(judul, SIGNED)) As Nilai FROM s_mobil;");
$datamobil = mysqli_fetch_assoc($mobil);
$pc = mysqli_query($conn, "SELECT COUNT(CONVERT(rute, SIGNED)) As Nilai FROM privatecharter;");
$datapc = mysqli_fetch_assoc($pc);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RG-Trans</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="rgtrans,travel,rg,trans,rgtrans solo,travel solo,rg trans" name="keywords">
    <meta content="RG-Trans berkomiten tinggi terhadap efisiensi dan ketepatan waktu, dua nilai inti yang sangat dijunjung oleh RG-Trans. Dengan latar belakang yang kuat dalam transportasi dan logistik. RG-Trans memiliki pengalaman dalam mengelola dan menjaga kendaraan tetap dalam kondisi prima" name="description">
    <link rel="shortcut icon" href="./carserv/img/iconrg.png">
    <?php require_once('layout/_css.php') ?>
</head>

<body>
    <?php require_once('layout/_topbar.php') ?>
    <?php require_once('layout/_navbar.php') ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="carserv/img/bg1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// RG-Trans Servicing //</h6>
                                    <h3 class="display-3 text-white mb-4 pb-3 animated slideInDown">Layanan Sewa Motor plus Driver</h3>
                                    <a href="sewamotor.php" class="btn btn-primary py-3 px-5 animated slideInDown">SELENGKAPNYA<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="carserv/img-fluid" src="carserv/img/mtr.png" alt="" width="550px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="carserv/img/bg2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// RG-Trans Servicing //</h6>
                                    <h3 class="display-3 text-white mb-4 pb-3 animated slideInDown">Layanan Sewa Mobil Self Drive & Plus Driver</h3>
                                    <a href="sewamobil.php" class="btn btn-primary py-3 px-5 animated slideInDown">SELENGKAPNYA<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="carserv/img-fluid" src="carserv/img/carousel-1.png" alt="" width="400px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="w-100" src="carserv/img/a.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// RG-Trans Servicing //</h6>
                                    <h3 class="display-3 text-white mb-4 pb-3 animated slideInDown">Layanan Private Charter</h3>
                                    <a href="pc.php" class="btn btn-primary text-white py-3 px-5 animated slideInDown">SELENGKAPNYA<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="carserv/img-fluid" src="carserv/img/maps.png" width="400px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="carserv/img/b.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// RG-Trans Servicing //</h6>
                                    <h3 class="display-3 text-white mb-4 pb-3 animated slideInDown">Layanan Pariwisata</h3>
                                    <a href="pariwisata.php" class="btn btn-primary text-white py-3 px-5 animated slideInDown">SELENGKAPNYA<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="carserv/img-fluid" src="carserv/img/trs.png" width="410px" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-3x fa-headset text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Customer Support</h5>
                            <p>Customer Service RG-Trans siap membantu Anda untuk memesan / menyewa layanan kami melalui website atau liveChat pada contact kami <br> melalui Nomor 0813 3316 6131 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Kendaraan Berkualitas</h5>
                            <p>Layanan kami tentunya menyediakan kendaraan yang berkualitas karena telah melalui tahap pengujian dan strandarisasi untuk memastikan keamanan Anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-3x fa fa-3x fa-cart-plus text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Harga Terbaik</h5>
                            <p>RG-Trans menyediakan layanan yang berkualitas dengan harga terbaik yang tentunya siap melayani Anda untuk memastikan kebutuhan dan kenyamanan Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Service Start -->
    <div id="layanan" class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Jelajahi layanan kami</h1>
            </div>
            <div class="row g-4  wow fadeInUp justify-content-center" data-wow-delay="0.3s">
                <div class="col-lg-3 col-sm-5 wow fadeInUp text-center">
                    <a href="sewamotor.php"> <img src="carserv/img/mot.png" class="services_img" width="220px" style="max-width:540px; 
                              box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                              border-radius: 20px;  
                              "></a>
                    <a href="sewamotor.php"><button class="btn btn-primary mt-4" style="border-radius:100px;">SELENGKAPNYA</button></a>
                </div>
                <div class="col-lg-3 col-sm-5 wow fadeInUp  text-center">
                    <a href="sewamobil.php"> <img src="carserv/img/mob.png" class="services_img" width="220px" style="max-width:540px; 
                              box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                              border-radius: 20px;  
                              "></a>
                    <a href="sewamobil.php"><button class="btn btn-primary mt-4" style="border-radius:100px;">SELENGKAPNYA</button></a>
                </div>
                <div class="col-lg-3 col-sm-5 wow fadeInUp  text-center">
                    <a href="pc.php"> <img src="carserv/img/pri.png" class="services_img" width="220px" style="max-width:540px; 
                              box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                              border-radius: 20px;  
                              "></a>
                    <a href="pc.php"><button class="btn btn-primary mt-4" style="border-radius:100px;">SELENGKAPNYA</button></a>
                </div>
                <div class="col-lg-3 col-sm-5 wow fadeInUp  text-center">
                    <a href="pariwisata.php"> <img src="carserv/img/par.png" class="services_img" width="220px" style="max-width:540px; 
                              box-shadow: 5px 5px 5px rgba(0,0,0,0.5); 
                              border-radius: 20px;  
                              "></a>
                    <a href="pariwisata.php"><button class="btn btn-primary mt-4" style="border-radius:100px;">SELENGKAPNYA</button></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="carserv/img/tentang.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h2 class="mb-4"><span class="text-primary">RG-Trans</span></h2>
                    <p class="mb-4">RG-Trans berkomiten tinggi terhadap efisiensi dan ketepatan waktu, dua nilai inti yang sangat dijunjung oleh RG-Trans. Dengan latar belakang yang kuat dalam transportasi dan logistik. RG-Trans memiliki pengalaman dalam mengelola dan menjaga kendaraan tetap dalam kondisi prima</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional</h6>
                                    <span>Tim yang siap memberikan pelayanan yang terbaik</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Ketepatan waktu</h6>
                                    <span>Tim selalu mengutamakan ketepatan waktu dalam penjemputan</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Terpercaya</h6>
                                    <span>RG-Trans telah membangun reputasi terpercaya dalam layanan kami</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-primary py-3 px-5">SELENGKAPNYA<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-3">
                <?php foreach ($datamotor as $motor) { ?>
                    <div class="col-md-4 col-lg-4 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up"><?= $motor ?></h2>
                        <p class="text-white mb-0">Pilihan Motor</p>
                    </div>
                <?php } ?>
                <?php foreach ($datamobil as $mobil) { ?>
                    <div class="col-md-4 col-lg-4 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-car fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up"><?= $mobil ?></h2>
                        <p class="text-white mb-0">Pilihan Mobil</p>
                    </div>
                <?php } ?>
                <?php foreach ($datapc as $pc) { ?>
                    <div class="col-md-4 col-lg-4 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-check fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up"><?= $pc ?></h2>
                        <p class="text-white mb-0">Rute Private Charter</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="carserv/img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="carserv/img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="carserv/img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="carserv/img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="elfsight-app-aef26793-b903-4be1-b0d5-d923000be718"></div>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <!-- Testimonial End -->


    <?php require_once('layout/_footer.php') ?>
    <?php require_once('layout/_js.php') ?>
</body>

</html>