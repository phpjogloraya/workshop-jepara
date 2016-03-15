<?php
session_start();
include "connection.php";

// dari <input name="username" ...
$username = $_POST['username'];
$password = md5($_POST['password']);

// ... periksa username

$query = "SELECT * FROM petugas WHERE username = '$username'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);

if ($data_user != null) {

    // ... jika hasil tidak null berarti user ketemu,
    // ... lanjut periksa password

    if ($password == $data_user['password']) {
        $_SESSION['user'] = $data_user;
        header('Location: home.php');
    } else {
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}
