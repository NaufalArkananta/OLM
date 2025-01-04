<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailProperty extends Model
{
    // Jika Anda memiliki kolom yang dapat diisi massal, tambahkan ke sini
    protected $fillable = [
        'land_area',
        'building_area',
        'electricity_power',
        'number_of_floors',
        'bedrooms',
        'bathrooms',
        'property_id', // Kolom foreign key
    ];

    // Definisikan relasi jika ada
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}