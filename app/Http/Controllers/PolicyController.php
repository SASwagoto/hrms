<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Policy;
use Auth;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Validator;

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
    public function documents_doc()
    {
        return view('documents.doc');

    }

    public function document_add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'=> 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'doc_file' => 'nullable|mimes:pdf,doc,docx',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $doc = Document::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'category'=> $request->category,
        ]);

        if ($request->hasFile('doc_file')) {
            $file = $request->file('doc_file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/documents', $filename);

            $doc->doc_file = $filename;
            $doc->save();
        }
        Alert::success($doc->title, 'Added Successfully!');
        return redirect()->back();
    }
}
