<?php
include "koneksi.php";
/* Mengambil nilai no_trx dari parameter get
yang dikirim dari tampil data rental
 */
$nim = $_GET['no_trx_rizalz'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_rental_rizalz WHERE
no_trx_rizalz='$_GET[no_trx_rizalz]'");
if ($delete) {
//Jika proses delete berhasil
    header("location:tampil_data_rental_user.php");
} else {
//Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_data_rental_user.php'>Coba Lagi</a>";
}
