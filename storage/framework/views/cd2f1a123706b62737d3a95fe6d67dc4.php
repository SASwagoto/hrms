<?php
use Illuminate\Support\Str;
?>

<?php $__env->startSection('title'); ?>
    Add Leave
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Add Leave
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Leave</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="<?php echo e(route('leave.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label text-primary">Leave Name<span class="required">*</span></label>
                                <input type="text" required name="name" class="form-control input-default"
                                    placeholder="Leave Name">
                            </div>
                            <div>
                                <label class="form-label text-primary">Leave Type<span class="required">*</span></label>
                                <select name="type" class="default-select form-control wide form-control mb-3">
                                    <option value="1">Paid</option>
                                    <option value="2">Unpaid</option>
                                    <option value="3">Half Paid</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Comments</label>
                                <textarea class="form-control" name="comments" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="days" class="form-label text-primary">Days Limitation</label>
                                <input type="number" name="days" id="days" class="form-control">
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
                        <h4 class="card-title">Leave List</h4>
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
                                            <th>Leave Name</th>
                                            <th>Leave Type</th>
                                            <th>Comments</th>
                                            <th>Limits</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <th><?php echo e($key+1); ?></th>
                                            <td><?php echo e($leave->name); ?></td>
                                            <td>
                                                <?php switch($leave->type):
                                                    case (1): ?>
                                                    <span class="badge badge-success">Paid</span>
                                                        <?php break; ?>
                                                    <?php case (2): ?>
                                                    <span class="badge badge-danger">Unpaid</span>
                                                        <?php break; ?>
                                                    <?php case (3): ?>
                                                    <span class="badge badge-warning">Half Paid</span>
                                                        <?php break; ?>
                                                    <?php default: ?>
                                                    <span class="badge badge-success">Paid</span>
                                                        
                                                <?php endswitch; ?>
                                            </td>
                                            <td><?php echo e($leave->comments); ?></td>
                                            <td><?php echo e($leave->days); ?> <?php echo e(Str::plural('Day', $leave->days)); ?></td>
                                            <td>
                                                <?php if($leave->isActive == true): ?>
                                                <span class="badge badge-success light">Active</span>
                                                <?php else: ?>
                                                <span class="badge badge-danger light">Inactive</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <ul class="action_btn">
                                                    <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                        style="color: #347af4;"></i></a></li>
                                                    <li><a href="#"><i class="fa-solid fa-trash fa-xl" style="color: #ff0000;"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="7" class="text-center">No Leave Found</td>
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
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/leaves/add.blade.php ENDPATH**/ ?>