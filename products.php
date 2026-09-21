<?php
// products.php - Menampung data komoditas dalam multidimensional array

$products = [
    [
        "id" => 101,
        "nama" => "Laptop ASUS ROG Strix",
        "kategori" => "Laptop",
        "harga" => 22500000,
        "stok" => 5,
        "deskripsi" => "Laptop gaming layar 16 inci, RTX 4060, RAM 16GB."
    ],
    [
        "id" => 102,
        "nama" => "Smartphone Samsung S24",
        "kategori" => "Smartphone",
        "harga" => 15000000,
        "stok" => 2, // Stok kritis (< 3)
        "deskripsi" => "Layar AMOLED 120Hz, kamera 50MP, AI features."
    ],
    [
        "id" => 103,
        "nama" => "Mouse Wireless Logitech",
        "kategori" => "Aksesori",
        "harga" => 350000,
        "stok" => 12,
        "deskripsi" => "Mouse ergononis tanpa kabel dengan baterai tahan lama."
    ],
