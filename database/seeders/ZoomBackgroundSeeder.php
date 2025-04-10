<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ZoomBackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $backgrounds = [
            [
                'id_produk' => 3001,
                'nama' => 'Zoom Background Kantor Modern',
                'url' => 'kantor-modern.jpg',
                'deskripsi' => 'Background Zoom bertema kantor modern dan minimalis.',
                'foto' => 'zoom-1.jpg',
                'tipe' => 'image',
                'kategori' => 'zoom_background',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 3002,
                'nama' => 'Zoom Background Pemandangan Alam',
                'url' => 'pemandangan-alam.png',
                'deskripsi' => 'Latar belakang dengan pemandangan pegunungan dan danau.',
                'foto' => 'zoom-2.jpg',
                'tipe' => 'image',
                'kategori' => 'zoom_background',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 3003,
                'nama' => 'Zoom Background Tema Biru',
                'url' => 'tema-biru.jpg',
                'deskripsi' => 'Background biru bersih cocok untuk suasana formal.',
                'foto' => 'zoom-3.jpg',
                'tipe' => 'image',
                'kategori' => 'zoom_background',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 3004,
                'nama' => 'Zoom Background Gedung Rekind',
                'url' => 'gedung-rekind.jpg',
                'deskripsi' => 'Tampilan depan gedung Rekind sebagai background Zoom.',
                'foto' => 'zoom-4.jpg',
                'tipe' => 'image',
                'kategori' => 'zoom_background',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 3005,
                'nama' => 'Zoom Background Warna Netral',
                'url' => 'warna-netral.png',
                'deskripsi' => 'Latar belakang polos warna netral untuk suasana santai.',
                'foto' => 'zoom-5.jpg',
                'tipe' => 'image',
                'kategori' => 'zoom_background',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 3006,
                'nama' => 'Zoom Background Workshop',
                'url' => 'workshop.jpg',
                'deskripsi' => 'Background bertema workshop teknis dengan suasana profesional.',
                'foto' => 'zoom-6.jpg',
                'tipe' => 'image',
                'kategori' => 'zoom_background',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('produk')->insert($backgrounds);
    }
}
