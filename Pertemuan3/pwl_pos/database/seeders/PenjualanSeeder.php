<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            // 10 penjualan data
            [
                'user_id' => 3,
                'pembeli' => 'Rusli',
                'penjualan_kode' => 'D001',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Asep',
                'penjualan_kode' => 'D002',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Morgan',
                'penjualan_kode' => 'D003',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Isna',
                'penjualan_kode' => 'D004',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Hari',
                'penjualan_kode' => 'D005',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Sumarni',
                'penjualan_kode' => 'D006',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Resti',
                'penjualan_kode' => 'D007',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Bagus',
                'penjualan_kode' => 'D008',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Bilqis',
                'penjualan_kode' => 'D009',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Ratna',
                'penjualan_kode' => 'D010',
                'penjualan_tanggal' => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}