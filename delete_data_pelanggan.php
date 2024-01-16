<?php
include "koneksi.php";
/* Mengambil nilai no_trx dari parameter get
yang dikirim dari tampil data rental
 */
$nim = $_GET['nik_ktp_rizalz'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_pelanggan_rizalz WHERE
nik_ktp_rizalz='$_GET[nik_ktp_rizalz]'");
if ($delete) {
//Jika proses delete berhasil
    header("location:tampil_data_pelanggan.php");
} else {
//Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_data_pelanggan.php'>Coba Lagi</a>";
}
