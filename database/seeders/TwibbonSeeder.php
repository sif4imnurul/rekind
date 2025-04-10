<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TwibbonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $twibbons = [
            [
                'id_produk' => 5001,
                'nama' => 'Twibbon HUT Rekind',
                'url' => 'https://twibbonize.com/hutrekind40thn',
                'deskripsi' => 'Twibbon untuk memperingati Hari Ulang Tahun Rekind.',
                'foto' => 'twibbon-hutrekind.png', // thumbnail yang disimpan lokal
                'tipe' => 'image',
                'kategori' => 'twibbon',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 5002,
                'nama' => 'Twibbon Bulan K3',
                'url' => 'https://twibbonize.com/bulank3',
                'deskripsi' => 'Twibbon untuk mendukung Bulan K3 Nasional.',
                'foto' => 'twibbon-k3.png',
                'tipe' => 'image',
                'kategori' => 'twibbon',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 5003,
                'nama' => 'Twibbon Hari Kemerdekaan',
                'url' => 'https://twibbonize.com/rekind17agustus',
                'deskripsi' => 'Twibbon perayaan Hari Kemerdekaan RI.',
                'foto' => 'twibbon-merdeka.png',
                'tipe' => 'image',
                'kategori' => 'twibbon',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('produk')->insert($twibbons);
    }
}
