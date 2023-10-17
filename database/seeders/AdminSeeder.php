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
    }
}
