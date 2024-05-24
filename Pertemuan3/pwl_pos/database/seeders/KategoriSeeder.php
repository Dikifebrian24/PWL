<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
          [
            'kategori_kode' => 'DK001',
            'kategori_nama' => 'Mirrorless',
          ],
          [
            'kategori_kode' => 'DK002',
            'kategori_nama' => 'Penyimpanan',
          ],
          [
            'kategori_kode' => 'DK003',
            'kategori_nama' => 'Action Camera',
          ],
          [
            'kategori_kode' => 'DK004',
            'kategori_nama' => 'DSLR',
          ],
          [
            'kategori_kode' => 'DK005',
            'kategori_nama' => 'Lighting',
          ]
        ];
        DB::table('m_kategori')->insert($data);
    }
}