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
                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label class="form-label text-primary">Title<span class="required">*</span></label>
                            <input type="text" name="title" class="form-control"
                                placeholder="Title">
                        </div> 
                        <div class="mb-3">
                            <label class="form-label text-primary">Description<span class="required">*</span></label>
                            <input type="text" name="description" class="form-control"
                                placeholder="Description">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Status<span class="required">*</span></label>
                            <input type="text" name="status" class="form-control"
                                placeholder="Status">
                        </div>
                        
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label class="form-label text-primary">Category<span class="required">*</span></label>
                            <input type="text" name="category" class="form-control"
                                placeholder="Category">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Files<span class="required">*</span></label>
                            <input class="form-control" type="file" id="formFile">
                        </div><br>
                        
                        <div class="mb-3" style="padding-top: 6px">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
