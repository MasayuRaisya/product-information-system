<?php
// functions.php - Logika bisnis dan kalkulasi nilai porsi tersisa

/**
 * Mengkalkulasi potensi omzet dari seluruh porsi menu yang masih tersedia
 */
function hitungTotalNilaiStok($products) {
    $totalPotensiOmzet = 0;
    foreach ($products as $item) {
        $totalPotensiOmzet += $item['harga'] * $item['stok'];
    }
    return $totalPotensiOmzet;
}
