<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('department.list', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'dept_name'=> 'unique:departments',
        ]);

        if ($validate->fails()) {
            Alert::error( $request->dept_name, 'Already Added!');
            return redirect()->back();
        }

        if ($validate) {
            Department::create([
                'dept_name' => $request->dept_name,
            ]);
            Alert::success( $request->dept_name, 'Added Successfully');
            return redirect()->back();
        }
    }

    public function pos_index()
    {
        $depts = Department::all();
        $positions = Position::all();
        return view('department.position', compact('depts', 'positions'));
    }


    public function pos_store(Request $request)
    {
        Position::create([
            'position_name'=> $request->pos_name,
            'dept_id' => $request->dept_id,
        ]);
        Alert::success( $request->pos_name,'Added Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
