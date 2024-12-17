<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Owner
        User::create([
            'name' => 'Owner',
            'username' => 'owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('owner123'), // Hash password untuk keamanan
            'role' => 'owner',
            'phone_number' => '0888888888',
            'created_at' => now(),
            'updated_at' => now(),
            'updated_password_at' => now(),
            'is_verify'=> true,
        ]);

        // User
        User::create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'), // Hash password untuk keamanan
            'role' => 'user',
            'phone_number' => '0811111111',
            'created_at' => now(),
            'updated_at' => now(),
            'updated_password_at' => now(),
            'is_verify'=> true,
        ]);

        // Agen
        User::create([
            'name' => 'Agent',
            'username' => 'agent',
            'email' => 'agen@example.com',
            'password' => Hash::make('agen123'), // Hash password untuk keamanan
            'role' => 'agent',
            'phone_number' => '0822222222',
            'created_at' => now(),
            'updated_at' => now(),
            'updated_password_at' => now(),
            'is_verify'=> true,
        ]);

        // Validator
        User::create([
            'name' => 'Validator',
            'username' => 'validator',
            'email' => 'validator@example.com',
            'password' => Hash::make('validator123'), // Hash password untuk keamanan
            'role' => 'validator',
            'phone_number' => '0833333333',
            'created_at' => now(),
            'updated_at' => now(),
            'updated_password_at' => now(),
            'is_verify'=> true,
        ]);
    }
}
