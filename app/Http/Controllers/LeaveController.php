<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('leaves.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $leaves = Leave::all();
        return view('leaves.add', compact('leaves'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Leave::create([
            'name'=> $request->name,
            'type'=> $request->type,
            'comments'=> $request->comments,
            'days'=> $request->days,
        ]);
        Alert::success($request->name, 'Added Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        //
    }

    public function leave_add_req()
    {
        $types = Leave::active()->orderBy('name', 'asc')->get();
        return view('leaves.add_req', compact('types'));
    }

    public function request_store(Request $request)
    {
        return $request;
    }

}
