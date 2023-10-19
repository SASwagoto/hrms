@extends('layouts.admin')

@section('title')
    Position
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
<link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
   Position
@endsection
@section('content')
<div class="row">
    <div class="col-xl-5 col-lg-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Position</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('pos.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Department<span
                                    class="required">*</span></label>
                            <select id="department-select" class="form-control" name="dept_id">
                                @forelse ($depts as $dept)
                                <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
                                @empty
                                <option>No Department Found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary" for="">Position Name <span class="required">*</span></label>
                            <input type="text" name="pos_name" required class="form-control input-default "
                                placeholder="Enter Position Name">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-lg-7">
        <div class="card" id="bootstrap-table4">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0 px-3">
                <div>
                    <h4 class="card-title">Position List</h4>
                </div>
            </div>

            <!-- /tab-content -->
            <div class="tab-content" id="myTabContent-3">
                <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel"
                    aria-labelledby="home-tab-3">
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($positions as $key => $pos)
                                    <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$pos->position_name}}</td>
                                        <td>{{$pos->department->dept_name}}</td>
                                        <td><span class="badge badge-success light">Active</span>
                                        </td>
                                        <td>
                                            <ul class="action_btn">
                                                <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                    style="color: #347af4;"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-trash fa-xl"
                                                            style="color: #ff0000;"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr> 
                                    @empty
                                        
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets') }}/vendor/select2/js/select2.full.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins-init/select2-init.js"></script>
<script>
    // Initialize Select2 for the "Select Employee" dropdown
    $('#department-select').select2();
</script>
@endpush