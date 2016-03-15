<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$jumlah = $_POST['jumlah'];

$q = mysqli_query($db, "SELECT buku_cover FROM buku WHERE buku_id = $id_buku");
$hasil = mysqli_fetch_assoc($q);
$cover_lama = $hasil['buku_cover'];

// ambil data file yang diupload (jika ada)
if (!empty($_FILES['cover']['tmp_name'])) {
    $file        = $_FILES['cover']['tmp_name'];
    $nama_file   = $_FILES['cover']['name'];
    $destination = "cover/" . $nama_file;

    $cover_baru = $nama_file;
} else {
    $cover_baru = $cover_lama;
}


$query = "UPDATE buku 
    SET buku_judul = '$judul',
        kategori_id = $kategori,
        buku_deskripsi = '$deskripsi',
        buku_jumlah = $jumlah,
        buku_cover = '$cover_baru'
    WHERE buku_id = $id_buku";

$hasil = mysqli_query($db, $query);
//var_dump(mysqli_error($db)); exit();
if ($hasil == true) {

    if (!empty($_FILES['cover']['tmp_name'])) {

        // hapus cover lama
        unlink("cover/" . $cover_lama);

        // jika upload cover baru, lakukan proses upload
        move_uploaded_file($file, $destination);
    }

    header('Location: list-buku.php');
} else {
    header('Location: tambah-buku.php');
}
