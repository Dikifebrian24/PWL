<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 41,
                'jumlah' => 1,
                'harga' => 15500000,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 41,
                'jumlah' => 2,
                'harga' => 31000000,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 41,
                'jumlah' => 6,
                'harga' => 93000000,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 42,
                'jumlah' => 6,
                'harga' => 1890000,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 42,
                'jumlah' => 1,
                'harga' => 315000,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 43,
                'jumlah' => 1,
                'harga' => 11500000,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 43,
                'jumlah' => 2,
                'harga' => 23000000,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 43,
                'jumlah' => 5,
                'harga' => 57500000,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 43,
                'jumlah' => 1,
                'harga' => 11500000,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 44,
                'jumlah' => 1,
                'harga' => 3500000,
            ],
            [
                'penjualan_id' => 11,
                'barang_id' => 44,
                'jumlah' => 1,
                'harga' => 3500000,
            ],
            [
                'penjualan_id' => 12,
                'barang_id' => 44,
                'jumlah' => 5,
                'harga' => 17500000,
            ],
            [
                'penjualan_id' => 13,
                'barang_id' => 44,
                'jumlah' => 1,
                'harga' => 3500000,
            ],
            [
                'penjualan_id' => 14,
                'barang_id' => 44,
                'jumlah' => 1,
                'harga' => 3500000,
            ],
            [
                'penjualan_id' => 15,
                'barang_id' => 44,
                'jumlah' => 2,
                'harga' => 7000000,
            ],
            [
                'penjualan_id' => 16,
                'barang_id' => 44,
                'jumlah' => 1,
                'harga' => 3500000,
            ],
            [
                'penjualan_id' => 17,
                'barang_id' => 45,
                'jumlah' => 1,
                'harga' => 800000,
            ],
            [
                'penjualan_id' => 18,
                'barang_id' => 45,
                'jumlah' => 2,
                'harga' => 1600000,
            ],
            [
                'penjualan_id' => 19,
                'barang_id' => 45,
                'jumlah' => 2,
                'harga' => 1600000,
            ],
            [
                'penjualan_id' => 20,
                'barang_id' => 45,
                'jumlah' => 1,
                'harga' => 800000,
            ],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}