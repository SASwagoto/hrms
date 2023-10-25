@extends('layouts.admin')

@section('title')
    New policies
@endsection

@section('header')
    New Policies
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        <h3>Add Company Policy</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('policy.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-6">
                                    <label class="form-label text-primary">Title<span class="required">*</span></label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="Enter Policy Headline">
                                </div><br>
                                <div class="mb-6">
                                    <label class="form-label text-primary">Policies<span class="required">*</span></label>
                                    <textarea class="form-control" name="policies" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div><br>
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
