<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard — Sistem Booking</title>
  <style>
    body { font-family: Arial; background: #fff; color: #333; padding: 30px; }
    a { color: #ff1493; text-decoration: none; }
    a:hover { text-decoration: underline; }
    .box { background: #f8f8f8; padding: 20px; border-radius: 10px; width: 500px; margin: auto; box-shadow: 0 0 5px #ccc; }
  </style>
</head>
<body>

  <div class="box">
    <h1>Selamat datang, <?= htmlspecialchars($username); ?>!</h1>
    <p>Ini adalah <strong>Dashboard Sistem Booking Makeup Artist & Salon</strong>.</p>
    <p><a href="logout.php">Logout</a></p>

    <hr>

    <h2>🔗 Navigasi via $_GET</h2>
    <ul>
      <li><a href="dashboard.php?halaman=layanan">Lihat Layanan</a></li>
      <li><a href="dashboard.php?halaman=artist">Lihat Artist</a></li>
      <li><a href="dashboard.php?halaman=booking">Form Booking</a></li>
    </ul>

    <?php
    // Menampilkan halaman sesuai query string
    if (isset($_GET['halaman'])) {
        $halaman = htmlspecialchars($_GET['halaman']);
        echo "<h3>📄 Anda sedang membuka halaman: <em>$halaman</em></h3>";
    }
    ?>
  </div>

</body>
</html>