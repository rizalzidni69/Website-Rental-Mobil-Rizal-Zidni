<?php
include "koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
 */
$no_trx_rizalz_tmp = $_POST['no_trx_rizalz_tmp'];
$no_trx_rizalz = $_POST['no_trx_rizalz'];
$nik_ktp_rizalz = $_POST['nik_ktp_rizalz'];
$no_plat_rizalz = $_POST['no_plat_rizalz'];
$tgl_rental_rizalz = $_POST['tgl_rental_rizalz'];
$jam_rental_rizalz = $_POST['jam_rental_rizalz'];
$harga_rizalz = $_POST['harga_rizalz'];
$lama_rizalz = $_POST['lama_rizalz'];
$total_bayar_rizalz = $_POST['total_bayar_rizalz'];

//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_rental_rizalz SET
    no_trx_rizalz='$no_trx_rizalz',
    nik_ktp_rizalz='$nik_ktp_rizalz',
    no_plat_rizalz='$no_plat_rizalz',
    tgl_rental_rizalz='$tgl_rental_rizalz',
    jam_rental_rizalz='$jam_rental_rizalz',
    harga_rizalz='$harga_rizalz',
    lama_rizalz='$lama_rizalz',
    total_bayar_rizalz='$total_bayar_rizalz'
WHERE no_trx_rizalz='$no_trx_rizalz_tmp'
");

if ($update) {
//Jika proses delete berhasil
    header("location:tampil_data_rental.php");
} else {
//Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_data_rental.php'>Coba Lagi</a>";
}
