<?php $__env->startSection('title'); ?>
    Training
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
   Training 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-3 col-lg-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Training</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label text-primary">Topic<span
                                    class="required">*</span></label>
                                    <input type="text" required name="topic" class="form-control input-default"
                                    placeholder="Topic">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary">Training Name<span class="required">*</span></label>
                            <input type="text" required name="training_name" class="form-control input-default"
                                placeholder="Training Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-primary">Start Date<span class="required">*</span></label>
                            <input type="date" id="start-date" class="form-control">
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label text-primary">Duration<span class="required">*</span></label>
                            <input type="text" required name="duration" class="form-control input-default"
                                    placeholder="Duration">
                          </div>

                          <div class="mb-3">
                            <label class="form-label text-primary">Remarks<span class="required">*</span></label>
                            <input type="text" required name="remarks" class="form-control input-default"
                                    placeholder="Remarks">
                          </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9">
        <div class="card" id="bootstrap-table4">
            <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                <div>
                    <h4 class="card-title">Training List</h4>
                </div>
            </div>

            <!-- /tab-content -->
            <div class="tab-content" id="myTabContent-3">
                <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel" aria-labelledby="home-tab-3">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table-striped table-responsive-sm table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Topic</th>
                                        <th>Training Name</th>
                                        <th>Start Date</th>
                                        <th>Duration</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Programming</td>
                                        <td>Java</td>
                                        <td>16 Oct 2023</td>
                                        <td>25</td>
                                        <td>Work Hard</td>
                                        <td><span class="badge badge-success light">
                                                Active</span>
                                        </td>
                                        <td>
                                            <ul class="action_btn">
                                                <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                            style="color: #347af4;"></i></a></li>
                                                <li><a href="#"  ><i
                                                            class="fa-solid fa-trash fa-xl"
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
    <script src="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/select2/js/select2.full.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/plugins-init/select2-init.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/review/training.blade.php ENDPATH**/ ?>