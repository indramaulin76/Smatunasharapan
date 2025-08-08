<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Article::create([
            'title' => 'SMA TUNAS HARAPAN Terakreditasi A “Unggul”',
            'content' => 'SMA Tunas Harapan resmi meraih akreditasi A dengan nilai 92 dari BAN-S/M pada tahun 2019.',
            'image' => 'assets/img/SERTIFIKAT EKREDITASI_page-0001.jpg',
        ]);

        \App\Models\Article::create([
            'title' => '🎭 Tradisi yang Hidup di SMA TUNAS HARAPAN',
            'content' => 'Tarian Jaipong Rahyang Mandalajati membawa semangat perjuangan dan budaya Sunda ke panggung SMA TUNAS HARAPAN.',
            'image' => 'assets/img/tari1.jpeg',
        ]);

        \App\Models\Article::create([
            'title' => 'PPDB SMA Tunas Harapan 2025/2026 Resmi Dibuka!',
            'content' => 'Penerimaan Peserta Didik Baru telah dibuka! Raih masa depan gemilang bersama SMA Tunas Harapan.',
            'image' => 'assets/img/brosur-cover.jpg',
        ]);

        \App\Models\Article::create([
            'title' => 'Persyaratan Mutasi Masuk SMAS Tunas Harapan Tahun Ajaran 2025/2026',
            'content' => 'Pastikan dokumen Anda lengkap untuk mempermudah proses pindah sekolah ke SMAS Tunas Harapan.',
            'image' => 'assets/img/SYARAT MUTASI.png',
        ]);
    }
}
