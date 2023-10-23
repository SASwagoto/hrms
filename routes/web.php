<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TemporaryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard')->middleware('auth');
// });


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/language/{lang}', [LangController::class, 'index'])->name('langChange');

    //Employee route
    Route::get('/employee', [EmployeeController::class, 'index'])->name('emp.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('emp.create');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('emp.store');
    Route::get('/employee/show/{employee}', [EmployeeController::class, 'show'])->name('emp.show');

    //getPosition
    Route::get('/get-positions/{id}', [DepartmentController::class,'getPositions']);

    //Department
    Route::get('/department', [DepartmentController::class,'index'])->name('dept.index');
    Route::post('/department/store', [DepartmentController::class,'store'])->name('dept.store');
    Route::put('/department/update/{department}', [DepartmentController::class,'update'])->name('dept.update');
    Route::delete('/department/delete/{department}', [DepartmentController::class,'destroy'])->name('dept.delete');

    //positions
    Route::get('/positions', [DepartmentController::class,'pos_index'])->name('pos.index');
    Route::post('/positions/store', [DepartmentController::class,'pos_store'])->name('pos.store');

    //teams
    Route::get('/teams', [TeamController::class,'team_index'])->name('teams.index');
    Route::post('/teams/store', [TeamController::class,'team_store'])->name('team.store');

    //Zone
    Route::get('/zone', [TeamController::class, 'zone'])->name('zone.index');
    Route::post('/zone/store', [TeamController::class, 'zone_store'])->name('zone.store');
    Route::put('/zone/update/{zone}', [TeamController::class, 'zone_update'])->name('zone.update');
    Route::delete('/zone/delete/{zone}', [TeamController::class, 'zone_delete'])->name('zone.delete');

    //Sector
    Route::get('/sector', [TeamController::class, 'sector'])->name('sector.index');
    Route::post('/sector/store', [TeamController::class, 'sector_store'])->name('sector.store');
    Route::get('/sector/assign-leader', [TeamController::class, 'sector_assign_leader'])->name('sector.assign.sl');
    Route::post('/sector/assign-leader/store', [TeamController::class, 'assign_S_leader'])->name('assign.sl');
    Route::get('/sector/assign-team', [TeamController::class, 'sector_assign_team'])->name('sector.assign.tm');
    Route::post('/sector/assign-team/store', [TeamController::class, 'assign_team'])->name('assign.tm');

    //Settings
    Route::get('/settings/site', [SiteController::class,'index'])->name('settings.index');
    Route::post('/settings/site/{site}', [SiteController::class,'update'])->name('settings.update');

    //User Role Setting
    Route::get('/user-roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/add-role', [RoleController::class, 'add_role'])->name('roles.add');
    Route::post('/create-role', [RoleController::class, 'create_role'])->name('roles.create');
    Route::get('/add-permission', [RoleController::class, 'add_permission'])->name('permission.add');
    Route::post('/create-permission', [RoleController::class, 'create_permission'])->name('permission.create');
    Route::get('/give-permission', [RoleController::class, 'assign_permission'])->name('permission.assign');
    Route::post('/give-permission/create', [RoleController::class, 'create_assign_permission'])->name('permission.assign.create');
    
    //Notice
    Route::get('/notice/add', [TemporaryController::class,'notice_index'])->name('notice.index');
    Route::get('/notice/list', [TemporaryController::class,'notice_list'])->name('notice.list');

    //Attendance
    Route::get('/attendance/list', [TemporaryController::class,'attendance_list'])->name('att.list');

    //Leaves
    Route::get('/leave/list', [TemporaryController::class,'leave_list'])->name('leave.list');
    Route::get('/leave/add', [TemporaryController::class,'leave_add'])->name('leave.add');
    Route::get('/leave/balance', [TemporaryController::class,'leave_balance'])->name('leave.balance');
    Route::get('/leave/request', [TemporaryController::class,'leave_request'])->name('leave.request');
    Route::get('/leave/add_req', [TemporaryController::class,'leave_add_req'])->name('leave.add_req');

    //Shift
    Route::get('/attendance/shift', [TemporaryController::class,'shift_index'])->name('att.shift');

    //Schedule
    Route::get('/attendance/schedule', [TemporaryController::class,'schedule_index'])->name('att.schedule');

    //Holiday
    Route::get('/holiday/add', [TemporaryController::class,'holiday_add'])->name('holi.add');

    //accounts
    Route::get('/income', [TemporaryController::class, 'acc_income'])->name('acc.income');
    Route::get('/expense', [TemporaryController::class, 'acc_expense'])->name('acc.expense');
    Route::get('/balance', [TemporaryController::class, 'acc_balance'])->name('acc.balance');

    //Recruitment
    Route::get('/recruitment/post', [TemporaryController::class, 'rec_post'])->name('rec.post');
    Route::get('/recruitment/applicants', [TemporaryController::class, 'rec_app'])->name('rec.app');
    Route::get('/recruitment/interview', [TemporaryController::class, 'rec_int'])->name('rec.int');
    Route::get('/recruitment/onboarding', [TemporaryController::class, 'rec_on'])->name('rec.on');

    //Documents
    Route::get('/documents/doc', [TemporaryController::class, 'documents_doc'])->name('documents.doc');
    Route::get('/documents/policie', [TemporaryController::class, 'documents_policie'])->name('documents.policie');
    Route::get('/documents/add', [TemporaryController::class, 'documents_add'])->name('documents.add');

    //Payroll
    Route::get('/payroll/info', [TemporaryController::class, 'payroll_info'])->name('payroll.info');
    Route::get('/payroll/advance', [TemporaryController::class, 'payroll_advance'])->name('payroll.advance');
    Route::get('/payroll/slip', [TemporaryController::class, 'payroll_slip'])->name('payroll.slip');
    Route::get('/payroll/fund', [TemporaryController::class, 'payroll_fund'])->name('payroll.fund');
    Route::get('/payroll/tax', [TemporaryController::class, 'payroll_tax'])->name('payroll.tax');
    Route::get('/payroll/list', [TemporaryController::class, 'payroll_list'])->name('payroll.list');

    //Review & Rating
    Route::get('/review', [TemporaryController::class, 'review_list'])->name('review.list');
    Route::get('/review/add', [TemporaryController::class, 'review_add'])->name('review.add');
    Route::get('/review/target', [TemporaryController::class, 'review_target'])->name('review.target');
    Route::get('/review/training', [TemporaryController::class, 'review_training'])->name('review.training');
});

require __DIR__.'/auth.php';
