<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Didi Permana, S.H.I',
                'title' => 'Kepala Sekolah',
                'photo' => 'assets/img/FOTO/DIDI.JPG',
            ],
            [
                'name' => 'Salim, S.Pd.I',
                'title' => 'Waka Kurikulum & PAI',
                'photo' => 'assets/img/FOTO/SALIM.JPG',
            ],
            [
                'name' => 'Julianto, S.Pd',
                'title' => 'Pembina Osis & Guru B.Inggris',
                'photo' => 'assets/img/FOTO/JULIYANTO.JPG',
            ],
            [
                'name' => 'Sri Mulyati, S.Pd',
                'title' => 'Guru B.Indonesia',
                'photo' => 'assets/img/FOTO/SRI.jpg',
            ],
            [
                'name' => 'Lutfi Agung Pambudi, M. Pd',
                'title' => 'Guru Matematika',
                'photo' => 'assets/img/FOTO/LUTFI.jpg',
            ],
        ];

        foreach ($teachers as $teacher) {
            \App\Models\Teacher::create($teacher);
        }
    }
}
