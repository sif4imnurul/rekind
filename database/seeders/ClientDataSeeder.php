<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_data')->insert([
            [
                'id_client_data' => 1,
                'id_user' => 1,
                'nama' => 'PT Rekayasa Industri',
                'email' => 'rekind@gmail.com',
                'telepon' => '021-12345678',
                'alamat_perusahaan' => 'Jl. Gatot Subroto No. 123, Jakarta',
                'status_project' => 'current',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_client_data' => 2,
                'id_user' => 2,
                'nama' => 'PT Pertamina',
                'email' => 'pertamina@gmail.com',
                'telepon' => '021-87654321',
                'alamat_perusahaan' => 'Jl. Sudirman No. 456, Jakarta',
                'status_project' => 'past',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_client_data' => 3,
                'id_user' => 3,
                'nama' => 'PT PLN',
                'email' => 'pln@gmail.com',
                'telepon' => '021-11223344',
                'alamat_perusahaan' => 'Jl. Thamrin No. 789, Jakarta',
                'status_project' => 'potential',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}