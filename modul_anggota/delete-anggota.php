<?php

include '../connection.php';

$id_anggota = $_GET['id_anggota'];

$query = "DELETE FROM anggota WHERE anggota_id = $id_anggota";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('location: list-anggota.php');
} else {
    header('location: tambah-anggota.php');
}
