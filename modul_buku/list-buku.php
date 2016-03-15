<?php

// ... ambil data dari database
include 'proses-list-buku.php';

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
                <li><a href="../modul_kategori/list-kategori.php">Data Kategori</a></li>
                <li><a class="active" href="list-buku.php">Data Buku</a></li>
                <li><a href="../modul_anggota/list-anggota.php">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="pinjam_data.html">Peminjaman</a></li>
                <li><a href="kembail_data.html">Pengembalian</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>Daftar Buku</h1>
            <div class="btn-add-div">
                <a href="tambah-buku.php"><button class="btn btn-add">Tambah Data</button></a>
            </div>
            <?php if (empty($data_buku)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Cover</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_buku as $buku) : ?>
                <tr>
                    <td><?php echo $buku['buku_judul'] ?></td>
                    <td><?php echo $buku['kategori_nama'] ?></td>
                    <td><?php echo $buku['buku_deskripsi'] ?></td>
                    <td><?php echo $buku['buku_jumlah'] ?></td>
                    <td><img class="buku-cover" src="cover/<?php echo $buku['buku_cover'] ?>"></td>
                    <td>
                        <a href="edit-buku.php?id_buku=<?php echo $buku['buku_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete-buku.php?id_buku=<?php echo $buku['buku_id']; ?>" class="btn btn-hapus" onclick="return confirm('Hapus data ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
