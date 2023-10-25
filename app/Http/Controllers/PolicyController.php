<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policies = Policy::all();
        return view('documents.policy', compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documents.addpolicy');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $policy = Policy::create([
            'title'=> $request->title,
            'policies'=> $request->policies,
            'created_by'=> Auth::user()->id,
        ]);

        Alert::success('Success', $policy->title.' Added Successfully!');
        return redirect()->route('policy.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Policy $policy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Policy $policy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Policy $policy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Policy $policy)
    {
        //
    }
}
