<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySales extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',  
        'agent_id',  
        'commission',  
        'sale_status',  
    ];

    public function property()
    {
        return $this->hasMany(Property::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'agent_id');
    }

    public function commision()
    {
        return $this->hasOne(Commisions::class);
    }
}
