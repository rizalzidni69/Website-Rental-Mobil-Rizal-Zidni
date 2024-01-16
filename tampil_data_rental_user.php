<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 mb-4">
<?php include "menu_user.php";?>
</div>
</div>
<div class="card border-success mb-3" >
<div class="card-header">Data Rental</div>
<div class="card-body text-success">
<div class="row">
<div class="col-md-5">
<a href='rental_user.php' class='btn btn-primary'>Tambah Data</a>
</div>
<div class="col-md-6 ">
<form action="cari_data_rental_user.php" method="GET">
<div class="btn-group float-end" role="group" >
<input type="text" name="keyword" class="form-control"
placeholder="Masukan keyword" required>
<button type="submit" class="btn btn-primary">Pencarian</button>
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">
<table class="table table-bordered table-striped table-hover">
<thead>
<tr>
<th>No</th>
<th>No Transaksi</th>
<th>Pelanggan</th>
<th>Mobil</th>
<th>Tanggal Ambil</th>
<th>Jam Ambil</th>
<th>Lama Rental</th>
<th>Harga rental</th>
<th>Total Bayar</th>
<th>Aksi</th>
</tr>
</thead>
</tbody>
<?php
include "koneksi.php";
$i = 0;
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rizalz");
while ($data = mysqli_fetch_array($tampil)) {
    $i++;
    ?>
<tr>
<td><?=$i?></td>
<td><?=$data['no_trx_rizalz']?></td>
<td><?=$data['nik_ktp_rizalz']?></td>
<td><?=$data['no_plat_rizalz']?></td>
<td><?=$data['tgl_rental_rizalz']?></td>
<td><?=$data['jam_rental_rizalz']?></td>
<td><?=$data['lama_rizalz']?></td>
<td><?=$data['harga_rizalz']?></td>
<td><?=$data['total_bayar_rizalz']?></td>
<td>
<a href="edit_data_rental_user.php?no_trx_rizalz=<?=$data['no_trx_rizalz']?>" class='btn
btn-primary'>Edit</a>
<a href="delete_data_rental_user.php?no_trx_rizalz=<?=$data['no_trx_rizalz']?>"
class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>