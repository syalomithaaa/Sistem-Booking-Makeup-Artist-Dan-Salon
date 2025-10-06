<?php
session_start();

// Kalau sudah login, langsung alihkan ke dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php?pesan=udah_login");
    exit;
}

// Proses login saat form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username dan password sederhana (ganti sesuai keinginanmu)
    $USERNAME_VALID = "syalomitha";
    $PASSWORD_VALID = "12345";

    if ($username === $USERNAME_VALID && $password === $PASSWORD_VALID) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php?pesan=sukses_login");
        exit;
    } else {
        $error = "❌ Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login — Sistem Booking MUA</title>
  <style>
    body { font-family: Arial; background: #f6f6f6; padding: 30px; }
    form { background: #fff; padding: 20px; width: 300px; border-radius: 10px; margin: auto; box-shadow: 0 0 5px #ccc; }
    input { width: 100%; padding: 8px; margin: 8px 0; }
    button { width: 100%; padding: 8px; background: #ff69b4; border: none; color: white; font-weight: bold; cursor: pointer; border-radius: 5px; }
    button:hover { background: #ff1493; }
    h2 { text-align: center; }
    p { text-align: center; }
  </style>
</head>
<body>

  <h2>Login ke Sistem Booking</h2>

  <?php if (isset($_GET['pesan'])): ?>
    <p style="color:blue;"><?= htmlspecialchars($_GET['pesan']); ?></p>
  <?php endif; ?>

  <?php if (isset($error)): ?>
    <p style="color:red;"><?= $error; ?></p>
  <?php endif; ?>

  <form method="POST" action="">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
  </form>

</body>
</html>