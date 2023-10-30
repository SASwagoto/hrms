@extends('layouts.admin')

@section('title')
    Job Postings
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
<link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
   Job Postings
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Add Job Postings</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mb-3">
                                <label class="form-label text-primary">Job Title<span class="required">*</span></label>
                                <input type="text" name="job_title" class="form-control"
                                    placeholder="Job Title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Company<span class="required">*</span></label>
                                <input type="text" name="company" class="form-control"
                                    placeholder="Company">
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                           
                            <div class="mb-3">
                                <label class="form-label text-primary">Location<span class="required">*</span></label>
                                <input type="text" name="location" class="form-control"
                                    placeholder="Location">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Key Responsibilities<span class="required">*</span></label>
                                <select class="multi-select" name="states[]" multiple="multiple">
                                    <option value="AL">Key 1</option>
                                    <option value="WY">Key 2</option>
                                    <option value="UI">Key 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Educational Qualifications<span class="required">*</span></label>
                                <select class="multi-select" name="states[]" multiple="multiple">
                                    <option value="AL">Qual 1</option>
                                    <option value="WY">Qual 2</option>
                                    <option value="UI">Qual 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Salary Range<span class="required">*</span></label>
                                <input type="text" name="salary_range" class="form-control"
                                    placeholder="Salary Range">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Unique Tracking Number<span class="required">*</span></label>
                                <input type="text" name="unique_tracking_number" class="form-control"
                                    placeholder="Unique Tracking Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">How to Apply<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            
                            <div class="mb-3">
                                <label class="form-label text-primary">Position<span class="required">*</span></label>
                                <select name="pos_name" class="default-select form-control wide form-control">
                                    <option value="">Pos 1</option>
                                    <option value="">Pis 2</option>
                                    <option value="">Pos 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Preferred Skills<span class="required">*</span></label>
                                <select class="multi-select" name="states[]" multiple="multiple">
                                    <option value="AL">Skills 1</option>
                                    <option value="WY">Skills 2</option>
                                    <option value="UI">Skills 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Benefits<span class="required">*</span></label>
                                <input type="text" name="benefits" class="form-control"
                                    placeholder="Benefits">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Application Deadline<span class="required">*</span></label>
                                <input type="text" name="application_deadline" class="form-control"
                                    placeholder="Application Deadline">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Requisition Number<span class="required">*</span></label>
                                <input type="text" name="requisition_number" class="form-control"
                                    placeholder="Requisition Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">About Us<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mb-3">
                                <label class="form-label text-primary">Department<span class="required">*</span></label>
                                <select name="dept_name" class="default-select form-control wide form-control">
                                    <option value="">Dep 1</option>
                                    <option value="">Dep 2</option>
                                    <option value="">Dep 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Requirements<span class="required">*</span></label>
                                <select class="multi-select" name="states[]" multiple="multiple">
                                    <option value="AL">Req 1</option>
                                    <option value="WY">req 2</option>
                                    <option value="UI">req 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Experience<span class="required">*</span></label>
                                <input type="text" name="experience" class="form-control"
                                    placeholder="Experience">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Contact Information<span class="required">*</span></label>
                                <input type="text" name="contact_information" class="form-control"
                                    placeholder="Contact Information">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Files<span class="required">*</span></label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Job Description<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary float-end" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets') }}/vendor/select2/js/select2.full.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins-init/select2-init.js"></script>
@endpush