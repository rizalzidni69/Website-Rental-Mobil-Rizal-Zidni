<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
 */
$nik_ktp_rizalz_tmp = $_POST['nik_ktp_rizalz_tmp'];
$nik_ktp_rizalz = $_POST['nik_ktp_rizalz'];
$nama_rizalz = $_POST['nama_rizalz'];
$no_hp_rizalz = $_POST['no_hp_rizalz'];
$alamat_rizalz = $_POST['alamat_rizalz'];

//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_pelanggan_rizalz SET
    nik_ktp_rizalz='$nik_ktp_rizalz',
    nama_rizalz='$nama_rizalz',
    no_hp_rizalz='$no_hp_rizalz',
    alamat_rizalz='$alamat_rizalz'
WHERE nik_ktp_rizalz='$nik_ktp_rizalz_tmp'
");

if ($update) {
//Jika proses delete berhasil
    header("location:tampil_data_pelanggan.php");
} else {
//Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_data_pelanggan.php'>Coba Lagi</a>";
}
