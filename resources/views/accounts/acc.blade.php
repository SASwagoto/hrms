@extends('layouts.admin')

@section('title')
{{$siteInfo->app_title}}::Accounts
@endsection
@push('css')
    
@endpush
@section('header')
   Accounts
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Accounts</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('acc.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-primary">Accounts Name <span class="required">*</span></label>
                            <input type="text" name="acc_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary">Accounts Type <span class="required">*</span></label>
                            <select name="acc_type" id="acc_type" class="form-control" required>
                                <option value="">Options..</option>
                                <option disabled>Cash &#40;Default&#41;</option>
                                <option>Bank</option>
                                <option>Mobile Banking</option>
                            </select>
                        </div>
                        <div class="accNum d-none">
                            <h5>Bank Information</h5>
                            <div class="mb-3">
                                <label class="form-label text-primary">Bank Name</label>
                                <input type="text" name="bank_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Accounts Number</label>
                                <input type="text" name="acc_num" class="form-control">
                            </div>
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
                    <div class="table-responsive">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th> 
                                    <th>Type</th> 
                                    <th>Bank Name</th> 
                                    <th>Accounts No</th> 
                                    <th>Balance</th> 
                                    <th class="text-end">Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accs as $key => $acc)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$acc->acc_name}}</td> 
                                    <td>{{$acc->acc_type}}</td> 
                                    <td>{{$acc->bank_name}}</td> 
                                    <td>{{$acc->acc_num}}</td> 
                                    <td class="text-end fw-bolder">{{number_format($acc->balance, 2)}}</td> 
                                    <td>
                                        <ul class="action_btn">
                                            <li><a href="#"><i
                                                class="fa-solid fa-pen-to-square fa-xl"
                                                style="color: #347af4;"></i></a></li>
                                            <li><a href="#"  ><i class="fa-solid fa-trash fa-xl"
                                                        style="color: #ff0000;"></i></a></li>
                                        </ul>
                                    </td> 
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No Accounts Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5" class="text-end">Total Balance</th>
                                    <th class="text-end fw-bolder">{{number_format($accs->sum('balance'), 2)}}</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function(){
            $('#acc_type').on('change', function(){
                var val = $(this).val();
                if (val == 'Bank' || val == 'Mobile Banking') {
                    $('.accNum').removeClass('d-none');
                }else{
                    $('.accNum').addClass('d-none');
                }
            });
        });
    </script>
@endpush