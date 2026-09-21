<?php

require_once "product.php";
require_once "functions.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Information System</title>
</head>

<body>

<h1>Product Information System</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Deskripsi</th>
        <th>Total Nilai Stok</th>
    </tr>

    <?php foreach ($products as $product) { ?>

        <?php
        $total = hitungTotalNilaiStok(
            $product["harga"],
            $product["stok"]
        );
        ?>

        <tr>
            <td><?php echo $product["id"]; ?></td>
            <td><?php echo $product["nama"]; ?></td>
            <td><?php echo $product["kategori"]; ?></td>
            <td>Rp <?php echo number_format($product["harga"], 0, ",", "."); ?></td>
            <td><?php echo $product["stok"]; ?></td>
            <td><?php echo $product["deskripsi"]; ?></td>
            <td>Rp <?php echo number_format($total, 0, ",", "."); ?></td>
        </tr>

    <?php } ?>

</table>

</body>
</html>
