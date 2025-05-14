<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MediaMonitoring;
use Carbon\Carbon;

class MediaMonitoringSeeder extends Seeder
{
    public function run(): void
    {
        $sample_data = [
            [
                'status' => 'positive',
                'kesimpulan' => 'Rekind berhasil menyelesaikan proyek pembangunan kilang minyak tepat waktu',
                'link' => 'https://example.com/news/rekind-success-1',
            ],
            [
                'status' => 'neutral',
                'kesimpulan' => 'Rekind mengumumkan rencana ekspansi bisnis di tahun 2025',
                'link' => 'https://example.com/news/rekind-plans',
            ],
            [
                'status' => 'positive',
                'kesimpulan' => 'Rekind menerima penghargaan keselamatan kerja internasional',
                'link' => 'https://example.com/news/rekind-award',
            ],
            [
                'status' => 'negative',
                'kesimpulan' => 'Proyek Rekind mengalami penundaan karena cuaca ekstrim',
                'link' => 'https://example.com/news/project-delay',
            ],
            [
                'status' => 'neutral',
                'kesimpulan' => 'Rekind melakukan perekrutan besar-besaran untuk proyek baru',
                'link' => 'https://example.com/news/recruitment',
            ]
        ];

        foreach ($sample_data as $data) {
            MediaMonitoring::create([
                'status' => $data['status'],
                'kesimpulan' => $data['kesimpulan'],
                'link' => $data['link'],
                'created_at' => Carbon::now()->subDays(rand(1, 30)),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}