<?php $__env->startSection('title'); ?>
    Department
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    Department
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Department</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="<?php echo e(route('dept.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="" class="form-label text-primary">Department Name <span class="required">*</span></label>
                                <input type="text" required name="dept_name" class="form-control input-default"
                                    placeholder="Enter Department Name">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7">
            <div class="card" id="bootstrap-table4">
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Department List</h4>
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
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="view-mode-row">
                                                <form action="<?php echo e(route('dept.update', $dept->id)); ?>" method="POST" id="updateForm<?php echo e($key+1); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td class="view-mode"><?php echo e($dept->dept_name); ?></td>
                                                <td class="edit-mode" style="display: none;">
                                                    <input type="text" class="form-control" name="dept_name" id="" value="<?php echo e($dept->dept_name); ?>">
                                                </td>
                                                <td class="view-mode" data-column-name="isActive">
                                                    <span class="badge <?php echo e($dept->isActive ? 'badge-success' : 'badge-danger'); ?> light"><?php echo e($dept->isActive ? 'Active' : 'Inactive'); ?></span>
                                                </td>
                                                <td class="edit-mode" style="display: none;">
                                                    <input type="checkbox" name="isActive" <?php if($dept->isActive): ?> checked <?php endif; ?>>
                                                </td>
                                                <td>
                                                    <ul class="action_btn">
                                                        <li>
                                                            <a href="javascript:void(0);" class="edit-button">
                                                                <i class="fa-solid fa-pen-to-square fa-xl" style="color: #347af4;"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="save-button" onclick="document.getElementById('updateForm<?php echo e($key+1); ?>').submit()" style="display: none;">
                                                                <i class="fa-solid fa-check fa-xl" style="color: #00ff00;"></i>
                                                            </a>
                                                        </li>
                                                        <li><a href="javascript:void(0);" onclick="document.getElementById('delete-form<?php echo e($dept->id); ?>').submit()"><i class="fa-solid fa-trash fa-xl"
                                                            style="color: #ff0000;"></i></a></li>
                                                    </ul>
                                                </td>
                                                </form>
                                                <form action="<?php echo e(route('dept.delete', $dept->slug)); ?>" method="POST" id="delete-form<?php echo e($dept->id); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="4" class="text-center">No Department Found</td>
                                            </tr>
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
    <script>
        $(document).ready(function () {
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
            $('.edit-button').on('click', function (e) {
                e.preventDefault();
                var row = $(this).closest('tr');
                switchToEditMode(row);
            });
    
            // Handle save button click
            $('.save-button').on('click', function (e) {
                e.preventDefault();
                var row = $(this).closest('tr');
                var updatedData = {};
                row.find('.edit-mode-cell').each(function () {
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/department/list.blade.php ENDPATH**/ ?>