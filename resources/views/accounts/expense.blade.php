@extends('layouts.admin')
@php
    $mytime = Carbon\Carbon::now();
@endphp

@section('title')
    Expense 
@endsection

@section('header')
   Expenses
@endsection
@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label>Payee</label>
                    <input type="text" class="form-control" name="payee" id="" placeholder="Enter Payee Name">
                </div>
                <div class="mb-3">
                    <label>Amount</label>
                    <input type="number" class="form-control" step="0.01" min="0" pattern="^\d+(\.\d{2})?$">
                </div>
                <div class="mb-3">
                    <label>Date</label>
                    <input type="date" class="form-control" value="">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <input type="description" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
                            <th>Payee</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Imran Mondal</td>
                            <td>HRM Sales purpose</td>
                            <td>{{$mytime->toDateTimeString()}}</td>
                            <td>300.00$</td>
                            <td>
                                <ul class="action_btn">
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
@endsection
