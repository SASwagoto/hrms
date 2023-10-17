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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Employee Schedule</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="basic-form">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Select Employee<span
                                                class="required">*</span></label>
                                        <select id="employee-select" name="emp_id">
                                            <option value="">Employee 1</option>
                                            <option value="">Employee 2</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-primary">Fiscal year<span
                                                class="required">*</span></label>
                                                <input type="date" class="form-control" placeholder="Fiscal year">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label text-primary">Tax Method<span
                                        class="required">*</span></label>
                                <div class="d-flex">
                                    <select id="tax-method" name="emp_id">
                                        <option value="">Value</option>
                                        <option value="">Percentage</option>
                                    </select>
                                    <input type="text" class="form-control w-50 ms-3" id="exampleFormControlInput7"
                                        placeholder="Value">
                                </div>
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
@push('js')
    <script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins-init/select2-init.js"></script>

    <script>
        $('#employee-select').select2();
    </script>

    
@endpush
