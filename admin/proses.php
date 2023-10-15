<?php
require_once('../koneksi.php');
session_start();
    
    // Start Input data motor
    if(isset($_POST['data_motor'])){
        $namafile = date('YmdHis').'.jpg';  
        $namalama = $_FILES['foto']['tmp_name'];
        $folder_upload = "foto_motor/";
        move_uploaded_file($namalama,$folder_upload.$namafile);
        $tanggal = date('Y-m-d');
        $judul = $_POST['judul'];
        $kelengkapan = $_POST['kelengkapan'];
        $paket1 = $_POST['paket1'];
        $paket2 = $_POST['paket2'];
        $paket3 = $_POST['paket3'];
        $query = "INSERT INTO s_motor values(
            '',
            '$judul',
            '$kelengkapan',
            '$paket1',
            '$paket2',
            '$paket3',
            '$namafile'
        )";
        mysqli_query($conn,$query); 

        // arahkan ke halaman lain
        echo"<script>alert('Inputan telah dikirim');</script>";
        echo"<script>window.location.href = 'ds_motor.php';</script>";
    }
    // Start Edit data motor
    if(isset($_POST['edit_motor'])){
        $id = $_POST['id'];
        $tanggal = date('Y-m-d');
        $judul = $_POST['judul'];
        $kelengkapan = $_POST['kelengkapan'];
        $paket1 = $_POST['paket1'];
        $paket2 = $_POST['paket2'];
        $paket3 = $_POST['paket3'];

        $fotoAda = $_POST['foto'];
        if($fotoAda == ''){
            $query = "UPDATE s_motor SET
            judul = '$judul',
            kelengkapan = '$kelengkapan',
            paket1 = '$paket1',
            paket2 = '$paket2',
            paket3 = '$paket3'
            WHERE id = '$id'"; 
            mysqli_query($conn,$query);
            // arahkan ke halaman lain
            echo"<script>alert('Data berhasil di edit!');</script>";
            echo"<script>window.location.href = 'ds_motor.php';</script>";
            die;
        }else{
            $delfot = $_POST['foto'];
            unlink('foto_motor/'.$delfot);
            $namafile = date('YmdHis').'.jpg';  
            $namalama = $_FILES['foto']['tmp_name'];
            $folder_upload = "foto_motor/";
            move_uploaded_file($namalama,$folder_upload.$namafile);
            $query = "UPDATE s_motor SET
                    judul = '$judul',
                    kelengkapan = '$kelengkapan',
                    paket1 = '$paket1',
                    paket2 = '$paket2',
                    paket3 = '$paket3',
                    foto = '$namafile'
                    WHERE id = '$id'"; 
            mysqli_query($conn,$query);
            // arahkan ke halaman lain
            echo"<script>alert('Data berhasil di edit!');</script>";
            echo"<script>window.location.href = 'ds_motor.php';</script>";
        }
    }
    if(isset($_GET['hapus_motor'])){
        $id = $_GET['hapus_motor'];
        $query = "DELETE FROM s_motor where id = '$id'";
        mysqli_query($conn,$query);
        echo"<script>alert('Data berhasil dihapus');</script>";
        echo"<script>window.location.href = 'ds_motor.php';</script>";
    }

    // Start Input data mobil
    if(isset($_POST['data_mobil'])){
        $namafile = date('YmdHis').'.jpg';  
        $namalama = $_FILES['foto']['tmp_name'];
        $folder_upload = "foto_mobil/";
        move_uploaded_file($namalama,$folder_upload.$namafile);
        $tanggal = date('Y-m-d');
        $judul = $_POST['judul'];
        $paket1 = $_POST['paket1'];
        $paket2 = $_POST['paket2'];
        $paket3 = $_POST['paket3'];
        $paket4 = $_POST['paket4'];
        $paket5 = $_POST['paket5'];
        $paket6 = $_POST['paket6'];
        $paket7 = $_POST['paket7'];
        $query = "INSERT INTO s_mobil values(
            '',
            '$judul',
            '$paket1',
            '$paket2',
            '$paket3',
            '$paket4',
            '$paket5',
            '$paket6',
            '$paket7',
            '$namafile'
        )";
        mysqli_query($conn,$query); 
        // arahkan ke halaman lain
        echo"<script>alert('Inputan telah dikirim');</script>";
        echo"<script>window.location.href = 'ds_mobil.php';</script>";
    }
     // Start Edit data mobil
     if(isset($_POST['edit_mobil'])){
        $id = $_POST['id'];
        $tanggal = date('Y-m-d');
        $judul = $_POST['judul'];
        $paket1 = $_POST['paket1'];
        $paket2 = $_POST['paket2'];
        $paket3 = $_POST['paket3'];
        $paket4 = $_POST['paket4'];
        $paket5 = $_POST['paket5'];
        $paket6 = $_POST['paket6'];
        $paket7 = $_POST['paket7'];
        $fotoAda = $_POST['foto'];
        if($fotoAda == ''){
            $query = "UPDATE s_mobil SET
            judul = '$judul',
            paket1 = '$paket1',
            paket2 = '$paket2',
            paket3 = '$paket3',
            paket4 = '$paket4',
            paket5 = '$paket5',
            paket6 = '$paket6',
            paket7 = '$paket7'
            WHERE id = '$id'"; 
            mysqli_query($conn,$query);
            // arahkan ke halaman lain
            echo"<script>alert('Data berhasil di edit!');</script>";
            echo"<script>window.location.href = 'ds_mobil.php';</script>";
            die;
         }else{
            $delfot = $_POST['foto'];
            unlink('foto_mobil/'.$delfot);
            $namafile = date('YmdHis').'.jpg';  
            $namalama = $_FILES['foto']['tmp_name'];
            $folder_upload = "foto_mobil/";
            move_uploaded_file($namalama,$folder_upload.$namafile);
            $query = "UPDATE s_mobil SET
                        judul = '$judul',
                        paket1 = '$paket1',
                        paket2 = '$paket2',
                        paket3 = '$paket3',
                        paket4 = '$paket4',
                        paket5 = '$paket5',
                        paket6 = '$paket6',
                        paket7 = '$paket7',
                        foto = '$namafile'
                        WHERE id = '$id'"; 
            mysqli_query($conn,$query);
            // arahkan ke halaman lain
            echo"<script>alert('Data berhasil di edit!');</script>";
            echo"<script>window.location.href = 'ds_mobil.php';</script>";
        }
        }
    if(isset($_GET['hapus_mobil'])){
        $id = $_GET['hapus_mobil'];
        $query = "DELETE FROM s_mobil where id = '$id'";
        mysqli_query($conn,$query);
        echo"<script>alert('Data berhasil dihapus');</script>";
        echo"<script>window.location.href = 'ds_mobil.php';</script>";
    }
    
    // Start Private Charter
    if(isset($_POST['pc'])){
        $rute = $_POST['rute'];
        $sheat = $_POST['sheat'];
        $harga = $_POST['harga'];
        $query = "INSERT INTO privatecharter values(
            '',
            '$rute',
            '$sheat',
            '$harga'
        )";
        mysqli_query($conn,$query); 
        echo"<script>alert('Data berhasil di inputkan!');</script>";
        echo"<script>window.location.href = 'pcadmin.php';</script>";

    }
    if(isset($_GET['hapus_pc'])){
        $id = $_GET['hapus_pc'];
        $query = "DELETE FROM privatecharter where id = '$id'";
        mysqli_query($conn,$query);
        echo"<script>alert('Data berhasil dihapus');</script>";
        echo"<script>window.location.href = 'pcadmin.php';</script>";
    } 
    if(isset($_POST['edit_pc'])){
        $id = $_POST['id'];
        $rute = $_POST['rute'];
        $sheat = $_POST['sheat'];
        $harga = $_POST['harga'];  
        $query = "UPDATE privatecharter SET
                    rute = '$rute',
                    sheat = '$sheat',
                    harga = '$harga'
                    WHERE id = '$id'"; 
        mysqli_query($conn,$query);
        // arahkan ke halaman lain
        echo"<script>alert('Data berhasil di edit!');</script>";
        echo"<script>window.location.href = 'pcadmin.php';</script>";
    }  
    
    // Start Booking Motor
    if(isset($_POST['bookingmtr'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $tglwkt_sewa = $_POST['tglwkt_sewa'];
        $alamat_jemput = $_POST['alamat_jemput'];
        $paket = $_POST['paket'];
        $jmotor = $_POST['jmotor'];
        $query = "INSERT INTO ds_motor values(
            '',
            '$nama',
            '$alamat',
            '$telp',
            '$tglwkt_sewa',
            '$alamat_jemput',
            '$paket',
            '$jmotor'
        )";
        mysqli_query($conn,$query); 

        // arahkan ke halaman lain
        echo"<script>alert('Layanan sewa motor berhasil dipesan!');</script>";
        echo"<script>window.location.href = 'sewamotor.php';</script>";
    }
    // Start Booking Mobil
    if(isset($_POST['bookingmbl'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $tglwkt_sewa = $_POST['tglwkt_sewa'];
        $alamat_jemput = $_POST['alamat_jemput'];
        $paket = $_POST['paket'];
        $jmobil = $_POST['jmobil'];
        $query = "INSERT INTO ds_mobil values(
            '',
            '$nama',
            '$alamat',
            '$telp',
            '$tglwkt_sewa',
            '$alamat_jemput',
            '$paket',
            '$jmobil'
        )";
        mysqli_query($conn,$query); 

        // arahkan ke halaman lain
        echo"<script>alert('Layanan sewa motor berhasil dipesan!');</script>";
        echo"<script>window.location.href = 'sewamobil.php';</script>";
    }
    // Start Booking Private Charter
    if(isset($_POST['bookingpc'])){
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $tglwkt_sewa = $_POST['tglwkt_sewa'];
        $alamat_jemput = $_POST['alamat_jemput'];
        $harga = $_POST['harga'];
        $rute = $_POST['rute'];
        $query = "INSERT INTO ds_privatecharter values(
            '',
            '$nama',
            '$alamat',
            '$telp',
            '$tglwkt_sewa',
            '$alamat_jemput',
            '$harga',
            '$rute'
        )";
        mysqli_query($conn,$query); 

        // arahkan ke halaman lain
        echo"<script>alert('Layanan private charter berhasil dipesaan!');</script>";
        echo"<script>window.location.href = 'pc.php';</script>";
    }
    if(isset($_GET['hapus_bookingmtr'])){
        $id = $_GET['hapus_bookingmtr'];
        $query = "DELETE FROM ds_motor where id = '$id'";
        mysqli_query($conn,$query);
        echo"<script>alert('Data berhasil dihapus');</script>";
        echo"<script>window.location.href = 'datasewamtr.php';</script>";
    } 
    if(isset($_GET['hapus_bookingmbl'])){
        $id = $_GET['hapus_bookingmbl'];
        $query = "DELETE FROM ds_mobil where id = '$id'";
        mysqli_query($conn,$query);
        echo"<script>alert('Data berhasil dihapus');</script>";
        echo"<script>window.location.href = 'datasewambl.php';</script>";
    } 
    if(isset($_GET['hapus_bookingpc'])){
        $id = $_GET['hapus_bookingpc'];
        $query = "DELETE FROM ds_privatecharter where id = '$id'";
        mysqli_query($conn,$query);
        echo"<script>alert('Data berhasil dihapus');</script>";
        echo"<script>window.location.href = 'datasewapc.php';</script>";
    } 
    
    
?>