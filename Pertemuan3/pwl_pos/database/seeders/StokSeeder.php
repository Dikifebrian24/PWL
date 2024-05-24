<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 41,
                'user_id' => 3,
                'stok_jumlah' => 50,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 42,
                'user_id' => 3,
                'stok_jumlah' => 36,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 43,
                'user_id' => 3,
                'stok_jumlah' => 100,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 44,
                'user_id' => 3,
                'stok_jumlah' => 25,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 45,
                'user_id' => 3,
                'stok_jumlah' => 37,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 46,
                'user_id' => 3,
                'stok_jumlah' => 44,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 47,
                'user_id' => 3,
                'stok_jumlah' => 55,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 48,
                'user_id' => 3,
                'stok_jumlah' => 70,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 49,
                'user_id' => 3,
                'stok_jumlah' => 38,
                'stok_tanggal' => now(),
            ],
            [
                'barang_id' => 50,
                'user_id' => 3,
                'stok_jumlah' => 48,
                'stok_tanggal' => now(),
            ],
        ];

        DB::table('t_stok')->insert($data);
    }
}