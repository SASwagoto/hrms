<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use App\Models\Education;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use File;

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
        $depts = Department::active()->get();
        $employees = Employee::orderBy("created_at", "desc")->paginate(5);
        return view('employee.list', compact('employees', 'depts'));
    }

    public function byDept(Department $department)
    {
        $depts = Department::active()->get();
        $employees = Employee::where('dept_id', $department->id)->orderBy("created_at", "desc")->paginate(5);
        return view('employee.list', compact('employees', 'depts'));
        
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
        //dd($request->all());
        if ($request->hasFile('profile_img')) {
            //dd($request->all());
            $image = $request->file('profile_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/employee'), $imageName);


            $employee->profile_img = $imageName;
            $employee->save();
        }

        
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
         $user = User::whereHas('teams', function ($query) {
            $query->has('members', '=', 1);
        })->with('teams.members')->first();
        //return view('employee.show', compact('emp', 'positions', 'departments'));
        return view('employee.show', compact('employee', 'positions', 'departments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $departments = Department::active()->orderBy('dept_name', 'asc')->get();
        $positions = Position::where('dept_id', $employee->dept_id)->get();
        return view('employee.edit', compact('employee', 'departments', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $name = $request->first_name.' '.$request->last_name;
        $user = User::find($employee->user_id);
        $user->update([
            'name'=> $name,
            'email'=> $request->email,
        ]);

        $employee->update([
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
        if ($request->hasFile('profile_img')) {
            $image = $request->file('profile_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/employee'), $imageName);

            if ($employee->profile_img) {
                Storage::delete('employee/' . $employee->profile_img);
            }


            $employee->profile_img = $imageName;
            $employee->save();
        }

        $educations = Education::where('user_id', $employee->user_id)->get();

        if ($request->input('exam') !== null) {
            foreach ($request->exam as $key => $exam) {
                $educationData = [
                    'exam' => $exam,
                    'institute' => $request->institute[$key],
                    'subject' => $request->subject[$key],
                    'pass_year' => $request->pass_year[$key],
                    'group' => $request->group[$key],
                    'session_year' => $request->session_year[$key],
                    'result' => $request->result[$key],
                ];
    
                if (isset($educations[$key])) {
                    $educations[$key]->update($educationData);
                } else {
                    $educationData['user_id'] = $employee->user_id;
                    Education::create($educationData);
                }
            }
        }
        Alert::success($employee->username, 'Updated Successfully!' );
        return redirect()->route('emp.show', $employee->username);


    }

    public function softDelete(Employee $employee)
    {
        //return $employee;
        $user = User::find($employee->user_id);
        $user->customSoftDelete();

        Alert::success('Deleted','Employee Deleted Successfully!');
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        
    }
}
