<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $employees = Employee::all();
        $leave_req = LeaveRequest::all();
        return view("dashboard", compact("employees", "leave_req"));
    }
}
