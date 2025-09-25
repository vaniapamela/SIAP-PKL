<?php
$koneksi = mysqli_connect("localhost", "root", "",
"siap_pkl");
if (!$koneksi) {
    
 die("Koneksi gagal: " . mysqli_connect_error());
} 