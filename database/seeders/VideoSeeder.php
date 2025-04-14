<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'nama' => 'Video 1',
                'url' => 'video.mp4',
                'deskripsi' => 'Deskripsi Video 1',
                'foto' => 'vid/video.mp4',
                'tipe' => 'video',
                'kategori' => 'dokum_video',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
