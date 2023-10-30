@extends('layouts.admin')

@section('title')
    Edit {{$employee->user->name}} Profile
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css">
    <link href="{{ asset('assets') }}/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <style>
        .password_container {
            position: relative;
        }

        a.eye_btn {
            position: absolute;
            top: 55%;
            right: 10px;
        }
    </style>
@endpush
@section('header')
Edit {{$employee->user->name}} Profile
@endsection

@section('content')
    <form id="employeeForm" action="{{ route('emp.update', $employee->username) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Add New Employee</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-xl-4 col-lg-4">
                                <label class="form-label text-primary">Photo<span class="required">*</span></label>
                                <div class="float-end">
                                    <label for="" class="form-label text-primary">Joining Date<span class="required">*</span></label>
                                    <input type="date" name="join_date" class="form-control" value="{{$employee->join_date}}">
                                </div>
                                <div class="avatar-upload">
                                    <div class="avatar-preview">
                                        @if ($employee->profile_img)
                                        <div id="imagePreview" style="background-image: url({{ asset('storage/employee/'.$employee->profile_img) }});">
                                        </div>
                                        @else
                                        <div id="imagePreview" style="background-image: url({{ asset('assets') }}/images/no-img-avatar.png);">
                                        </div>
                                        @endif
                                        
                                    </div>
                                    <div class="change-btn mb-lg-0 mb-3 mt-2">
                                        <input type='file' name="profile_img" class="form-control d-none"
                                            id="imageUpload" accept=".png, .jpg, .jpeg">
                                        <label for="imageUpload" class="dlab-upload btn btn-primary btn-sm mb-0">Choose
                                            File</label>
                                        <a href="javascript:void"
                                            class="btn btn-danger light remove-img btn-sm ms-2">Remove</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-8">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label for=" 1" class="form-label text-primary">First
                                                Name<span class="required">* </span>
                                                @error('first_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <input type="text" name="first_name" class="form-control"
                                                value="{{ $employee->first_name }}" placeholder="First Name">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">User Name<span class="required">* </span>
                                                @error('username')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <div class="d-flex">
                                                <input type="text" name="username" class="form-control"
                                                    value="{{ $employee->username }}" placeholder="User Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Last
                                                Name<span class="required">*</span> @error('last_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <input type="text" name="last_name" class="form-control"
                                                value="{{ $employee->last_name }}" placeholder="Wally">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Employee ID<span class="required">*
                                                </span> @error('employee_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <input type="number" name="employee_id" class="form-control"
                                                value="{{ $employee->employee_id }}" placeholder="123456">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="">
                                    <label class="form-label text-primary">Select
                                        Department<span class="required">* </span>
                                        @error('dept_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <select name="dept_id" id="department"
                                        class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        @forelse ($departments as $dept)
                                            <option @if ($employee->dept_id == $dept->id) selected @endif value="{{ $dept->id }}">{{ $dept->dept_name }}</option>
                                        @empty
                                            <option value="">No Department found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="position mb-3">
                                    <label class="form-label text-primary">Select
                                        positions<span class="required">*</span>
                                        @error('position_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <select name="position_id" class="default-select form-control wide form-control mb-3">
                                        @foreach ($positions as $position)
                                        <option @if ($employee->position_id == $position->id)
                                            selected
                                        @endif value="{{$position->id}}">{{$position->position_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Email<span class="required">* </span>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="email" name="email" class="form-control" value="{{ $employee->user->email }}"
                                        placeholder="hello@example.com">
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label text-primary">Password<span class="required">* </span>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="password" name="password" class="form-control pass"
                                        value="{{ old('password') }}" placeholder="Password">
                                </div> --}}
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Phone
                                        Number<span class="required">* </span> @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="number" name="phone_number" class="form-control"
                                        value="{{ $employee->phone_number }}" placeholder="+123456789">
                                </div>
                                {{-- <div class="password_container mb-3">
                                    <label class="form-label text-primary">Confirm Password<span
                                            class="required">* </span> <span id="pass_check_msg" class=""></span></label>
                                    <input type="password" name="confirm_password" class="form-control confirm_pass"
                                        placeholder="Confirm Password">
                                    <a href="javascript:void(0);" class="eye_btn pass_show d-none"><i
                                            class="fa-solid fa-eye fa-lg"></i></a>
                                    <a href="javascript:void(0);" class="eye_btn pass_hide d-none"><i
                                            class="fa-solid fa-eye-slash fa-lg"></i></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Educational Details</h4>
                    </div>
                    <div class="card-body">
                        <div id="qualificationForm">
                            @forelse ($employee->education as $edu)
                            <div class="qualification">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="">
                                            <label class="form-label text-primary">Select
                                                Examination<span class="required">*</span> @error('exam[]')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror</label>
                                            <select name="exam[]"
                                                class="default-select form-control wide form-control mb-3">
                                                <option value="">Options..</option>
                                                <option @if ($edu->exam == 'Secondary School Certificate') selected @endif >Secondary School Certificate</option>
                                                <option @if ($edu->exam == 'Higher Secondary Certificate') selected @endif >Higher Secondary Certificate</option>
                                                <option @if ($edu->exam == 'Honours') selected @endif >Honours</option>
                                                <option @if ($edu->exam == 'Masters') selected @endif >Masters</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Institution<span
                                                    class="required">*</span> @error('institute[]')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror</label>
                                            <input type="text" name="institute[]" class="form-control"
                                                value="{{ $edu->institute }}" placeholder="Institution">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Subject</label>
                                            <input type="text" name="subject[]" class="form-control"
                                                value="{{ $edu->subject }}" placeholder="Subject">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Passing
                                                Year</label>
                                            <input type="number" name="pass_year[]" class="form-control"
                                                value="{{ $edu->pass_year }}" placeholder="Passing Year">
                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Group</label>
                                            <input type="text" name="group[]" class="form-control"
                                                value="{{ $edu->group }}" placeholder="Group">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Seasson</label>
                                            <input type="text" name="session_year[]" class="form-control"
                                                value="{{ $edu->session_year }}" placeholder="Seasson">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Result<span
                                                    class="required">*</span></label>
                                            <input type="number" name="result[]" class="form-control"
                                                value="{{ $edu->result }}" step="0.01" placeholder="Result">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            @empty
                            <div class="qualification">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="">
                                            <label class="form-label text-primary">Select
                                                Examination<span class="required">*</span> @error('exam[]')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror</label>
                                            <select name="exam[]"
                                                class="default-select form-control wide form-control mb-3">
                                                <option value="">Options..</option>
                                                <option>Secondary School Certificate</option>
                                                <option>Higher Secondary Certificate</option>
                                                <option>Honours</option>
                                                <option>Masters</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Institution<span
                                                    class="required">*</span> @error('institute[]')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror</label>
                                            <input type="text" name="institute[]" class="form-control"
                                                value="{{ old('institute[]') }}" placeholder="Institution">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Subject</label>
                                            <input type="text" name="subject[]" class="form-control"
                                                value="{{ old('subject[]') }}" placeholder="Subject">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Passing
                                                Year</label>
                                            <input type="number" name="pass_year[]" class="form-control"
                                                value="{{ old('pass_year[]') }}" placeholder="Passing Year">
                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Group</label>
                                            <input type="text" name="group[]" class="form-control"
                                                value="{{ old('group[]') }}" placeholder="Group">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Seasson</label>
                                            <input type="text" name="session_year[]" class="form-control"
                                                value="{{ old('session_year[]') }}" placeholder="Seasson">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Result<span
                                                    class="required">*</span></label>
                                            <input type="number" name="result[]" class="form-control"
                                                value="{{ old('result[]') }}" step="0.01" placeholder="Result">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            @endforelse
                            <button type="button" class="btn btn-primary" id="addMore">Add More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Date of Birth</label>
                                    <input type="Date" name="dob" class="form-control"
                                        value="{{ $employee->dob }}" placeholder="First Name">
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Blood Group</label>
                                    <select id="selectValue" name="blood_group"
                                        class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        <option @if ($employee->blood_group == "A+") selected @endif>A+</option>
                                        <option @if ($employee->blood_group == "A-") selected @endif>A-</option>
                                        <option @if ($employee->blood_group == "B+") selected @endif>B+</option>
                                        <option @if ($employee->blood_group == "B-") selected @endif>B- </option>
                                        <option @if ($employee->blood_group == "AB+") selected @endif>AB+</option>
                                        <option @if ($employee->blood_group == "AB-") selected @endif>AB-</option>
                                        <option @if ($employee->blood_group == "O+") selected @endif>O+</option>
                                        <option @if ($employee->blood_group == "O-") selected @endif>O-</option>
                                        <option @if ($employee->blood_group == "Others") selected @endif>Others</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Religion</label>
                                    <select name="religion" class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        <option @if ($employee->religion == "Islam") selected @endif>Islam</option>
                                        <option @if ($employee->religion == "Hinduism") selected @endif>Hinduism</option>
                                        <option @if ($employee->religion == "Christianity") selected @endif>Christianity</option>
                                        <option @if ($employee->religion == "Buddhism") selected @endif>Buddhism</option>
                                        <option @if ($employee->religion == "Others") selected @endif>Others</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Present Address</label>
                                    <input type="text" name="present_address" class="form-control"
                                        value="{{ $employee->present_address }}" placeholder="Enter your present address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label text-primary">Marital
                                        Status</label>
                                    <select name="marital_status"
                                        class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        <option @if ($employee->marital_status == "Unmarried") selected @endif>Unmarried</option>
                                        <option @if ($employee->marital_status == "Married") selected @endif>Married</option>
                                        <option @if ($employee->marital_status == "Divorced") selected @endif>Divorced</option>
                                        <option @if ($employee->marital_status == "Widow") selected @endif>Widow</option>
                                        <option @if ($employee->marital_status == "Single") selected @endif>Single</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Gender</label>
                                    <select name="gender" class="default-select form-control wide form-control mb-3">
                                        <option value="">Options</option>
                                        <option @if ($employee->gender == "Male") selected @endif>Male</option>
                                        <option @if ($employee->gender == "Female") selected @endif>Female</option>
                                        <option @if ($employee->gender == "Others") selected @endif>Others</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">NID</label>
                                    <input type="number" name="nid" class="form-control"
                                        value="{{ $employee->nid }}" placeholder="NID">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Permanent Address</label>
                                    <input type="text" name="permanent_address" class="form-control"
                                        value="{{ $employee->permanent_address }}"
                                        placeholder="Enter your Permanent address">
                                </div>
                                <div class="float-end">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')
    <script src="{{ asset('assets') }}/vendor/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true
            }).datepicker('update', new Date());
        });
    </script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
        $('.remove-img').on('click', function() {
            var imageUrl = "images/no-img-avatar.png";
            $('.avatar-preview, #imagePreview').removeAttr('style');
            $('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
        });

        $('#edu_btn').on('click', function() {
            $('edu_panel').removeClass('d-none');
        });

        //password matched
        $('.confirm_pass').on('keyup', function() {
            var pwd2 = $(this).val();
            var pwd1 = $('.pass').val();
            if (pwd1 == pwd2) {
                $('#pass_check_msg').html(" Password Matched");
                $('#pass_check_msg').addClass('text-success');
                $('#pass_check_msg').removeClass('text-danger');

            } else {
                $('#pass_check_msg').html(" Password did not matched");
                $('#pass_check_msg').addClass('text-danger');
                $('#pass_check_msg').removeClass('text-success');
            }
        })
    </script>
    {{-- <script>
        $(document).ready(function() {
            $('.pass_show').on('click', function() {
                $('.confirm_pass').attr('type', 'text');
                $('.pass').attr('type', 'text');
                $('.pass_show').addClass('d-none');
                $('.pass_hide').removeClass('d-none');
            });
            $('.pass_hide').on('click', function() {
                $('.confirm_pass').attr('type', 'password');
                $('.pass').attr('type', 'password');
                $('.pass_hide').addClass('d-none');
                $('.pass_show').removeClass('d-none');
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#department').on('change', function() {
                var departmentId = $(this).val();
                var positionSelect = $('#position');
                positionSelect.prop('disabled', true); // Disable "Position" select while loading data.

                $.ajax({
                    url: '/get-positions/' + departmentId,
                    type: 'GET',
                    success: function(data) {
                        //console.log(data);
                        $('.position').html(data);
                    },
                    error: function(xhr) {
                        // Handle errors here.
                    }
                });
            });
        });
    </script>
    <script>
        function removeQualification() {
            const qualificationDivs = document.querySelectorAll('.qualification');
            if (qualificationDivs.length > 1) {
                const lastQualification = qualificationDivs[qualificationDivs.length - 1];
                lastQualification.parentNode.removeChild(lastQualification);
            }
        }

        document.getElementById('addMore').addEventListener('click', function() {
            const qualificationDiv = document.createElement('div');
            qualificationDiv.className = 'qualification';

            const count = document.querySelectorAll('.qualification').length + 1;
            qualificationDiv.innerHTML = `
           <div class="qualification">
                               <div class="row">
                                   <div class="col-xl-12 col-sm-12">
                                       <div class="">
                                           <label class="form-label text-primary">Select
                                               Examination<span class="required">*</span></label>
                                               <select name="exam[]"
                                                class="default-select form-control wide form-control mb-3">
                                                <option value="">Options..</option>
                                                <option>Secondary School Certificate</option>
                                                <option>Higher Secondary Certificate</option>
                                                <option>Honours</option>
                                                <option>Masters</option>
                                            </select>
                                       </div>
                                   </div>
                                   <div class="col-xl-6 col-sm-6">
                                       <div class="mb-3">
                                           <label class="form-label text-primary">Institution<span
                                                   class="required">*</span></label>
                                           <input type="text" name="institute[]" class="form-control"
                                               placeholder="Institution">
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label text-primary">Subject</label>
                                           <input type="text" name="subject[]" class="form-control"
                                               placeholder="Subject">
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label text-primary">Passing
                                               Year<span class="required">*</span></label>
                                           <input type="number" name="pass_year[]" class="form-control"
                                               placeholder="Passing Year">
                                       </div>

                                   </div>

                                   <div class="col-xl-6 col-sm-6">
                                       <div class="mb-3">
                                           <label class="form-label text-primary">Group<span
                                                   class="required">*</span></label>
                                           <input type="text" name="group[]"
                                               class="form-control"placeholder="Group">
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label text-primary">Seasson</label>
                                           <input type="text" name="session_year[]" class="form-control"
                                               placeholder="Seasson">
                                       </div>
                                       <div class="mb-3">
                                           <label class="form-label text-primary">Result<span
                                                   class="required">*</span></label>
                                           <input type="number" name="result[]" class="form-control" step="0.01" 
                                               placeholder="Result">
                                       </div>
                                   </div>
                               </div>
                               <hr>
                           </div>
                           <button type="button" class="btn btn-danger float-start me-2" onclick="removeQualification()">Remove</button>
       `;

            document.getElementById('qualificationForm').insertBefore(qualificationDiv, document.getElementById(
                'addMore'));
        });
    </script>
@endpush
