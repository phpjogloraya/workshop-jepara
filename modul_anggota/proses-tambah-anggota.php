<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];

$query = "INSERT INTO anggota (anggota_nama, anggota_alamat, anggota_jk, anggota_telp) 
    VALUES ('$nama', '$alamat', '$jenis_kelamin', '$no_telepon')";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: list-anggota.php');
} else {
    header('Location: tambah-anggota.php');
}
