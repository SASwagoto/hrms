<?php $__env->startSection('title'); ?>
    Advance Salary
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Advance Salary
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <form id="advance-salary-form" action="process-advance-salary.php" method="post">
                                <div class="mb-3">
                                    <label for="employee-name" class="form-label">Employee Name</label>
                                    <input type="text" class="form-control" id="employee-name" name="employee_name"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="advance-amount" class="form-label">Advance Amount</label>
                                    <input type="number" class="form-control" id="advance-amount" name="advance_amount"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="reason" class="form-label">Reason for Advance</label>
                                    <textarea class="form-control" id="reason" name="advance_reason" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit Advance Request</button>
                            </form>
                        </div>
                        <div class="col-xl-6">
                            <div class="card-header">
                                <h5>Advance Policies</h5>
                            </div>
                            <div>
                                <p>
                                    A Salary Advance Policy also known as the payroll advance policy serves as a structured
                                    guideline for both employees and the HR department to navigate around the complexities
                                    of
                                    advance pay/salary advance.
                                </p>
                                <p>
                                    The Payroll advance policy sheds light on eligibility, the application process, the
                                    advance
                                    amount, the repayment process & other terms and conditions of the policy.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/payroll/advance.blade.php ENDPATH**/ ?>