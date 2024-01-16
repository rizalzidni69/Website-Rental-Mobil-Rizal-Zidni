<?php
session_start();
if (!isset($_SESSION['username_rizalz'])) {
    header("Location: login.php");
    exit();
}?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./tampil_data_rental.php">Selamat datang, <?php echo $_SESSION['username_rizalz']; ?>!</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tampil_data_rental.php">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Master</a>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<li><a class="dropdown-item" href="tampil_data_mobil.php">Data Mobil</a></li>
<li><a class="dropdown-item" href="tampil_data_pelanggan.php">Data Pelanggan</a></li>
<li><a class="dropdown-item" href="tampil_data_rental.php"> Data Rental</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">Keluar</a>
</li>
          </ul>
        </div>
      </div>
    </nav>