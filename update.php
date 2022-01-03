<?php

require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM products WHERE id='$id'";
    $result = mysqli_query($koneksi, $sqlSelect);
    $product = mysqli_fetch_assoc($result);

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
        $image = strtolower(str_replace(' ', '-', $_FILES['image']['name']));
        $tempImage = $_FILES['image']['tmp_name'];

        $sql_update = "UPDATE products SET nama='$nama', harga='$harga', deskripsi='$deskripsi', stok='$stok' WHERE id='$id'";

        if ($image) {
            echo 'ok';
            unlink("img/{$product['image']}");
            move_uploaded_file($tempImage, 'img/' . $image);
            $sql_update = "UPDATE products SET nama='$nama', harga='$harga', deskripsi='$deskripsi', stok='$stok', image='$image' WHERE id='$id'";
        }

        if (mysqli_query($koneksi, $sql_update)) {
            header('Location: index.php');
        } else {
            echo mysqli_error($koneksi);
        }
    }
} else {
    header('Location: index.php');
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

    <title>Gian Shop | Update Produk</title>
</head>

<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <h1 class="text-center mb-4">Update Produk</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" name="nama" value="<?= $product['nama']; ?>" class="form-control" placeholder="Nama Produk">
                    </div>
                    <div class="mb-3">
                        <textarea name="deskripsi" class="form-control" cols="30" rows="4" placeholder="Deskripsi"><?= $product['deskripsi']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="harga" value="<?= $product['harga']; ?>" class="form-control" id="nama" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <input type="number" name="stok" value="<?= $product['stok']; ?>" class="form-control" placeholder="Stok">
                    </div>
                    <div class="mb-3">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-primary" type="button">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>