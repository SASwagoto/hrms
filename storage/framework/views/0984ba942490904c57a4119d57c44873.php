

<?php $__env->startSection('title'); ?>
    Employee Schedule
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('header'); ?>
    Employee Schedule
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Employee Schedule</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="<?php echo e(route('shift.assign')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label text-primary">Select Employee<span
                                        class="required">*</span></label>
                                <select id="employee-select" name="user_id">
                                    <option value="">Options</option>
                                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <option value="">No user found</option>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label text-primary">Select Shift<span class="required">*</span></label>
                                <select id="shift-select" name="shift_id">
                                    <option value="">Options..</option>
                                    <?php $__empty_1 = true; $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($shift->id); ?>"><?php echo e($shift->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <option value="">No Shifts Found</option>
                                    <?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/select2/js/select2.full.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/plugins-init/select2-init.js"></script>

    <script>
        // Initialize Select2 for the "Select Employee" dropdown
        $('#employee-select').select2();

        // Initialize Select2 for the "Select Shift" dropdown
        $('#shift-select').select2();
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/attendance/schedule.blade.php ENDPATH**/ ?>