


<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">	
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">groups </i>
                    <span class="nav-text"><?php echo e(__('menu.employee')); ?></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('emp.create')); ?>"><?php echo e(__('menu.employee.add')); ?></a></li>
                    <li><a href="<?php echo e(route('emp.index')); ?>"><?php echo e(__('menu.employee.list')); ?></a></li>
                    <li><a href="<?php echo e(route('att.list')); ?>"><?php echo e(__('menu.attendence')); ?></a></li>
                    <li><a href="<?php echo e(route('leave.list')); ?>"><?php echo e(__('menu.leaves')); ?></a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apartment </i>
                <span class="nav-text"><?php echo e(__('menu.department')); ?></span>
            </a>
            <ul aria-expanded="false">
                <li><a href="<?php echo e(route('dept.index')); ?>"><?php echo e(__('menu.departments')); ?></a></li>
                <li><a href="<?php echo e(route('pos.index')); ?>"><?php echo e(__('menu.positions')); ?></a></li>
                <li><a href="<?php echo e(route('teams.index')); ?>"><?php echo e(__('menu.teams')); ?></a></li>
                <li><a href="<?php echo e(route('sector.index')); ?>"><?php echo e(__('menu.sector')); ?></a></li>
                <li><a href="<?php echo e(route('zone.index')); ?>"><?php echo e(__('menu.zone')); ?></a></li>
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">emoji_people</i>
                <span class="nav-text"><?php echo e(__('menu.attendance')); ?></span>
            </a>
            <ul aria-expanded="false">
                <li><a href="<?php echo e(route('att.shift')); ?>"><?php echo e(__('menu.work.shifts')); ?></a></li>
                <li><a href="<?php echo e(route('att.schedule')); ?>"><?php echo e(__('menu.employee.schedules')); ?></a></li>
                
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">calendar_month</i>	
                <span class="nav-text"><?php echo e(__('menu.leave')); ?></span>
            </a>
            <ul aria-expanded="false">
                <li><a href="<?php echo e(route('leave.add')); ?>"><?php echo e(__('menu.leave.add')); ?></a></li>
                <li><a href="<?php echo e(route('leave.balance')); ?>"><?php echo e(__('menu.leave.balances')); ?></a></li>
                <li><a href="<?php echo e(route('leave.request')); ?>"><?php echo e(__('menu.leave.request')); ?></a></li>
                <li><a href="<?php echo e(route('holi.add')); ?>"><?php echo e(__('menu.holiday')); ?></a></li>	
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">medication</i>
                <span class="nav-text"><?php echo e(__('menu.payroll')); ?></span>
            </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('payroll.info')); ?>"><?php echo e(__('menu.salary.information')); ?></a></li>
                    <li><a href="<?php echo e(route('payroll.list')); ?>"><?php echo e(__('menu.advance.salary')); ?></a></li>
                    <li><a href="<?php echo e(route('payroll.slip')); ?>"><?php echo e(__('menu.payslip')); ?></a></li>
                    <li><a href="<?php echo e(route('payroll.tax')); ?>"><?php echo e(__('menu.tax.assesment')); ?></a></li>
                    <li><a href="<?php echo e(route('payroll.fund')); ?>"><?php echo e(__('menu.provident.fund')); ?></a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">paid</i>
                    <span class="nav-text"><?php echo e(__('menu.accounts')); ?></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('acc.income')); ?>"><?php echo e(__('menu.income')); ?></a></li>
                    <li><a href="<?php echo e(route('acc.expense')); ?>"><?php echo e(__('menu.expense')); ?></a></li>
                    <li><a href="<?php echo e(route('acc.balance')); ?>"><?php echo e(__('menu.accounts.ladger')); ?></a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text"><?php echo e(__('menu.recruitment')); ?></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('rec.post')); ?>"><?php echo e(__('menu.job.postings')); ?></a></li>
                    <li><a href="<?php echo e(route('rec.app')); ?>"><?php echo e(__('menu.applicants')); ?></a></li>
                    <li><a href="<?php echo e(route('rec.int')); ?>"><?php echo e(__('menu.interviews')); ?></a></li>
                    <li><a href="<?php echo e(route('rec.on')); ?>"><?php echo e(__('menu.onboarding')); ?></a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text"><?php echo e(__('menu.notice')); ?></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('notice.index')); ?>"><?php echo e(__('menu.notices')); ?></a></li>
                    <li><a href="<?php echo e(route('notice.create')); ?>"><?php echo e(__('menu.add.notice')); ?></a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text"><?php echo e(__('menu.documents')); ?></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('documents.doc')); ?>"><?php echo e(__('menu.hr.documents')); ?></a></li>
                    <li><a href="<?php echo e(route('documents.policie')); ?>"><?php echo e(__('menu.policies')); ?></a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text"><?php echo e(__('menu.performance')); ?></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('review.list')); ?>"><?php echo e(__('menu.performance.rauting')); ?></a></li>
                    <li><a href="<?php echo e(route('review.add')); ?>"><?php echo e(__('menu.reviews.add')); ?></a></li>
                    <li><a href="<?php echo e(route('review.target')); ?>"><?php echo e(__('menu.set.target')); ?></a></li>
                    <li><a href="<?php echo e(route('review.training')); ?>"><?php echo e(__('menu.training.development')); ?></a></li>
                </ul>
            </li>
            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Super-Admin')): ?>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> settings </i>
                    <span class="nav-text"><?php echo e(__('menu.settings')); ?></span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="<?php echo e(route('roles.index')); ?>"><?php echo e(__('menu.role.settings')); ?></a></li>
                    <li><a href="<?php echo e(route('settings.index')); ?>"><?php echo e(__('menu.site.settings')); ?></a></li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************--><?php /**PATH C:\laragon\www\hrms\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>