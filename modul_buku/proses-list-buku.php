<?php
session_start();

// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$query = "SELECT buku.*, kategori.kategori_nama
    FROM buku
    JOIN kategori
    ON buku.kategori_id = kategori.kategori_id";

$hasil = mysqli_query($db, $query);
mysqli_connect_error();
// ... menampung semua data kategori
$data_buku = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_buku
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_buku[] = $row;
}

// ... lanjut di tampilan
