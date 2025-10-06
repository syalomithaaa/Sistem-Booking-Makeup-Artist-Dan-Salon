<?php include 'header.php'; ?>

<section id="booking">
  <h2>Form Booking</h2>
  <form method="POST" action="">
    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Pilih Layanan:</label><br>
    <select name="layanan" required>
      <option value="">-- Pilih --</option>
      <option value="Makeup Acara">Makeup Acara</option>
      <option value="Perawatan Salon">Perawatan Salon</option>
      <option value="Mobile Makeup">Mobile Makeup</option>
    </select><br><br>

    <label>Tanggal:</label><br>
    <input type="date" name="tanggal" required><br><br>

    <label>Jam:</label><br>
    <input type="time" name="jam" required><br><br>

    <button type="submit" class="btn btn-primary">Konfirmasi Booking</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = htmlspecialchars($_POST['nama']);
      $layanan = htmlspecialchars($_POST['layanan']);
      $tanggal = htmlspecialchars($_POST['tanggal']);
      $jam = htmlspecialchars($_POST['jam']);

      echo "<div style='margin-top:1rem; font-weight:bold;'>
            ✅ Booking atas nama <b>$nama</b> berhasil untuk layanan 
            <b>$layanan</b> pada tanggal <b>$tanggal</b> jam <b>$jam</b>.
            </div>";
  }
  ?>
</section>

<?php include 'footer.php'; ?>
