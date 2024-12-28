<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Jakarta'],
            ['name' => 'Bandung'],
            ['name' => 'Surabaya'],
            ['name' => 'Medan'],
            ['name' => 'Semarang'],
            // Tambahkan kota lainnya sesuai kebutuhan
        ];

    }
}
