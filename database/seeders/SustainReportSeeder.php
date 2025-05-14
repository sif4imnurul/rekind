<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SustainReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'nama' => 'Sustain Report 2023',
                'url' => 'https://example.com/files/sustain-report-2023.pdf',
                'deskripsi' => 'Laporan keberlanjutan untuk tahun 2023.',
                'foto' => 'sustain/images/book-1.jpg',
                'tahun' => '2023',
                'tipe' => 'pdf',
                'kategori' => 'laporanS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sustain Report 2022',
                'url' => 'https://example.com/files/sustain-report-2022.pdf',
                'deskripsi' => 'Laporan keberlanjutan untuk tahun 2022.',
                'foto' => 'sustain/images/book-2.jpg',
                'tipe' => 'pdf',
                'tahun' => '2022',
                'kategori' => 'laporanS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sustain Report 2021',
                'url' => 'https://example.com/files/sustain-report-2021.pdf',
                'deskripsi' => 'Laporan keberlanjutan untuk tahun 2021.',
                'foto' => 'sustain/images/book-3.jpg',
                'tipe' => 'pdf',
                'tahun' => '2021',
                'kategori' => 'laporanS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
