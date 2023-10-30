@extends('layouts.admin')

@section('title')
    {{$team->team_name}} Details
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
{{$team->team_name}} Details
@endsection
@section('content')
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="mb-4 float-end w-100 bg-light">
                <div class="mb-3">
                    <select id="emp-select" class="form-control" name="leader_id">
                        <option value="">Options..</option>
                        @forelse ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @empty
                            <option>No Employee Found</option>
                        @endforelse
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add Member</button>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Member lis of {{$team->team_name}}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Target</th>
                                    <th>Sales</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <th>
                                        @if ($team->leader)
                                        {{$team->leader->name}}
                                        @else
                                        Not Assigned
                                        @endif
                                    </th>
                                    <th>100</th>
                                    <th>70</th>
                                    <th>
                                        Leader
                                    </th>
                                </tr>
                                @foreach ($team->members as $key => $member)
                                <tr>
                                    <th>{{$key + 2}}</th>
                                    <th>{{$member->name}}</th>
                                    <th>100</th>
                                    <th>70</th>
                                    <th>
                                        <ul class="action_btn">
                                            <li><a href="javascript:void(0);" onclick="document.getElementById('removeform{{ $key + 2 }}').submit()"><i class="fa-solid fa-trash fa-xl"
                                                style="color: #ff0000;"></i></a></li>
                                                <form action="{{route('team.removeMember')}}" id="removeform{{$key+2}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="team_id" value="{{$team->id}}">
                                                    <input type="hidden" name="user_id" value="{{$member->id}}">
                                                </form>
                                        </ul>
                                    </th>
                                </tr>
                                @endforeach
                                <tr class="newform d-none">
                                    <form action="{{route('team.addMember')}}" method="POST">
                                        @csrf
                                        <td># <input type="hidden" name="team_id" value="{{$team->id}}"></td>
                                    <td>
                                        <select id="emp-select" class="form-control" name="user_id">
                                            <option value="">Options..</option>
                                            @forelse ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @empty
                                                <option>No Employee Found</option>
                                            @endforelse
                                        </select>
                                    </td>
                                    <td colspan="2">
                                        <input type="number" placeholder="Set Target" name="set_target" class="form-control">
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </td>
                                    </form>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="text-center bg-primary"><a href="javascript:void(0);" id="addMember" class="text-light"><i class="fa-solid fa-user-plus"></i> Add Member</a></th>
                                </tr>
                            </tfoot>
                        </table>
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
        $('#emp-select').select2();
    </script>
    <script>
        $(document).ready(function(){
            $('#addMember').on('click', function(){
                console.log('hoiche');
                $('.newform').removeClass('d-none');
            });
        });
    </script>
    
@endpush
