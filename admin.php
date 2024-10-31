<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin - Aplikasi Pembayaran SPP.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">

        <h3>Aplikasi Pembayaran SPP.<h3>
        <div class="alert-info">
            Anda Login Sebagai <b>ADMINISTRATOR</b> Aplikasi Pembayaran SPP.</div>
        </div>
        <a href="admin.php" class="btn btn-prinary"> Administrator</a>
        <a href="admin.php?url=siswa" class="btn btn-prinary"> Siswa</a>
        <a href="admin.php?url=petugas" class="btn btn-prinary"> Petugas</a>
        <a href="admin.php?url=kelas" class="btn btn-prinary"> Kelas</a>
        <a href="admin.php?url=spp" class="btn btn-prinary"> SPP</a>
        <a href="admin.php?url=pembayaran" class="btn btn-prinary"> Pembayaran</a>
        <a href="admin.php?url=laporan" class="btn btn-prinary"> Laporan</a>
        <a href="admin.php?url=logout" class="btn btn-prinary"> Logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- ini isi web kita -->
                 <?php 
                 $file = @$_GET['url'];
                 if(empty($file)){
                    echo"<h4>Selamat Datang Di Halaman Administrator.</h4>";
                    echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalamm mencatat pembayaran siswa / siswi disekolah.";
                 }else{
                    include $file.'.php';
                 }
                 ?>
            </div>
        </div>

    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>
