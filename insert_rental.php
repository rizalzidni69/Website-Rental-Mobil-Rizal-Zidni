<?php
include 'koneksi.php';

$no_trx_rizalz = $_POST['no_trx_rizalz'];
$nik_ktp_rizalz = $_POST['nik_ktp_rizalz'];
$no_plat_rizalz = $_POST['no_plat_rizalz'];
$tgl_rental_rizalz = $_POST['tgl_rental_rizalz'];
$jam_rental_rizalz = $_POST['jam_rental_rizalz'];
$harga_rizalz = $_POST['harga_rizalz'];
$lama_rizalz = $_POST['lama_rizalz'];
$total_bayar_rizalz = $_POST['total_bayar_rizalz'];

mysqli_query($koneksi, "INSERT INTO `tbl_rental_rizalz` (`no_trx_rizalz`, `nik_ktp_rizalz`, `no_plat_rizalz`, `tgl_rental_rizalz`, `jam_rental_rizalz`, `harga_rizalz`,`lama_rizalz`,`total_bayar_rizalz`)
VALUES ('$no_trx_rizalz', '$nik_ktp_rizalz', '$no_plat_rizalz', '$tgl_rental_rizalz', '$jam_rental_rizalz', '$harga_rizalz', '$lama_rizalz', '$total_bayar_rizalz');");
header("location:tampil_data_rental.php");
