<?php
/**
 * =======================================================================
 * File: products.php (Data Layer)
 * =======================================================================
 * Berisi variabel multidimensional array $products yang menyimpan data
 * inventaris sepatu wanita mewah (High-End Heels).
 * Setiap entri memiliki key: 'id', 'nama', 'kategori', 'harga', 'stok', 'deskripsi'.
 */

$products = [
    [
        'id'        => 'LOUB-001',
        'nama'      => 'Christian Louboutin So Kate 120',
        'kategori'  => 'Stiletto',
        'harga'     => 15500000,
        'stok'      => 5,
        'deskripsi' => 'Stiletto kulit paten hitam ikonis dengan sol merah scarlet khas Paris.'
    ],
    [
        'id'        => 'CHOO-002',
        'nama'      => 'Jimmy Choo Cinderella Swarovski Pump',
        'kategori'  => 'Pumps',
        'harga'     => 62000000,
        'stok'      => 1, // Kritis (< 3)
        'deskripsi' => 'Mahakarya bertabur ribuan kristal Swarovski murni untuk momen karpet merah.'
    ],
    [
        'id'        => 'MANO-003',
        'nama'      => 'Manolo Blahnik Hangisi 105 Emerald',
        'kategori'  => 'Pumps',
        'harga'     => 19500000,
        'stok'      => 4,
        'deskripsi' => 'Pump satin hijau emerald mewah dengan buckle kristal permata berkilau.'
    ],
    [
        'id'        => 'MUAD-004',
        'nama'      => 'Amina Muaddi Begum Glass Slingback',
        'kategori'  => 'Slingback',
        'harga'     => 17500000,
        'stok'      => 6,
        'deskripsi' => 'Sepatu slingback transparan kontemporer dengan hak kaca piramida artistik.'
    ],
    [
        'id'        => 'MACH-005',
        'nama'      => 'Mach & Mach Double Bow Silk Pump',
        'kategori'  => 'Pumps',
        'harga'     => 18200000,
        'stok'      => 2, // Kritis (< 3)
        'deskripsi' => 'Pump sutra satin dengan ornamen pita ganda bertabur kristal pavé berkilauan.'
    ],
    [
        'id'        => 'PACI-006',
        'nama'      => 'Cesare Paciotti Blade Dagger Stiletto',
        'kategori'  => 'Stiletto',
        'harga'     => 13800000,
        'stok'      => 2, // Kritis (< 3)
        'deskripsi' => 'High heels black suede elegan dengan siluet hak belati dagger tajam khas Milan.'
    ]
];
