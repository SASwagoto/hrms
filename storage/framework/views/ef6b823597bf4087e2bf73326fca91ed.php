<?php $__env->startSection('title'); ?>
    Add Holiday
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<link href="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('header'); ?>
    Add Hiliday
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Add Holiday</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label text-primary">Holiday Name<span class="required">*</span></label>
                                <input type="text" required name="emp_id" class="form-control input-default"
                                    placeholder="Enter Employee ID">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Start Date<span class="required">*</span></label>
                                <input type="date" required name="start_date" class="form-control input-default"
                                    id="start_date">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Day<span class="required">*</span></label>
                                <input type="number" required name="day" class="form-control input-default"
                                    id="day" readonly>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="">
                                <label class="form-label text-primary">Holiday Type<span class="required">*</span></label>
                                <select name="position" class="default-select form-control wide form-control mb-3">
                                    <option value="">National Holiday</option>
                                    <option value="">Public Holiday</option>
                                    <option value="">Company Holiday</option>>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">End Date<span class="required">*</span></label>
                                <input type="date" required name="end_date" class="form-control input-default"
                                    id="end_date">
                            </div>
                            <div class="">
                                <label class="form-label text-primary">Description<span class="required">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card" id="bootstrap-table4">
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Holiday List</h4>
                    </div>
                </div>

                <!-- /tab-content -->
                <div class="tab-content" id="myTabContent-3">
                    <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel" aria-labelledby="home-tab-3">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-responsive-sm table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Holiday Name</th>
                                            <th>Holiday Type</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Day</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th>1</th>
                                            <td>Eid Holiday</td>
                                            <td>Public Holiday</td>
                                            <td>11/10/2023</td>
                                            <td>17/10/2023</td>
                                            <td>7</td>
                                            <td> <span class="badge badge-success light">
                                                    Active</span>
                                            </td>
                                            <td>
                                                <ul class="action_btn">
                                                    <li><a href="#" onclick="editable();"><i
                                                                class="fa-solid fa-trash fa-xl"
                                                                style="color: #ff0000;"></i></a></li>
                                                    <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                                style="color: #347af4;"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets')); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script>
            // Get references to the input elements
            const startDateInput = document.getElementById("start_date");
            const endDateInput = document.getElementById("end_date");
            const dayInput = document.getElementById("day");

            // Add event listeners to the start and end date inputs
            startDateInput.addEventListener("change", updateDayDifference);
            endDateInput.addEventListener("change", updateDayDifference);

            // Function to calculate the difference including both start and end dates
            function updateDayDifference() {
                const startDate = new Date(startDateInput.value);
                const endDate = new Date(endDateInput.value);

                // Check if both dates are valid
                if (!isNaN(startDate) && !isNaN(endDate)) {
                    const timeDifference = endDate - startDate;
                    const dayDifference = Math.ceil(timeDifference / (1000 * 60 * 60 * 24)) + 1; // Add 1 day
                    dayInput.value = dayDifference;
                } else {
                    dayInput.value = "";
                }
            }
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\hrms\resources\views/holiday/add.blade.php ENDPATH**/ ?>