<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PropertyMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'media_url',
        'media_type',
        
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
