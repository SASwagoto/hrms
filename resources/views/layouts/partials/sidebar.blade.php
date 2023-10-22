


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
                <span class="nav-text">Department</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('dept.index')}}">Departments</a></li>
                <li><a href="{{route('pos.index')}}">Positions</a></li>
                <li><a href="{{route('teams.index')}}">Teams</a></li>
                <li><a href="{{route('sector.index')}}">Sector</a></li>
                <li><a href="{{route('zone.index')}}">Zone</a></li>
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">emoji_people</i>
                <span class="nav-text">Attendance</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('att.shift')}}">Work Shifts</a></li>
                <li><a href="{{route('att.schedule')}}">Employee Schedules</a></li>
                
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">calendar_month</i>	
                <span class="nav-text">Leaves</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('leave.add')}}">Add Leave</a></li>
                <li><a href="{{route('leave.balance')}}">Leave Balances</a></li>
                <li><a href="{{route('leave.request')}}">Leave Request</a></li>
                <li><a href="{{route('holi.add')}}">Holidays</a></li>	
            </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-symbols-outlined">medication</i>
                <span class="nav-text">Payroll</span>
            </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('payroll.info')}}">Salary Information</a></li>
                    <li><a href="{{route('payroll.list')}}">Advance Salary</a></li>
                    <li><a href="{{route('payroll.slip')}}">Payslip</a></li>
                    <li><a href="{{route('payroll.tax')}}">Tax Assesment</a></li>
                    <li><a href="{{route('payroll.fund')}}">Provident Fund</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons">paid</i>
                    <span class="nav-text">Accounts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('acc.income')}}">Income</a></li>
                    <li><a href="{{route('acc.expense')}}">Expense</a></li>
                    <li><a href="{{route('acc.balance')}}">Accounts Ledger</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Recruitment</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('rec.post')}}">Job Postings</a></li>
                    <li><a href="{{route('rec.app')}}">Applicants</a></li>
                    <li><a href="{{route('rec.int')}}">Interviews</a></li>
                    <li><a href="{{route('rec.on')}}">Onboarding</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Notice</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('notice.list')}}">Notice</a></li>
                    <li><a href="{{route('notice.index')}}">Add Notice</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Documents</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('documents.doc')}}">HR Documents</a></li>
                    <li><a href="{{route('documents.policie')}}">Policies</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> assessment </i>
                    <span class="nav-text">Performance</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('review.list')}}">Performance Rating</a></li>
                    <li><a href="{{route('review.add')}}">Add Reviews</a></li>
                    <li><a href="{{route('review.target')}}">Set Target</a></li>
                    <li><a href="{{route('review.training')}}">Training & Development</a></li>
                </ul>
            </li>
            @hasrole('Super-Admin')
            <li><a class="has-arrow " href="/javascript:void(0);" aria-expanded="false">
                <i class="material-icons"> settings </i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('roles.index')}}">Role Settings</a></li>
                    <li><a href="{{route('settings.index')}}">Site Settings</a></li>
                </ul>
            </li>
            @endhasrole
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->