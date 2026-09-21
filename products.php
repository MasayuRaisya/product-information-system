<?php
// products.php - Menampung data menu restoran dalam multidimensional array

$products = [
    [
        "id" => "MN-01",
        "nama" => "Steak Sapi Ribeye",
        "kategori" => "Makanan Utama",
        "harga" => 125000,
        "stok" => 2, // Stok porsi kritis (< 3)
        "deskripsi" => "Daging sapi pilihan 200g dengan saus lada hitam."
    ],
    [
        "id" => "MN-02",
        "nama" => "Es Kopi Susu Aren",
        "kategori" => "Minuman",
        "harga" => 25000,
        "stok" => 15,
        "deskripsi" => "Espresso, susu segar, dan gula aren asli."
    ],
    [
        "id" => "MN-03",
        "nama" => "Spaghetti Carbonara",
        "kategori" => "Makanan Utama",
        "harga" => 48000,
        "stok" => 1, // Stok porsi kritis (< 3)
        "deskripsi" => "Pasta dengan saus krim, keju parmesan, dan smoked beef."
    ],
    [
        "id" => "MN-04",
        "nama" => "Matcha Latte",
        "kategori" => "Minuman",
        "harga" => 30000,
        "stok" => 8,
        "deskripsi" => "Bubuk matcha jepang murni diseduh dengan susu hangat."
    ],
    [
        "id" => "MN-05",
        "nama" => "French Fries & Cheese",
        "kategori" => "Cemilan",
        "harga" => 22000,
        "stok" => 0, // Stok habis/kritis (< 3)
        "deskripsi" => "Kentang goreng renyah disiram saus keju leleh."
    ]
];
