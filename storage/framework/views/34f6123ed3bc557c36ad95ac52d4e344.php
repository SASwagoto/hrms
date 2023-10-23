

<?php $__env->startSection('title'); ?>
    Site Setting
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<style>
    .ImageView img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid#000;
        margin: 10px
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
   <?php echo e(__('messages.site.setting')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <form action="<?php echo e(route('settings.update', $data->id)); ?>" id="siteForm" method="post">
            <?php echo csrf_field(); ?>
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('messages.general.settings')); ?></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.app.titel')); ?></label>
                                <input type="text" name="app_title" id="" class="form-control" value="<?php echo e($data->app_title); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.company.name')); ?></label>
                                <input type="text" name="company_name" id="" class="form-control" value="<?php echo e($data->company_name); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.company.email')); ?></label>
                                <input type="email" name="company_email" id="" class="form-control" value="<?php echo e($data->company_email); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.company.phone')); ?></label>
                                <input type="text" name="company_phone" id="" class="form-control" value="<?php echo e($data->company_phone); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.footer.titel')); ?></label>
                                <input type="text" name="footer_title" id="" class="form-control" value="<?php echo e($data->footer_title); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="siteLogo"><?php echo e(__('messages.site.logo')); ?></label>
                                        <div class="ImageView">
                                            <img id="Logo_preview" src="<?php echo e(asset('assets')); ?>/images/logo.png"
                                                alt="">
                                        </div>
                                        <input type="file"
                                            onchange="document.getElementById('Logo_preview').src = window.URL.createObjectURL(this.files[0])"
                                            class="form-control" name="app_logo">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="siteLogo"><?php echo e(__('messages.fav.icon')); ?></label>
                                        <div class="ImageView">
                                            <img id="fav_icon_preview" src="<?php echo e(asset('assets')); ?>/images/logo.png"
                                                alt="">
                                        </div>
                                        <input type="file"
                                            onchange="document.getElementById('fav_icon_preview').src = window.URL.createObjectURL(this.files[0])"
                                            class="form-control" name="fav_icon">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.about.us')); ?></label>
                                <textarea rows="4" name="about_us" id="" class="form-control"><?php echo e($data->about_us); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.footer.url')); ?></label>
                                <input type="text" name="footer_url" id="" class="form-control url-input" value="<?php echo e($data->footer_url); ?>">
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e(__('messages.social.profile.link')); ?></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.facebook.profile.url')); ?></label>
                                <input type="text" name="fb_url" id="" class="form-control url-input" value="<?php echo e($data->fb_url); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.linkedin.profile.url')); ?></label>
                                <input type="text" name="linkedin_url" id="" class="form-control url-input" value="<?php echo e($data->twitter_url); ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.twitter.profile.url')); ?></label>
                                <input type="text" name="twitter_url" id="" class="form-control url-input" value="<?php echo e($data->linkedin_url); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle"><?php echo e(__('messages.instagram.profile.url')); ?></label>
                                <input type="text" name="insta_url" id="" class="form-control url-input" value="<?php echo e($data->insta_url); ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" id="submitButton" class="btn btn-primary"><?php echo e(__('messages.update')); ?></button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script>
    $(document).ready(function () {
        $('#submitButton').click(function () {
            $('.url-input').each(function () {
                var userEnteredURL = $(this).val();
    
                if (userEnteredURL && !userEnteredURL.startsWith("https://")) {
                    // The input is missing "https://", so add it dynamically
                    var correctedURL = "https://" + userEnteredURL;
                    $(this).val(correctedURL); // Update the input value
                }
            });
    
            // Proceed with form submission
            $('#siteForm').submit(); // Submit the form
        });
    });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/settings/site.blade.php ENDPATH**/ ?>