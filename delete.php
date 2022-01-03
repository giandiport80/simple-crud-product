<?php

require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM products WHERE id='$id'";
    $result = mysqli_query($koneksi, $sqlSelect);
    $product = mysqli_fetch_assoc($result);

    unlink("img/{$product['image']}");

    $sqlDelete = "DELETE FROM products WHERE id='$id'";

    if (mysqli_query($koneksi, $sqlDelete)) {
        header('Location: index.php');
    } else {
        echo mysqli_error($koneksi);
    }
} else {
    header('Location: index.php');
}
