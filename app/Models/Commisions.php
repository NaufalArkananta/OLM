<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commisions extends Model
{

    use HasFactory;

    protected $fillable = [
        'property_sales_id',  
        'commission_amount',  
        'agent_id',  
        'status',  
    ];

    public function propertySales()
    {
        return $this->hasOne(PropertySales::class);    
    }
    public function sales()
    {
        return $this->belongsTo(User::class, 'id', 'agent_id');
    }
}
