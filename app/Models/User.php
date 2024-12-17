<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'password',
        'role',
        'phone_number',
        'is_verify'
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
        return $this->hasMany(PropertyValidation::class, ' id', 'validator_id');
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
}
