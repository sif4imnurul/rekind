<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'id_produk' => 1001,
                'nama' => 'Sejarah Rekind',
                'url' => 'sejarah-rekind.pdf',
                'deskripsi' => 'Buku yang menjelaskan sejarah perkembangan Rekind dari awal berdiri hingga menjadi perusahaan terkemuka.',
                'foto' => 'books/images/book-1.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 1002,
                'nama' => 'Strategi Bisnis Berkelanjutan',
                'url' => 'strategi-bisnis-berkelanjutan.pdf',
                'deskripsi' => 'Panduan lengkap mengenai strategi bisnis berkelanjutan yang diterapkan oleh Rekind dalam menghadapi era industri modern.',
                'foto' => 'books/images/book-2.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 1003,
                'nama' => 'Teknologi Terkini di Rekind',
                'url' => 'teknologi-terkini.pdf',
                'deskripsi' => 'Pembahasan mengenai teknologi-teknologi terkini yang diimplementasikan oleh Rekind dalam berbagai proyek.',
                'foto' => 'books/images/book-3.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 1004,
                'nama' => 'Manajemen Proyek Konstruksi',
                'url' => 'manajemen-proyek.pdf',
                'deskripsi' => 'Buku pedoman mengenai manajemen proyek konstruksi yang efektif dan efisien berdasarkan pengalaman Rekind.',
                'foto' => 'books/images/book-4.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 1005,
                'nama' => 'Inovasi dalam Rekayasa Industri',
                'url' => 'inovasi-rekayasa-industri.pdf',
                'deskripsi' => 'Kumpulan inovasi dalam bidang rekayasa industri yang telah dikembangkan oleh tim Rekind.',
                'foto' => 'books/images/book-5.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 1006,
                'nama' => 'Keselamatan Kerja di Lingkungan Industri',
                'url' => 'keselamatan-kerja.pdf',
                'deskripsi' => 'Panduan lengkap mengenai prosedur keselamatan kerja yang diterapkan di lingkungan industri Rekind.',
                'foto' => 'books/images/book-6.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 1007,
                'nama' => 'Keberlanjutan Lingkungan dalam Proyek',
                'url' => 'keberlanjutan-lingkungan.pdf',
                'deskripsi' => 'Buku tentang implementasi keberlanjutan lingkungan dalam berbagai proyek yang dijalankan oleh Rekind.',
                'foto' => 'books/images/book-7.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 1008,
                'nama' => 'Laporan Tahunan Rekind 2023',
                'url' => 'laporan-tahunan-2023.pdf',
                'deskripsi' => 'Laporan tahunan Rekind yang berisi informasi mengenai perkembangan perusahaan selama tahun 2023.',
                'foto' => 'books/images/book-8.jpg',
                'tahun' => '2021',
                'tipe' => 'pdf',
                'kategori' => 'buku',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('produk')->insert($books);
    }
}