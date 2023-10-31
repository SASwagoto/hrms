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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Employee Schedule</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="basic-form">
                                <form action="" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label class="form-label text-primary">Select Employee<span
                                                class="required">*</span></label>
                                        <select id="employee-select" name="user_id">
                                            <option value="">Employee 1</option>
                                            <option value="">Employee 2</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label text-primary">Fiscal year<span
                                                class="required">*</span></label>
                                                <input type="date" class="form-control" placeholder="Fiscal year">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label class="form-label text-primary">Tax Method<span
                                        class="required">*</span></label>
                                <div class="d-flex">
                                    <select id="tax-method" name="user_id">
                                        <option value="">Value</option>
                                        <option value="">Percentage</option>
                                    </select>
                                    <input type="text" class="form-control w-50 ms-3" id="exampleFormControlInput7"
                                        placeholder="Value">
                                </div>
                            </div><br>
                            <div class="mb-3" style="padding-top: 6px">
                                <button class="btn btn-primary" type="submit">Submit</button>
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
        $('#employee-select').select2();
    </script>

    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/payroll/tax.blade.php ENDPATH**/ ?>