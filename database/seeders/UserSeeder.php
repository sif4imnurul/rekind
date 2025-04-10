<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'nama' => 'Admin User',
                'unit' => 'SATU',
                'email' => 'admin@rekind.com',
                'npk' => 'NPK001',
                'password' => Hash::make('NPK001'),
                'divisi' => 'IT Support',
                'role' => 'admin',
                'telepon' => '081234567890',
                'alamat' => 'Jl. Admin No.1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'User Biasa',
                'unit' => 'DUA',
                'email' => 'userb@rekind.com',
                'npk' => 'NPK002',
                'password' => Hash::make('NPK002'),
                'divisi' => 'Operasional',
                'role' => 'userb',
                'telepon' => '081234567891',
                'alamat' => 'Jl. User B No.2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'User Khusus',
                'unit' => 'TIGA',
                'email' => 'userk@rekind.com',
                'npk' => 'NPK003',
                'password' => Hash::make('NPK003'),
                'divisi' => 'Keuangan',
                'role' => 'userk',
                'telepon' => '081234567892',
                'alamat' => 'Jl. User K No.3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
