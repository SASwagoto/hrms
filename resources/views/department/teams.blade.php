@extends('layouts.admin')

@section('title')
    Teams
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
   Teams 
@endsection
@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Team</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('team.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-primary">Team Name<span class="required">*</span></label>
                            <input type="text" required name="team_name" class="form-control input-default"
                                placeholder="Team Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Department<span
                                    class="required">*</span></label>
                            <select id="department-select" required name="dept_id">
                                <option value="">Options..</option>
                                @forelse ($depts as $dept)
                                <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
                                @empty
                                <option>No Department Found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Zone</label>
                            <select id="zone-select" name="zone_id">
                                <option value="">Options..</option>
                                @forelse ($zones as $zone)
                                <option value="{{$zone->id}}">{{$zone->zone_name}}</option>
                                @empty
                                <option>No Zone Found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Leader</label>
                            <select id="emp-select" class="form-control" name="leader_id">
                                <option value="">Options..</option>
                                @forelse ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @empty
                                <option>No Employee Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9">
        <div class="card" id="bootstrap-table4">
            <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                <div>
                    <h4 class="card-title">Team List</h4>
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
                                        <th>#</th>
                                        <th>Team Name</th>
                                        <th>Department Name</th>
                                        <th>Zone</th>
                                        <th>Leader</th>
                                        <th>Status</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($teams as $key => $team)
                                    <tr>
                                        <th>{{$key+1}}</th>
                                        <td>{{$team->team_name}}</td>
                                        <td>{{$team->department->dept_name}}</td>
                                        <td>{{$team->zone->zone_name}}</td>
                                        @if ($team->leader_id)
                                        <td>{{$team->leader->name}}</td>
                                        @else
                                        <td>Not Assigned</td>
                                        @endif
                                        <td><span class="badge badge-success light">
                                                Active</span>
                                        </td>
                                        <td>
                                            <ul class="action_btn">
                                                <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                            style="color: #347af4;"></i></a></li>
                                                <li><a href="#"><i
                                                            class="fa-solid fa-trash fa-xl"
                                                            style="color: #ff0000;"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr> 
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No Team Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins-init/select2-init.js"></script>

    <script>
        // Initialize Select2 for the "Select Employee" dropdown
        $('#department-select').select2();

        // Initialize Select2 for the "Leader Shift" dropdown
        $('#zone-select').select2();
        $('#emp-select').select2();

    </script>
@endpush