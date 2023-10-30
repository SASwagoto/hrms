<?php $__env->startSection('title'); ?>
    Work Shift
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
<link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Work Shift
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('shift.add')); ?>" class="btn btn-primary float-end">Add New Shift</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Shift Name</th>
                                    <th>Shift Type</th>
                                    <th>Working Hours</th>
                                    <th>Time Range</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($key +1); ?></td>
                                    <td><?php echo e($shift->name); ?></td>
                                    <td><?php echo e($shift->type); ?></td>
                                    <td><?php echo e($shift->duration); ?></td>
                                    <td><?php echo e(date('h:ia', strtotime($shift->start_time)) .'-'. date('h:ia', strtotime($shift->end_time))); ?></td>
                                    <td class="view-mode" data-column-name="isActive">
                                        <span
                                            class="badge <?php echo e($shift->isActive ? 'badge-success' : 'badge-danger'); ?> light"><?php echo e($shift->isActive ? 'Active' : 'Inactive'); ?></span>
                                    </td>
                                    <td class="edit-mode" style="display: none;">
                                        <input type="checkbox" name="isActive"
                                            <?php if($shift->isActive): ?> checked <?php endif; ?>>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    
                                <?php endif; ?>
                                
                            </tbody>
                        </table>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/attendance/shift.blade.php ENDPATH**/ ?>