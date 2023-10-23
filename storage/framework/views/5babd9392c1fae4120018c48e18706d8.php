

<?php $__env->startSection('title'); ?>
    Employee
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('header'); ?>
    Employee List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title flex-wrap">
                <div class="input-group search-area mb-md-0 mb-3">
                    <input type="text" class="form-control" placeholder="Search here...">
                    <span class="input-group-text"><a href="javascript:void(0)">
                            <svg width="15" height="15" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z"
                                    fill="#01A3FF" />
                            </svg>
                        </a></span>
                </div>
                <div>
                    <select class="image-select bs-select dashboard-select me-3" aria-label="Default">
                        <option selected>Newest</option>
                        <option value="1">Oldest</option>
                        <option value="2">Recent</option>
                    </select>
                    <!-- Button trigger modal -->
                    <a href="<?php echo e(route('emp.create')); ?>" type="button" class="btn btn-primary" data-bs-toggle="modals"
                        data-bs-target="#exampleModal">
                        + New Employee
                    </a>
                </div>
            </div>
        </div>
        <!--column-->
        <div class="col-xl-12 wow fadeInUp" data-wow-delay="0.5s">
            <div class="table-responsive full-data">
                <table class="table-responsive-lg display dataTablesCard student-tab dataTable no-footer table ov_auto"
                    id="example-student">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                            </th>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Join Date</th>
                            <th>Designation</th>
                            <th>Contact</th>
                            <th>Grade</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <div class="checkbox align-self-center me-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="check8" required="">
                                        <label class="custom-control-label" for="check8"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="trans-list">
                                    <img src="<?php echo e(asset('assets/')); ?>/images/trans/1.jpg" alt=""
                                        class="avatar avatar-sm me-3">
                                    <h4 class="d-block"><?php echo e($emp->user->name); ?></h4>
                                </div>
                            </td>
                            <td><span class="text-primary font-w600"><?php echo e($emp->employee_id); ?></span></td>
                            <td>
                                <div class="date"><?php echo e($emp->join_date); ?></div>
                            </td>
                            <td>
                                <h6 class="mb-0"><?php echo e($emp->position->position_name); ?></h6>
                                <span><?php echo e($emp->department->dept_name); ?></span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <div class="icon-box icon-box-sm bg-light me-2">
                                        <a href="tel:<?php echo e($emp->phone_number); ?>"><i class="fa-solid fa-phone fa-2xs"></i></a>
                                    </div>
                                    <div class="icon-box icon-box-sm bg-light">
                                        <a href="mailto:<?php echo e($emp->user->email); ?>"><i class="fa-solid fa-envelope fa-2xs"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="badge bg-secondary">
                                    VII A
                                </div>
                            </td>
                            <td>
                                <ul class="action_btn">
                                    <li><a href="<?php echo e(route('emp.show', $emp->username)); ?>"><i class="fa-solid fa-circle-info fa-beat"
                                                style="color: #12a561;"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-pen-to-square"
                                                style="color: #347af4;"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-trash" 
                                                style="color: #ff0000;"></i></a></li>
                                    <li><div class="dropdown custom-dropdown float-end">
                                        <div class="btn sharp tp-btn " data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-caret-down"></i>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal">Set As Team Leader</a>
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal_1">Set As Team Member</a>
                                        </div>
                                    </div></li>
                                </ul>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="8" class="text-center">No Employee found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/column-->

        
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/plugins-init/datatables.init.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/wow-master/dist/wow.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/employee/list.blade.php ENDPATH**/ ?>