<?php
include "koneksi.php";
$i = 0;
$keyword = mysqli_real_escape_string($koneksi, $_GET['keyword']);
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rizalz
WHERE nama_mobil_rizalz like '%$keyword%'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cari Data Mobil</title>
<link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 mb-4">
<?php include "menu.php";?>
</div>
</div>
<div class="card border-success mb-3" >
<div class="card-header">Hasil Pencarian : keyword
"<b><?=$keyword?></b>"</div>
<div class="card-body text-success">
<div class="row">
<div class="col-md-6 mb-2 ">
<a href='tampil_data_mobil.php' class='btn btn-warning'> Kembali</a>
</div>
<div class="col-md-6 ">
<form action="cari_data_mobil.php" method="GET">
<div class="btn-group float-end" role="group" >
    <input type="text" name="keyword" class="form-control"
    placeholder="Masukan keyword" >
    <button type="button" class="btn btn-primary">Pencarian</button>
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
<th>Plat Nomor</th>
<th>Nama Mobil</th>
<th>Brand Mobil</th>
<th>Tipe transmisi</th>
<th>Aksi</th>
</tr>
</thead>
</tbody>
<?php
include "koneksi.php";
while ($data = mysqli_fetch_array($tampil)) {
    $i++;
    ?>
<tr>
<td><?=$i?></td>
<td><?=$data['no_plat_rizalz']?></td>
<td><?=$data['nama_mobil_rizalz']?></td>
<td><?=$data['brand_mobil_rizalz']?></td>
<td><?=$data['tipe_transmisi_rizalz']?></td>

<td>
<a href="edit_data_mobil.php?no_plat_rizalz=<?=$data['no_plat_rizalz']?>" class='btn
btn-primary'>Edit</a>
<a href="delete_data_mobil.php?no_plat_rizalz=<?=$data['no_plat_rizalz']?>"
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