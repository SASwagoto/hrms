


<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">	
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                    <i class="material-symbols-outlined">groups </i>
                    <span class="nav-text">{{__('menu.employee')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('emp.create')}}">{{__('menu.employee.add')}}</a></li>
                    <li><a href="{{route('emp.index')}}">{{__('menu.employee.list')}}</a></li>
                    <li><a href="{{route('att.list')}}">{{__('menu.attendence')}}</a></li>
                    <li><a href="{{route('leave.list')}}">{{__('menu.leaves')}}</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">apartment </i>
                <span class="nav-text">{{__('menu.department')}}</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('dept.index')}}">{{__('menu.departments')}}</a></li>
                <li><a href="{{route('pos.index')}}">{{__('menu.positions')}}</a></li>
                <li><a href="{{route('teams.index')}}">{{__('menu.teams')}}</a></li>
                <li><a href="{{route('sector.index')}}">{{__('menu.sector')}}</a></li>
                <li><a href="{{route('zone.index')}}">{{__('menu.zone')}}</a></li>
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">emoji_people</i>
                <span class="nav-text">{{__('menu.attendance')}}</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('att.shift')}}">{{__('menu.work.shifts')}}</a></li>
                <li><a href="{{route('att.schedule')}}">{{__('menu.employee.schedules')}}</a></li>
                
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">calendar_month</i>	
                <span class="nav-text">{{__('menu.leave')}}</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('leave.add')}}">{{__('menu.leave.add')}}</a></li>
                <li><a href="{{route('leave.balance')}}">{{__('menu.leave.balances')}}</a></li>
                <li><a href="{{route('leave.request')}}">{{__('menu.leave.request')}}</a></li>
                <li><a href="{{route('holi.add')}}">{{__('menu.holiday')}}</a></li>	
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">medication</i>
                <span class="nav-text">{{__('menu.payroll')}}</span>
            </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('payroll.info')}}">{{__('menu.salary.information')}}</a></li>
                    <li><a href="{{route('payroll.list')}}">{{__('menu.advance.salary')}}</a></li>
                    <li><a href="{{route('payroll.slip')}}">{{__('menu.payslip')}}</a></li>
                    <li><a href="{{route('payroll.tax')}}">{{__('menu.tax.assesment')}}</a></li>
                    <li><a href="{{route('payroll.fund')}}">{{__('menu.provident.fund')}}</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">paid</i>
                    <span class="nav-text">{{__('menu.accounts')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('acc.income')}}">{{__('menu.income')}}</a></li>
                    <li><a href="{{route('acc.expense')}}">{{__('menu.expense')}}</a></li>
                    <li><a href="{{route('acc.balance')}}">{{__('menu.accounts.ladger')}}</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">{{__('menu.recruitment')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('rec.post')}}">{{__('menu.job.postings')}}</a></li>
                    <li><a href="{{route('rec.app')}}">{{__('menu.applicants')}}</a></li>
                    <li><a href="{{route('rec.int')}}">{{__('menu.interviews')}}</a></li>
                    <li><a href="{{route('rec.on')}}">{{__('menu.onboarding')}}</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">{{__('menu.notice')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('notice.list')}}">{{__('menu.notices')}}</a></li>
                    <li><a href="{{route('notice.index')}}">{{__('menu.add.notice')}}</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">{{__('menu.documents')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('documents.doc')}}">{{__('menu.hr.documents')}}</a></li>
                    <li><a href="{{route('documents.policie')}}">{{__('menu.policies')}}</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">{{__('menu.performance')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('review.list')}}">{{__('menu.performance.rauting')}}</a></li>
                    <li><a href="{{route('review.add')}}">{{__('menu.reviews.add')}}</a></li>
                    <li><a href="{{route('review.target')}}">{{__('menu.set.target')}}</a></li>
                    <li><a href="{{route('review.training')}}">{{__('menu.training.development')}}</a></li>
                </ul>
            </li>
            @hasrole('Super-Admin')
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> settings </i>
                    <span class="nav-text">{{__('menu.settings')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('roles.index')}}">{{__('menu.role.settings')}}</a></li>
                    <li><a href="{{route('settings.index')}}">{{__('menu.site.settings')}}</a></li>
                </ul>
            </li>
            @endhasrole
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->