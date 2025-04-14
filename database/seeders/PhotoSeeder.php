<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'nama' => 'Photo 1',
                'url' => 'pict-1.jpg',
                'deskripsi' => 'Deskripsi Foto 1',
                'foto' => 'img/pict-1.jpg',
                'tipe' => 'image',
                'kategori' => 'dokum_foto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Photo 2',
                'url' => 'pict-2.jpg',
                'deskripsi' => 'Deskripsi Foto 2',
                'foto' => 'img/pict-2.jpg',
                'tipe' => 'image',
                'kategori' => 'dokum_foto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Photo 3',
                'url' => 'pict-3.jpg',
                'deskripsi' => 'Deskripsi Foto 3',
                'foto' => 'img/pict-3.jpeg',
                'tipe' => 'image',
                'kategori' => 'dokum_foto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Photo 4',
                'url' => 'pict-4.jpg',
                'deskripsi' => 'Deskripsi Foto 4',
                'foto' => 'img/pict-4.jpg',
                'tipe' => 'image',
                'kategori' => 'dokum_foto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}