<?php
require_once('koneksi.php');
if (isset($_POST["cari"])) {
    $keyword = $_POST["keyword"];
    $query = "SELECT * FROM privatecharter WHERE rute like '%$keyword%' or harga like '$keyword' ORDER BY harga ASC";
} else {
    $query = "SELECT * FROM privatecharter ORDER BY harga ASC";
}
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Private Charter</title>
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
                        <li class="breadcrumb-item text-white active" aria-current="page">Private Charter</li>
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
                <h2 class="mb-3">Private Charter</h2>
            </div>

            <div class="table-responsive col-lg-7 container mt-4">
                <table class="table table-striped table-bordered table-primary" id="example">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Rute</th>
                            <th>Sheat</th>
                            <th>Harga</th>
                            <th>Booking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($hasil as $data) { ?>
                            <tr class="text-center">
                                <td>
                                    <i></i> <strong><?= $no; ?></strong>
                                </td>
                                <td><?= $data['rute']; ?></td>
                                <td><?= $data['sheat']; ?> orang</td>
                                <td><?= rupiah($data['harga']); ?></td>
                                <td><a href="<?= 'bookingpc?rute=' . $data['id'] ?>"><button class="btn btn-primary" style="border-radius:100px;">✓</button></a></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php require_once('layout/_footer.php') ?>
    <?php require_once('layout/_js.php') ?>
</body>

</html>