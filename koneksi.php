<?php
$host = "localhost";       // biasanya localhost untuk XAMPP
$user = "root";            // default user XAMPP
$password = "";            // password kosong untuk XAMPP
$database = "project_bdl"; // GANTI dengan nama database kamu

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
