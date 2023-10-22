@extends('layouts.admin')

@section('title')
    Dashboard
@endsection
@push('css')
    
@endpush
@section('header')
   {{$siteInfo->app_title}}
@endsection
@section('content')
    <h1>{{__('messages.welcome')}}</h1>
@endsection
@push('js')
    
@endpush