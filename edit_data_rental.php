<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Data Rental</title>
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
<div class="card-header">Edit Data Rental</div>
<div class="card-body text-success">


<?php
$notrx = "TRX-" . date("Ymdhis");
?>

<form method="POST" action="update_data_rental.php">
<?php
include "koneksi.php";
$no_trx_rizalz = $_GET['no_trx_rizalz'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rizalz WHERE
no_trx_rizalz='$no_trx_rizalz'");
$data = mysqli_fetch_array($tampil);
?>
<div class="row">
  <div class="col mt-3">
    <label for="no_trx_rizalz" class="form-label">No TRX :</label>
    <input type="hidden" name="no_trx_rizalz_tmp" value="<?=$data['no_trx_rizalz']?>" class="formcontrol" id="no_trx_rizalz_tmp" required>
    <input type="text" class="form-control" name="no_trx_rizalz" value="<?=$data['no_trx_rizalz']?>" class="formcontrol" id="no_trx_rizalz"
    placeholder="First name" aria-label="First name" value="<?php echo $notrx; ?>" readonly>
  </div>
  <div class="col mt-3">
      <label for="tgl_rental_rizalz" class="form-label">Tanggal Ambil :</label>
      <input type="date" name="tgl_rental_rizalz" class="form-control"
      id="tgl_rental_rizalz" placeholder="Masukan Tanggal Lahir" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3">
    <label for="nik_ktp_rizalz" class="form-label">Pelanggan :</label>
        <select name="nik_ktp_rizalz" class="form-control">
        <option value=""> -- Pilih Pelanggan --</option>
        <?php
include "koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_rizalz");
while ($data = mysqli_fetch_array($tampil)) {
    echo "<option value='$data[nik_ktp_rizalz]'>$data[nik_ktp_rizalz] - $data[nama_rizalz] </option>";
}
?>
        </select>
  </div>
  <div class="col mt-3">
      <label for="jam_rental_rizalz" class="form-label">Jam Ambil :</label>
      <input type="time" name="jam_rental_rizalz" class="form-control"
      id="jam_rental_rizalz" placeholder="Masukan Waktu Pengambilan" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3">
        <label for="no_plat_rizalz" class="form-label">Mobil:</label>
        <select name="no_plat_rizalz" class="form-control">
        <option value=""> -- Pilih Mobil --</option>
        <?php
include "koneksi.php";
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rizalz");
while ($data = mysqli_fetch_array($tampil)) {
    echo "<option value='$data[no_plat_rizalz]'>$data[no_plat_rizalz] - $data[nama_mobil_rizalz] </option>";
}
?>
        </select>
  </div>
  <script>
    function hitungTotal() {
      var lama_rizalz = parseFloat(document.getElementById('lama_rizalz').value);
      var harga_rizalz = parseFloat(document.getElementById('harga_rizalz').value);

      if (!isNaN(lama_rizalz) && !isNaN(harga_rizalz)) {
        var total_bayar_rizalz = lama_rizalz * harga_rizalz;
        document.getElementById('total_bayar_rizalz').value = total_bayar_rizalz;
      } else {
        document.getElementById('total_bayar_rizalz').value = '';
      }
    }
  </script>
  <div class="col mt-3">
      <label for="lama_rizalz" class="form-label">Lama Rental :</label>
      <input type="text" name="lama_rizalz" class="form-control"
      id="lama_rizalz" placeholder="Masukan Lama Rental /hari" oninput="hitungTotal()" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3"></div>
  <div class="col mt-3">
    <label for="harga_rizalz" class="form-label">Harga Rental :</label>
    <input type="text" class="form-control" name="harga_rizalz" id="harga_rizalz"
    placeholder="Harga Rental" aria-label="First name" oninput="hitungTotal()" required>
  </div>
</div>
<div class="row">
  <div class="col mt-3"></div>
  <div class="col mt-3">
      <label for="total_bayar_rizalz" class="form-label">Total Bayar :</label>
      <input type="text" name="total_bayar_rizalz" class="form-control"
      id="total_bayar_rizalz" placeholder="Total Bayar" readonly>
  </div>
</div>
</div>
<div class="row">
  <div class="col mt-3"></div>
 <div class="col mt-3" class="heading">
        <a href="tampil_data_rental.php" class="btn btn-warning">Kembali</a>
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