<?php $__env->startSection('title'); ?>
<?php echo e($siteInfo->app_title); ?>::Accounts
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
   Accounts
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Accounts</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('acc.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label text-primary">Accounts Name <span class="required">*</span></label>
                            <input type="text" name="acc_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Accounts Type <span class="required">*</span></label>
                            <select name="acc_type" id="acc_type" class="form-control" required>
                                <option value="">Options..</option>
                                <option disabled>Cash &#40;Default&#41;</option>
                                <option>Bank</option>
                                <option>Mobile Banking</option>
                            </select>
                        </div>
                        <div class="accNum d-none">
                            <h5>Bank Information</h5>
                            <div class="mb-3">
                                <label class="form-label text-primary">Bank Name</label>
                                <input type="text" name="bank_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Accounts Number</label>
                                <input type="text" name="acc_num" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th> 
                                    <th>Type</th> 
                                    <th>Bank Name</th> 
                                    <th>Accounts No</th> 
                                    <th>Balance</th> 
                                    <th class="text-end">Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $accs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($key + 1); ?></td>
                                    <td><?php echo e($acc->acc_name); ?></td> 
                                    <td><?php echo e($acc->acc_type); ?></td> 
                                    <td><?php echo e($acc->bank_name); ?></td> 
                                    <td><?php echo e($acc->acc_num); ?></td> 
                                    <td class="text-end fw-bolder"><?php echo e(number_format($acc->balance, 2)); ?></td> 
                                    <td>
                                        <ul class="action_btn">
                                            <li><a href="#"><i
                                                class="fa-solid fa-pen-to-square fa-xl"
                                                style="color: #347af4;"></i></a></li>
                                            <li><a href="#"  ><i class="fa-solid fa-trash fa-xl"
                                                        style="color: #ff0000;"></i></a></li>
                                        </ul>
                                    </td> 
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7" class="text-center">No Accounts Found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="text-end">Total Balance</th>
                                    <th class="text-end fw-bolder"><?php echo e(number_format($accs->sum('balance'), 2)); ?></th>
                                    <th></th>
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
    <script>
        $(document).ready(function(){
            $('#acc_type').on('change', function(){
                var val = $(this).val();
                if (val == 'Bank' || val == 'Mobile Banking') {
                    $('.accNum').removeClass('d-none');
                }else{
                    $('.accNum').addClass('d-none');
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/accounts/acc.blade.php ENDPATH**/ ?>