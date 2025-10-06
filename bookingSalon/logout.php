<?php
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Arahkan kembali ke halaman login dengan query string
header("Location: login.php?pesan=logout_sukses");
exit;
?>