<?php 

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$id_kelas = $_POST['nis'];
$nis = $_POST['nis'];
$nis = $_POST['niS'];
$nis = $_POST['nis'];
$nis = $_POST['nis'];

include 'koneksi.php';
$sql = "INSERT INTO spp(tahun,nominal) VALUES('$tahun','$nominal')";
$query = mysqli_query($koneksi, $sql);
if($query){
   header("location:?url=spp");
}else{
    echo"<script>alert('maaf Data Tidak Tersimpan'); window.location.assign('?url=spp');</script>";
}