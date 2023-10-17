@extends('layouts.admin')

@section('title')
    Employee Details
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
    Employee Details
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
                                    <img src="{{ asset('assets') }}/images/av.jpg" alt="" class="avatar avatar-xxl">
                                </div>
                                <div class="hd">
                                    <h2 class="mb-0">Shawon Ahmed Swagoto</h2>
                                    <p class="text-primary font-w600 hd">Junior Software Engineer</p>
                                </div>
                                <div class="basic-form ef d-none" style="width: 500px;">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default"
                                            value="Shawon Ahmed Swagoto">
                                    </div>
                                    <div class="mb-3">
                                        <select class="default-select form-control wide form-control mb-3">
                                            <option value="1">Software Engineer</option>
                                            <option value="2">Sales Executive</option>
                                            <option value="3">HR Manager</option>
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
                                        <h5 class="hd mb-0"><a href="mailto:saswagoto@gmail.com">saswagoto@gmail.com</a>
                                        </h5>
                                        <div class="basic-form ef d-none">
                                            <input type="email" class="form-control input-default"
                                                value="saswagoto@gmail.com" style="width: 445px">
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
                                        <h5 class="hd mb-0">IT Department</h5>
                                        <div class="basic-form ef d-none" style="width: 445px">
                                            <select class="default-select form-control wide form-control mb-3">
                                                <option value="1">Junior Software Engineer</option>
                                                <option value="2">Software Engineer</option>
                                                <option value="3">Digitak Marketing</option>>
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
                                        <h5 class="hd mb-0">+12 345 6789 0</h5>
                                        <div class="basic-form ef d-none">
                                            <input type="text" class="form-control input-default" value="+12 345 6789 0"
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
                                        <h5 class="hd mb-0">Banglamotor, Dhaka.</h5>
                                        <div class="basic-form ef d-none">
                                            <input type="text" class="form-control input-default"
                                                value="Banglamotor, Dhaka." style="width: 445px">
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
                            <ul class="edu_list d-block w-100 mb-3">
                                <li>
                                    <h6>Secondary School Certificate</h6>
                                    <p><strong>institute: </strong>Palashbari Govt. Collage<br>
                                        <strong>Subject/Group: </strong>Science<br>
                                        <strong>Session: </strong>2014-2015<br>
                                        <strong>Result: </strong>5.00
                                    </p>
                                </li>
                                <li>
                                    <h6>Secondary School Certificate</h6>
                                    <p><strong>institute: </strong>Palashbari Govt. Collage<br>
                                        <strong>Subject/Group: </strong>Science<br>
                                        <strong>Session: </strong>2014-2015<br>
                                        <strong>Result: </strong>5.00
                                    </p>
                                </li>
                                <li>
                                    <h6>Secondary School Certificate</h6>
                                    <p><strong>institute: </strong>Palashbari Govt. Collage<br>
                                        <strong>Subject/Group: </strong>Science<br>
                                        <strong>Session: </strong>2014-2015<br>
                                        <strong>Result: </strong>5.00
                                    </p>
                                </li>
                                <li>
                                    <h6>Secondary School Certificate</h6>
                                    <p><strong>institute: </strong>Palashbari Govt. Collage<br>
                                        <strong>Subject/Group: </strong>Science<br>
                                        <strong>Session: </strong>2014-2015<br>
                                        <strong>Result: </strong>5.00
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h5>Personal Information</h5><hr>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Gender</th>
                            <th>:</th>
                            <td>Male</td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <th>:</th>
                            <td>Muslim</td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <th>:</th>
                            <td>O+</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <th>:</th>
                            <td>11-Nov-2023</td>
                        </tr>
                        <tr>
                            <th>NID Number</th>
                            <th>:</th>
                            <td>123456789</td>
                        </tr>
                        <tr>
                            <th>Marital Status</th>
                            <th>:</th>
                            <td>Unmarried</td>
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
