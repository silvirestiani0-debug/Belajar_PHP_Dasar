<?php
session_start();
require "config.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pemeriksaan WHERE id='$id'"));

if (isset($_POST['update'])) {
    $tanggal = $_POST['tanggal'];
    $pemilik = $_POST['nama_pemilik'];
    $hewan   = $_POST['nama_hewan'];
    $jenis   = $_POST['jenis_hewan'];
    $keluhan = $_POST['keluhan'];

    mysqli_query($conn, "UPDATE pemeriksaan SET 
        tanggal='$tanggal', 
        nama_pemilik='$pemilik', 
        nama_hewan='$hewan', 
        jenis_hewan='$jenis', 
        keluhan='$keluhan' 
        WHERE id='$id'");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pasien</title>
    <style>
        body { font-family: sans-serif; background: #e3f2fd; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 400px; }
        h2 { color: #ffa000; text-align: center; margin-top: 0; }
        input, select, textarea { width: 100%; padding: 10px; margin: 6px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #ffa000; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; }
        button:hover { background: #ff8f00; }
        .batal { display: block; text-align: center; margin-top: 15px; color: #666; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit Data Pasien</h2>
        <form method="POST">
            Tanggal:<br>
            <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>"><br>
            
            Nama Pemilik:<br>
            <input type="text" name="nama_pemilik" value="<?= $data['nama_pemilik']; ?>"><br>
            
            Nama Hewan:<br>
            <input type="text" name="nama_hewan" value="<?= $data['nama_hewan']; ?>"><br>
            
            Jenis Hewan:<br>
            <input type="text" name="jenis_hewan" value="<?= $data['jenis_hewan']; ?>"><br>
            
            Keluhan:<br>
            <textarea name="keluhan" rows="3"><?= $data['keluhan']; ?></textarea><br>
            
            <button type="submit" name="update">Update Data</button>
            <a href="index.php" class="batal">Batal</a>
        </form>
    </div>
</body>
</html>