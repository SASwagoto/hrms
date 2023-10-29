@extends('layouts.admin')

@section('title')
    Assign Team
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
<link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
    Assign team
@endsection
@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="{{ route('sector.index') }}">Create New Sector</a></li>
            <li><a href="{{ route('sector.assign.tm') }}">Assign Team</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-xl-4 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Assign Sector teams</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('assign.tm')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Sector<span
                                    class="required">*</span></label>
                            <select id="sector-select" class="form-control" name="sector_id">
                                @forelse ($sectors as $sector)
                                @if ($sector->isActive)
                                <option value="{{$sector->id}}">{{$sector->sector_name}}</option>
                                @endif
                                @empty
                                <option>No Sector Found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Teams
                                <span class="required">*</span></label>
                            <select class="multi-select" name="team[]" multiple="multiple">
                                @forelse ($teams as $team)
                                @if ($team->sector === null)
                                <option value="{{$team->id}}">{{$team->team_name}}</option>
                                @endif
                                @empty
                                <option>No Teams Found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8">
        <div class="card" id="bootstrap-table4">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0 px-3">
                <div>
                    <h4 class="card-title">Sector List</h4>
                </div>
            </div>

            <!-- /tab-content -->
            <div class="tab-content" id="myTabContent-3">
                <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel"
                    aria-labelledby="home-tab-3">
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sector</th>
                                        <th>Sector Leader</th>
                                        <th>Teams</th>
                                        <th>Status</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @forelse ($sectors as $key => $sector)
                                   <tr>
                                    <th>{{$key+1}}</th>
                                    <td>{{$sector->sector_name}}</td>
                                    @if ($sector->leader)
                                    <td>{{$sector->leader->name}}</td>
                                    @else
                                    <td>Not Assigned</td>
                                    @endif
                                    <td>
                                    @foreach ($sector->teams as $team)
                                        {{$team->team_name.','}}   
                                    @endforeach
                                    </td>
                                    <td><span class="badge {{ $sector->isActive ? 'badge-success' : 'badge-danger' }} light">{{ $sector->isActive ? 'Active' : 'Inactive' }}</span>
                                    </td>
                                    <td>
                                        <ul class="action_btn">
                                            <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                style="color: #347af4;"></i></a></li>
                                            <li><a href="#"><i class="fa-solid fa-trash fa-xl"
                                                        style="color: #ff0000;"></i></a></li>
                                        </ul>
                                    </td>
                                </tr> 
                                   @empty
                                       
                                   @endforelse   
                                </tbody>
                            </table>
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
    // Initialize Select2 for the "Select Sector" dropdown
    $('#sector-select').select2();
    // Initialize Select2 for the "Select Employee" dropdown
    $('#team-select').select2();
</script>
@endpush