<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Aplikasi Pembayaran SPP.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">

      <h3>Aplikasi Pembayaran SPP.</h3>
      <div class="alert alert-info">
        Anda Login Sebagai <b>ADMINISTRASI</b> Aplikasi Pembayaran SPP.
      </div>
      <a href="admin.php" class="btn btn-primary"> Administrator</a>
      <a href="admin.php?url=spp" class="btn btn-primary"> SPP</a>
      <a href="admin.php?url=kelas" class="btn btn-primary"> Kelas</a>
      <a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
      <a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
      <a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
      <a href="admin.php?url=laporan" class="btn btn-primary">Laporan</a>
      <a href="admin.php?url=logout" class="btn btn-primary">Logout</a>

      <div class="card mt-2">
        <div class="card-body">
          <!-- ini isi web kita -->
          <?php
          $file = isset($_GET['url']) ? $_GET['url'] : ''; // Use isset to avoid undefined index
          
          if (empty($file)) {
            echo "<h4>Selamat Datang Di Halaman Administrator.</h4>";
            echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi di sekolah.";
          } else {
            // Sanitize the file variable to prevent security issues
            $allowed_files = ['spp', 'kelas', 'siswa', 'petugas', 'pembayaran', 'laporan', 'logout'];
            if (in_array($file, $allowed_files)) {
              include $file . '.php';
            } else {
              echo "<h4>File tidak ditemukan.</h4>";
            }
          }
          ?>
        </div>
      </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
