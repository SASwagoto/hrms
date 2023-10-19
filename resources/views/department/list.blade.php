@extends('layouts.admin')

@section('title')
    Department
@endsection

@section('header')
    Department
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Department</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route('dept.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" required name="dept_name" class="form-control input-default"
                                    placeholder="Enter Department Name">
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
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Department List</h4>
                    </div>
                </div>

                <!-- /tab-content -->
                <div class="tab-content" id="myTabContent-3">
                    <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel" aria-labelledby="home-tab-3">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-responsive-sm table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($departments as $key => $dept)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $dept->dept_name }}</td>
                                                <td><span
                                                        class="badge {{ $dept->isActive ? 'badge-success' : 'badge-danger' }} light">{{ $dept->isActive ? 'Active' : 'Inactive' }}</span>
                                                </td>
                                                <td>
                                                    <ul class="action_btn">
                                                        <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                                    style="color: #347af4;"></i></a></li>
                                                        <li><a href="#" onclick="editable();"><i
                                                                    class="fa-solid fa-trash fa-xl"
                                                                    style="color: #ff0000;"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No Department Found</td>
                                        </tr>
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
    
        
    @endpush
