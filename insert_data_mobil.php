<?php
include 'koneksi.php';

$no_plat_rizalz = $_POST['no_plat_rizalz'];
$nama_mobil_rizalz = $_POST['nama_mobil_rizalz'];
$brand_mobil_rizalz = $_POST['brand_mobil_rizalz'];
$tipe_transmisi_rizalz = $_POST['tipe_transmisi_rizalz'];

mysqli_query($koneksi, "INSERT INTO `tbl_mobil_rizalz` (`no_plat_rizalz`, `nama_mobil_rizalz`, `brand_mobil_rizalz`, `tipe_transmisi_rizalz`)
VALUES ('$no_plat_rizalz', '$nama_mobil_rizalz', '$brand_mobil_rizalz', '$tipe_transmisi_rizalz');");
header("location:tampil_data_mobil.php");
