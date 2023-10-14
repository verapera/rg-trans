<?php
// ambil library dan koneksi
require_once('koneksi.php');
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $jmotor = $_POST['jmotor'];
    $tglwkt_sewa = $_POST['tglwkt_sewa'];
    $alamat_jemput = $_POST['alamat_jemput'];
    $paket = $_POST['paket'];
    $time= date('Y-m-d H:i:s',time());
    $query = "INSERT INTO `ds_motor` 
            (`id`, `nama`, `alamat`, `telp`, `tglwkt_sewa`, `alamat_jemput`, `paket`, `jmotor`)
            VALUES 
            (NULL, '$nama', '$alamat', '$telp', current_timestamp(), '$alamat_jemput', '$paket', '$jmotor');";
    mysqli_query($conn,$query);
      
require_once('fpdf/fpdf.php');
// Setting awal
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// untuk header
$pdf->SetFont('Times','B',14);
$pdf->Ln(10);
$pdf->Cell(200,10,'LAPORAN SEWA MOTOR',0,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Times','',12); 
$pdf->Cell(200,10,$time,0,0,'C');
$pdf->Ln(20);

// table head
$pdf->SetFont('Times', '', 14);
$pdf->SetX(30);
$pdf->Cell(100,12,'Nama                                    :   ' . $nama,0,1);

$pdf->SetX(30);
$pdf->Cell(100,12,'Alamat                                  :  ' . $alamat,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'No. Telepon                          :  ' . $telp,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'Jenis Motor                           :  ' . $jmotor,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'Tanggal Sewa                       :  ' . $time,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'Alamat Penjemputan            :  ' . $alamat_jemput,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'Total Harga                          :  ' . rupiah($paket),0,1,'');

header('Content-Type: application/pdf');
header("Content-Disposition: attachment; filename=\"Laporan sewa motor $nama.pdf\"");
// // Hasil convert ke pdf
$pdf->Output();


 ?>