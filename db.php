<?php
// Koneksi ke database
$host = 'localhost';  // Server host, biasanya 'localhost'
$user = 'root';       // Username MySQL
$password = '';       // Password MySQL
$dbname = 'user_registration';  // Nama database yang sudah Anda buat

// Buat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
