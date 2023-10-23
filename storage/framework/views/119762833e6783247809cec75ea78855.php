

<?php $__env->startSection('title'); ?>
    Assign Role Permission
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('header'); ?>
<?php echo e(__('messages.assign.role.permission')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('messages.assign.user.role')); ?></a></li>
            <li><a href="<?php echo e(route('roles.add')); ?>"><?php echo e(__('messages.add.new.role')); ?></a></li>
            <li><a href="<?php echo e(route('permission.add')); ?>"><?php echo e(__('messages.add.new.permission')); ?></a></li>
            <li><a href="<?php echo e(route('permission.assign')); ?>"><?php echo e(__('messages.give.role.permission')); ?></a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('permission.assign.create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label text-primary"><?php echo e(__('messages.select.roles')); ?><span class="required">*</span></label>
                        <select id="select-role" name="role_id">
                            <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <option><?php echo e(__('messages.no.role.found')); ?></option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-primary"><?php echo e(__('messages.select.permissions')); ?>

                            <span class="required">*</span></label>
                        <select class="multi-select" name="permission[]" multiple="multiple">
                            <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <option><?php echo e(__('messages.no.permission.found')); ?></option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit"><?php echo e(__('messages.submit')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo e(__('messages.role.name')); ?></th>
                            <th><?php echo e(__('messages.permissions')); ?></th>
                            <th class="text-end"><?php echo e(__('messages.action')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($key+1); ?></td>
                            <td><?php echo e($role->name); ?></td>
                            <td><?php echo $role->permissions()->pluck('name')->implode(', ') ? $role->permissions()->pluck('name')->implode(', ') : '<span class="badge badge-danger">Not Assigned</span>'; ?>

                            </td>
                            
                            <td>
                                <ul class="action_btn">
                                    <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                                    <li><a href="#"><i class="fa fa-trash"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="text-center"><?php echo e(__('messages.no.data.found')); ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
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
        $('#select-user').select2();

        // Initialize Select2 for the "Select Shift" dropdown
        $('#select-role').select2();
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/settings/role/access.blade.php ENDPATH**/ ?>