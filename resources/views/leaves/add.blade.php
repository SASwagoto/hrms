@extends('layouts.admin')

@php
use Illuminate\Support\Str;
@endphp

@section('title')
    Add Leave
@endsection
@push('css')
<link href="{{asset('assets')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
@endpush
@section('header')
    Add Leave
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Leave</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route('leave.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label text-primary">Leave Name<span class="required">*</span></label>
                                <input type="text" required name="name" class="form-control input-default"
                                    placeholder="Leave Name">
                            </div>
                            <div>
                                <label class="form-label text-primary">Leave Type<span class="required">*</span></label>
                                <select name="type" class="default-select form-control wide form-control mb-3">
                                    <option value="1">Paid</option>
                                    <option value="2">Unpaid</option>
                                    <option value="3">Half Paid</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Comments</label>
                                <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="days" class="form-label text-primary">Days Limitation</label>
                                <input type="number" name="days" id="days" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9">
            <div class="card" id="bootstrap-table4">
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Leave List</h4>
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
                                            <th>ID</th>
                                            <th>Leave Name</th>
                                            <th>Leave Type</th>
                                            <th>Comments</th>
                                            <th>Limits</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($leaves as $key => $leave)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td>{{$leave->name}}</td>
                                            <td>
                                                @switch($leave->type)
                                                    @case(1)
                                                    <span class="badge badge-success">Paid</span>
                                                        @break
                                                    @case(2)
                                                    <span class="badge badge-danger">Unpaid</span>
                                                        @break
                                                    @case(3)
                                                    <span class="badge badge-warning">Half Paid</span>
                                                        @break
                                                    @default
                                                    <span class="badge badge-success">Paid</span>
                                                        
                                                @endswitch
                                            </td>
                                            <td>{{$leave->comments}}</td>
                                            <td>{{$leave->days}} {{Str::plural('Day', $leave->days)}}</td>
                                            <td>
                                                @if ($leave->isActive == true)
                                                <span class="badge badge-success light">Active</span>
                                                @else
                                                <span class="badge badge-danger light">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <ul class="action_btn">
                                                    <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                        style="color: #347af4;"></i></a></li>
                                                    <li><a href="#"><i class="fa-solid fa-trash fa-xl" style="color: #ff0000;"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No Leave Found</td>
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
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    @endpush
