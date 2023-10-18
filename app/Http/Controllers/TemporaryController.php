<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class TemporaryController extends Controller
{
    public function position_index()
    {
        return view('department.position');
    }

    public function teams_index()
    {
        return view('department.teams');
    }

    public function setting_index()
    {
        return view('settings.site');
    }

    public function notice_index()
    {
        return view('notice.add');
    }

    public function notice_list()
    {
        return view('notice.list');
    }

    public function attendance_list()
    {
        return view('attendance.list');
    }

    public function leave_list()
    {
        return view('leaves.list');
    }

    public function shift_index()
    {
        return view('attendance.shift');
    }

    public function schedule_index()
    {
        return view('attendance.schedule');
    }

    public function holiday_add()
    {
        return view('holiday.add');
    }

    public function leave_add()
    {
        return view('leaves.add');
    }

    public function leave_balance()
    {
        return view('leaves.balance');
    }

    public function leave_request()
    {
        return view('leaves.request');
    }

    public function leave_add_req()
    {
        return view('leaves.add_req');
    }

    public function acc_income()
    {
        return view('accounts.income');
    }

    public function acc_expense()
    {
        return view('accounts.expense');
    }

    public function acc_balance()
    {
        return view('accounts.balance');
    }

    public function rec_post()
    {
        return view('recruitment.post');

    }

    public function rec_app()
    {
        return view('recruitment.applicants');

    }

    public function rec_int()
    {
        return view('recruitment.interview');

    }

    public function rec_on()
    {
        return view('recruitment.onboarding');

    }

    public function documents_doc()
    {
        return view('documents.doc');

    }

    public function documents_policie()
    {
        return view('documents.policie');

    }

    public function documents_add()
    {
        return view('documents.add');

    }

    public function payroll_info()
    {
        return view('payroll.info');

    }

    public function payroll_advance()
    {
        return view('payroll.advance');

    }

    public function payroll_slip()
    {
        return view('payroll.slip');

    }

    public function payroll_fund()
    {
        return view('payroll.fund');

    }

    public function payroll_tax()
    {
        return view('payroll.tax');

    }

    public function payroll_list()
    {
        return view('payroll.list');

    }

    public function review_list()
    {
        return view('review.list');
    }

    public function review_add()
    {
        return view('review.add');
    }

    public function review_target()
    {
        return view('review.target');
    }

    public function review_training()
    {
        return view('review.training');
    }
}
