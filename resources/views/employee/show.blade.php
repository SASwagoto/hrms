@extends('layouts.admin')

@section('title')
    {{$employee->username}} :: Employee Details
@endsection
@push('css')
    <link href="{{ asset('assets') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <style>
        ul.edu_list {
            float: left;
        }

        ul.edu_list li {
            float: left;
            margin-right: 100px;
        }
    </style>
@endpush

@section('header')
{{$employee->user->name}} Details
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card h-auto">
                <div class="card-header p-0">
                    <div class="user-bg w-100">
                        <div class="user-svg">
                            <svg width="264" height="109" viewBox="0 0 264 109" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.0107422" y="0.6521" width="263.592" height="275.13" rx="20"
                                    fill="#FCC43E" />
                            </svg>
                        </div>
                        <div class="user-svg-1">
                            <svg width="264" height="59" viewBox="0 0 264 59" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.564056" width="263.592" height="275.13" rx="20" fill="#FB7D5B" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="d-flex justify-content-between">
                            <div class="user">
                                <div class="">
                                    @if ($employee->profile_img)
                                    <img src="{{ asset('storage/employee/'.$employee->profile_img) }}" alt="" class="avatar avatar-xxl">
                                    @else
                                    <img src="{{ asset('assets') }}/images/av.jpg" alt="" class="avatar avatar-xxl">
                                    @endif
                                    
                                </div>
                                <div class="hd">
                                    <h2 class="mb-0">{{$employee->user->name}}</h2>
                                    <p class="text-primary font-w600 hd">{{$employee->position->position_name}}</p>
                                </div>
                                <div class="basic-form mt-3 ef d-none" style="width: 500px;">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default"
                                            value="{{$employee->user->name}}">
                                    </div>
                                    <div class="mb-3">
                                        <select class="default-select form-control wide form-control mb-3">
                                            @foreach ($positions as $position)
                                            <option value="{{$position->id}}">{{$position->position_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown custom-dropdown">
                                <a href="javascript:void(0);" class="" id="edit_btn"><i
                                        class="fa-solid fa-pen-to-square fa-2xl"></i></a>
                                <a href="javascript:void(0);" class="d-none" id="save_btn"><i
                                        class="fa-solid fa-check fa-2xl"></i></a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 mb-2">
                                <ul class="student-details">
                                    <li class="me-2">
                                        <a class="icon-box bg-secondary">
                                            <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <h5 class="hd mb-0"><a href="mailto:{{$employee->user->email}}">{{$employee->user->email}}</a>
                                        </h5>
                                        <div class="basic-form ef d-none">
                                            <input type="email" class="form-control input-default"
                                                value="{{$employee->user->email}}" style="width: 445px">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 mb-2">
                                <ul class="student-details">
                                    <li class="me-2">
                                        <a class="icon-box bg-secondary">
                                            <i class="fa-solid fa-building" style="color: #ffffff;"></i>
                                        </a>
                                    </li>
                                    <li><span>Department:</span>
                                        <h5 class="hd mb-0">{{$employee->department->dept_name}}</h5>
                                        <div class="basic-form ef d-none" style="width: 445px">
                                            <select class="default-select form-control wide form-control mb-3">
                                                @foreach ($departments as $dept)
                                                <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 mb-2">
                                <ul class="student-details">
                                    <li class="me-2">
                                        <a class="icon-box bg-secondary">
                                            <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                                        </a>
                                    </li>
                                    <li><span>Phone:</span>
                                        <h5 class="hd mb-0"><a href="tel:{{$employee->phone_number}}">{{$employee->phone_number}}</a></h5>
                                        <div class="basic-form ef d-none">
                                            <input type="text" class="form-control put-default" value="{{$employee->phone_number}}"
                                                style="width: 445px">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-6 col-xxl-6 col-sm-6 mb-2">
                                <ul class="student-details">
                                    <li class="me-2">
                                        <a class="icon-box bg-secondary">
                                            <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                                        </a>

                                    </li>
                                    <li><span>Address:</span>
                                        <h5 class="hd mb-0">{{$employee->team}}</h5>
                                        <div class="basic-form ef d-none">
                                            <input type="text" class="form-control input-default"
                                                value="{{$employee->present_address}}" style="width: 445px">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5>Educational Qualification</h5>
                            <hr>
                            @if ($employee->education)
                            <ul class="edu_list d-block w-100 mb-3">
                                @foreach ($employee->education as $education)
                                <li>
                                    <h6>{{$education->exam}}</h6>
                                    <p><strong>institute: </strong>{{$education->institute}}<br>
                                        <strong>Subject/Group: </strong>{{$education->subject}} {{$education->group}}<br>
                                        <strong>Session: </strong>{{$education->session_year}}<br>
                                        <strong>Passing Year: </strong>{{$education->pass_year}}<br>
                                        <strong>Result: </strong>{{$education->result}}
                                    </p>
                                </li>
                                @endforeach
                            </ul>
                            @else
                            <h6>No Educational Information Found</h6>
                            @endif
                        </div>
                        <div class="col-6">
                            <h5>Personal Information</h5><hr>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Gender</th>
                            <th>:</th>
                            <td>{{$employee->gender}}</td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <th>:</th>
                            <td>{{$employee->religion}}</td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <th>:</th>
                            <td>{{$employee->blood_group}}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <th>:</th>
                            <td>{{$employee->dob}}</td>
                        </tr>
                        <tr>
                            <th>NID Number</th>
                            <th>:</th>
                            <td>{{$employee->nid}}</td>
                        </tr>
                        <tr>
                            <th>Marital Status</th>
                            <th>:</th>
                            <td>{{$employee->marital_status}}</td>
                        </tr>
                        <tr>
                            <th>Present Address</th>
                            <th>:</th>
                            <td>{{$employee->present_address}}</td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                            <th>:</th>
                            <td>{{$employee->permanent_address}}</td>
                        </tr>
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
    <!-- Apex Chart -->
    <script src="{{ asset('assets') }}/vendor/apexchart/apexchart.js"></script>
    <!-- Datatable -->
    <script src="{{ asset('assets') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins-init/datatables.init.js"></script>
    <script>
        $(document).ready(function() {
            $("#edit_btn").on('click', function() {
                $(".ef").removeClass("d-none");
                $(".hd").addClass("d-none");
                $("#edit_btn").addClass("d-none");
                $("#save_btn").removeClass("d-none");
            });

            $("#save_btn").on('click', function() {
                $(".ef").addClass("d-none");
                $(".hd").removeClass("d-none");
                $("#edit_btn").removeClass("d-none");
                $("#save_btn").addClass("d-none");
            });
        });
    </script>
@endpush
