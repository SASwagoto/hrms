

<?php $__env->startSection('title'); ?>
Add Work Shift
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
<link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
Add Work Shift
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="<?php echo e(route('shift')); ?>" class="btn btn-primary">Work Shift List</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('shift.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label text-primary">Shift Name
                                        <span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Shift Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Shift Start <span class="required">*</span></label>
                                    <input type="time" name="start_time" class="form-control" id="shiftStart" value="09:30">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Working Hours <span class="required">*</span></label>
                                    <input type="text" class="form-control" id="workingHours" placeholder="Calculated Working Hours" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label text-primary">Shift Type<span class="required">*</span></label>
                                    <select name="type" class="default-select form-control wide form-control mb-3">
                                        <option value="Morning">Morning</option>
                                        <option value="Day">Day</option>
                                        <option value="Evening">Evening</option>
                                        <option value="Night">Night</option>
                                        <option value="Special">Special</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Shift End <span class="required">*</span></label>
                                    <input type="time" name="end_time" class="form-control" id="shiftEnd" value="17:30">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label text-primary">Working Days
                                        <span class="required">*</span></label>
                                    <select class="multi-select" name="working_days[]" multiple="multiple">
                                        <option value="SAT">Saturday</option>
                                        <option value="SUN">Sunday</option>
                                        <option value="MON">Monday</option>
                                        <option value="TUE">Tuesday</option>
                                        <option value="WED">Wednesday</option>
                                        <option value="THU">Thursday</option>
                                        <option value="FRI">Friday</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="text-primary form-label">Comments</label>
                                    <input type="text" name="comments" class="form-control">
                                </div>
                            </div>
                            <div class="float-start">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
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
const shiftStartInput = document.getElementById('shiftStart');
const shiftEndInput = document.getElementById('shiftEnd');
const workingHoursInput = document.getElementById('workingHours');

// Function to calculate working hours
function calculateWorkingHours() {
    const startTime = shiftStartInput.valueAsDate;
    const endTime = shiftEndInput.valueAsDate;

    if (startTime && endTime) {

        if (endTime < startTime) {
            // Swap the start and end times
            const temp = startTime;
            startTime = endTime;
            endTime = temp;
        }
        const timeDiff = endTime - startTime;
        const hours = Math.floor(timeDiff / 3600000);
        const minutes = Math.floor((timeDiff % 3600000) / 60000);

        workingHoursInput.value = hours + ' hours ' + minutes + ' minutes';
    } else {
        workingHoursInput.value = '';
    }
}

// Add event listeners to the start and end time inputs
shiftStartInput.addEventListener('input', calculateWorkingHours);
shiftEndInput.addEventListener('input', calculateWorkingHours);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/attendance/addShift.blade.php ENDPATH**/ ?>