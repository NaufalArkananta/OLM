<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\PropertySales;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'profile_photo',
        'password',
        'role',
        'phone_number',
        'is_verify',
        'city_id', 
        'address',
        'last_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        // 'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            // 'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function is_role($role)
    {
        return $this->role === $role;
    }

    public function property()
    {
        return $this->hasMany(Property::class);
    }

    public function validator()
    {
        return $this->hasMany(PropertyValidation::class);
    }

    public function propertySales()
    {
        return $this->hasMany(PropertySales::class);
    }

    public function commision()
    {
        return $this->hasMany(Commisions::class, 'id', 'agent_id');
    }

    public function notifications()
    {
        return $this->hasMany(notifications::class);
    }

    public function whishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
