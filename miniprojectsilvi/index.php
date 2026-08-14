<?php
session_start();
require "config.php";

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
}

$keyword = "";
if (isset($_GET['cari'])) {
    $keyword = $_GET['cari'];
    $query = mysqli_query($conn, "SELECT * FROM pemeriksaan WHERE nama_pemilik LIKE '%$keyword%' OR nama_hewan LIKE '%$keyword%'");
} else {
    $query = mysqli_query($conn, "SELECT * FROM pemeriksaan");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien Hewan</title>
    <style>
        body { font-family: sans-serif; background: #f4f6f9; margin: 0; }
        header { background: #1565c0; color: white; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; }
        header a { color: #ffcdd2; text-decoration: none; font-weight: bold; }
        .container { max-width: 900px; margin: 30px auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .btn { background: #1976d2; color: white; padding: 9px 15px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block; }
        .btn:hover { background: #0d47a1; }
        .btn-edit { background: #ffa000; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-size: 13px; }
        .btn-hapus { background: #e53935; color: white; padding: 5px 10px; text-decoration: none; border-radius: 4px; font-size: 13px; }
        input[type="text"] { padding: 8px; border: 1px solid #ccc; border-radius: 5px; width: 250px; }
        button { padding: 8px 15px; background: #1976d2; color: white; border: none; border-radius: 5px; cursor: pointer; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border-bottom: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #1976d2; color: white; }
        tr:hover { background-color: #f1f8ff; }
    </style>
</head>
<body>

    <header>
        <h2>🐾 VetCare Klinik Hewan</h2>
        <div>Halo, <b><?= $_SESSION['nama']; ?></b> | <a href="logout.php">Logout</a></div>
    </header>

    <div class="container">
        <!-- Tombol Tambah Data -->
        <a href="tambah.php" class="btn">+ Tambah Data Pasien</a>
        <br><br>

        <!-- Form Pencarian -->
        <form method="GET">
            <input type="text" name="cari" placeholder="Cari nama pemilik/hewan..." value="<?= $keyword; ?>">
            <button type="submit">Cari</button>
            <a href="index.php" style="margin-left:10px; color:#666;">Reset</a>
        </form>

        <!-- Tabel Data -->
        <table>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Pemilik</th>
                <th>Nama Hewan</th>
                <th>Jenis Hewan</th>
                <th>Keluhan</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) : 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['tanggal']; ?></td>
                <td><?= $row['nama_pemilik']; ?></td>
                <td><?= $row['nama_hewan']; ?></td>
                <td><?= $row['jenis_hewan']; ?></td>
                <td><?= $row['keluhan']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn-hapus" onclick="return confirm('Hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>
</html>