<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Petugas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>SI Perpustakaan</h1>
         <div class="sidebar">
            <ul>
                <li><a href="modul_kategori/list-kategori.php">Data Kategori</a></li>
                <li><a href="modul_buku/list-buku.php">Data Buku</a></li>
                <li><a href="anggota_data.html">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="pinjam_data.html">Peminjaman</a></li>
                <li><a href="kembail_data.html">Pengembalian</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Selamat datang, <?php echo $_SESSION['user']['petugas_nama']; ?></h1>
        </div>
    </div>
</body>
</html>
