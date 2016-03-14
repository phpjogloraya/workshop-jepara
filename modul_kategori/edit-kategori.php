<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

// ambil artikel yang mau di edit
$id_kategori = $_GET['id_kategori'];
$query = "SELECT * FROM kategori WHERE kategori_id = $id_kategori";
$hasil = mysqli_query($db, $query);
$data_kategori = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../../css/style.css">
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
            <h3>Edit Kategori</h3>
            <form method="post" action="proses-edit-kategori.php">
                <input type="hidden" name="id_kategori" id="id_kategori" value="<?php echo $data_kategori['kategori_id']; ?>">
                <p>Kategori</p>
                <p><input type="text" name="kategori" value="<?php echo $data_kategori['kategori_nama'] ?>"></p>

                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
