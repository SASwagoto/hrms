<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Page Title Here -->
	<title><?php echo $__env->yieldContent('title'); ?> || <?php echo e(config('app.name', 'Laravel')); ?></title>

<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets')); ?>/images/favicon.png" >
    <link href="<?php echo e(asset('assets')); ?>/vendor/wow-master/css/libs/animate.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('css'); ?>
	<!-- Style css -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/css/style.css" rel="stylesheet">
    <style>
        ul.action_btn{
            float: right;
        }
        ul.action_btn li{
            float: left;
            margin: 0px 5px;
        }
        .content-body{
            margin-bottom: 40px !important;
        }
        .ov_auto{
            overflow: auto !important;
        }
        .footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
        }
        .dropdown.bootstrap-select.swal2-select{
            display: none;
        }
        .pagination{
            float: inline-end;
            margin: 10px 0px;
        }
    </style>
	<link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/css/custom.css">
</head>
<body>

    <div id="main-wrapper" class="show">
	

        <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php echo $__env->make('layouts.partials.chatbox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php echo $__env->make('layouts.partials.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-body">
            <div class="container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

		<?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</div>
    <?php echo $__env->make('layouts.partials.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
    
    <!-- Required vendors -->
    <script src="<?php echo e(asset('assets')); ?>/vendor/global/global.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
    
    <script src="<?php echo e(asset('assets')); ?>/js/custom.min.js"></script>
	<script src="<?php echo e(asset('assets')); ?>/js/dlabnav-init.js"></script>
    <script>
        $('.bell-link').on('click', function(){
            $('#main-wrapper').addClass('active');
        });
        $('.chatbox-close').on('click', function(){
            $('#main-wrapper').removeClass('active');
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\hrms\resources\views/layouts/admin.blade.php ENDPATH**/ ?>