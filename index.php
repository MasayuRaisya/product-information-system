<?php

require_once 'product.php';
require_once 'functions.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Information System</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .stok-kritis {
            background-color: #ffcccc;
        }
    </style>
</head>

<body>

    <h1>Product Information System</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Total Nilai Stok</th>
        </tr>

        <?php foreach ($products as $product): ?>

            <?php
                $totalNilaiStok = hitungTotalNilaiStok(
                    $product['harga'],
                    $product['stok']
                );

                $stokKritis = cekStokKritis($product['stok']);
            ?>

            <tr class="<?= $stokKritis ? 'stok-kritis' : '' ?>">
                <td><?= $product['id'] ?></td>
                <td><?= $product['nama'] ?></td>
                <td><?= $product['kategori'] ?></td>
                <td>Rp <?= number_format($product['harga'], 0, ',', '.') ?></td>
                <td><?= $product['stok'] ?></td>
                <td><?= $product['deskripsi'] ?></td>
                <td>Rp <?= number_format($totalNilaiStok, 0, ',', '.') ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>
