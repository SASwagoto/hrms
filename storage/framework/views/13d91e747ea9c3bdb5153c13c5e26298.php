<?php $__env->startSection('title'); ?>
    Notice
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
   Notice
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title flex-wrap">
                    <div class="input-group search-area mb-md-0 mb-3">
                        <input type="text" class="form-control" placeholder="Search here...">
                        <span class="input-group-text"><a href="javascript:void(0)">
                                <svg width="15" height="15" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z"
                                        fill="#01A3FF" />
                                </svg>
                            </a></span>
                    </div>
                    <div>
                        <select class="image-select bs-select dashboard-select me-3" aria-label="Default">
                            <option selected>Newest</option>
                            <option value="1">Oldest</option>
                            <option value="2">Recent</option>
                        </select>
                        <!-- Button trigger modal -->
                        <a href="<?php echo e(route('notice.index')); ?>" type="button" class="btn btn-primary" data-bs-toggle="modals"
                            data-bs-target="#exampleModal">
                            + New Notice
                        </a>
                    </div>
                </div>
            </div>
            <!--column-->
            <div class="col-xl-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="table-responsive full-data">
                    <table
                        class="table-responsive-lg table display dataTablesCard student-tab dataTable no-footer"
                        id="example-student">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" class="form-check-input" id="checkAll"
                                        required="">
                                </th>
                                <th>SL</th>
                                <th>title</th>
                                <th>Description</th>
                                <th>To</th>
                                <th>Create On</th>
                                <th>Created by</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <div class="checkbox me-0 align-self-center">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="form-check-input" id="check8"
                                                required="">
                                            <label class="custom-control-label" for="check8"></label>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo e($key+1); ?></td>
                                <td><span class="text-primary font-w600"><?php echo e($notice->title); ?></span></td>
                                <td>
                                    <h6 class="mb-0"><?php echo e(implode(' ', array_slice(str_word_count($notice->description, 1), 0, 5))); ?></h6>
                                </td>
                                <td><span class="text-primary font-w600"><?php echo e($notice->notice_to ? $notice->notice_to : 'All Employee'); ?></span></td>
                                <td>
                                    <div><?php echo e($notice->notice_date); ?></div>
                                </td>
                                <td>
                                    <div><?php echo e($notice->createdBy->name); ?></div>
                                </td>
                                <td><span class="badge  <?php echo e($notice->isApproved ? 'badge-success':'badge-danger'); ?>"><?php echo e($notice->isApproved ? 'Approved':'Pending'); ?></span></td>
                                <td>
                                    <ul class="action_btn">
                                        <li><a href="#"><i
                                                    class="fa-solid fa-circle-info fa-beat"
                                                    style="color: #12a561;"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-pen-to-square"
                                                    style="color: #347af4;"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-trash"
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
            <!--/column-->
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <!-- Datatable -->
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/plugins-init/datatables.init.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/vendor/wow-master/dist/wow.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/notice/list.blade.php ENDPATH**/ ?>