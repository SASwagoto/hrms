<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'user_id' => 1,
            'first_name'=> 'Md',
            'last_name'=> 'Ayub',
            'username'=> 'mdayub12',
            'employee_id'=> rand(1000, 9999),
            'phone_number'=> '01234567891',
            'dob'=> Carbon::createFromDate(mt_rand(1990, 1999), mt_rand(1, 12), mt_rand(1, 28)),
            'marital_status'=> 'Unmarried',
            'blood_group'=> 'O+',
            'gender'=> 'Male',
            'religion'=> 'Islam',
            'nid'=> rand(10000, 99999),
            'present_address'=> 'Dhaka, Bangladesh',
            'permanent_address'=> 'Dhaka, Bangladesh',
            'dept_id'=> 1,
            'position_id'=> 7,
            'join_date'=> Carbon::createFromDate(mt_rand(2021, 2022), mt_rand(1, 12), mt_rand(1, 28)),
        ]);

        Employee::create([
            'user_id' => 2,
            'first_name'=> 'Md',
            'last_name'=> 'Rahim',
            'username'=> 'mdrahim',
            'employee_id'=> rand(1000, 9999),
            'phone_number'=> '01234567892',
            'dob'=> Carbon::createFromDate(mt_rand(1990, 1999), mt_rand(1, 12), mt_rand(1, 28)),
            'marital_status'=> 'Unmarried',
            'blood_group'=> 'O+',
            'gender'=> 'Male',
            'religion'=> 'Islam',
            'nid'=> rand(10000, 99999),
            'present_address'=> 'Dhaka, Bangladesh',
            'permanent_address'=> 'Dhaka, Bangladesh',
            'dept_id'=> 1,
            'position_id'=> 7,
            'join_date'=> Carbon::createFromDate(mt_rand(2021, 2022), mt_rand(1, 12), mt_rand(1, 28)),
        ]);

        Employee::create([
            'user_id' => 3,
            'first_name'=> 'Md',
            'last_name'=> 'Karim',
            'username'=> 'mdkarim12',
            'employee_id'=> rand(1000, 9999),
            'phone_number'=> '01234567893',
            'dob'=> Carbon::createFromDate(mt_rand(1990, 1999), mt_rand(1, 12), mt_rand(1, 28)),
            'marital_status'=> 'Unmarried',
            'blood_group'=> 'O+',
            'gender'=> 'Male',
            'religion'=> 'Islam',
            'nid'=> rand(10000, 99999),
            'present_address'=> 'Dhaka, Bangladesh',
            'permanent_address'=> 'Dhaka, Bangladesh',
            'dept_id'=> 3,
            'position_id'=> 6,
            'join_date'=> Carbon::createFromDate(mt_rand(2021, 2022), mt_rand(1, 12), mt_rand(1, 28)),
        ]);

        Employee::create([
            'user_id' => 4,
            'first_name'=> 'Md',
            'last_name'=> 'Safik',
            'username'=> 'mdsafik12',
            'employee_id'=> rand(1000, 9999),
            'phone_number'=> '01234567894',
            'dob'=> Carbon::createFromDate(mt_rand(1990, 1999), mt_rand(1, 12), mt_rand(1, 28)),
            'marital_status'=> 'Unmarried',
            'blood_group'=> 'O+',
            'gender'=> 'Male',
            'religion'=> 'Islam',
            'nid'=> rand(10000, 99999),
            'present_address'=> 'Dhaka, Bangladesh',
            'permanent_address'=> 'Dhaka, Bangladesh',
            'dept_id'=> 3,
            'position_id'=> 4,
            'join_date'=> Carbon::createFromDate(mt_rand(2021, 2022), mt_rand(1, 12), mt_rand(1, 28)),
        ]);

        Employee::create([
            'user_id' => 5,
            'first_name'=> 'Md',
            'last_name'=> 'Barkat',
            'username'=> 'mdbarkat12',
            'employee_id'=> rand(1000, 9999),
            'phone_number'=> '01234567895',
            'dob'=> Carbon::createFromDate(mt_rand(1990, 1999), mt_rand(1, 12), mt_rand(1, 28)),
            'marital_status'=> 'Unmarried',
            'blood_group'=> 'A+',
            'gender'=> 'Male',
            'religion'=> 'Islam',
            'nid'=> rand(10000, 99999),
            'present_address'=> 'Dhaka, Bangladesh',
            'permanent_address'=> 'Dhaka, Bangladesh',
            'dept_id'=> 3,
            'position_id'=> 5,
            'join_date'=> Carbon::createFromDate(mt_rand(2021, 2022), mt_rand(1, 12), mt_rand(1, 28)),
        ]);

        Employee::create([
            'user_id' => 6,
            'first_name'=> 'Md',
            'last_name'=> 'Salam',
            'username'=> 'mdsalam12',
            'employee_id'=> rand(1000, 9999),
            'phone_number'=> '01234567896',
            'dob'=> Carbon::createFromDate(mt_rand(1990, 1999), mt_rand(1, 12), mt_rand(1, 28)),
            'marital_status'=> 'Unmarried',
            'blood_group'=> 'B+',
            'gender'=> 'Male',
            'religion'=> 'Islam',
            'nid'=> rand(10000, 99999),
            'present_address'=> 'Dhaka, Bangladesh',
            'permanent_address'=> 'Dhaka, Bangladesh',
            'dept_id'=> 3,
            'position_id'=> 5,
            'join_date'=> Carbon::createFromDate(mt_rand(2021, 2022), mt_rand(1, 12), mt_rand(1, 28)),
        ]);

        Employee::create([
            'user_id' => 7,
            'first_name'=> 'Md',
            'last_name'=> 'Jabbar',
            'username'=> 'mdjabbar12',
            'employee_id'=> rand(1000, 9999),
            'phone_number'=> '01234567897',
            'dob'=> Carbon::createFromDate(mt_rand(1990, 1999), mt_rand(1, 12), mt_rand(1, 28)),
            'marital_status'=> 'Unmarried',
            'blood_group'=> 'AB+',
            'gender'=> 'Male',
            'religion'=> 'Islam',
            'nid'=> rand(10000, 99999),
            'present_address'=> 'Dhaka, Bangladesh',
            'permanent_address'=> 'Dhaka, Bangladesh',
            'dept_id'=> 3,
            'position_id'=> 5,
            'join_date'=> Carbon::createFromDate(mt_rand(2021, 2022), mt_rand(1, 12), mt_rand(1, 28)),
        ]);

    }
}
