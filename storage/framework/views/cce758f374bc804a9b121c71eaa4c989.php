

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
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Department<span
                                    class="required">*</span></label>
                            <select id="department-select" class="form-control" name="dep_id">
                                <option value="IT">IT</option>
                                <option value="MA">Marketing</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="Position" class="form-control input-default "
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
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Admin & HR</td>
                                        <td><span class="badge badge-success light">Active</span>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/department/position.blade.php ENDPATH**/ ?>