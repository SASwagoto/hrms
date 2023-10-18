@extends('layouts.admin')

@section('title')
    Site Setting
@endsection
@push('css')
<style>
    .ImageView img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid#000;
        margin: 10px
    }
</style>
@endpush
@section('header')
   Site Setting
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{route('settings.update', $data->id)}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h5>General Settings</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="appTitle">App Title</label>
                                <input type="text" name="app_title" id="" class="form-control" value="{{$data->app_title}}">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">Company Name</label>
                                <input type="text" name="company_name" id="" class="form-control" value="{{$data->company_name}}">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">Company Email</label>
                                <input type="email" name="company_email" id="" class="form-control" value="{{$data->company_email}}">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">Company Phone</label>
                                <input type="text" name="company_phone" id="" class="form-control" value="{{$data->company_phone}}">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">Footer Title</label>
                                <input type="text" name="footer_title" id="" class="form-control" value="{{$data->footer_title}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="siteLogo">Site Logo</label>
                                        <div class="ImageView">
                                            <img id="Logo_preview" src="{{ asset('assets') }}/images/logo.png"
                                                alt="">
                                        </div>
                                        <input type="file"
                                            onchange="document.getElementById('Logo_preview').src = window.URL.createObjectURL(this.files[0])"
                                            class="form-control" name="app_logo">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="siteLogo">Fav Icon</label>
                                        <div class="ImageView">
                                            <img id="fav_icon_preview" src="{{ asset('assets') }}/images/logo.png"
                                                alt="">
                                        </div>
                                        <input type="file"
                                            onchange="document.getElementById('fav_icon_preview').src = window.URL.createObjectURL(this.files[0])"
                                            class="form-control" name="fav_icon">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">About us</label>
                                <textarea rows="4" name="about_us" id="" class="form-control">{{$data->about_us}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">Footer Url</label>
                                <input type="text" name="footer_url" id="" class="form-control" value="{{$data->footer_url}}">
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Social Profile Link</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="appTitle">Facebook Profile URL</label>
                                <input type="text" name="fb_url" id="" class="form-control" value="{{$data->fb_url}}">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">Linkedin Profile URL</label>
                                <input type="text" name="linkedin_url" id="" class="form-control" value="{{$data->twitter_url}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="appTitle">Twitter Profile URL</label>
                                <input type="text" name="twitter_url" id="" class="form-control" value="{{$data->linkedin_url}}">
                            </div>
                            <div class="mb-3">
                                <label for="appTitle">Intagram Profile URL</label>
                                <input type="text" name="insta_url" id="" class="form-control" value="{{$data->insta_url}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
