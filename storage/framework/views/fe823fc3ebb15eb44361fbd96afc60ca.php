

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

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="mb-6">
                            <label class="form-label text-primary">title<span class="required">*</span></label>
                            <input type="text" name="title" class="form-control"
                                placeholder="title">
                        </div><br>
                        <div class="mb-6">
                            <label class="form-label text-primary">Policies<span class="required">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div><br>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                        
                </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/documents/add.blade.php ENDPATH**/ ?>