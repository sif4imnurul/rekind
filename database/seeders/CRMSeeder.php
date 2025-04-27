<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CRM;
use App\Models\UserModel;
use Carbon\Carbon;

class CRMSeeder extends Seeder
{
    public function run(): void
    {
        // Get some random users or create if none exist
        $users = UserModel::all();
        
        if ($users->isEmpty()) {
            // Create sample user if no users exist
            $user = UserModel::create([
                'nama' => 'Admin User',
                'email' => 'admin@rekind.com',
                'password' => bcrypt('password'),
                'divisi' => 'Technology',
                // Add other required user fields here
            ]);
            $users = collect([$user]);
        }

        $permohonan = [
            [
                'id_user' => $users->random()->id_user,
                'nama' => 'John Doe',
                'npk' => '12345',
                'unit' => 'IT',
                'divisi' => 'Technology',
                'email' => 'john.doe@rekind.com',
                'telepon' => '081234567890',
                'alasan' => 'Membutuhkan akses untuk project management',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_user' => $users->random()->id_user,
                'nama' => 'Jane Smith',
                'npk' => '12346',
                'unit' => 'HR',
                'divisi' => 'Human Resources',
                'email' => 'jane.smith@rekind.com',
                'telepon' => '081234567891',
                'alasan' => 'Keperluan data karyawan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_user' => $users->random()->id_user,
                'nama' => 'Bob Johnson',
                'npk' => '12347',
                'unit' => 'Finance',
                'divisi' => 'Finance & Accounting',
                'email' => 'bob.johnson@rekind.com',
                'telepon' => '081234567892',
                'alasan' => 'Monitoring financial reports',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($permohonan as $data) {
            CRM::create($data);
        }
    }
}