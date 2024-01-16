<?php
include 'koneksi.php';

$nik_ktp_rizalz = $_POST['nik_ktp_rizalz'];
$nama_rizalz = $_POST['nama_rizalz'];
$no_hp_rizalz = $_POST['no_hp_rizalz'];
$alamat_rizalz = $_POST['alamat_rizalz'];

mysqli_query($koneksi, "INSERT INTO `tbl_pelanggan_rizalz` (`nik_ktp_rizalz`, `nama_rizalz`, `no_hp_rizalz`, `alamat_rizalz`)
VALUES ('$nik_ktp_rizalz', '$nama_rizalz', '$no_hp_rizalz', '$alamat_rizalz');");
header("location:tampil_data_pelanggan.php");
