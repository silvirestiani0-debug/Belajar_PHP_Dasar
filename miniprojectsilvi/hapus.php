<?php
session_start();
require "config.php";

$id = $_GET['id'];

// Hapus data berdasarkan ID
mysqli_query($conn, "DELETE FROM pemeriksaan WHERE id='$id'");

// Kembalikan ke halaman index
header("Location: index.php");
?>