<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class TemporaryController extends Controller
{

    public function setting_index()
    {
        return view('settings.site');
    }


    public function notice_list()
    {
        return view('notice.list');
    }

    public function attendance_list()
    {
        return view('attendance.list');
    }

    public function schedule_index()
    {
        return view('attendance.schedule');
    }


    public function leave_add()
    {
        return view('leaves.add');
    }

    public function leave_balance()
    {
        return view('leaves.balance');
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
