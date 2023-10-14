<?php
   require_once('koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
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
                    <div class="row gy-4">
                        
                        <a  href="https://instagram.com/rgtrans_?igshid=MzRlODBiNWFlZA==" style="color:inherit;" class="col-md-4"  target="blank">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Instagram //</h5>
                                <p class="m-0"><i class="fab fa-instagram text-primary me-2"></i>@rgtrans_</p>
                            </div>
                        </a>
                        <a class="col-md-4" href="mailto:rgtransthebest@gmail.com" style="color:inherit;" target="blank">
                            <div class="bg-light d-flex flex-column justify-content-center p-4">
                                <h5 class="text-uppercase">// Email //</h5>
                                <p class="m-0"><i class="fa fa-envelope-open text-primary me-2"></i>rgtransthebest@gmail.com</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
                        <iframe  class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.0559666769022!2d110.85124247419652!3d-7.568877692445241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a165521c22b5d%3A0xaf0eca7a721ea132!2sJl.%20Juanda%20No.277%2C%20Pucangsawit%2C%20Kec.%20Jebres%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah%2057125%2C%20Indonesia!5e0!3m2!1sen!2sbd!4v1697007080524!5m2!1sen!2sbd"   frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
                <div class="col-md-8">
                    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="row g-4">
                                <div class="col-lg-12 col-md-3">
                                    <h6 class="text-primary text-uppercase">// Call To Action //</h6>
                                    <h1 class="mb-4">Mengapa harus RG-Trans?</h1>
                                    <p class="mb-0">
                                        Layanan kami telah di rancang khusus untuk memenuhi kebutuhan Anda, kami menyediakan layanan berkualitas tinggi dengan harga yang sangat kompetitif, selain itu kami juga memiliki tim yang berkomitmen untuk memberikan pelayanan yang terbaik, sehingga Anda dapat yakin bahwa kepuasan Anda adalah prioritas utama kami 
                                    </p>
                                </div>
                                <div class="col-lg-12 col-md-3">
                                    <div class="bg-primary d-flex flex-column justify-content-center text-center h-100 p-4">
                                        <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>0813 3316 6131</h3>
                                        <a  href="https://wa.me/6281333166131" target="blank" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>                         
                    </div>
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