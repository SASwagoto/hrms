

<?php $__env->startSection('title'); ?>
    Notice
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css">
    <link href="<?php echo e(asset('assets')); ?>/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Notice 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Notice Details</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="mb-3">
                            <label for=" 8"
                                class="form-label text-primary">Title<span
                                    class="required">*</span></label>
                            <input type="text" class="form-control" 
                                placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label 
                                class="form-label text-primary">To<span class="required">*</span></label>
                            <input type="number" class="form-control" 
                                placeholder="To">
                        </div>

                    </div>

                    <div class="col-xl-6 col-sm-6">
                        <div class="mb-3">
                            <label  class="form-label text-primary">Create On<span
                                    class="required">*</span></label>
                            <input type="date" class="form-control" 
                                placeholder="Create On">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label text-primary">Files<span
                                    class="required">*</span></label>
                            <input class="form-control" type="file" id="formFile">
                        </div> 
                    </div>
                    <div class="mb-12">
                        <label 
                            class="form-label text-primary">Description<span class="required">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="6"></textarea><br>
                    </div>
                    <div class="col-lg-12">
                        <button class="btn btn-primary w-100" type="button">Save</button>
                    </div>
                </div>
            </div>
                   
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-datetimepicker/js/moment.js"></script>
<script src="<?php echo e(asset('assets')); ?>/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker({
            autoclose: true,
            todayHighlight: true
        }).datepicker('update', new Date());

    });
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    $('.remove-img').on('click', function() {
        var imageUrl = "images/no-img-avatar.png";
        $('.avatar-preview, #imagePreview').removeAttr('style');
        $('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
    });

    $('#edu_btn').on('click', function() {
        $('edu_panel').removeClass('d-none');
    });

    //password matched
    $('.confirm_pass').on('keyup', function(){
        var pwd2 = $(this).val();
        var pwd1 = $('.pass').val();
        if(pwd1 == pwd2){
            $('#pass_check_msg').html(" Password Matched");
            $('#pass_check_msg').addClass('text-success');
            $('#pass_check_msg').removeClass('text-danger');

        }else{
            $('#pass_check_msg').html(" Password did not matched");
            $('#pass_check_msg').addClass('text-danger');
            $('#pass_check_msg').removeClass('text-success');
        }
    })

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/notice/add.blade.php ENDPATH**/ ?>