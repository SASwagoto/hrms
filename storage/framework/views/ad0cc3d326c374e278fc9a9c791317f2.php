<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
   Dashboard 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3>Salary information Of Imran</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <p><strong>Employee Id: </strong>123<br>
                        <strong>User Name: </strong>Imran</p>
                    </div>
                    <div class="col-xl-6">
                        <p><strong>Department: </strong>Marketing<br>
                        <strong>Position: </strong>Team Leader</p>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12" data-wow-delay="0.5s">
                        <div class="table-responsive full-data">
                            <table class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                        </th>
                                        <th>SL</th>
                                        <th>Date</th>
                                        <th>Position</th>
                                        <th>Salary</th>
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
                                        <td><span class="text-primary font-w600">Current Salary</span></td>
                                        <td>
                                            <h6 class="mb-0">Team Leader</h6>
                                        </td>
                                        <td><span class="text-primary font-w600">30000</span></td>
                                        <td>
                                            
                                            <ul class="action_btn">
                                                <li><a href="#"><i
                                                            class="fa-solid fa-circle-info fa-beat"
                                                            style="color: #12a561;"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-pen-to-square"
                                                            style="color: #347af4;"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-trash"
                                                            style="color: #ff0000;"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
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
                                            <a href="">2</a>
                                        </td>
                                        <td><span class="text-primary font-w600">1st Jan 2023</span></td>
                                        <td>
                                            <h6 class="mb-0">Teamleader</h6>
                                        </td>
                                        <td><span class="text-primary font-w600">30000</span></td>
                                        <td>
                                            
                                            <ul class="action_btn">
                                                <li><a href="#"><i
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
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/payroll/info.blade.php ENDPATH**/ ?>