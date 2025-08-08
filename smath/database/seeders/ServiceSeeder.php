<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::create([
            'title' => 'Implementasi Kurikulum Merdeka',
            'description' => 'Menerapkan Kurikulum Merdeka untuk mendorong pembelajaran yang fleksibel, berpusat pada siswa, dan membentuk karakter melalui projek nyata dan penilaian holistik.',
        ]);

        \App\Models\Service::create([
            'title' => 'Pembiasaan Sholat Dhuha',
            'description' => 'Program ini membiasakan siswa untuk melaksanakan Sholat Dhuha secara rutin di sekolah sebagai bentuk pembinaan spiritual, penanaman kedisiplinan, dan pembentukan karakter religius sejak dini.',
        ]);

        \App\Models\Service::create([
            'title' => 'Tahsin & Tahfidz Al-Qur’an',
            'description' => 'Program ini bertujuan meningkatkan kemampuan membaca Al-Qur’an dengan baik dan benar (tahsin), serta menghafalkan ayat-ayat pilihan (tahfidz), guna membentuk pribadi yang religius dan cinta Al-Qur’an.',
        ]);
    }
}
