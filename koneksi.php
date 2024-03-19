<?php
$host = 'localhost';
$dbname = 'kampus';
$username = 'root';
$password = '';

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// echo "Koneksi ke database berhasil!";
?>
