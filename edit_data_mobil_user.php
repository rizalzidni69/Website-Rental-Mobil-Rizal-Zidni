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
<?php include "menu_user.php";?>
</div>
</div>
<div class="card border-success mb-3" >
<div class="card-header">Edit Data Mobil</div>
<div class="card-body text-success">

<form method="POST" action="update_data_mobil.php">
<?php
include "koneksi.php";
$no_plat_rizalz = $_GET['no_plat_rizalz'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rizalz WHERE
no_plat_rizalz='$no_plat_rizalz'");
$data = mysqli_fetch_array($tampil);
?>
<div class="row">
  <div class="col mt-3">
    <label for="no_plat_rizalz" class="form-label">Plat Nomor :</label>
    <input type="hidden" name="no_plat_rizalz_tmp" value="<?=$data['no_plat_rizalz']?>" class="formcontrol" id="no_plat_rizalz_tmp" required>
    <input type="text" class="form-control" name="no_plat_rizalz" value="<?=$data['no_plat_rizalz']?>" class="formcontrol" id="no_plat_rizalz"
    placeholder="Masukkan Plat Nomor" aria-label="First name"  required>
  </div>
  <div class="col mt-3">
      <label for="nama_mobil_rizalz" class="form-label">Nama Mobil :</label>
      <input type="text" name="nama_mobil_rizalz" class="form-control"
      id="nama_mobil_rizalz" placeholder="Masukan Nama Mobil" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3">
        <label for="brand_mobil_rizalz" class="form-label">Brand Mobil:</label>
        <select name="brand_mobil_rizalz" class="form-control" id="brand_mobil_rizalz" required>
        <option value=""> -- Pilih Brand Mobil --</option>
        <option value="TOYOTA">TOYOTA</option>
        <option value="MITSUBISHI">MITSUBISHI</option>
        <option value="DAIHATSU">DAIHATSU</option>
        <option value="SUZUKI">SUZUKI</option>
        </select>
  </div>
  <div class="col mt-3">
    <label for="tipe_transmisi_rizalz" class="form-label">Tipe Transmisi :</label>
    <select name="tipe_transmisi_rizalz" class="form-control" id="tipe_transmisi_rizalz" required>
        <option value=""> -- Pilih Tipe Transmisi --</option>
        <option value="Manual">Manual</option>
        <option value="Otomatis Konvensional">Otomatis Konvensional</option>
        <option value="Otomatis CVT">Otomatis CVT</option>
        <option value="Automated Manual Transmission">Automated Manual Transmission</option>
        <option value="Dual Clutch Transmission">Dual Clutch Transmission</option>
        </select>
  </div>
<div class="row">
  <div class="col mt-3"></div>
 <div class="col mt-3" class="heading">
        <a href="tampil_data_mobil.php" class="btn btn-warning">Kembali</a>
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