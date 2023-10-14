<?php
    // ambil library dan koneksi
    require_once('koneksi.php');
    // convert file ke excel
    $dari=$_POST['dari'];
    $sampai=$_POST['sampai'];
    header('Content-Type: application/vnd.ms-excel');
    header("Content-Disposition: attachment; filename=\"Laporan sewa mobil $dari s/d $sampai.xls\"");
    header('Cache-Control: max-age=0');
    
    $data = mysqli_query($conn,"SELECT * FROM ds_mobil WHERE tglwkt_sewa >= '$dari' AND tglwkt_sewa <= '$sampai'");
?>
    <h3>LAPORAN PENYEWAAN MOBIL <?php echo "$dari s/d $sampai"?></h3>
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
                <th>Jenis Mobil</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $no=1;
            while($r=mysqli_fetch_array($data)){ ?>
                <tr class="text-center">
                    <td><?= $no++;?></td>
                    <td><?= $r['nama'];?></td>
                    <td><?= $r['alamat'];?></td>
                    <td><?= $r['telp'];?></td>
                    <td><?= $r['tglwkt_sewa'];?></td>
                    <td><?= $r['alamat_jemput'];?></td>
                    <td><?= rupiah($r['paket']);?></td>
                    <td><?= $r['jmobil'];?></td>
                </tr>             
                <?php }?>
            </tbody>
    </table>