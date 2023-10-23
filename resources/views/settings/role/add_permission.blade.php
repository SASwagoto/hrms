@extends('layouts.admin')

@section('title')
    Add New Permission
@endsection

@section('header')
{{__('messages.add.new.permission')}}
@endsection
@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <ul class="action_btn float-start">
            <li><a href="{{route('roles.index')}}">{{__('messages.assign.user.role')}}</a></li>
            <li><a href="{{route('roles.add')}}">{{__('messages.add.new.role')}}</a></li>
            <li><a href="{{route('permission.add')}}">{{__('messages.add.new.permission')}}</a></li>
            <li><a href="{{route('permission.assign')}}">{{__('messages.give.role.permission')}}</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('permission.create')}}" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="role">{{__('messages.permission.name')}}</label>
                    <input type="text" name="permission_name" required class="form-control" placeholder="Enter Permission Name" id="permission">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">{{__('messages.submit')}}</button>
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
                            <th>{{__('messages.role.name')}}</th>
                            <th>{{__('messages.permissions')}}</th>
                            <th class="text-end">{{__('messages.action')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($permissions as $key => $permission)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->created_at}}</td>
                            <td>
                                <ul class="action_btn">
                                    <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                                    <li><a href="#"><i class="fa fa-trash"></i></a></li>
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

