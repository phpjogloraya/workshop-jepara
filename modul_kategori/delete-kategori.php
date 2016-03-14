<?php

include '../connection.php';

$id_kategori = $_GET['id_kategori'];

$query = "DELETE FROM kategori WHERE kategori_id = $id_kategori";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('location: list-kategori.php');
} else {
    header('location: tambah-kategori.php');
}
