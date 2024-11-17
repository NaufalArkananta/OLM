<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',  
        'type',  
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_facilities', 'facility_id', 'property_id')
                    ->using(PropertyFacilities::class); // Menentukan model pivot khusus
    }
    
}
