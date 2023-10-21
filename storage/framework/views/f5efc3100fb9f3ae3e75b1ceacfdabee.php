

<?php $__env->startSection('title'); ?>
    Assign Team
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
<link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Assign team
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="<?php echo e(route('sector.index')); ?>">Create New Sector</a></li>
            <li><a href="<?php echo e(route('sector.assign.sl')); ?>">Assign Sector Leader</a></li>
            <li><a href="<?php echo e(route('sector.assign.tm')); ?>">Assign Team</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-xl-4 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Assign Sector teams</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="<?php echo e(route('assign.tm')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Sector<span
                                    class="required">*</span></label>
                            <select id="sector-select" class="form-control" name="sector_id">
                                <?php $__empty_1 = true; $__currentLoopData = $sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if($sector->isActive): ?>
                                <option value="<?php echo e($sector->id); ?>"><?php echo e($sector->sector_name); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option>No Sector Found</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Teams
                                <span class="required">*</span></label>
                            <select class="multi-select" name="team[]" multiple="multiple">
                                <?php $__empty_1 = true; $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <option value="<?php echo e($team->id); ?>"><?php echo e($team->team_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <option>No Permission Found</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8">
        <div class="card" id="bootstrap-table4">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0 px-3">
                <div>
                    <h4 class="card-title">Sector List</h4>
                </div>
            </div>

            <!-- /tab-content -->
            <div class="tab-content" id="myTabContent-3">
                <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel"
                    aria-labelledby="home-tab-3">
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sector</th>
                                        <th>Sector Leader</th>
                                        <th>Teams</th>
                                        <th>Status</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $__empty_1 = true; $__currentLoopData = $sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                   <tr>
                                    <th><?php echo e($key+1); ?></th>
                                    <td><?php echo e($sector->sector_name); ?></td>
                                    <td><?php echo e($sector->leader->name); ?></td>
                                    <td>
                                    <?php $__currentLoopData = $sector->teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($team->team_name.','); ?>   
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td><span class="badge <?php echo e($sector->isActive ? 'badge-success' : 'badge-danger'); ?> light"><?php echo e($sector->isActive ? 'Active' : 'Inactive'); ?></span>
                                    </td>
                                    <td>
                                        <ul class="action_btn">
                                            <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                style="color: #347af4;"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-trash fa-xl"
                                                        style="color: #ff0000;"></i></a></li>
                                        </ul>
                                    </td>
                                </tr> 
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                       
                                   <?php endif; ?>   
                                </tbody>
                            </table>
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
<script>
    // Initialize Select2 for the "Select Sector" dropdown
    $('#sector-select').select2();
    // Initialize Select2 for the "Select Employee" dropdown
    $('#team-select').select2();
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/department/assign_tm.blade.php ENDPATH**/ ?>