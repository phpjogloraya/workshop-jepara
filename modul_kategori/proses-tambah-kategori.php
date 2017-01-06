<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$kategori = $_POST['kategori'];

$query = "INSERT INTO kategori (kategori_nama) 
    VALUES ('$kategori')";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: list-kategori.php');
} else {
    header('Location: tambah-kategori.php');
}
