<?php $__env->startSection('title'); ?>
    Job Postings
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
<link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
   Job Postings
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <form action="<?php echo e(route('jobs.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Add Job Postings</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mb-3">
                                <label class="form-label text-primary">Job Title<span class="required">*</span></label>
                                <input type="text" name="job_title" required class="form-control"
                                    placeholder="Job Title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Company<span class="required">*</span></label>
                                <input type="text" name="company" required class="form-control"
                                    placeholder="Company">
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4">
                           
                            <div class="mb-3">
                                <label class="form-label text-primary">Location<span class="required">*</span></label>
                                <input type="text" name="location" class="form-control"
                                    placeholder="Location">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Key Responsibilities<span class="required">*</span></label>
                                <select class="multi-select" name="states[]" multiple="multiple">
                                    <option value="AL">Key 1</option>
                                    <option value="WY">Key 2</option>
                                    <option value="UI">Key 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Educational Qualifications<span class="required">*</span></label>
                                <select class="multi-select" name="states[]" multiple="multiple">
                                    <option value="AL">Qual 1</option>
                                    <option value="WY">Qual 2</option>
                                    <option value="UI">Qual 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Salary Range<span class="required">*</span></label>
                                <input type="text" name="salary_range" class="form-control"
                                    placeholder="Salary Range">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Unique Tracking Number<span class="required">*</span></label>
                                <input type="text" name="unique_tracking_number" class="form-control"
                                    placeholder="Unique Tracking Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">How to Apply<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="mb-3">
                                <label class="form-label text-primary">Department<span class="required">*</span></label>
                                <select name="dept_id" id="department" class="default-select form-control wide form-control">
                                    <option disabled selected value="">Selec Department</option>
                                    <?php $__empty_1 = true; $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($dept->id); ?>"><?php echo e($dept->dept_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <option disabled value="">No Dept Found</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label text-primary">Preferred Skills<span class="required">*</span></label>
                                <input type="text" class="form-control" name="skils[]" placeholder="Preferred Skills">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Benefits<span class="required">*</span></label>
                                <input type="text" name="benefits" class="form-control"
                                    placeholder="Benefits">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Application Deadline<span class="required">*</span></label>
                                <input type="date" name="application_deadline" class="form-control"
                                    placeholder="Application Deadline">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Requisition Number<span class="required">*</span></label>
                                <input type="text" name="requisition_number" class="form-control"
                                    placeholder="Requisition Number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">About Us<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="position mb-3">
                                <label class="form-label text-primary">Select
                                    positions<span class="required">*</span>
                                </label>
                                <select name="position_id" class="default-select form-control wide form-control mb-3">

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Requirements<span class="required">*</span></label>
                                <input type="text" name="requirements" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Experience<span class="required">*</span></label>
                                <input type="text" name="experience" class="form-control"
                                    placeholder="Experience">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Contact Information<span class="required">*</span></label>
                                <input type="text" name="contact_information" class="form-control"
                                    placeholder="Contact Information">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Files<span class="required">*</span></label>
                                <input class="form-control" name="file_path" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Job Description<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary float-end" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
        $('#department').on('change', function() {
            var departmentId = $(this).val();
            var positionSelect = $('#position');
            positionSelect.prop('disabled', true); // Disable "Position" select while loading data.

            $.ajax({
                url: '/get-positions/' + departmentId,
                type: 'GET',
                success: function(data) {
                    //console.log(data);
                    $('.position').html(data);
                },
                error: function(xhr) {
                    // Handle errors here.
                }
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/recruitment/post.blade.php ENDPATH**/ ?>