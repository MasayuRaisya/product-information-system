<?php
// index.php - Merajut Data & Processing Layer ke Tampilan HTML

require_once 'products.php';
require_once 'functions.php';

// Kalkulasi potensi omzet dapur
$potensiOmzet = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Menu & Dapur - Kafe Resto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1e1e2f;
            color: #ffffff;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        .header-card {
            background-color: #27293d;
            border-left: 5px solid #ff8d72;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .header-card h3 {
            margin: 0 0 5px 0;
            color: #a9a9b9;
            font-size: 0.9em;
            text-transform: uppercase;
        }
        .header-card .nilai {
            font-size: 1.8em;
            font-weight: bold;
            color: #e14eca;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #27293d;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #2b2b42;
        }
        th {
            background-color: #1d1e2c;
            color: #e14eca;
            font-size: 0.9em;
            text-transform: uppercase;
        }
        /* Kondisi visual stok porsi kritis (< 3) */
        .baris-kritis {
            background-color: rgba(253, 93, 147, 0.15);
        }
        .badge-kritis {
            background-color: #fd5d93;
            color: #fff;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 0.75em;
            margin-left: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Dashboard Ketersediaan Menu Dapur</h2>

        <!-- Card Total Potensi Omzet -->
        <div class="header-card">
            <h3>Estimasi Nilai Porsi Tersisa (Potensi Omzet)</h3>
            <div class="nilai">Rp <?= number_format($potensiOmzet, 0, ',', '.'); ?></div>
        </div>

        <!-- Tabel Daftar Menu -->
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Menu</th>
                    <th>Kategori</th>
                    <th>Harga Satuan</th>
                    <th>Sisa Porsi</th>
                    <th>Detail Komposisi / Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $item): ?>
                    <?php 
                        // Evaluasi kondisi porsi kritis (< 3 porsi)
                        $isKritis = $item['stok'] < 3;
                        $classBaris = $isKritis ? 'baris-kritis' : '';
                    ?>
                    <tr class="<?= $classBaris; ?>">
                        <td><strong><?= $item['id']; ?></strong></td>
                        <td><?= $item['nama']; ?></td>
                        <td><?= $item['kategori']; ?></td>
                        <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                        <td>
                            <?= $item['stok']; ?> Porsi
                            <?php if ($isKritis): ?>
                                <span class="badge-kritis">Hampir Habis!</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $item['deskripsi']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
