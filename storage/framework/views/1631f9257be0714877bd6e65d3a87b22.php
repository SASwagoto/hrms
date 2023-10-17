<?php $__env->startSection('title'); ?>
    Employee Rating
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        ul.rating_star{
            float: right;
        }
        li{
            float: left;
            margin: 0px 5px !important;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('header'); ?>
   Employee Rating
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Employee Name</th>
                                <th>Month</th>
                                <th>Rating</th>
                                <th>Comments</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Imran Mondol</td>
                                <td>January, 2023</td>
                                <td>
                                    <ul class="action btn rating_star">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-regular fa-star-half-stroke"></i></li>
                                        <li><i class="fa-regular fa-star"></i></li>
                                    </ul>
                                </td>
                                <td><span>
                                    Khub e good, very good onek kaj korche    
                                </span></td>
                                <td>
                                    <ul class="action_btn">
                                        <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                    style="color: #347af4;"></i></a></li>
                                        <li><a href="#" onclick="editable();"><i
                                                    class="fa-solid fa-trash fa-xl"
                                                    style="color: #ff0000;"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/review/list.blade.php ENDPATH**/ ?>