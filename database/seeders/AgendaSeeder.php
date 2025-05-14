<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use App\Models\UserModel;
use Carbon\Carbon;

class AgendaSeeder extends Seeder
{
    public function run(): void
    {
        // Get some user IDs to use
        $userIds = UserModel::pluck('id_user')->toArray();
        
        // Sample priorities
        $priorities = ['rendah', 'sedang', 'tinggi'];
        
        // Sample status
        $statuses = ['selesai', 'proses', 'pending'];
        
        // Sample divisions
        $divisions = ['IT', 'HR', 'Finance', 'Marketing', 'Operations'];

        // Create 20 sample agendas
        for ($i = 1; $i <= 20; $i++) {
            $startDate = Carbon::now()->addDays(rand(-30, 30));
            $endDate = Carbon::parse($startDate)->addDays(rand(1, 60));

            Agenda::create([
                'nama_agenda' => "Agenda Test " . $i,
                'id_user' => $userIds[array_rand($userIds)],
                'divisi' => $divisions[array_rand($divisions)],
                'status' => $statuses[array_rand($statuses)],
                'tanggal_mulai' => $startDate,
                'tanggal_deadline' => $endDate,
                'prioritas' => $priorities[array_rand($priorities)],
                'catatan' => "Ini adalah catatan untuk agenda test " . $i,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}