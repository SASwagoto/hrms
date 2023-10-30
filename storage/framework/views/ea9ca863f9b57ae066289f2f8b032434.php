<?php $__env->startSection('title'); ?>
    Leave Request
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Leave Request
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display table datatables" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Employee Id</th>
                                <th>Emolotee Name</th>
                                <th>Leave Type</th>
                                <th>Leave Reason</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Days</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $leave_requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $leave_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><?php echo e($leave_request->user->emp->employee_id); ?></td>
                                <td><?php echo e($leave_request->user->name); ?></td>
                                <td><?php echo e($leave_request->leave->name); ?></td>
                                <td><?php echo e($leave_request->reason); ?></td>
                                <td><?php echo e($leave_request->start_date); ?></td>
                                <td><?php echo e($leave_request->end_date); ?></td>
                                <td><?php echo e($leave_request->days); ?></td>
                                <td>
                                    <ul class="action_btn">
                                        <li><a href="#"><i class="fa-solid fa-check fa-lg"
                                                    style="color: #0aae25;"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-times fa-lg"
                                                    style="color: #ff0000;"></i></a></li>
                                    </ul>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="9" class="text-center">No Leave Request Found</td>
                                </tr>
                            <?php endif; ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Employee Id</th>
                                <th>Emolotee Name</th>
                                <th>Leave Type</th>
                                <th>Leave Reason</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Days</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/leaves/request.blade.php ENDPATH**/ ?>