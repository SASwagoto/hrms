<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use App\Models\Education;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.list', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::active()->orderBy('dept_name', 'asc')->get();
        return view('employee.add', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $name = $request->first_name.' '.$request->last_name;
        $addUser = User::create([
            'name'=> $name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ])->assignRole('Employee');
        
        $employee = Employee::create([
            'user_id' => $addUser->id,
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'username'=> $request->username,
            'employee_id'=> $request->employee_id,
            'phone_number'=> $request->phone_number,
            'dob'=> $request->dob,
            'marital_status'=> $request->marital_status,
            'blood_group'=> $request->blood_group,
            'gender'=> $request->gender,
            'religion'=> $request->religion,
            'nid'=> $request->nid,
            'present_address'=> $request->present_address,
            'permanent_address'=> $request->permanent_address,
            'dept_id'=> $request->dept_id,
            'position_id'=> $request->position_id,
            'join_date'=> $request->join_date,
        ]);

        
        if ($request->input('exam') !== null) {
            foreach ($request->exam as $key => $exam) {
                Education::create([
                    'user_id'=> $addUser->id,
                    'exam'=> $exam,
                    'institute'=> $request->institute[$key],
                    'subject' => $request->subject[$key],
                    'pass_year'=> $request->pass_year[$key],
                    'group'=> $request->group[$key],
                    'session_year'=> $request->session_year[$key],
                    'result'=> $request->result[$key],
                ]);
            }
        }

        Alert::success($employee->username, 'Added Successfully!' );
        return redirect()->route('emp.show', $employee->username);
         
    } 

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {

        // $emp = Employee::where('username', $employee->username)->first();
         $positions = Position::active()->where('dept_id', $employee->dept_id)->get();
         $departments = Department::active()->get();
        //return view('employee.show', compact('emp', 'positions', 'departments'));
        return view('employee.show', compact('employee', 'positions', 'departments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
