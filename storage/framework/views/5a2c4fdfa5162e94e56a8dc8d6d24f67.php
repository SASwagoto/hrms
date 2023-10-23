<label class="form-label text-primary">Select
    positions<span class="required">*</span></label>
<select name="position_id" id="position" class="default-select form-control wide form-control mb-3">
    <option value="">Options..</option>
    <?php $__empty_1 = true; $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <option value="<?php echo e($position->id); ?>"><?php echo e($position->position_name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <option value="">No Position Found</option>
    <?php endif; ?>
</select><?php /**PATH C:\laragon\www\hrms\resources\views/layouts/partials/positions.blade.php ENDPATH**/ ?>