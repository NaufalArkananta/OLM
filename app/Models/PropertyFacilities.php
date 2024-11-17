<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFacilities extends Model
{

    use HasFactory;

    protected $fillable = [
        'property_id',  
        'facility_id',  
    ];

    public function facilities()
    {
        return $this->belongsToMany(Facilities::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
