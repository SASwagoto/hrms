

<?php $__env->startSection('title'); ?>
    Department
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Department
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Department</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <input type="text" required name="dept_name" class="form-control input-default"
                                    placeholder="Enter Department Name">
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
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Department List</h4>
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
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <th><?php echo e($key + 1); ?></th>
                                                <td><?php echo e($dept->dept_name); ?></td>
                                                <td><span
                                                        class="badge <?php echo e($dept->isActive ? 'badge-success' : 'badge-danger'); ?> light"><?php echo e($dept->isActive ? 'Active' : 'Inactive'); ?></span>
                                                </td>
                                                <td>
                                                    <ul class="action_btn">
                                                        <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                                    style="color: #347af4;"></i></a></li>
                                                        <li><a href="#" onclick="editable();"><i
                                                                    class="fa-solid fa-trash fa-xl"
                                                                    style="color: #ff0000;"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="4" class="text-center">No Department Found</td>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/department/list.blade.php ENDPATH**/ ?>