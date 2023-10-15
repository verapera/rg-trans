<?php
require_once('../koneksi.php');
session_start();
// Start Login
if(isset($_POST['loginadmin'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
        // Login sebagai admin
        $query = "SELECT * FROM admin where username='$username'";
        $hasil = mysqli_query($conn,$query);
        $data  = mysqli_fetch_array($hasil);
        if($data==NULL){
            // Jika username tidak ditemukan
            echo"<script>alert('username tidak ditemukan');</script>";
            echo"<script>window.location.href = 'loginadmin.php';</script>";
        }else if($password<>$data['password']){
            // Jika pass$password salah
            echo"<script>alert('Password salah');</script>";
            echo"<script>window.location.href = 'loginadmin.php';</script>";
        }else{
            // Jika password benar
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['id_admin'] = $data['id_admin'];
            echo"<script>alert('Anda berhasil login');</script>";
            echo"<script>window.location.href = 'admin.php';</script>";
        }
}
// End Login
?>