<?php

require 'connection.php';

$sqlSelect = "SELECT * FROM products";
$result = mysqli_query($koneksi, $sqlSelect);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .card:hover {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transition: 0.1s;
        }
    </style>

    <title>Gian Shop | Produk</title>
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <h1 class="text-center mb-4">Produk Kami</h1>

        <div class="text-center">
            <a href="create.php" class="mb-3 btn btn-primary btn-sm">+ Tambah Produk</a>
        </div>

        <div class="row justify-content-center">
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <div class="card">
                            <img src="img/<?= $product['image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6><?= $product['nama'] ?></h6>
                                <div class="mb-2"><?= formatRupiah($product['harga']) ?></div>
                                <div class="d-grid gap-2">
                                    <a href="show.php?id=<?= $product['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php  } else { ?>
                <h5 class="text-center">Produk Kosong!</h5>
            <?php } ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>