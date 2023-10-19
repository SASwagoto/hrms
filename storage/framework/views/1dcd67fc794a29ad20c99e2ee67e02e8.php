

<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
   <?php echo e($siteInfo->app_title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <h1>Hello</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/dashboard.blade.php ENDPATH**/ ?>