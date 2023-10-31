@extends('layouts.admin')

@section('title')
    User Role Settings
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush

@section('header')
    {{__('messages.user.role.settings')}}
@endsection
@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="{{ route('roles.index') }}">{{__('messages.assign.user.role')}}</a></li>
            <li><a href="{{ route('roles.add') }}">{{__('messages.add.new.role')}}</a></li>
            <li><a href="{{ route('permission.add') }}">{{__('messages.add.new.permission')}}</a></li>
            <li><a href="{{ route('permission.assign') }}">{{__('messages.give.role.permission')}}</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('assignRole')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-primary">{{__('messages.select.user')}}<span
                                class="required">*</span></label>
                        <select id="select-user" name="user_id">
                            @forelse ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @empty
                            <option>{{__('messages.no.user.found')}}</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-primary">{{__('messages.select.roles')}}<span class="required">*</span></label>
                        <select id="select-role" name="role_id">
                            @forelse ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @empty
                            <option>{{__('messages.no.role.found')}}</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">{{__('messages.submit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('messages.user.name')}}</th>
                            <th>{{__('messages.roles')}}</th>
                            <th class="text-end">{{__('messages.action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $key => $user)
                        <tr class="view-mode-row">
                            <td>{{$key+1}}</td>
                            <td class="view-mode">{{$user->name}}</td>
                            <td class="view-mode">{{$user->roles()->pluck('name')->implode(', ')}}</td>
                            <td>
                                <ul class="action_btn">
                                    <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                                    <li><a href="#"><i class="fa fa-times text-danger"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">{{__('messages.no.data.found')}}</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
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
        $('#select-user').select2();

        // Initialize Select2 for the "Select Shift" dropdown
        $('#select-role').select2();
    </script>
@endpush
