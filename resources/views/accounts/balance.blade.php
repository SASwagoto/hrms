@extends('layouts.admin')

@section('title')
    Accounts Ledger
@endsection

@push('css')
    <link href="{{ asset('assets') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush

@section('header')
   Accounts Ledger
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title flex-wrap">
            <div class="input-group search-area mb-md-0 mb-3">
                <input type="text" class="form-control" placeholder="Search here...">
                <span class="input-group-text"><a href="javascript:void(0)">
                        <svg width="15" height="15" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5605 15.4395L13.7527 11.6317C14.5395 10.446 15 9.02625 15 7.5C15 3.3645 11.6355 0 7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C9.02625 15 10.446 14.5395 11.6317 13.7527L15.4395 17.5605C16.0245 18.1462 16.9755 18.1462 17.5605 17.5605C18.1462 16.9747 18.1462 16.0252 17.5605 15.4395V15.4395ZM2.25 7.5C2.25 4.605 4.605 2.25 7.5 2.25C10.395 2.25 12.75 4.605 12.75 7.5C12.75 10.395 10.395 12.75 7.5 12.75C4.605 12.75 2.25 10.395 2.25 7.5V7.5Z"
                                fill="#01A3FF" />
                        </svg>
                    </a></span>
            </div>
        
            <div class="row">
                <div class="col-md-4">
                    <input type="date" class="form-control" placeholder="Start Date">
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" placeholder="End Date">
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-primary btn-block">Run Report</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table id="example" class="display table datatables" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Trans ID</th>
                                    <th>Type</th>
                                    <th>Payee/Source</th>
                                    <th>Description</th>
                                    <th class="text-end">Debit/Credits</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ledgers as $key => $ledger)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{$ledger->idate}}{{$ledger->date}}</td>
                                    <td>{{$ledger->trans_id}}</td>
                                    <td>{{$ledger->type}}</td>
                                    <td>{{$ledger->source}}{{$ledger->payee}}</td>
                                    <td>{{$ledger->idesc}}{{$ledger->edesc}}</td>
                                    @if ($ledger->type == 'income')
                                    <td class="text-end text-primary">{{number_format($ledger->amount, 2)}}</td>
                                    @elseif ($ledger->type == 'expense')
                                    <td class="text-end text-danger">-{{number_format($ledger->amount, 2)}}</td>
                                    @else
                                    <td class="text-end">00.00</td>
                                    @endif
                                    <td>{{date('d-m-Y', strtotime($ledger->created_at))}}</td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No Transaction Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="6" class="text-end">Total Transaction:</th>
                                    <th class="text-end fw-bolder">{{number_format($ledgers->sum('iamount')-$ledgers->sum('eamount'), 2)}}</th>
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
    <script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- Datatable -->
    <script src="{{ asset('assets') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins-init/datatables.init.js"></script>

    <script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
@endpush