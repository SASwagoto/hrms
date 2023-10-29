<?php $__env->startSection('title'); ?>
    <?php echo e($employee->username); ?> :: Employee Details
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets')); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <style>
        ul.edu_list {
            float: left;
        }

        ul.edu_list li {
            float: left;
            margin-right: 100px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('header'); ?>
<?php echo e($employee->user->name); ?> Details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
                                    <?php if($employee->profile_img): ?>
                                    <img src="<?php echo e(asset('storage/employee/'.$employee->profile_img)); ?>" alt="" class="avatar avatar-xxl">
                                    <?php else: ?>
                                    <img src="<?php echo e(asset('assets')); ?>/images/av.jpg" alt="" class="avatar avatar-xxl">
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="hd">
                                    <h2 class="mb-0"><?php echo e($employee->user->name); ?></h2>
                                    <p class="text-primary font-w600 hd"><?php echo e($employee->position->position_name); ?></p>
                                </div>
                                <div class="basic-form mt-3 ef d-none" style="width: 500px;">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default"
                                            value="<?php echo e($employee->user->name); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <select class="default-select form-control wide form-control mb-3">
                                            <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($position->id); ?>"><?php echo e($position->position_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <h5 class="hd mb-0"><a href="mailto:<?php echo e($employee->user->email); ?>"><?php echo e($employee->user->email); ?></a>
                                        </h5>
                                        <div class="basic-form ef d-none">
                                            <input type="email" class="form-control input-default"
                                                value="<?php echo e($employee->user->email); ?>" style="width: 445px">
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
                                        <h5 class="hd mb-0"><?php echo e($employee->department->dept_name); ?></h5>
                                        <div class="basic-form ef d-none" style="width: 445px">
                                            <select class="default-select form-control wide form-control mb-3">
                                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($dept->id); ?>"><?php echo e($dept->dept_name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <h5 class="hd mb-0"><a href="tel:<?php echo e($employee->phone_number); ?>"><?php echo e($employee->phone_number); ?></a></h5>
                                        <div class="basic-form ef d-none">
                                            <input type="text" class="form-control put-default" value="<?php echo e($employee->phone_number); ?>"
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
                                        <h5 class="hd mb-0"><?php echo e($employee->team); ?></h5>
                                        <div class="basic-form ef d-none">
                                            <input type="text" class="form-control input-default"
                                                value="<?php echo e($employee->present_address); ?>" style="width: 445px">
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
                            <?php if($employee->education): ?>
                            <ul class="edu_list d-block w-100 mb-3">
                                <?php $__currentLoopData = $employee->education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <h6><?php echo e($education->exam); ?></h6>
                                    <p><strong>institute: </strong><?php echo e($education->institute); ?><br>
                                        <strong>Subject/Group: </strong><?php echo e($education->subject); ?> <?php echo e($education->group); ?><br>
                                        <strong>Session: </strong><?php echo e($education->session_year); ?><br>
                                        <strong>Passing Year: </strong><?php echo e($education->pass_year); ?><br>
                                        <strong>Result: </strong><?php echo e($education->result); ?>

                                    </p>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php else: ?>
                            <h6>No Educational Information Found</h6>
                            <?php endif; ?>
                        </div>
                        <div class="col-6">
                            <h5>Personal Information</h5><hr>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Gender</th>
                            <th>:</th>
                            <td><?php echo e($employee->gender); ?></td>
                        </tr>
                        <tr>
                            <th>Religion</th>
                            <th>:</th>
                            <td><?php echo e($employee->religion); ?></td>
                        </tr>
                        <tr>
                            <th>Blood Group</th>
                            <th>:</th>
                            <td><?php echo e($employee->blood_group); ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <th>:</th>
                            <td><?php echo e($employee->dob); ?></td>
                        </tr>
                        <tr>
                            <th>NID Number</th>
                            <th>:</th>
                            <td><?php echo e($employee->nid); ?></td>
                        </tr>
                        <tr>
                            <th>Marital Status</th>
                            <th>:</th>
                            <td><?php echo e($employee->marital_status); ?></td>
                        </tr>
                        <tr>
                            <th>Present Address</th>
                            <th>:</th>
                            <td><?php echo e($employee->present_address); ?></td>
                        </tr>
                        <tr>
                            <th>Permanent Address</th>
                            <th>:</th>
                            <td><?php echo e($employee->permanent_address); ?></td>
                        </tr>
                    </tbody>
                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <!-- Apex Chart -->
    <script src="<?php echo e(asset('assets')); ?>/vendor/apexchart/apexchart.js"></script>
    <!-- Datatable -->
    <script src="<?php echo e(asset('assets')); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/plugins-init/datatables.init.js"></script>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/employee/show.blade.php ENDPATH**/ ?>