<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Anggota</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>SI Perpustakaan</h1>

         <div class="sidebar">
            <ul>
                <li><a href="../modul_kategori/list-kategori.php">Data Kategori</a></li>
                <li><a href="../modul_buku/list-buku.php">Data Buku</a></li>
                <li><a class="active" href="list-anggota.php">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="pinjam_data.html">Peminjaman</a></li>
                <li><a href="kembail_data.html">Pengembalian</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h3>Tambah Data Anggota</h3>
            <form method="post" action="proses-tambah-anggota.php">
                <p>Nama</p>
                <p><input type="text" name="nama"></p>
                <p>Alamat</p>
                <p><input type="text" name="alamat"></p>
                <p>Jenis Kelamin</p>
                <p>
                    <select name="jk">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </p>
                <p>Telepon</p>
                <p><input type="text" name="no_telepon"></p>
                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
