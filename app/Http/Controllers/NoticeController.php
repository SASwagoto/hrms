<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('notice.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notice.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $notice = Notice::create([
            'title'=> $request->title,
            'notice_date'=> $request->notice_date,
            'notice_to'=> $request->notice_to,
            'noticefile'=> $request->noticefile,
            'description'=> $request->description,
            'created_by'=> Auth::id(),
        ]);

        Alert::success('Success', $notice->title.' Added Successfully!');
        return redirect()->route('notice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notice $notice)
    {
        //
    }
}
