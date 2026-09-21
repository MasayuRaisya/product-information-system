<?php

// Fungsi untuk menghitung total nilai stok
function hitungTotalNilaiStok($harga, $stok)
{
    return $harga * $stok;
}

// Fungsi untuk menentukan apakah stok kritis
function cekStokKritis($stok)
{
    return $stok < 3;
}

?>
