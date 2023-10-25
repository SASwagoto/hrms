<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Position;
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

        Position::create([
            "position_name"=> "Software Engineer",
            "dept_id"=> 2,
        ]);
        Position::create([
            "position_name"=> "Junior Software Engineer",
            "dept_id"=> 2,
        ]);
        Position::create([
            "position_name"=> "Graphics Designer",
            "dept_id"=> 2,
        ]);
        Position::create([
            "position_name"=> "Sales Executive",
            "dept_id"=> 3,
        ]);
        Position::create([
            "position_name"=> "Junior Sales Executive",
            "dept_id"=> 3,
        ]);
        Position::create([
            "position_name"=> "Marketing Manager",
            "dept_id"=> 3,
        ]);
        Position::create([
            "position_name"=> "HR Manager",
            "dept_id"=> 1,
        ]);
    }
}
