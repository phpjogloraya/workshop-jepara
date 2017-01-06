<?php
include '../connection.php';

$kategori = $_POST['kategori'];
$id_kategori = $_POST['id_kategori'];

$query = "UPDATE kategori 
    SET kategori_nama = '$kategori'
    WHERE kategori_id = $id_kategori";

$hasil = mysqli_query($db, $query);
if ($hasil == true) {
    header('Location: list-kategori.php');
} else {
    header('Location: tambah-kategori.php');
}
