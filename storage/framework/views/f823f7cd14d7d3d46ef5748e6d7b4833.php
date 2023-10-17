<?php $__env->startSection('title'); ?>
    Provident Fund
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Provident Fund
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="employee-name" class="form-label">Employee Name</label>
                            <input type="text" class="form-control" id="employee-name" name="employee_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="employee-id" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="employee-id" name="employee_id" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="pf-number" class="form-label">PF Number</label>
                            <input type="text" class="form-control" id="pf-number" name="pf_number">
                        </div>
                        <div class="mb-3">
                            <label for="pf-contributions" class="form-label">PF Contributions</label>
                            <input type="number" class="form-control" id="pf-contributions" name="pf_contributions">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="table-responsive full-data">
                    <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer"
                        id="example-student">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                </th>
                                <th>SL</th>
                                <th>Employee Name</th>
                                <th>Employee ID</th>
                                <th>PF Number</th>
                                <th>PF Contributions</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox me-0 align-self-center">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="form-check-input" id="check8"
                                                required="">
                                            <label class="custom-control-label" for="check8"></label>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="">1</a>
                                </td>
                                <td><span class="text-primary font-w600">Imran</span></td>
                                <td>
                                    <h6 class="mb-0">1234</h6>
                                </td>
                                <td><span class="text-primary font-w600">50</span></td>
                                <td><span class="text-primary font-w600">100000</span></td>
                                <td>
                                    <?php
                                        $slug = 'abc';
                                    ?>
                                    <ul class="action_btn">
                                        <li><a href="<?php echo e(route('employee.show', $slug)); ?>"><i
                                                    class="fa-solid fa-circle-info fa-beat"
                                                    style="color: #12a561;"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-pen-to-square"
                                                    style="color: #347af4;"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-trash"
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/payroll/fund.blade.php ENDPATH**/ ?>