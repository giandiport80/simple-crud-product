<?php

require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM products WHERE id='$id'";
    $result = mysqli_query($koneksi, $sqlSelect);
    $product = mysqli_fetch_assoc($result);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Gian Shop | Detail Produk</title>
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <h1 class="mb-4 text-center">Detail Produk</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="img/<?= $product['image']; ?>" class="img-fluid rounded img-thumbnail text-center mb-5" alt="img">
            </div>
            <div class="col-md-6">
                <table class="table table-bordered table-hover text-start">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td><strong><?= $product['nama']; ?></strong></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= $product['deskripsi']; ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?= formatRupiah($product['harga']); ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><?= $product['stok']; ?></td>
                        </tr>
                        <tr>
                            <td>Aksi</td>
                            <td>
                                <a href="update.php?id=<?= $product['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                                <a href="delete.php?id=<?= $product['id']; ?>" onclick="return confirm('Yakin hapus produk ini?')" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-outline-danger btn-sm">Kembail</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>