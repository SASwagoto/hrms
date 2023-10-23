

<?php $__env->startSection('title'); ?>
    Position
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
<link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
   Position
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-5 col-lg-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Position</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="<?php echo e(route('pos.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Department<span
                                    class="required">*</span></label>
                            <select id="department-select" class="form-control" name="dept_id">
                                <option value="">Options..</option>
                                <?php $__empty_1 = true; $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($dept->id); ?>"><?php echo e($dept->dept_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option>No Department Found</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary" for="">Position Name <span class="required">*</span></label>
                            <input type="text" name="pos_name" required class="form-control input-default "
                                placeholder="Enter Position Name">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-lg-7">
        <div class="card" id="bootstrap-table4">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0 px-3">
                <div>
                    <h4 class="card-title">Position List</h4>
                </div>
            </div>

            <!-- /tab-content -->
            <div class="tab-content" id="myTabContent-3">
                <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel"
                    aria-labelledby="home-tab-3">
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th><?php echo e($key+1); ?></th>
                                        <td><?php echo e($pos->position_name); ?></td>
                                        <td><?php echo e($pos->department->dept_name); ?></td>
                                        <td><span
                                            class="badge <?php echo e($pos->isActive ? 'badge-success' : 'badge-danger'); ?> light"><?php echo e($pos->isActive ? 'Active' : 'Inactive'); ?></span>
                                        </td>
                                        <td>
                                            <ul class="action_btn">
                                                <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                    style="color: #347af4;"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-trash fa-xl"
                                                            style="color: #ff0000;"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="5" class="text-center">No Data Found</td>
                                        </tr>
                                    <?php endif; ?>
                                    
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
<script src="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendor/select2/js/select2.full.min.js"></script>
<script src="<?php echo e(asset('assets')); ?>/js/plugins-init/select2-init.js"></script>
<script>
    // Initialize Select2 for the "Select Employee" dropdown
    $('#department-select').select2();
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/department/position.blade.php ENDPATH**/ ?>