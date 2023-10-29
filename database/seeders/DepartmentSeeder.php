<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Position;
use App\Models\Sector;
use App\Models\Team;
use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            "dept_name"=> "HR Admin",
            "slug" => Str::slug("HR Admin"),
        ]);
        Department::create([
            "dept_name"=> "IT Department",
            "slug" => Str::slug("IT Department"),
        ]);
        Department::create([
            "dept_name"=> "Marketing & Sales",
            "slug" => Str::slug("Marketing & Sales"),
        ]);

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

        Zone::create([
            "zone_name"=> "Uttara",
        ]);
        Zone::create([
            "zone_name"=> "Mirpur",
        ]);
        Zone::create([
            "zone_name"=> "Dhanmondi",
        ]);

        Sector::create([
            "sector_name" => "Dhaka North",
        ]);

        Sector::create([
            "sector_name" => "Dhaka South",
        ]);

        Team::create([
            "team_name"=> "Team 1",
            "dept_id" => 3,
        ]);
        Team::create([
            "team_name"=> "Team 2",
            "dept_id"=> 3,
        ]);
    }
}
