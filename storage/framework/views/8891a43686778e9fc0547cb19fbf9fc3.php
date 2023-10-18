


<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">	
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">groups </i>
                    <span class="nav-text">Employee</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('emp.create')); ?>">Add Employee</a></li>
                    <li><a href="<?php echo e(route('emp.index')); ?>">Employee List</a></li>
                    <li><a href="<?php echo e(route('att.list')); ?>">Attendance</a></li>
                    <li><a href="<?php echo e(route('leave.list')); ?>">Leaves</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apartment </i>
                <span class="nav-text">Department</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="<?php echo e(route('dep.index')); ?>">Departments</a></li>
                <li><a href="<?php echo e(route('pos.index')); ?>">Positions</a></li>
                <li><a href="<?php echo e(route('teams.index')); ?>">Teams</a></li>
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">emoji_people</i>
                <span class="nav-text">Attendance</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="<?php echo e(route('att.shift')); ?>">Work Shifts</a></li>
                <li><a href="<?php echo e(route('att.schedule')); ?>">Employee Schedules</a></li>
                
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">calendar_month</i>	
                <span class="nav-text">Leaves</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="<?php echo e(route('leave.add')); ?>">Add Leave</a></li>
                <li><a href="<?php echo e(route('leave.balance')); ?>">Leave Balances</a></li>
                <li><a href="<?php echo e(route('leave.request')); ?>">Leave Request</a></li>
                <li><a href="<?php echo e(route('holi.add')); ?>">Holidays</a></li>	
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">medication</i>
                <span class="nav-text">Payroll</span>
            </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('payroll.info')); ?>">Salary Information</a></li>
                    <li><a href="<?php echo e(route('payroll.list')); ?>">Advance Salary</a></li>
                    <li><a href="<?php echo e(route('payroll.slip')); ?>">Payslip</a></li>
                    <li><a href="<?php echo e(route('payroll.tax')); ?>">Tax Assesment</a></li>
                    <li><a href="<?php echo e(route('payroll.fund')); ?>">Provident Fund</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">paid</i>
                    <span class="nav-text">Accounts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('acc.income')); ?>">Income</a></li>
                    <li><a href="<?php echo e(route('acc.expense')); ?>">Expense</a></li>
                    <li><a href="<?php echo e(route('acc.balance')); ?>">Accounts Ledger</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Recruitment</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('rec.post')); ?>">Job Postings</a></li>
                    <li><a href="<?php echo e(route('rec.app')); ?>">Applicants</a></li>
                    <li><a href="<?php echo e(route('rec.int')); ?>">Interviews</a></li>
                    <li><a href="<?php echo e(route('rec.on')); ?>">Onboarding</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Notice</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('notice.list')); ?>">Notice</a></li>
                    <li><a href="<?php echo e(route('notice.index')); ?>">Add Notice</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Documents</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('documents.doc')); ?>">HR Documents</a></li>
                    <li><a href="<?php echo e(route('documents.policie')); ?>">Policies</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Performance</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('review.list')); ?>">Performance Rating</a></li>
                    <li><a href="<?php echo e(route('review.add')); ?>">Add Reviews</a></li>
                    <li><a href="<?php echo e(route('review.target')); ?>">Set Target</a></li>
                    <li><a href="<?php echo e(route('review.training')); ?>">Training & Development</a></li>
                </ul>
            </li>
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Super-Admin')): ?>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> settings </i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('roles.index')); ?>">Role Settings</a></li>
                    <li><a href="<?php echo e(route('settings.index')); ?>">Site Settings</a></li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************--><?php /**PATH E:\laragon\www\hrms\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>