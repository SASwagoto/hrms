@extends('layouts.admin')

@section('title')
    Leave Policy
@endsection
@push('css')
    
@endpush
@section('header')
   {{$siteInfo->app_title}}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Leave Policy</h3>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="leave" class="form-label text-primary">Select Leave Type <span class="required">*</span></label>
                            <select name="leave_id" id="" class="form-control">
                                <option value="">Options..</option>
                                @forelse ($leaves as $leave)
                                <option value="{{$leave->id}}">{{$leave->name}}</option>
                                @empty
                                <option value="">No Leaves Found</option>  
                                @endforelse
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label text-primary">Policy <span class="required">*</span></label>
                            <textarea name="policy" id="policy" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Leave Name</td>
                                <td>Policy</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($policies as $policy)
                            <tr>
                                <td></td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Policy Found</td>
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
    
@endpush