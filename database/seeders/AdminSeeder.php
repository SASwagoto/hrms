<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Supar Admin',
            'email' => 'admin@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Super-Admin');

        User::create([
            'name' => 'Rahim',
            'email' => 'hr@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('HR');

        User::create([
            'name' => 'Karim',
            'email' => 'karim@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Sector-Leader');

        User::create([
            'name' => 'Safik',
            'email' => 'safik@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Team-Leader');

        User::create([
            'name' => 'barkat',
            'email' => 'barkat@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Employee');

        User::create([
            'name' => 'salam',
            'email' => 'salam@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Employee');

        User::create([
            'name' => 'jabbar',
            'email' => 'jabbar@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Employee');
    }
}
