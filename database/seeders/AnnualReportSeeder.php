<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnualReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'nama' => 'Annual Report 2023',
                'url' => 'https://example.com/files/annual-report-2023.pdf',
                'deskripsi' => 'Laporan tahunan untuk tahun 2023.',
                'foto' => 'annual/images/book-1.jpg',
                'tahun' => '2023',
                'tipe' => 'pdf',
                'kategori' => 'laporanA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Annual Report 2022',
                'url' => 'https://example.com/files/annual-report-2022.pdf',
                'deskripsi' => 'Laporan tahunan untuk tahun 2022.',
                'foto' => 'annual/images/book-2.jpg',
                'tahun' => '2022',
                'tipe' => 'pdf',
                'kategori' => 'laporanA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Annual Report 2021',
                'url' => 'https://example.com/files/annual-report-2021.pdf',
                'deskripsi' => 'Laporan tahunan untuk tahun 2021.',
                'foto' => 'annual/images/book-3.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'laporanA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
