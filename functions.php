<?php
// functions.php - Logika bisnis dan kalkulasi data

/**
 * Menghitung total nilai aset barang di gudang (Harga * Stok)
 */
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += $product['harga'] * $product['stok'];
    }
    return $total;
}
