<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'toko');

if ($koneksi) {
    echo mysqli_connect_error();
}

function formatRupiah($number)
{
    return "Rp. " . number_format($number, 0, ',', '.');
}
