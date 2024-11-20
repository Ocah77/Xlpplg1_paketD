<?php

$koneksi = mysqli_connect('localhost','root','','ukk_sppp');

if(!$koneksi){
    echo"Koneksi Anda Gagal";
}