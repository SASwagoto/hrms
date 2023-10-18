<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'app_title'=>'HR Management System',
            'company_name' => 'Smart Technology',
            'company_email' => 'smarttechnology@gmail.com',
            'company_phone' => '01234567890',
        ]);
    }
}
