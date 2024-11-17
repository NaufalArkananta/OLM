<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCertificates extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',  
        'certificate_type',  
        'certificate_image',  
    ];

    public function property()
    {
        return $this->hasOne(Property::class);
    }
}
