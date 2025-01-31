<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class PropertySales extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',  
        'agent_id',  
        'commission',  
        'sale_status',  
    ];

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function commision()
    {
        return $this->hasOne(Commisions::class);
    }
}
