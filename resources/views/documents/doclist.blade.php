@extends('layouts.admin')

@section('title')
    Document List
@endsection

@section('header')
   Document List
@endsection
@section('content')
<div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="table-responsive">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>file</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($docs as $key => $doc)
                        
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
   </div>
</div>
@endsection
