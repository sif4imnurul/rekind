<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'id_produk' => 2001,
                'nama' => 'Template Presentasi Proyek',
                'url' => 'presentasi-proyek.pptx',
                'deskripsi' => 'Template presentasi untuk penyampaian progres dan detail proyek.',
                'foto' => 'template-1.jpg',
                'tipe' => 'ppt',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2002,
                'nama' => 'Template Presentasi Safety Induksi',
                'url' => 'safety-induksi.pdf',
                'deskripsi' => 'Template presentasi untuk materi safety induction di lapangan.',
                'foto' => 'template-2.jpg',
                'tipe' => 'pdf',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2003,
                'nama' => 'Template Kick-Off Meeting',
                'url' => 'kickoff-meeting.pptx',
                'deskripsi' => 'Template untuk presentasi kick-off meeting proyek baru.',
                'foto' => 'template-3.jpg',
                'tipe' => 'ppt',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2004,
                'nama' => 'Template Presentasi Laporan Bulanan',
                'url' => 'laporan-bulanan.pdf',
                'deskripsi' => 'Template presentasi untuk menyampaikan laporan bulanan ke stakeholder.',
                'foto' => 'template-4.jpg',
                'tipe' => 'pdf',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2005,
                'nama' => 'Template Company Profile',
                'url' => 'company-profile.pptx',
                'deskripsi' => 'Template presentasi untuk company profile Rekind.',
                'foto' => 'template-5.jpg',
                'tipe' => 'ppt',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2006,
                'nama' => 'Template Presentasi Engineering',
                'url' => 'presentasi-engineering.pdf',
                'deskripsi' => 'Template yang digunakan untuk presentasi divisi engineering.',
                'foto' => 'template-6.jpg',
                'tipe' => 'pdf',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2007,
                'nama' => 'Template Proposal Proyek',
                'url' => 'proposal-proyek.pptx',
                'deskripsi' => 'Template PowerPoint untuk pembuatan proposal proyek internal dan eksternal.',
                'foto' => 'template-7.jpg',
                'tipe' => 'ppt',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2008,
                'nama' => 'Template Training Internal',
                'url' => 'training-internal.pptx',
                'deskripsi' => 'Template untuk keperluan training atau pelatihan internal perusahaan.',
                'foto' => 'template-8.jpg',
                'tipe' => 'ppt',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2009,
                'nama' => 'Template Sosialisasi Prosedur',
                'url' => 'sosialisasi-prosedur.pdf',
                'deskripsi' => 'Template PDF untuk menyosialisasikan prosedur dan kebijakan perusahaan.',
                'foto' => 'template-9.jpg',
                'tipe' => 'pdf',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_produk' => 2010,
                'nama' => 'Template Quality Assurance',
                'url' => 'quality-assurance.pptx',
                'deskripsi' => 'Template presentasi QA/QC untuk kegiatan pengendalian mutu.',
                'foto' => 'template-10.jpg',
                'tipe' => 'ppt',
                'kategori' => 'template_presentasi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('produk')->insert($templates);
    }
}
