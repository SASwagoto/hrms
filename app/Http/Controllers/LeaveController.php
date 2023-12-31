<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use App\Models\Holiday;
use App\Models\Leave;
use App\Models\LeaveBalance;
use App\Models\LeavePolicy;
use App\Models\LeaveRequest;
use App\Models\Team;
use Auth;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class LeaveController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leave_requests = LeaveRequest::where('user_id', auth()->user()->id)->get();
        return view('leaves.list', compact('leave_requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $leaves = Leave::all();
        return view('leaves.add', compact('leaves'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Leave::create([
            'name'=> $request->name,
            'type'=> $request->type,
            'comments'=> $request->comments,
            'days'=> $request->days,
        ]);
        Alert::success($request->name, 'Added Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        //
    }

    public function leave_add_req()
    {
        $types = Leave::active()->orderBy('name', 'asc')->get();
        return view('leaves.add_req', compact('types'));
    }

    public function request_store(Request $request)
    {
        
        LeaveRequest::create([
            'user_id'=> $request->user_id,
            'leave_id'=> $request->leave_id,
            'reason'=> $request->reason,
            'start_date'=> $request->start_date,
            'end_date'=> $request->end_date,
            'days'=> $request->days,
            'created_at'=> now(),
        ]);
        $availableBalance = Leave::active()->where('id', $request->leave_id)->first();
        $currentBalance = $availableBalance->days - $request->days;
        LeaveBalance::create([
            'user_id'=> $request->user_id,
            'leave_id'=> $request->leave_id,
            'current_balance'=> $currentBalance,
            'created_at'=> now(),
        ]);

       Alert::info('Request', 'Leave Request Sent');
       return redirect()->route('leave.list');
    }

    public function leave_request()
    {
        if (Auth::user()->role('Super-Admin', 'HR')) 
        {
            $leave_requests = LeaveRequest::where('status', 1)->orderBy('created_at','asc')->get();
        }
        $team = Team::where('leader_id', auth()->user()->id)->first();
        $leave_requests = collect(); // Initialize a collection to store leave requests

        if ($team) {
            foreach ($team->members as $member) {
                $memberLeaveRequests = LeaveRequest::where('status', 0)
                    ->where('user_id', $member->id)
                    ->orderBy('created_at', 'desc')
                    ->get();
                
                // Merge the member's leave requests into the main collection
                $leave_requests = $leave_requests->merge($memberLeaveRequests);
            }
        }else{
            $leave_requests = LeaveRequest::where('status',0)->orderBy('created_at','asc')->get();
        }
        return view('leaves.request', compact('leave_requests'));
    }

    public function approve_request(LeaveRequest $leaveRequest)
    {

        if($leaveRequest->status == 1){
            $leaveRequest->update([
                'status'=> 2,
                'next_approvedBy' => auth()->user()->id,
                'next_approved_at'=> now(),
            ]);
        }

        $leaveRequest->update([
            'status'=> 1,
            'approvedBy' => auth()->user()->id,
            'approved_at'=> now(),
        ]);

        Alert::success('Approved', 'Leave Request Approved');
        return redirect()->back();
    }

    

    public function getLeaveBalance($userId, $leaveId)
    {
        $leave = Leave::where('id', $leaveId)->first();
        $leave_balance = LeaveBalance::where('user_id', $userId)->where('leave_id', $leaveId)->first();
        if ($leave_balance) {
            $currentBalance = $leave_balance->current_balance;
            return response()->json($currentBalance);
        }else{
            return response()->json($leave->days);
        }
    }

    public function leave_policy()
    {
       $leaves = Leave::active()->get();
       $policies = LeavePolicy::all();
       return view('leaves.policy', compact('leaves','policies'));
    }

    public function holiday()
    {
        $holidays = Holiday::all();
        return view('holiday.add', compact('holidays'));
    }

    public function holiday_store(Request $request)
    {
        $holiday = Holiday::create($request->all());

        Alert::success($holiday->name, 'Added Successfully!');
        return redirect()->back();
    }

}
