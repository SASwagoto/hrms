@extends('layouts.admin')

@section('title')
    Documents
@endsection

@section('header')
   Documents
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Add Documents</h5>
            </div>
            <div class="card-body">
               <form action="{{route('doc.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label text-primary">Title<span class="required">*</span>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </label>
                                <input type="text" name="title" class="form-control"
                                    placeholder="Title">
                            </div> 
                            <div class="mb-3">
                                <label class="form-label text-primary">Description
                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </label>
                                <input type="text" name="description" class="form-control"
                                    placeholder="Description">
                            </div>
                            <div class="mb-3" style="padding-top: 6px">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label text-primary">Category
                                    @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </label>
                                <input type="text" name="category" class="form-control"
                                    placeholder="Category">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Files
                                    @error('doc_file')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </label>
                                <input class="form-control" type="file" name="doc_file" accept=".pdf, .doc, .docx" id="formFile">
                            </div><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
