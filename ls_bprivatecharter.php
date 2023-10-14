<?php
// ambil library dan koneksi
require_once('koneksi.php');
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $rute = $_POST['rute'];
    $tglwkt_sewa = $_POST['tglwkt_sewa'];
    $alamat_jemput = $_POST['alamat_jemput'];
    $harga = $_POST['harga'];
    $time= date('Y-m-d H:i:s',time());
    $query = "INSERT INTO `ds_privatecharter` 
            (`id`, `nama`, `alamat`, `telp`, `tglwkt_sewa`, `alamat_jemput`, `harga`, `rute`)
            VALUES 
            (NULL, '$nama', '$alamat', '$telp', current_timestamp(), '$alamat_jemput', '$harga', '$rute');";
    mysqli_query($conn,$query);
      
require_once('fpdf/fpdf.php');
// Setting awal
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// untuk header
$pdf->SetFont('Times','B',14);
$pdf->Ln(10);
$pdf->Cell(200,10,'LAPORAN LAYANAN PRIVATE CHARTER',0,0,'C');
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
$pdf->Cell(100,12,'Rute                                      :  ' . $rute,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'Tanggal Sewa                       :  ' . $time,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'Alamat Penjemputan            :  ' . $alamat_jemput,0,1,'');
$pdf->SetX(30);
$pdf->Cell(100,12,'Total Harga                          :  ' . rupiah($harga),0,1,'');

header('Content-Type: application/pdf');
header("Content-Disposition: attachment; filename=\"Laporan sewa motor $nama.pdf\"");
// // Hasil convert ke pdf
$pdf->Output();


 ?>