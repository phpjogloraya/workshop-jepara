<?php
session_start();

// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}


include '../connection.php';

$query = "SELECT * FROM anggota";

$hasil = mysqli_query($db, $query);

// ... menampung semua data kategori
$data_anggota = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_anggota
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_anggota[] = $row;
}


// ... lanjut di tampilan
