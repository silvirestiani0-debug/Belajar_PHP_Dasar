<?php
session_start();
require "config.php";

if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
    $pemilik = $_POST['nama_pemilik'];
    $hewan   = $_POST['nama_hewan'];
    $jenis   = $_POST['jenis_hewan'];
    $keluhan = $_POST['keluhan'];

    mysqli_query($conn, "INSERT INTO pemeriksaan VALUES ('', '$tanggal', '$pemilik', '$hewan', '$jenis', '$keluhan')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pasien</title>
    <style>
        body { font-family: sans-serif; background: #e3f2fd; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 400px; }
        h2 { color: #1565c0; text-align: center; margin-top: 0; }
        input, select, textarea { width: 100%; padding: 10px; margin: 6px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #1976d2; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; }
        button:hover { background: #0d47a1; }
        .batal { display: block; text-align: center; margin-top: 15px; color: #666; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Tambah Pasien Baru</h2>
        <form method="POST">
            Tanggal:<br>
            <input type="date" name="tanggal" required><br>
            
            Nama Pemilik:<br>
            <input type="text" name="nama_pemilik" required><br>
            
            Nama Hewan:<br>
            <input type="text" name="nama_hewan" required><br>
            
            Jenis Hewan:<br>
            <select name="jenis_hewan">
                <option value="Kucing">Kucing</option>
                <option value="Anjing">Anjing</option>
                <option value="Kelinci">Kelinci</option>
                <option value="Lainnya">Lainnya</option>
            </select><br>
            
            Keluhan:<br>
            <textarea name="keluhan" rows="3" required></textarea><br>
            
            <button type="submit" name="simpan">Simpan Data</button>
            <a href="index.php" class="batal">Batal</a>
        </form>
    </div>
</body>
</html>