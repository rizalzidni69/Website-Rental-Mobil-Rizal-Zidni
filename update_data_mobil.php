<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
 */
$no_plat_rizalz_tmp = $_POST['no_plat_rizalz_tmp'];
$no_plat_rizalz = $_POST['no_plat_rizalz'];
$nama_mobil_rizalz = $_POST['nama_mobil_rizalz'];
$brand_mobil_rizalz = $_POST['brand_mobil_rizalz'];
$tipe_transmisi_rizalz = $_POST['tipe_transmisi_rizalz'];

//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_mobil_rizalz SET
    no_plat_rizalz='$no_plat_rizalz',
    nama_mobil_rizalz='$nama_mobil_rizalz',
    brand_mobil_rizalz='$brand_mobil_rizalz',
    tipe_transmisi_rizalz='$tipe_transmisi_rizalz'
WHERE no_plat_rizalz='$no_plat_rizalz_tmp'
");

if ($update) {
//Jika proses delete berhasil
    header("location:tampil_data_mobil.php");
} else {
//Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_data_mobil.php'>Coba Lagi</a>";
}
