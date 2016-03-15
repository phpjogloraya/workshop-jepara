<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
//mysqli_report(MYSQLI_REPORT_ALL);

$host = "localhost";
$user = "root";
$pass = "root";
$database = "db_perpus";

$db = mysqli_connect($host, $user, $pass, $database) or die("gagal koneksi ke database");
