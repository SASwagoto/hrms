<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(["dept_name"=> "HR Admin",]);
        Department::create(["dept_name"=> "IT Department",]);
        Department::create(["dept_name"=> "Marketing & Sales",]);
    }
}
