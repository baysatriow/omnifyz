<?php
// Deklarasi Paramter Koneksi Database
$server   = "34.101.167.196";
$username = "root";
$password = "gproject248112";
$database = "omnifyz";

// koneksi database
$koneksi = mysqli_connect($server, $username, $password, $database);
// cek koneksi
if (!$koneksi) {
    die('Koneksi Database Gagal : ');
}

?>