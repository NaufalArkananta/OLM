<?php

namespace Database\Seeders; // Pastikan namespace ini sesuai

use App\Models\PropertyCategory;
use Illuminate\Database\Seeder;

class PropertyCategorySeeder extends Seeder
{
    public function run()
    {
        $propertyCategories = [
            ['name' => 'Rumah'],
            ['name' => 'Apartemen'],
            ['name' => 'Ruko'],
            ['name' => 'Villa'],
            ['name' => 'Tanah'],
            ['name' => 'Kos'],
            ['name' => 'Ruang Kantor'],
            ['name' => 'Gudang'],
            ['name' => 'Hotel'],
            ['name' => 'Kios'],
            ['name' => 'Gedung'],
            ['name' => 'Toko'],
        ];

        foreach ($propertyCategories as $category) {
            PropertyCategory::create($category);
        }
    }
}