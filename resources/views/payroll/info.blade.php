@extends('layouts.admin')

@section('title')
    Dashboard
@endsection
@push('css')

@endpush
@section('header')
   Dashboard 
@endsection
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3>Salary information Of Imran</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <p><strong>Employee Id: </strong>123<br>
                        <strong>User Name: </strong>Imran</p>
                    </div>
                    <div class="col-xl-6">
                        <p><strong>Department: </strong>Marketing<br>
                        <strong>Position: </strong>Team Leader</p>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card" id="bootstrap-table4">
                    <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    
                    </div>
        
                    <!-- /tab-content -->
                    <div class="tab-content" id="myTabContent-3">
                        <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel"
                            aria-labelledby="home-tab-3">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table-responsive-sm table">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Date</th>
                                                <th>Position</th>
                                                <th>Salary</th>
                                                <th style="text-align: end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Current Salary</td>
                                                <td>Team Leader</td>
                                                <td>30000</td>
                                                <td>
                                                    <ul class="action_btn">
                                                        <li><a href="#"><i
                                                            class="fa-solid fa-circle-info fa-beat"
                                                            style="color: #12a561;"></i></a></li>
                                                        <li><a href="#"><i
                                                            class="fa-solid fa-pen-to-square fa-xl"
                                                            style="color: #347af4;"></i></a></li>
                                                        <li><a href="#" onclick="editable();"><i class="fa-solid fa-trash fa-xl"
                                                                    style="color: #ff0000;"></i></a></li>  
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>1st Jan 2023</td>
                                                <td>Team Leader</td>
                                                <td>30000</td>
                                                <td>
                                                    <ul class="action_btn">
                                                        <li><a href="#"><i
                                                            class="fa-solid fa-circle-info fa-beat"
                                                            style="color: #12a561;"></i></a></li>
                                                        <li><a href="#"><i
                                                            class="fa-solid fa-pen-to-square fa-xl"
                                                            style="color: #347af4;"></i></a></li>
                                                        <li><a href="#" onclick="editable();"><i class="fa-solid fa-trash fa-xl"
                                                                    style="color: #ff0000;"></i></a></li>  
                                                    </ul>
                                                </td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush