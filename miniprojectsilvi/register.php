<?php
require "config.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users VALUES ('', '$nama', '$user', '$pass')");
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun - VetCare</title>
    <style>
        body { font-family: sans-serif; background: #e3f2fd; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); width: 320px; }
        h2 { color: #1565c0; text-align: center; margin-top: 0; }
        input { width: 100%; padding: 10px; margin: 8px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #1976d2; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; }
        button:hover { background: #0d47a1; }
        p { text-align: center; font-size: 14px; margin-bottom: 0; }
        a { color: #1976d2; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Daftar Akun</h2>
        <form method="POST">
            Nama Lengkap:<br>
            <input type="text" name="nama" required>
            
            Username:<br>
            <input type="text" name="username" required>
            
            Password:<br>
            <input type="password" name="password" required>
            
            <button type="submit" name="submit">Daftar</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
</body>
</html>