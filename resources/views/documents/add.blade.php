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

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="mb-6">
                            <label class="form-label text-primary">Titel<span class="required">*</span></label>
                            <input type="text" name="titel" class="form-control"
                                placeholder="Titel">
                        </div><br>
                        <div class="mb-6">
                            <label class="form-label text-primary">Policies<span class="required">*</span></label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                        </div><br>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                        
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
