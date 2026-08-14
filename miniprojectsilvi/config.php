<?php
// Koneksi ke database MySQL
$conn = mysqli_connect("localhost", "root", "", "vet_clinic");

// Cek jika gagal
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>