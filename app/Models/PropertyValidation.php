<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyValidation extends Model
{

    use HasFactory;

    protected $fillable = [
        'property_id',  
        'validator_id',  
        'status',  
        'comments',  
    ];

    public function property()
    {
        return $this->belongsTo(User::class, 'id', 'validator_id');
    }
}
