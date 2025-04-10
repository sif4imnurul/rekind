<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logos = [
            [
                'id_produk' => 4004,
                'nama' => 'Logo Pupuk Utilitas',
                'url' => 'logo-pupuk-utilitas.png',
                'deskripsi' => 'Logo resmi dari Pupuk Utilitas.',
                'foto' => 'logo-pupuk-utilitas.png',
                'tipe' => 'image',
                'kategori' => 'logo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 4002,
                'nama' => 'Logo Puspetindo',
                'url' => 'logo-puspetindo.jpg',
                'deskripsi' => 'Logo resmi dari Puspetindo.',
                'foto' => 'logo-puspetindo.jpg',
                'tipe' => 'image',
                'kategori' => 'logo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 4003,
                'nama' => 'Logo RDM',
                'url' => 'Logo-RDM.jpg',
                'deskripsi' => 'Logo resmi dari RDM.',
                'foto' => 'Logo-RDM.jpg',
                'tipe' => 'image',
                'kategori' => 'logo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 4001,
                'nama' => 'Logo Umum',
                'url' => 'logo.jpg',
                'deskripsi' => 'Logo generik untuk kebutuhan umum.',
                'foto' => 'logo.jpg',
                'tipe' => 'image',
                'kategori' => 'logo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('produk')->insert($logos);
    }
}
