@extends('layouts.admin')

@section('title')
    Employee Schedule
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush

@section('header')
    Employee Schedule
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Employee Schedule</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label text-primary">Select Employee<span
                                        class="required">*</span></label>
                                <select id="employee-select" name="emp_id">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-primary">Select Shift<span class="required">*</span></label>
                                <select id="shift-select" name="shift_id">
                                    <option value="AL">Alabama</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="CA">California</option>
                                </select>
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
                        <h4 class="card-title">Employee Schedule List</h4>
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
                                            <th>Employee ID</th>
                                            <th>Employee Name</th>
                                            <th>Shift ID</th>
                                            <th>Approvrd By</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>123</td>
                                            <td>Imran</td>
                                            <td>2</td>
                                            <td>Shawon</td>
                                            <td><span class="badge badge-success light">
                                                    Active</span>
                                            </td>
                                            <td>
                                                <ul class="action_btn">
                                                    <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                                style="color: #347af4;"></i></a></li>
                                                    <li><a href="#"  ><i
                                                                class="fa-solid fa-trash fa-xl"
                                                                style="color: #ff0000;"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
        $('#employee-select').select2();

        // Initialize Select2 for the "Select Shift" dropdown
        $('#shift-select').select2();
    </script>
@endpush
