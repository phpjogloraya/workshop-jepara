<?php
include '../connection.php';
include '../function.php';

$id_pinjam = $_GET['id_pinjam'];
$q = "SELECT anggota.anggota_nama, buku.*, pinjam.* FROM pinjam 
    LEFT JOIN buku ON pinjam.buku_id = buku.buku_id 
    LEFT JOIN anggota ON pinjam.anggota_id = anggota.anggota_id
    WHERE pinjam.pinjam_id = $id_pinjam";
$hasil = mysqli_query($db, $q);
$data_pinjam = mysqli_fetch_assoc($hasil);
$tgl_kembali = date('Y-m-d');

$denda = hitung_denda($tgl_kembali, $data_pinjam['tgl_jatuh_tempo']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Peminjaman</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container clearfix">
        <h1>SI Perpustakaan</h1>

         <div class="sidebar">
            <ul>
                <li><a class="active" href="pinjam_data.html">Peminjaman</a></li>
                <li><a href="kembail_data.html">Pengembalian</a></li>
                <li><a href="kategori_data.html">Data Kategori</a></li>
                <li><a href="buku_data.html">Data Buku</a></li>
                <li><a href="anggota_data.html">Data Anggota</a></li>
                <li><a href="petugas_data.html">Data Petugas</a></li>
                <li><a href="#" onclick="return confirm('anda yakin akan keluar?')">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h3>Transaksi Peminjaman</h3>
            <form method="post" action="proses-pengembalian.php">
                <input type="hidden" name="pinjam_id" value="<?php echo $data_pinjam['pinjam_id'] ?>">
                <input type="hidden" name="tgl_kembali" value="<?php echo $tgl_kembali ?>">
                <input type="hidden" name="denda" value="<?php echo $denda ?>">
                <p>Buku</p>
                <p>
                    <input type="text" value="<?php echo $data_pinjam['buku_judul'] ?>" disabled>
                </p>

                <p>Anggota</p>
                <p>
                    <input type="text" value="<?php echo $data_pinjam['anggota_nama'] ?>" disabled>
                </p>

                <p>Tanggal Pinjam</p>
                <p><input type="date" value="<?php echo $data_pinjam['tgl_pinjam'] ?>" disabled></p>

                <p>Tanggal Jatuh Tempo</p>
                <p><input type="date" value="<?php echo $data_pinjam['tgl_jatuh_tempo'] ?>" disabled></p>

                <p>Tanggal Kembali</p>
                <p><input type="date" value="<?php echo $tgl_kembali ?>" disabled></p>

                <p>Denda</p>
                <p><input type="text" value="<?php echo $denda ?>" disabled></p>

                <p><input type="submit" class="btn btn-submit" value="Simpan"></p>
            </form>
        </div>

    </div>
</body>
</html>

