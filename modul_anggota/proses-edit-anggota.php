<?php
include '../connection.php';

$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];

$query = "UPDATE anggota 
    SET anggota_nama = '$nama',
        anggota_alamat = '$alamat',
        anggota_jk = '$jenis_kelamin',
        anggota_telp = '$no_telepon'
    WHERE anggota_id = $id_anggota";

$hasil = mysqli_query($db, $query);
// var_dump(mysqli_error($db));
if ($hasil == true) {
    header('Location: list-anggota.php');
} else {
    header('Location: tambah-anggota.php');
}
