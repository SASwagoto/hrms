@extends('layouts.admin')
@php
    $mytime = Carbon\Carbon::now();
@endphp
@section('title')
    Income 
@endsection

@section('header')
   Incomes
@endsection
@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <form action="{{route('acc.income.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label>Source</label>
                        <input type="text" class="form-control" name="source" id="" placeholder="Sales, Client, Rental Property">
                    </div>
                    <div class="mb-3">
                        <label class="text-primary form-label">Select Accounts</label>
                        <select name="acc_id" class="form-control">
                            <option value="">Options..</option>
                            @forelse ($accounts as $acc)
                                <option value="{{$acc->id}}">{{$acc->acc_name}}</option>
                            @empty
                                <option value="">No Accounts Found</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Amount</label>
                        <input type="number" style="text-align: right;" placeholder="0.00" class="form-control" name="amount" step="0.01" min="0" pattern="^\d+(\.\d{2})?$">
                    </div>
                    <div class="mb-3">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="">
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="description" name="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-sm table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Source</th>
                                <th>Description</th>
                                <th>Accounts</th>
                                <th class="text-end">Amount</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($incomes as $key => $income)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$income->date}}</td>
                                <td>{{$income->source}}</td>
                                <td>{{Str::of($income->description)->limit(15, '...')}}</td>
                                <td>{{Str::of($income->account->acc_name)->words(2,'...')}}</td>
                                <td class="text-end fw-bold">{{number_format($income->amount, 2)}}</td>
                                <td>
                                    <ul class="action_btn">
                                        <li><a href="#"><i
                                            class="fa-solid fa-pen-to-square fa-xl"
                                            style="color: #347af4;"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-trash fa-xl"
                                                    style="color: #ff0000;"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No Incomes Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5" class="text-end">
                                    Total Income:
                                </th>
                                <th class="text-end fw-bolder text-primary">{{number_format($incomes->sum('amount'), 2)}}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
