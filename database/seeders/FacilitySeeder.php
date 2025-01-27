<?php

namespace Database\Seeders;

use App\Models\Facilities;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    public function run()
    {
        $facilities = [
            // Fasilitas Internal
            ['name' => 'AC', 'type' => 'internal'],
            ['name' => 'TV Kabel', 'type' => 'internal'],
            ['name' => 'Internet', 'type' => 'internal'],
            ['name' => 'Kolam Renang', 'type' => 'internal'],

            // Fasilitas Eksternal
            ['name' => 'Keamanan 24 Jam', 'type' => 'external'],
            ['name' => 'Pusat Kebugaran', 'type' => 'external'],
            ['name' => 'Dekat Jalan Raya', 'type' => 'external'],
            ['name' => 'Dekat Sekolah', 'type' => 'external'],
            ['name' => 'Akses Jalan Tol', 'type' => 'external'],
            ['name' => 'Masuk Mobil', 'type' => 'external'],
            ['name' => 'Pusat Bisnis', 'type' => 'external'],
            ['name' => 'Dekat Kawasan Bisnis', 'type' => 'external'],
            ['name' => 'Dekat Pusat Perbelanjaan', 'type' => 'external'],
            ['name' => 'Dekat Stasiun', 'type' => 'external'],
            ['name' => 'Dekat Rumah Sakit', 'type' => 'external'],
            ['name' => 'Dekat Tempat Ibadah', 'type' => 'external'],
            ['name' => 'Bebas Banjir', 'type' => 'external'],
            ['name' => 'Dekat Kolam Renang', 'type' => 'external'],
            ['name' => 'Taman', 'type' => 'external'],
            ['name' => 'Kids Playground', 'type' => 'external'],
            ['name' => 'Jogging Track', 'type' => 'external'],
        ];

        foreach ($facilities as $facility) {
            Facilities::create($facility);
        }
    }
}