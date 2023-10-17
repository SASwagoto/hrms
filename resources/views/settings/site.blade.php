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
<div class="card">
    <div class="card-header">
        <h5>General Settings</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="appTitle">App Title</label>
                    <input type="text" name="apptitle" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="appTitle">Company Name</label>
                    <input type="text" name="comp_name" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="appTitle">Company Email</label>
                    <input type="email" name="comp_email" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="appTitle">Company Phone</label>
                    <input type="text" name="comp_phone" id="" class="form-control">
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
                                class="form-control">
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
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="appTitle">About us</label>
                    <textarea rows="4" name="comp_phone" id="" class="form-control"></textarea>
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
                    <input type="text" name="apptitle" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="appTitle">Linkedin Profile URL</label>
                    <input type="text" name="apptitle" id="" class="form-control">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="appTitle">Twitter Profile URL</label>
                    <input type="text" name="apptitle" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="appTitle">Intagram Profile URL</label>
                    <input type="text" name="apptitle" id="" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
@endsection
