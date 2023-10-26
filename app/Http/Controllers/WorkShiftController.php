<?php

namespace App\Http\Controllers;

use App\Models\WorkShift;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class WorkShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('attendance.shift');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
       $duration = calWorkingHours($request->start_time, $request->end_time);

       $workShift = WorkShift::create([
        'name'=> $request->name,
        'type'=> $request->type,
        'start_time'=> $request->start_time,
        'end_time'=> $request->end_time,
        'duration'=> $duration,
        'working_days'=> $request->working_days,
        'comments'=> $request->comments,
       ]);

       Alert::success($workShift->name, 'Added Successfully!');
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkShift $workShift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkShift $workShift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WorkShift $workShift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkShift $workShift)
    {
        //
    }
}
