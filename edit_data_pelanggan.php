<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Mobil</title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
<div class="card-header">Edit Data Pelanggan</div>
<div class="card-body text-success">

<form method="POST" action="update_data_pelanggan.php">
<?php
include "koneksi.php";
$nik_ktp_rizalz = $_GET['nik_ktp_rizalz'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_rizalz WHERE
nik_ktp_rizalz='$nik_ktp_rizalz'");
$data = mysqli_fetch_array($tampil);
?>
<div class="row">
  <div class="col mt-3">
    <label for="nik_ktp_rizalz" class="form-label">Nomor KTP :</label>
    <input type="hidden" name="nik_ktp_rizalz_tmp" value="<?=$data['nik_ktp_rizalz']?>" class="formcontrol" id="nik_ktp_rizalz_tmp" required>
    <input type="text" class="form-control" name="nik_ktp_rizalz" value="<?=$data['nik_ktp_rizalz']?>" class="formcontrol" id="nik_ktp_rizalz"
    placeholder="Masukkan Nomor NIK" aria-label="First name"  required>
  </div>
  <div class="col mt-3">
      <label for="nama_rizalz" class="form-label">Nama :</label>
      <input type="text" name="nama_rizalz" class="form-control"
      id="nama_rizalz" placeholder="Masukan Nama" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3">
    <label for="no_hp_rizalz" class="form-label">Nomor HP :</label>
    <input type="text" class="form-control" name="no_hp_rizalz" id="no_hp_rizalz"
    placeholder="Masukkan No HP" aria-label="First name"  required>
  </div>
  <div class="col mt-3">
      <label for="alamat_rizalz" class="form-label">Nama :</label>
      <input type="text" name="alamat_rizalz" class="form-control"
      id="alamat_rizalz" placeholder="Masukan Alamat" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3"></div>
 <div class="col mt-3" class="heading">
        <a href="tampil_data_pelanggan.php" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
<div class="row">
  <div class="col mt-3"></div>
</div>
    </form>
    </div>
    </div>
    </div>

</div>
</div>
</body>
</html>