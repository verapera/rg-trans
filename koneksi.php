<?php
$conn = mysqli_connect('localhost','root','','travel');
function rupiah($angka){
    $hasil = "Rp." . number_format($angka,0,',','.' );
    return $hasil;
}
// function query($query){
//     global $conn;
//     $query = "SELECT * FROM privatecharter ORDER BY harga ASC";
//     $hasil = mysqli_query($conn,$query);
//     $data = mysqli_fetch_array($hasil);
//     return $data;
// }
?>