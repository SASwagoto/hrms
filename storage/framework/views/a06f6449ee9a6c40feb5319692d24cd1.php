<?php $__env->startSection('title'); ?>
    Advance Salary
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
   Advance Salary
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('payroll.advance')); ?>" type="button" class="btn btn-primary">
             Add Request</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display table datatables" style="min-width: 845px">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Advance Amount</th>
                            <th>Reason for Advance</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>123</td>
                            <td>Imran</td>
                            <td>10000</td>
                            <td>Medicale Checkup</td>
                            <td>
                                <ul class="action_btn">
                                    <li><a href="#"><i class="fa-solid fa-check fa-lg"
                                                style="color: #0aae25;"></i></a></li>
                                    <li><a href="#"><i class="fa-solid fa-times fa-lg"
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/payroll/list.blade.php ENDPATH**/ ?>