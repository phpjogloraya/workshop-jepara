<?php

function ambil_kategori($db)
{
    // ambil data kategori
    $query = "SELECT * FROM kategori";
    $hasil = mysqli_query($db, $query);
    $data_kategori = array();

    while ($row = mysqli_fetch_assoc($hasil)) {
        $data_kategori[] = $row;
    }

    return $data_kategori;
}
