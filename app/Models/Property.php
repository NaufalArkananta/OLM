<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_owner_name',
        'property_owner_number_phone',
        'title',
        'category_id',
        'description',
        'price',
        'location',
        'status',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function media()
    {
        return $this->hasMany(PropertyMedia::class);
    }

    public function category()
    {
        return $this->belongsTo(PropertyCategory::class);
    }

    public function certificate()
    {
        return $this->hasOne(PropertyCertificates::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facilities::class, 'property_facilities', 'property_id', 'facility_id')
                    ->using(PropertyFacilities::class); // Menentukan model pivot khusus
    }
    
    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

}
