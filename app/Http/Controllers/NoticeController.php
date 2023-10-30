<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use File;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notices = Notice::orderBy("created_at","desc")->paginate(10);
        return view('notice.list', compact('notices'));
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
            'description'=> $request->description,
            'created_by'=> Auth::id(),
        ]);

        if ($request->hasFile('noticefile')) {
            $file = $request->file('noticefile');
            $filename = $request->title.'-'. time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/notice'), $filename);

            $notice->noticefile = $filename;
            $notice->save(); 
        }

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
