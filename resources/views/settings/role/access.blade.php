@extends('layouts.admin')

@section('title')
    Assign Role Permission
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush

@section('header')
Assign Role Permission
@endsection
@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="{{ route('roles.index') }}">Assign User Role</a></li>
            <li><a href="{{ route('roles.add') }}">Add New Role</a></li>
            <li><a href="{{ route('permission.add') }}">Add New Permission</a></li>
            <li><a href="{{ route('permission.assign') }}">Give Role Permission</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('permission.assign.create')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-primary">Select Roles<span class="required">*</span></label>
                        <select id="select-role" name="role_id">
                            @forelse ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @empty
                            <option>No role Found</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-primary">Select Permissions
                            <span class="required">*</span></label>
                        <select class="multi-select" name="permission[]" multiple="multiple">
                            @forelse ($permissions as $permission)
                            <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @empty
                            <option>No Permission Found</option>
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
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role Name</th>
                            <th>Permissions</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $key => $role)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$role->name}}</td>
                            <td>{!! $role->permissions()->pluck('name')->implode(', ') ? $role->permissions()->pluck('name')->implode(', ') : '<span class="badge badge-danger">Not Assigned</span>' !!}
                            </td>
                            {{-- <td>{{$role->permissions()->pluck('name')->implode(', ') ? $role->permissions()->pluck('name')->implode(', ') : '<a href="#">Give Permission</a>' }}</td> --}}
                            <td>
                                <ul class="action_btn">
                                    <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                                    <li><a href="#"><i class="fa fa-trash"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No Data Found</td>
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
