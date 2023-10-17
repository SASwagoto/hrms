

<?php $__env->startSection('title'); ?>
    Add New Role
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
Add New Role
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="<?php echo e(route('roles.index')); ?>">Assign User Role</a></li>
            <li><a href="<?php echo e(route('roles.add')); ?>">Add New Role</a></li>
            <li><a href="<?php echo e(route('permission.add')); ?>">Add New Permission</a></li>
            <li><a href="<?php echo e(route('permission.assign')); ?>">Give Role Permission</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('roles.create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="role">Role Name</label>
                    <input type="text" name="role_name" required class="form-control" placeholder="Enter Role Name" id="role">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
                            <th>Role Name</th>
                            <th>Permissions</th>
                            <th class="text-end">Action</th>
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
                            <td colspan="4" class="text-center">No Data Found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/settings/role/add_role.blade.php ENDPATH**/ ?>