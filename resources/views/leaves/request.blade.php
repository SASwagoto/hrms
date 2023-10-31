@extends('layouts.admin')

@section('title')
    Leave Request
@endsection

@section('header')
    Leave Request
@endsection
@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display table datatables" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Employee Id</th>
                                <th>Emolotee Name</th>
                                <th>Leave Type</th>
                                <th>Leave Reason</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Days</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($leave_requests as $key => $leave_request)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$leave_request->user->emp->employee_id}}</td>
                                <td>{{$leave_request->user->name}}</td>
                                <td>{{$leave_request->leave->name}}</td>
                                <td>{{$leave_request->reason}}</td>
                                <td>{{$leave_request->start_date}}</td>
                                <td>{{$leave_request->end_date}}</td>
                                <td>{{$leave_request->days}}</td>
                                <td>
                                    <ul class="action_btn">
                                        <li><a href="{{route('leave.approve', $leave_request->id)}}"><i class="fa-solid fa-check fa-lg"
                                                    style="color: #0aae25;"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-times fa-lg"
                                                    style="color: #ff0000;"></i></a></li>
                                    </ul>
                                </td>

                            </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">No Leave Request Found</td>
                                </tr>
                            @endforelse
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Employee Id</th>
                                <th>Emolotee Name</th>
                                <th>Leave Type</th>
                                <th>Leave Reason</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Days</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
