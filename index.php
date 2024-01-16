<?php
session_start();
if (!isset($_SESSION['username_rizalz'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Aplikasi Rental Mobil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Selamat datang, <?php echo $_SESSION['username_rizalz']; ?>!</h2>

    <!-- Tambahkan link atau form untuk fitur CRUD di sini -->
</div>
<?php
include "indexxx.php";
?>

</body>
</html>
