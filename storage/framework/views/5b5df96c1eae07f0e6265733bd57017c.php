

<?php $__env->startSection('title'); ?>
    Attendance
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('assets')); ?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Attendance
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive ">
					<table id="example" class="display table datatables" style="min-width: 845px">
						<thead>
							<tr>
								<th>Date</th>
								<th>Status</th>
								<th>Clock-In</th>
								<th>Clock-Out</th>
								<th>Hours</th>
								<th>Overtime</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>10th Octobor 2023</td>
								<td>Present</td>
								<td>11:00</td>
								<td>08:00</td>
								<td>9</td>
								<td>1</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Date</th>
								<th>Status</th>
								<th>Clock-In</th>
								<th>Clock-Out</th>
								<th>Hours</th>
								<th>Overtime</th>
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
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- Datatable -->
    <script src="<?php echo e(asset('assets')); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo e(asset('assets')); ?>/js/plugins-init/datatables.init.js"></script>

    <script src="<?php echo e(asset('assets')); ?>/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\hrms\resources\views/attendance/list.blade.php ENDPATH**/ ?>