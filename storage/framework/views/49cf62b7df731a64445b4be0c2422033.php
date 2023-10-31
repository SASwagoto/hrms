

<?php $__env->startSection('title'); ?>
    Sector
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Sector
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mb-3">
        <div class="col-lg-12">
            <ul class="action_btn float-start">
                <li><a href="<?php echo e(route('sector.index')); ?>">Create New Sector</a></li>
                <li><a href="<?php echo e(route('sector.assign.tm')); ?>">Assign Team</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Sector</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="<?php echo e(route('sector.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label class="form-label text-primary" for="">Sector Name <span
                                        class="required">*</span></label>
                                <input type="text" name="sector_name" required class="form-control input-default"
                                    placeholder="Enter Sector Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Select Leader<span class="required">*</span></label>
                                <select id="emp-select" class="form-control" name="sector_leader">
                                    <option value="">Options...</option>
                                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <option>No Employee Found</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card" id="bootstrap-table4">
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Sector List</h4>
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
                                            <th>Sector Name</th>
                                            <th>Sector Leader</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <form action="<?php echo e(route('sector.update', $sector->id)); ?>" id="updateForm<?php echo e($key + 1); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <tr class="view-mode-row">
                                            <td><?php echo e($key + 1); ?></td>
                                            <td class="view-mode"><?php echo e($sector->sector_name); ?></td>
                                            <td class="edit-mode" style="display: none;">
                                                <input type="text" name="sector_name"
                                                    value="<?php echo e($sector->sector_name); ?>" class="form-control">
                                            </td>
                                            <td class="view-mode">
                                                <?php if($sector->sector_leader): ?>
                                                    <?php echo e($sector->leader->name); ?>

                                                <?php else: ?>
                                                    Not Assigned
                                                <?php endif; ?>
                                            </td>
                                            <td class="edit-mode" style="display: none;">
                                                <select id="emp-select" class="form-control" name="sector_leader">
                                                    <?php if($sector->sector_leader): ?>
                                                    <option selected value="<?php echo e($sector->sector_leader); ?>">
                                                        <?php echo e($sector->leader->name); ?></option>
                                                        <option style="color: #ff0000" value="">Remove</option>
                                                <?php endif; ?>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </td>
                                            <td class="view-mode" data-column-name="isActive">
                                                <span
                                                    class="badge <?php echo e($sector->isActive ? 'badge-success' : 'badge-danger'); ?> light"><?php echo e($sector->isActive ? 'Active' : 'Inactive'); ?></span>
                                            </td>
                                            <td class="edit-mode" style="display: none;">
                                                <input type="checkbox" name="isActive"
                                                    <?php if($sector->isActive): ?> checked <?php endif; ?>>
                                            </td>
                                            <td>
                                                <ul class="action_btn">
                                                    <li>
                                                        <a href="javascript:void(0);" class="edit-button">
                                                            <i class="fa-solid fa-pen-to-square fa-xl"
                                                                style="color: #347af4;"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="save-button"
                                                            onclick="document.getElementById('updateForm<?php echo e($key + 1); ?>').submit()"
                                                            style="display: none;">
                                                            <i class="fa-solid fa-check fa-xl"
                                                                style="color: #00ff00;"></i>
                                                        </a>
                                                    </li>
                                                    <li class="view-mode"><a href="javascript:void(0);"
                                                            onclick="document.getElementById('delete-form<?php echo e($key + 1); ?>').submit()"><i
                                                                class="fa-solid fa-trash fa-xl"
                                                                style="color: #ff0000;"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        </form>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="5" class="text-center">No Sector Found</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php echo e($sectors->links()); ?>

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
            // Initialize Select2 for the "Select Employee" dropdown
            $('#emp-select').select2();
        </script>
        <script>
            $(document).ready(function() {
                // Function to switch to edit mode
                function switchToEditMode(row) {
                    row.addClass('edit-mode-row');
                    row.find('.edit-button').hide();
                    row.find('.view-mode').hide();
                    row.find('.save-button').show();
                    row.find('.edit-mode').show();

                }

                // Function to switch back to view mode
                function switchToViewMode(row) {
                    row.removeClass('edit-mode-row');
                    row.find('.edit-button').show();
                    row.find('.view-mode').show();
                    row.find('.save-button').hide();
                    row.find('.edit-mode').hide();

                }

                // Handle edit button click
                $('.edit-button').on('click', function(e) {
                    e.preventDefault();
                    var row = $(this).closest('tr');
                    switchToEditMode(row);
                });

                // Handle save button click
                $('.save-button').on('click', function(e) {
                    e.preventDefault();
                    var row = $(this).closest('tr');
                    var updatedData = {};
                    row.find('.edit-mode-cell').each(function() {
                        var cell = $(this);
                        var columnName = cell.data('column-name');
                        var value = cell.find('input').val();
                        updatedData[columnName] = value;
                    });

                    // Send updatedData to the server using AJAX
                    // On success, switch back to view mode
                    switchToViewMode(row);
                });
            });
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/department/sector.blade.php ENDPATH**/ ?>