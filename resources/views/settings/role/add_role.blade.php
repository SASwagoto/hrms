@extends('layouts.admin')

@section('title')
    Add New Role
@endsection

@section('header')
Add New Role
@endsection
@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="{{route('roles.index')}}">Assign User Role</a></li>
            <li><a href="{{route('roles.add')}}">Add New Role</a></li>
            <li><a href="{{route('permission.add')}}">Add New Permission</a></li>
            <li><a href="{{route('permission.assign')}}">Give Role Permission</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('roles.create')}}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="role">Role Name</label>
                    <input type="text" name="role_name" required class="form-control" placeholder="Enter Role Name" id="role">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
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

