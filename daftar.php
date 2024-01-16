<?php
include 'koneksi.php';

$username_rizalz = $_POST['username_rizalz'];
$password_rizalz = $_POST['password_rizalz'];
$nama_lengkap_rizalz = $_POST['nama_lengkap_rizalz'];

mysqli_query($koneksi, "INSERT INTO `tbl_user_rizalz` (`id_user_rizalz`, `username_rizalz`, `password_rizalz`, `nama_lengkap_rizalz`, `level_rizalz`) VALUES (NULL, '$username_rizalz', '$password_rizalz', '$nama_lengkap_rizalz', 'user');");
header("location:login.php");
