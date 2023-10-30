

<?php $__env->startSection('title'); ?>
    <?php echo e($team->team_name); ?> Details
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets')); ?>/vendor/select2/css/select2.min.css">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
<?php echo e($team->team_name); ?> Details
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Member lis of <?php echo e($team->team_name); ?></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Target</th>
                                    <th>Sales</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>
                                        <?php if($team->leader): ?>
                                        <?php echo e($team->leader->name); ?>

                                        <?php else: ?>
                                        Not Assigned
                                        <?php endif; ?>
                                    </th>
                                    <th>100</th>
                                    <th>70</th>
                                    <th>
                                        Leader
                                    </th>
                                </tr>
                                <?php $__currentLoopData = $team->members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($key + 2); ?></th>
                                    <th><?php echo e($member->name); ?></th>
                                    <th>100</th>
                                    <th>70</th>
                                    <th>
                                        <ul class="action_btn">
                                            <li><a href="javascript:void(0);" onclick="document.getElementById('removeform<?php echo e($key + 2); ?>').submit()"><i class="fa-solid fa-trash fa-xl"
                                                style="color: #ff0000;"></i></a></li>
                                                <form action="<?php echo e(route('team.removeMember')); ?>" id="removeform<?php echo e($key+2); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <input type="hidden" name="team_id" value="<?php echo e($team->id); ?>">
                                                    <input type="hidden" name="user_id" value="<?php echo e($member->id); ?>">
                                                </form>
                                        </ul>
                                    </th>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr class="newform d-none">
                                    <form action="<?php echo e(route('team.addMember')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <td># <input type="hidden" name="team_id" value="<?php echo e($team->id); ?>"></td>
                                    <td>
                                        <select id="emp-select" class="form-control" name="user_id">
                                            <option value="">Options..</option>
                                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <option>No Employee Found</option>
                                            <?php endif; ?>
                                        </select>
                                    </td>
                                    <td colspan="2">
                                        <input type="number" placeholder="Set Target" name="set_target" class="form-control">
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </td>
                                    </form>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="text-center bg-primary"><a href="javascript:void(0);" id="addMember" class="text-light"><i class="fa-solid fa-user-plus"></i> Add Member</a></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
        // Initialize Select2 for the "Select Employee" dropdown
        $('#emp-select').select2();
    </script>
    <script>
        $(document).ready(function(){
            $('#addMember').on('click', function(){
                console.log('hoiche');
                $('.newform').removeClass('d-none');
            });
        });
    </script>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/department/teamDetails.blade.php ENDPATH**/ ?>