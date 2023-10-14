<?php
    // ambil library dan koneksi
    require_once('koneksi.php');
    // convert file ke excel
    $dari=$_POST['dari'];
    $sampai=$_POST['sampai'];
    header('Content-Type: application/vnd.ms-excel');
    header("Content-Disposition: attachment; filename=\"Laporan Private Charter $dari s/d $sampai.xls\"");
    header('Cache-Control: max-age=0');
    
    $data = mysqli_query($conn,"SELECT * FROM ds_privatecharter WHERE tglwkt_sewa >= '$dari' AND tglwkt_sewa <= '$sampai'");
?>
    <h3>LAPORAN PENYEWAAN SEPEDA MOTOR <?php echo "$dari s/d $sampai"?></h3>
        <table width="100%" border="1" class="text-center">
            <thead>
            <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tanggal waktu sewa</th>
            <th>Alamat Penjemputan</th>
            <th>Harga</th>
            <th>Rute</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $no=1;
            while($r=mysqli_fetch_array($data)){ ?>
                <tr class="text-center">
                <td>
                    <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $no++;?></strong>
                </td>
                <td><?= $r['nama'];?></td>
                <td><?= $r['alamat'];?></td>
                <td><?= $r['telp'];?></td>
                <td><?= $r['tglwkt_sewa'];?></td>
                <td><?= $r['alamat_jemput'];?></td>
                <td><?= rupiah($r['harga']);?></td>
                <td><?= $r['rute'];?></td>
                </tr>             
                <?php }?>
            </tbody>
    </table>