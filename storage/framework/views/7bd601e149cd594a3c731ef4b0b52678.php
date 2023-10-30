<?php $__env->startSection('title'); ?>
    Edit <?php echo e($employee->user->name); ?> Profile
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
Edit <?php echo e($employee->user->name); ?> Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form id="employeeForm" action="<?php echo e(route('emp.update', $employee->username)); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
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
                                    <input type="date" name="join_date" class="form-control" value="<?php echo e($employee->join_date); ?>">
                                </div>
                                <div class="avatar-upload">
                                    <div class="avatar-preview">
                                        <?php if($employee->profile_img): ?>
                                        <div id="imagePreview" style="background-image: url(<?php echo e(asset('storage/employee/'.$employee->profile_img)); ?>);">
                                        </div>
                                        <?php else: ?>
                                        <div id="imagePreview" style="background-image: url(<?php echo e(asset('assets')); ?>/images/no-img-avatar.png);">
                                        </div>
                                        <?php endif; ?>
                                        
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
                                                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </label>
                                            <input type="text" name="first_name" class="form-control"
                                                value="<?php echo e($employee->first_name); ?>" placeholder="First Name">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">User Name<span class="required">* </span>
                                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </label>
                                            <div class="d-flex">
                                                <input type="text" name="username" class="form-control"
                                                    value="<?php echo e($employee->username); ?>" placeholder="User Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Last
                                                Name<span class="required">*</span> <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </label>
                                            <input type="text" name="last_name" class="form-control"
                                                value="<?php echo e($employee->last_name); ?>" placeholder="Wally">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Employee ID<span class="required">*
                                                </span> <?php $__errorArgs = ['employee_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </label>
                                            <input type="number" name="employee_id" class="form-control"
                                                value="<?php echo e($employee->employee_id); ?>" placeholder="123456">
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
                                        <?php $__errorArgs = ['dept_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </label>
                                    <select name="dept_id" id="department"
                                        class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option <?php if($employee->dept_id == $dept->id): ?> selected <?php endif; ?> value="<?php echo e($dept->id); ?>"><?php echo e($dept->dept_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <option value="">No Department found</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="position mb-3">
                                    <label class="form-label text-primary">Select
                                        positions<span class="required">*</span>
                                        <?php $__errorArgs = ['position_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </label>
                                    <select name="position_id" class="default-select form-control wide form-control mb-3">
                                        <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($employee->position_id == $position->id): ?>
                                            selected
                                        <?php endif; ?> value="<?php echo e($position->id); ?>"><?php echo e($position->position_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Email<span class="required">* </span>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </label>
                                    <input type="email" name="email" class="form-control" value="<?php echo e($employee->user->email); ?>"
                                        placeholder="hello@example.com">
                                </div>
                                
                            </div>
                            <div class="col-xl-4">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Phone
                                        Number<span class="required">* </span> <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </label>
                                    <input type="number" name="phone_number" class="form-control"
                                        value="<?php echo e($employee->phone_number); ?>" placeholder="+123456789">
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
                            <?php $__empty_1 = true; $__currentLoopData = $employee->education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="qualification">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="">
                                            <label class="form-label text-primary">Select
                                                Examination<span class="required">*</span> <?php $__errorArgs = ['exam[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                            <select name="exam[]"
                                                class="default-select form-control wide form-control mb-3">
                                                <option value="">Options..</option>
                                                <option <?php if($edu->exam == 'Secondary School Certificate'): ?> selected <?php endif; ?> >Secondary School Certificate</option>
                                                <option <?php if($edu->exam == 'Higher Secondary Certificate'): ?> selected <?php endif; ?> >Higher Secondary Certificate</option>
                                                <option <?php if($edu->exam == 'Honours'): ?> selected <?php endif; ?> >Honours</option>
                                                <option <?php if($edu->exam == 'Masters'): ?> selected <?php endif; ?> >Masters</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Institution<span
                                                    class="required">*</span> <?php $__errorArgs = ['institute[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                            <input type="text" name="institute[]" class="form-control"
                                                value="<?php echo e($edu->institute); ?>" placeholder="Institution">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Subject</label>
                                            <input type="text" name="subject[]" class="form-control"
                                                value="<?php echo e($edu->subject); ?>" placeholder="Subject">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Passing
                                                Year</label>
                                            <input type="number" name="pass_year[]" class="form-control"
                                                value="<?php echo e($edu->pass_year); ?>" placeholder="Passing Year">
                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Group</label>
                                            <input type="text" name="group[]" class="form-control"
                                                value="<?php echo e($edu->group); ?>" placeholder="Group">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Seasson</label>
                                            <input type="text" name="session_year[]" class="form-control"
                                                value="<?php echo e($edu->session_year); ?>" placeholder="Seasson">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Result<span
                                                    class="required">*</span></label>
                                            <input type="number" name="result[]" class="form-control"
                                                value="<?php echo e($edu->result); ?>" step="0.01" placeholder="Result">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="qualification">
                                <div class="row">
                                    <div class="col-xl-12 col-sm-12">
                                        <div class="">
                                            <label class="form-label text-primary">Select
                                                Examination<span class="required">*</span> <?php $__errorArgs = ['exam[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
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
                                                    class="required">*</span> <?php $__errorArgs = ['institute[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                            <input type="text" name="institute[]" class="form-control"
                                                value="<?php echo e(old('institute[]')); ?>" placeholder="Institution">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Subject</label>
                                            <input type="text" name="subject[]" class="form-control"
                                                value="<?php echo e(old('subject[]')); ?>" placeholder="Subject">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Passing
                                                Year</label>
                                            <input type="number" name="pass_year[]" class="form-control"
                                                value="<?php echo e(old('pass_year[]')); ?>" placeholder="Passing Year">
                                        </div>

                                    </div>

                                    <div class="col-xl-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Group</label>
                                            <input type="text" name="group[]" class="form-control"
                                                value="<?php echo e(old('group[]')); ?>" placeholder="Group">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Seasson</label>
                                            <input type="text" name="session_year[]" class="form-control"
                                                value="<?php echo e(old('session_year[]')); ?>" placeholder="Seasson">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-primary">Result<span
                                                    class="required">*</span></label>
                                            <input type="number" name="result[]" class="form-control"
                                                value="<?php echo e(old('result[]')); ?>" step="0.01" placeholder="Result">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <?php endif; ?>
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
                                        value="<?php echo e($employee->dob); ?>" placeholder="First Name">
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Blood Group</label>
                                    <select id="selectValue" name="blood_group"
                                        class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        <option <?php if($employee->blood_group == "A+"): ?> selected <?php endif; ?>>A+</option>
                                        <option <?php if($employee->blood_group == "A-"): ?> selected <?php endif; ?>>A-</option>
                                        <option <?php if($employee->blood_group == "B+"): ?> selected <?php endif; ?>>B+</option>
                                        <option <?php if($employee->blood_group == "B-"): ?> selected <?php endif; ?>>B- </option>
                                        <option <?php if($employee->blood_group == "AB+"): ?> selected <?php endif; ?>>AB+</option>
                                        <option <?php if($employee->blood_group == "AB-"): ?> selected <?php endif; ?>>AB-</option>
                                        <option <?php if($employee->blood_group == "O+"): ?> selected <?php endif; ?>>O+</option>
                                        <option <?php if($employee->blood_group == "O-"): ?> selected <?php endif; ?>>O-</option>
                                        <option <?php if($employee->blood_group == "Others"): ?> selected <?php endif; ?>>Others</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Religion</label>
                                    <select name="religion" class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        <option <?php if($employee->religion == "Islam"): ?> selected <?php endif; ?>>Islam</option>
                                        <option <?php if($employee->religion == "Hinduism"): ?> selected <?php endif; ?>>Hinduism</option>
                                        <option <?php if($employee->religion == "Christianity"): ?> selected <?php endif; ?>>Christianity</option>
                                        <option <?php if($employee->religion == "Buddhism"): ?> selected <?php endif; ?>>Buddhism</option>
                                        <option <?php if($employee->religion == "Others"): ?> selected <?php endif; ?>>Others</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Present Address</label>
                                    <input type="text" name="present_address" class="form-control"
                                        value="<?php echo e($employee->present_address); ?>" placeholder="Enter your present address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label text-primary">Marital
                                        Status</label>
                                    <select name="marital_status"
                                        class="default-select form-control wide form-control mb-3">
                                        <option value="">Options..</option>
                                        <option <?php if($employee->marital_status == "Unmarried"): ?> selected <?php endif; ?>>Unmarried</option>
                                        <option <?php if($employee->marital_status == "Married"): ?> selected <?php endif; ?>>Married</option>
                                        <option <?php if($employee->marital_status == "Divorced"): ?> selected <?php endif; ?>>Divorced</option>
                                        <option <?php if($employee->marital_status == "Widow"): ?> selected <?php endif; ?>>Widow</option>
                                        <option <?php if($employee->marital_status == "Single"): ?> selected <?php endif; ?>>Single</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label class="form-label text-primary">Gender</label>
                                    <select name="gender" class="default-select form-control wide form-control mb-3">
                                        <option value="">Options</option>
                                        <option <?php if($employee->gender == "Male"): ?> selected <?php endif; ?>>Male</option>
                                        <option <?php if($employee->gender == "Female"): ?> selected <?php endif; ?>>Female</option>
                                        <option <?php if($employee->gender == "Others"): ?> selected <?php endif; ?>>Others</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">NID</label>
                                    <input type="number" name="nid" class="form-control"
                                        value="<?php echo e($employee->nid); ?>" placeholder="NID">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Permanent Address</label>
                                    <input type="text" name="permanent_address" class="form-control"
                                        value="<?php echo e($employee->permanent_address); ?>"
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/employee/edit.blade.php ENDPATH**/ ?>