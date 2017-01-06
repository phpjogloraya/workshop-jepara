<?php

// ... ambil data dari database
include 'proses-list-kategori.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>SI Perpustakaan</h1>

         <div class="sidebar">
            <ul>
                <li><a class="active"   href="list-kategori.php">Data Kategori</a></li>
                <li><a href="buku_data.html">Data Buku</a></li>
                <li><a href="anggota_data.html">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="pinjam_data.html">Peminjaman</a></li>
                <li><a href="kembail_data.html">Pengembalian</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>Daftar Kategori</h1>
            <div class="btn-add-div">
                <a href="tambah-kategori.php"><button class="btn btn-add">Tambah Data</button></a>
            </div>
            <?php if (empty($data_kategori)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Kategori</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_kategori as $kategori) : ?>
                <tr>
                    <td><?php echo $kategori['kategori_nama'] ?></td>
                    <td>
                        <a href="edit-kategori.php?id_kategori=<?php echo $kategori['kategori_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete-kategori.php?id_kategori=<?php echo $kategori['kategori_id']; ?>" class="btn btn-hapus" onclick="return confirm('Hapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php  endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
