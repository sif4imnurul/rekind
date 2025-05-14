<?php

namespace Database\Seeders;

use App\Models\ClientData;
use App\Models\CRM;
use App\Models\User;
use Illuminate\Container\Attributes\Log;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AgendaSeeder::class,
            AnnualReportSeeder::class,
            BukuSeeder::class,
            BuletinSeeder::class,
            ClientDataSeeder::class,
            CRMSeeder::class,
            LogoSeeder::class,
            MediaMonitoringSeeder::class,
            PhotoSeeder::class,
            SustainReportSeeder::class,
            TemplateSeeder::class,
            TwibbonSeeder::class,
            VideoSeeder::class,
            ZoomBackgroundSeeder::class,
        ]);
    }
}
