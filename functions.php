<?php
/**
 * =======================================================================
 * File: functions.php (Processing Layer)
 * =======================================================================
 * Berisi fungsi-fungsi pemrosesan logika bisnis dan pendukung tampilan.
 */

/**
 * Menghitung total nilai aset gudang (akumulasi harga * stok untuk semua produk)
 *
 * @param array $products
 * @return int|float
 */
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $item) {
        $total += ($item['harga'] * $item['stok']);
    }
    return $total;
}

/**
 * Mengecek status stok dan mengembalikan nama class CSS:
 * Mengembalikan 'stok-kritis' jika stok di bawah 3 (< 3),
 * atau string kosong '' jika stok berada dalam batas aman.
 *
 * @param int $stok
 * @return string
 */
function cekStatusStok($stok) {
    if ($stok < 3) {
        return 'stok-kritis';
    }
    return '';
}
