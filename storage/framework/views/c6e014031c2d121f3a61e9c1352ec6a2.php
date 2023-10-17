<?php $__env->startSection('title'); ?>
    Accounts Ledger
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets')); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('header'); ?>
   Accounts Ledger
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-title flex-wrap">
            <div class="input-group search-area mb-md-0 mb-3">
                <input type="text" class="form-control" placeholder="Search here...">
                <span class="input-group-text"><a href="javascript:void(0)">
                        <svg width="15" height="15" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z"
                                fill="#01A3FF" />
                        </svg>
                    </a></span>
            </div>
        
            <div class="row">
                <div class="col-md-4">
                    <input type="date" class="form-control" placeholder="Start Date">
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" placeholder="End Date">
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-primary btn-block">Run Report</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example" class="display table datatables" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Accounts</th>
                                    <th>Description</th>
                                    <th>Reference</th>
                                    <th>Debit</th>
                                    <th>Credits</th>
                                    <th>Current Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10th Octobor 2023</td>
                                    <td>Income</td>
                                    <td>Software Sales</td>
                                    <td>inv#02</td>
                                    <td>1000.00</td>
                                    <td>--</td>
                                    <td>1000.00</td>
                                </tr>
                                <tr>
                                    <td>11th Octobor 2023</td>
                                    <td>Income</td>
                                    <td>DM Service Provide</td>
                                    <td>inv#03</td>
                                    <td>500.00</td>
                                    <td>--</td>
                                    <td>1500.00</td>
                                </tr>
                                <tr>
                                    <td>11th Octobor 2023</td>
                                    <td>Expense</td>
                                    <td>Accessories Purchase</td>
                                    <td>Bill#123</td>
                                    <td>--</td>
                                    <td>700.00</td>
                                    <td>800.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4" class="text-end">Total :</th>
                                    <th>1500.00</th>
                                    <th>700.00</th>
                                    <th>800.00</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- Datatable -->
    <script src="<?php echo e(asset('assets')); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/plugins-init/datatables.init.js"></script>

    <script src="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/accounts/balance.blade.php ENDPATH**/ ?>