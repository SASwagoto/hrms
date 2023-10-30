<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JobPostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recruitment.post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $un = rand(00000, 99999);
        $data['unique_tracking_number'] = $un;
        $job = JobPosting::create($data);

        if ($request->hasFile('file_path')) {
            $file = $request->file('file_path');
            $fileName = $request->job_title.'-'.time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/jobs'), $fileName);

            $job->file_path = $fileName;
            $job->save();
        }
        Alert::success('Success', $job->job_title.' Posted Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(JobPosting $jobPosting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPosting $jobPosting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobPosting $jobPosting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPosting $jobPosting)
    {
        //
    }
}
