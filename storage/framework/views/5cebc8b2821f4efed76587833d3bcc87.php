<?php $__env->startSection('title'); ?>
    Leave Balance
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
   Leave Balance
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card" id="bootstrap-table4">
            <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                <div>
                    <h4 class="card-title">Leave List</h4>
                </div>
            </div>

            <!-- /tab-content -->
            <div class="tab-content" id="myTabContent-3">
                <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel"
                    aria-labelledby="home-tab-3">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped table-responsive-sm table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Employee Id</th>
                                        <th>Employee Name</th>
                                        <th>Total Leave</th>
                                        <th>Taken Leave</th>
                                        <th>Balance Leave</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <tr class="" id="table{{}}">
                                        <th>1</th>
                                        <td>123</td>
                                        <td>Imran</td>
                                        <td>20</td>
                                        <td>11</td>
                                        <td>9</td>
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/leaves/balance.blade.php ENDPATH**/ ?>