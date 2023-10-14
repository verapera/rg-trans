<?php
require_once('koneksi.php');
if(!isset($_GET['mobil'])){
    echo"<script>window.location.href = 'index.php';</script>";
    die;
}
$id = $_GET['mobil'];
$query = "SELECT * FROM s_mobil WHERE id = $id";
$data = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Booking mobil</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">
<?php require_once('layout/_css.php')?>
<style>
    .alert-pop-up{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        z-index: 1000;
    }
</style>
</head>

<body>
<?php require_once('layout/_topbar.php') ?>
<?php require_once('layout/_navbar.php') ?>

<!-- Page Header Start -->
<div class="container-fluid page-header mb-4 p-0" style="background-image: url(carserv/img/a.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-5 text-white mb-3 animated slideInDown">Form sewa mobil</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Tentang kami</a></li>
                    <li class="breadcrumb-item"><a href="index.php#layanan">Layanan</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Sewa mobil</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->
<?php foreach($data as $d) : ?>
    <div class="container-fluid text-center mb-4">
        <h3 >Mobil yang di pilih : <?=$d['judul']?></h3>
    </div>
<!-- Booking Start -->
<div class="container bg-white my-5 wow fadeInUp " data-wow-delay="0.1s"  style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center  text-center p-5 wow zoomIn" >
                    <form action="ls_bmobil.php" target="_blank" method="POST">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <h2 class="text-white mb-4">Data Pemesan mobil</h2>
                                <input type="hidden" name="jmobil" value="<?=$d['judul'];?>">
                                <input type="text" class="form-control border-0"name="nama" placeholder="Nama lengkap" style="height: 55px;" required>
                                <input type="text" class="form-control border-0 mt-3" name="alamat" placeholder="Alamat" style="height: 55px;"required>
                                <input type="number" class="form-control border-0 mt-3" name="telp" placeholder="No Telepon" style="height: 55px;"required>
                            </div>
                            <div class="col-12 col-sm-6">
                            <h2 class="text-white mb-4">Informasi kendaraan</h2>
                                <input type="text" class="form-control border-0 " name="tglwkt_sewa" placeholder="Tanggal & Waktu Sewa" style="height: 55px;" onfocus="(this.type = 'datetime-local')"required>
                                <input type="text" class="form-control border-0 mt-3" name="alamat_jemput" placeholder="Alamat Penjemputan" style="height: 55px;"required>
                                <select class="form-select border-0 mt-3" name="paket" style="height: 55px;">
                                        <option selected>Pilih paket sewa</option>
                                        <option value=<?=$d['paket1'];?>>Paket 1 : <?=rupiah($d['paket1']);?> / 4 jam</option>
                                        <option value=<?=$d['paket2'];?>>Paket 2 : <?=rupiah($d['paket2']);?> / 6 jam</option>
                                        <option value=<?=$d['paket3'];?>>Paket 3 : <?=rupiah($d['paket3']);?> / 8 jam</option>
                                        <option value=<?=$d['paket4'];?>>Paket 4 : <?=rupiah($d['paket4']);?> / 10 jam</option>
                                        <option value=<?=$d['paket5'];?>>Paket 5 : <?=rupiah($d['paket5']);?> /  12 jam</option>
                                        <option value=<?=$d['paket6'];?>>Paket Luar kota 1 : <?=rupiah($d['paket6']);?> / 12 jam</option>
                                        <option value=<?=$d['paket7'];?>>Paket Luar kota 2 : <?=rupiah($d['paket7']);?> / 24 jam</option>
                                    </select>
                            </div>   
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3 btn-kirim"name="bookingmbl" type="submit" onclick="return cfm()">Book Now</button>
                                 <p class="text-bold text-white mt-3">Catatan : <small>Setelah melakukan booking mohon unduh laporan booking anda!</small></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alert-pop-up text-center d-none" >
    <div class="z-2 p-4 " >
        Data pemesanan telah terkirim
    </div>
    <div class="btn btn-primary close d-none" onclick="closePopup()">
        Tutup
    </div>
</div>

<script> 
function closePopup(){
        const alertBox = document.querySelector('.alert-pop-up');
        const closeBox = document.querySelector('.close');
        closeBox.classList.toggle('d-none');
        alertBox.classList.toggle('d-none');
    }
    function cfm(){
        const validasi = confirm("Apakah anda yakin memesan layanan ini?");
        const alertBox = document.querySelector('.alert-pop-up');
        const closeBox = document.querySelector('.close');
        if(validasi == true){
            closeBox.classList.toggle('d-none');
            alertBox.classList.toggle('d-none');
            return true
        } else {
            return false
        }
    }
</script>
<?php endforeach; ?>
<!-- Booking End -->

<?php require_once('layout/_footer.php') ?>
<?php require_once('layout/_js.php') ?>
</body>

</html>