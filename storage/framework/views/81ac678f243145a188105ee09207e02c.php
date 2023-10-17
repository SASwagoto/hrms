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
                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>Imran</td>
                            <td>Sick Leave</td>
                            <td>Feaver</td>
                            <td>12/10/2023</td>
                            <td>14/10/2023</td>
                            <td>3</td>
                            <td>
                                <ul class="action_btn">
                                    <li><a href="#"><i class="fa-solid fa-check fa-lg" style="color: #0aae25;"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-times fa-lg" style="color: #ff0000;"></i></a></li>
                                </ul>
                            </td>

                        </tr>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/leaves/request.blade.php ENDPATH**/ ?>