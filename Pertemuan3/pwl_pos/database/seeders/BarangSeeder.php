<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_kode' => 'DKS001',
                'barang_nama' => 'Sony A7 Mark ii',
                'kategori_id' => '1',
                'harga_beli' => 15000000,
                'harga_jual' => 15500000,
            ],
            [
                'barang_kode' => 'DKS002',
                'barang_nama' => 'Sandisk Extrem Pro 64gb',
                'kategori_id' => '2',
                'harga_beli' => 300000,
                'harga_jual' => 315000,
            ],
            [
                'barang_kode' => 'DKS003',
                'barang_nama' => 'Go Pro Hero 5',
                'kategori_id' => '3',
                'harga_beli' => 10000000,
                'harga_jual' => 11500000,
            ],
            [
                'barang_kode' => 'DKS004',
                'barang_nama' => 'Canon D750',
                'kategori_id' => '4',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
            ],
            [
                'barang_kode' => 'DKS005',
                'barang_nama' => 'Godox TT 600',
                'kategori_id' => '5',
                'harga_beli' => 750000,
                'harga_jual' => 800000,
            ],
            [
                'barang_kode' => 'DKS006',
                'barang_nama' => 'Sony A7 Mark iii',
                'kategori_id' => '1',
                'harga_beli' => 20000000,
                'harga_jual' => 21000000,
            ],
            [
                'barang_kode' => 'DKS007',
                'barang_nama' => 'Lexar 64gb',
                'kategori_id' => '2',
                'harga_beli' => 300000,
                'harga_jual' => 315000,
            ],
            [
                'barang_kode' => 'DKS008',
                'barang_nama' => 'YI Cam',
                'kategori_id' => '3',
                'harga_beli' => 1000000,
                'harga_jual' => 1250000,
            ],
            [
                'barang_kode' => 'DKS009',
                'barang_nama' => 'Canon 6D Mark ii',
                'kategori_id' => '4',
                'harga_beli' => 15000000,
                'harga_jual' => 16000000,
            ],
            [
                'barang_kode' => 'DKS010',
                'barang_nama' => 'Godox TT 520 Mark ii',
                'kategori_id' => '5',
                'harga_beli' => 520000,
                'harga_jual' => 550000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}