<?php
    // ambil library dan koneksi
    require_once('../koneksi.php');
    // convert file ke excel
    $dari=$_POST['dari'];
    $sampai=$_POST['sampai'];
    header('Content-Type: application/vnd.ms-excel');
    header("Content-Disposition: attachment; filename=\"Laporan Private Charter $dari s/d $sampai.xls\"");
    header('Cache-Control: max-age=0');
    
    $data = mysqli_query($conn,"SELECT * FROM ds_privatecharter WHERE tglwkt_sewa >= '$dari' AND tglwkt_sewa <= '$sampai'");
?>
    <h3>LAPORAN PRIVATE CHARTER <?php echo "$dari s/d $sampai"?></h3>
        <table width="100%" class="text-center">
            <thead>
            <tr class="text-center">
            <th style="border:1px solid black;">No</th>
            <th style="border:1px solid black;">Nama</th>
            <th style="border:1px solid black;">Alamat</th>
            <th style="border:1px solid black;">No Telepon</th>
            <th style="border:1px solid black;">Tanggal waktu sewa</th>
            <th style="border:1px solid black;">Alamat Penjemputan</th>
            <th style="border:1px solid black;">Rute</th>
            <th style="border:1px solid black;">Harga</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $no=1;
            $totalH = 0;
            while($r=mysqli_fetch_array($data)){ 
                $totalH += $r['harga'];
            ?>
                <tr class="text-center">
                <td style="border:1px solid black;"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;?></strong></td>
                <td style="border:1px solid black;"><?= $r['nama'];?></td>
                <td style="border:1px solid black;"><?= $r['alamat'];?></td>
                <td style="border:1px solid black;"><?= $r['telp'];?></td>
                <td style="border:1px solid black;"><?= $r['tglwkt_sewa'];?></td>
                <td style="border:1px solid black;"><?= $r['alamat_jemput'];?></td>
                <td style="border:1px solid black;"><?= $r['rute'];?></td>
                <td style="border:1px solid black;"><?= rupiah($r['harga']);?></td>
                </tr>             
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:none;"></td>
                    <td style="border:1px solid black;">Total : </td>
                    <td style="border:1px solid black;"><?= rupiah($totalH) ?></td>
                </tr>
            </tfoot>
    </table>