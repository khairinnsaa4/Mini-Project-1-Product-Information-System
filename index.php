<?php
/**
 * =======================================================================
 * File: index.php (Presentation Layer)
 * =======================================================================
 * Merajut products.php dan functions.php menggunakan require_once,
 * kemudian merender antarmuka tabel HTML via perulangan foreach.
 */

require_once 'products.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project 1: Product Information System</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            padding: 40px 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 1060px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        .header {
            margin-bottom: 24px;
            border-bottom: 2px solid #0f172a;
            padding-bottom: 14px;
        }

        .header h1 {
            font-size: 22px;
            font-weight: 700;
            color: #0f172a;
        }

        .header p {
            font-size: 13.5px;
            color: #64748b;
            margin-top: 4px;
        }

        /* Styling Tabel */
        .table-responsive {
            overflow-x: auto;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13.5px;
            margin-top: 8px;
        }

        th, td {
            border: 1px solid #cbd5e1;
            padding: 12px 14px;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background-color: #f1f5f9;
            color: #0f172a;
            font-weight: 600;
            white-space: nowrap;
        }

        /* Class CSS dari fungsi cekStatusStok() */
        .stok-kritis {
            background-color: #ffebee;
            color: #b71c1c;
            font-weight: 500;
        }

        /* Penyelarasan Khusus Tiap Kolom */
        .col-id {
            font-family: Consolas, monospace;
            font-weight: 600;
            width: 100px;
            white-space: nowrap;
        }

        .col-nama {
            font-weight: 600;
            min-width: 230px;
        }

        .col-kategori {
            white-space: nowrap;
            min-width: 120px;
        }

        .col-harga {
            text-align: right;
            font-weight: 600;
            white-space: nowrap;
            min-width: 140px;
        }

        .col-stok {
            text-align: center;
            font-weight: 700;
            width: 80px;
        }

        .col-deskripsi {
            color: #475569;
            font-size: 12.5px;
        }

        .stok-kritis .col-deskripsi {
            color: #881337;
        }

        /* Footer Tabel untuk Total Nilai Aset Gudang */
        tfoot tr {
            background-color: #f8fafc;
            font-size: 14px;
        }

        tfoot th {
            padding: 14px;
            border-top: 2px solid #0f172a;
        }

        .total-label {
            text-align: right;
            font-weight: 700;
            color: #0f172a;
        }

        .total-value {
            text-align: left;
            font-size: 16px;
            font-weight: 700;
            color: #0284c7;
        }

        /* Keterangan / Legenda */
        .legend-box {
            margin-top: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            font-size: 12px;
            color: #64748b;
        }

        .legend-indicator {
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .color-box {
            display: inline-block;
            width: 12px;
            height: 12px;
            background-color: #ffebee;
            border: 1px solid #ef9a9a;
            border-radius: 2px;
        }
    </style>
</head>
<body>

    <div class="container">

        <!-- Header Halaman -->
        <header class="header">
            <h1>Mini Project 1: Product Information System</h1>
            <p>Manajemen Inventaris Sepatu Wanita Mewah (High-End Heels) &bull; Arsitektur 3 Layer PHP Native</p>
        </header>

        <!-- Tabel Inventaris Produk -->
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th style="text-align: right;">Harga</th>
                        <th style="text-align: center;">Stok</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Perulangan foreach untuk merender setiap item produk -->
                    <?php foreach ($products as $item): ?>
                        <tr class="<?= cekStatusStok($item['stok']) ?>">
                            <td class="col-id"><?= $item['id'] ?></td>
                            <td class="col-nama"><?= $item['nama'] ?></td>
                            <td class="col-kategori"><?= $item['kategori'] ?></td>
                            <td class="col-harga">Rp <?= number_format($item['harga'], 0, ',', '.') ?></td>
                            <td class="col-stok"><?= $item['stok'] ?></td>
                            <td class="col-deskripsi"><?= $item['deskripsi'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <!-- Bagian Bawah Tabel: Pemanggilan hitungTotalNilaiStok() -->
                tfoot>
                    <tr>
                        <th colspan="3" class="total-label">Total Nilai Aset Gudang:</th>
                        <th colspan="3" class="total-value">
                            Rp <?= number_format(hitungTotalNilaiStok($products), 0, ',', '.') ?>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <!-- Informasi Legenda & Arsitektur -->
        <div class="legend-box">
            <span class="legend-indicator">
                <span class="color-box"></span> Baris merah muda: Peringatan stok kritis (&lt; 3 unit)
            </span>
            <span>Pemisahan Berkas: <code>products.php</code> (Data) &bull; <code>functions.php</code> (Logika) &bull; <code>index.php</code> (Tampilan)</span>
        </div>

    </div>

</body>
</html>
