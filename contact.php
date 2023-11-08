<?php
require_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
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
                <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Tentang kami</a></li>
                        <li class="breadcrumb-item"><a href="index.php#layanan">Layanan</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Contact Us //</h6>
                <h3 class="mb-5">Hubungi kami bila ada yang ingin di tanyakan</h1>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row g-4">
                        <a href="https://instagram.com/rgtrans_?igshid=MzRlODBiNWFlZA==" style="color:inherit;" class="col-sm-6" target="blank">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Instagram //</h5>
                                <p class="m-0"><i class="fab fa-instagram text-primary me-2"></i>@rgtrans_</p>
                            </div>
                        </a>
                        <a href="mailto:rgtransthebest@gmail.com" class="col-sm-6" style="color:inherit;" target="blank">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Email //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>rgtransthebest@gmail.com</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.8659433489206!2d110.9447912!3d-7.5895668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19ea26e6ae3b%3A0x302331aeed5c24b!2sRGTrans!5e0!3m2!1sid!2sid!4v1699425513240!5m2!1sid!2sid" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->

    <?php require_once('layout/_footer.php') ?>
    <?php require_once('layout/_js.php') ?>
</body>

</html>