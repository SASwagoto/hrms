

<?php $__env->startSection('title'); ?>
    Add Employee
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css">
    <link href="<?php echo e(asset('assets')); ?>/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
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
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Add Employee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form id="employeeForm" action="" method="post">
        <?php echo csrf_field(); ?>
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
                                <div class="avatar-upload">
                                    <div class="avatar-preview">
                                        <div id="imagePreview"
                                            style="background-image: url(<?php echo e(asset('assets')); ?>/images/no-img-avatar.png);">
                                        </div>
                                    </div>
                                    <div class="change-btn mb-lg-0 mb-3 mt-2">
                                        <input type='file' class="form-control d-none" id="imageUpload"
                                            accept=".png, .jpg, .jpeg">
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
                                                Name<span class="required">*</span></label>
                                            <input type="text" name="first_name" class="form-control"
                                                placeholder="First Name">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">User Name<span
                                                    class="required">*</span></label>
                                            <div class="d-flex">
                                                <input type="text" name="username" class="form-control"
                                                    placeholder="User Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Last
                                                Name<span class="required">*</span></label>
                                            <input type="text" name="last_name" class="form-control" placeholder="Wally">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Employee ID<span
                                                    class="required">*</span></label>
                                            <input type="number" name="emp_id" class="form-control" placeholder="123456">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="">
                                    <label class="form-label text-primary">Select
                                        Department<span class="required">*</span></label>
                                    <select name="dept_name" class="default-select form-control wide form-control mb-3">
                                        <option value="">Software Engineer</option>
                                        <option value="">Sales Executive</option>
                                        <option value="">HR Manager</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Select
                                        Designation<span class="required">*</span></label>
                                    <select name="position" class="default-select form-control wide form-control mb-3">
                                        <option value="">Junior Software Engineer</option>
                                        <option value="">Software Engineer</option>
                                        <option value="">Digitak Marketing</option>>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Email<span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="hello@example.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Password<span class="required">*</span></label>
                                    <input type="password" name="password" class="form-control pass" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Phone
                                        Number<span class="required">*</span></label>
                                    <input type="number" name="phn_number" class="form-control"
                                        placeholder="+123456789">
                                </div>
                                <div class="password_container mb-3">
                                    <label class="form-label text-primary">Confirm Password<span
                                            class="required">*</span><span id="pass_check_msg"
                                            class=""></span></label>
                                    <input type="password" name="confirm_password" class="form-control confirm_pass"
                                        placeholder="Confirm Password">
                                    <a href="javascript:void(0);" class="eye_btn pass_show"><i class="fa-solid fa-eye fa-lg"></i></a>
                                    <a href="javascript:void(0);" class="eye_btn pass_hide d-none"><i class="fa-solid fa-eye-slash fa-lg"></i></i></a>
                                </div>
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
                            <div class="qualification">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="">
                                            <label class="form-label text-primary">Select
                                                Examination<span class="required">*</span></label>
                                            <select name="exam[]"
                                                class="default-select form-control wide form-control mb-3">
                                                <option value="">Secondary School Certificate</option>
                                                <option value="">Higher Secondary Certificate</option>
                                                <option value="">Honours</option>
                                                <option value="">Masters</option>
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
                                            <label class="form-label text-primary">Subject<span
                                                    class="required">*</span></label>
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
                                            <label class="form-label text-primary">Seasson<span
                                                    class="required">*</span></label>
                                            <input type="text" name="session[]" class="form-control"
                                                placeholder="Seasson">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Result<span
                                                    class="required">*</span></label>
                                            <input type="number" name="result[]" class="form-control"
                                                placeholder="Result">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
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
                                    <label class="form-label text-primary">Date of
                                        Birth<span class="required">*</span></label>
                                    <input type="Date" name="dob" class="form-control" placeholder="First Name">
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Blood
                                        Group<span class="required">*</span></label>
                                    <select id="selectValue" name="blood_group" class="default-select form-control wide form-control mb-3">
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B- </option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Religion<span class="required">*</span></label>
                                    <select name="religion" class="default-select form-control wide form-control mb-3">
                                        <option value="">Islam</option>
                                        <option value="">Hinduism</option>
                                        <option value="">Christianity</option>
                                        <option value="">Buddhism</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label text-primary">Marital
                                        Status<span class="required">*</span></label>
                                    <select name="marital_status"
                                        class="default-select form-control wide form-control mb-3">
                                        <option value="">Unmarried</option>
                                        <option value="">Married</option>
                                        <option value="">Divorced</option>
                                        <option value="">Widow</option>
                                        <option value="">Single</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Gender<span class="required">*</span></label>
                                    <select name="gender" class="default-select form-control wide form-control mb-3">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">NID<span class="required">*</span></label>
                                    <input type="number" name="nid_num" class="form-control" placeholder="NID">
                                </div>
                                <div class="float-end">
                                    <button type="button" id="saveDraftButton" class="btn btn-info">Save as
                                        draft</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-datetimepicker/js/moment.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
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
                                                <option value="">Secondary School Certificate</option>
                                                <option value="">Higher Secondary Certificate</option>
                                                <option value="">Honours</option>
                                                <option value="">Masters</option>
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
                                            <label class="form-label text-primary">Subject<span
                                                    class="required">*</span></label>
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
                                            <label class="form-label text-primary">Seasson<span
                                                    class="required">*</span></label>
                                            <input type="text" name="session[]" class="form-control"
                                                placeholder="Seasson">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Result<span
                                                    class="required">*</span></label>
                                            <input type="number" name="result[]" class="form-control"
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

    <script>
        // Load saved draft when the page loads
        window.addEventListener('load', function() {
            const savedDraft = JSON.parse(localStorage.getItem('employeeDraft'));
            
            if (savedDraft) {
                // Populate form fields with the saved draft data
                document.getElementsByName('first_name')[0].value = savedDraft.first_name || '';
                document.getElementsByName('last_name')[0].value = savedDraft.last_name || '';
                document.getElementsByName('emp_id')[0].value = savedDraft.emp_id || '';
                document.getElementsByName('username')[0].value = savedDraft.username || '';
                document.getElementsByName('dept_name')[0].value = savedDraft.dept_name || '';
                document.getElementsByName('position')[0].value = savedDraft.position || '';
                document.getElementsByName('email')[0].value = savedDraft.email || '';
                document.getElementsByName('password')[0].value = savedDraft.password || '';
                document.getElementsByName('phn_number')[0].value = savedDraft.phn_number || '';
                document.getElementsByName('confirm_password')[0].value = savedDraft.confirm_password || '';
                document.getElementsByName('exam[]')[0].value = savedDraft.exam || '';
                document.getElementsByName('institute[]')[0].value = savedDraft.institute || '';
                document.getElementsByName('subject[]')[0].value = savedDraft.subject || '';
                document.getElementsByName('pass_year[]')[0].value = savedDraft.pass_year || '';
                document.getElementsByName('group[]')[0].value = savedDraft.group || '';
                document.getElementsByName('session[]')[0].value = savedDraft.session || '';
                document.getElementsByName('result[]')[0].value = savedDraft.result || '';
                document.getElementsByName('dob')[0].value = savedDraft.dob || '';
                document.getElementsByName('blood_group')[0].value = savedDraft.blood_group || '';
                document.getElementsByName('religion')[0].value = savedDraft.religion || '';
                document.getElementsByName('marital_status')[0].value = savedDraft.marital_status || '';
                document.getElementsByName('gender')[0].value = savedDraft.gender || '';
                document.getElementsByName('nid_num')[0].value = savedDraft.nid_num || '';
                // ... Continue for other form fields ...
            }
        });

        // Save the form data as a draft when the "Save as Draft" button is clicked
        document.getElementById('saveDraftButton').addEventListener('click', function() {
            const formData = {
                // Get and store the values of your specific form fields
                first_name: document.getElementsByName('first_name')[0].value,
                last_name: document.getElementsByName('last_name')[0].value,
                emp_id: document.getElementsByName('emp_id')[0].value,
                username: document.getElementsByName('username')[0].value,
                dept_name: document.getElementsByName('dept_name')[0].value,
                position: document.getElementsByName('position')[0].value,
                email: document.getElementsByName('email')[0].value,
                password: document.getElementsByName('password')[0].value,
                phn_number: document.getElementsByName('phn_number')[0].value,
                confirm_password: document.getElementsByName('confirm_password')[0].value,
                exam: document.getElementsByName('exam[]')[0].value,
                institute: document.getElementsByName('institute[]')[0].value,
                subject: document.getElementsByName('subject[]')[0].value,
                pass_year: document.getElementsByName('pass_year[]')[0].value,
                group: document.getElementsByName('group[]')[0].value,
                session: document.getElementsByName('session[]')[0].value,
                result: document.getElementsByName('result[]')[0].value,
                dob: document.getElementsByName('dob')[0].value,
                blood_group: document.getElementsByName('blood_group')[0].value,
                religion: document.getElementsByName('religion')[0].value,
                marital_status: document.getElementsByName('marital_status')[0].value,
                gender: document.getElementsByName('gender')[0].value,
                nid_num: document.getElementsByName('nid_num')[0].value,
                // ... Continue for other form fields ...
            };

            // Save the draft data to local storage
            localStorage.setItem('employeeDraft', JSON.stringify(formData));

            alert('Draft saved!');
        });

    </script>
    <script>
        $( document ).ready(function() {
            $('.pass_show').on('click', function(){
                $('.confirm_pass').attr('type', 'text');
                $('.pass').attr('type', 'text');
                $('.pass_show').addClass('d-none');
                $('.pass_hide').removeClass('d-none');
            });
            $('.pass_hide').on('click', function(){
                $('.confirm_pass').attr('type', 'password');
                $('.pass').attr('type', 'password');
                $('.pass_hide').addClass('d-none');
                $('.pass_show').removeClass('d-none');
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/employee/add.blade.php ENDPATH**/ ?>