

<?php $__env->startSection('title'); ?>
    New policies
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    New Policies
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h3>Add Company Policy</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('policy.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-6">
                                    <label class="form-label text-primary">Title<span class="required">*</span></label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Enter Policy Headline">
                                </div><br>
                                <div class="mb-6">
                                    <label class="form-label text-primary">Policies<span class="required">*</span></label>
                                    <textarea class="form-control" name="policies" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div><br>
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/documents/addpolicy.blade.php ENDPATH**/ ?>