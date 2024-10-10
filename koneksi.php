<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect("localhost", "root", "", "spprizki");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
} else {
    echo "Koneksi berhasil!";
}
?>
