@extends('layouts.admin')

@section('title')
    Position
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
<link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
   Position
@endsection
@section('content')
<div class="row">
    <div class="col-xl-5 col-lg-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Position</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="{{route('pos.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label text-primary">Select Department<span
                                    class="required">*</span></label>
                            <select id="department-select" class="form-control" name="dept_id">
                                <option value="">Options..</option>
                                @forelse ($depts as $dept)
                                <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
                                @empty
                                <option>No Department Found</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-primary" for="">Position Name <span class="required">*</span></label>
                            <input type="text" name="pos_name" required class="form-control input-default "
                                placeholder="Enter Position Name">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-lg-7">
        <div class="card" id="bootstrap-table4">
            <div class="card-header flex-wrap d-flex justify-content-between  border-0 px-3">
                <div>
                    <h4 class="card-title">Position List</h4>
                </div>
            </div>

            <!-- /tab-content -->
            <div class="tab-content" id="myTabContent-3">
                <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel"
                    aria-labelledby="home-tab-3">
                    <div class="card-body p-0">

                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Position</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                        <th style="text-align: end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($positions as $key => $pos)
                                    <tr class="view-mode-row">
                                        <form action="{{route('pos.update', $pos->id)}}" id="updateForm{{$key+1}}" method="post">
                                            @csrf
                                            @method('PUT')
                                        <th>{{$key+1}}</th>
                                        <td class="view-mode">{{$pos->position_name}}</td>
                                        <td class="edit-mode" style="display: none;">
                                            <input type="text" name="pos_name" required class="form-control input-default" value="{{$pos->position_name}}">
                                        </td>
                                        <td class="view-mode">{{$pos->department->dept_name}}</td>
                                        <td  class="edit-mode" style="display: none;">
                                            <select id="department-select" class="form-control" name="dept_id">
                                                <option value="">Options..</option>
                                                @forelse ($depts as $dept)
                                                <option @if($pos->dept_id == $dept->id) selected @endif value="{{$dept->id}}">{{$dept->dept_name}}</option>
                                                @empty
                                                <option>No Department Found</option>
                                                @endforelse
                                            </select>
                                        </td>
                                        <td class="view-mode" data-column-name="isActive">
                                            <span class="badge {{ $pos->isActive ? 'badge-success' : 'badge-danger' }} light">{{ $pos->isActive ? 'Active' : 'Inactive' }}</span>
                                        </td>
                                        <td class="edit-mode" style="display: none;">
                                            <input type="checkbox" name="isActive" @if ($pos->isActive) checked @endif>
                                        </td>
                                        <td>
                                            <ul class="action_btn">
                                                <li>
                                                    <a href="javascript:void(0);" class="edit-button">
                                                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: #347af4;"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="save-button" onclick="document.getElementById('updateForm{{$key+1}}').submit()" style="display: none;">
                                                        <i class="fa-solid fa-check fa-xl" style="color: #00ff00;"></i>
                                                    </a>
                                                </li>
                                                <li class="view-mode"><a href="javascript:void(0);" onclick="document.getElementById('delete-form{{$pos->id}}').submit()"><i class="fa-solid fa-trash fa-xl"
                                                    style="color: #ff0000;"></i></a></li>
                                            </ul>
                                        </td>
                                    </form>
                                    <form action="{{route('pos.delete', $pos->id)}}" method="POST" id="delete-form{{$pos->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    </tr> 
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No Data Found</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                            {{$positions->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
<script src="{{ asset('assets') }}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets') }}/vendor/select2/js/select2.full.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins-init/select2-init.js"></script>
<script>
    // Initialize Select2 for the "Select Employee" dropdown
    $('#department-select').select2();
</script>
<script>
    $(document).ready(function () {
        // Function to switch to edit mode
        function switchToEditMode(row) {
            row.addClass('edit-mode-row');
            row.find('.edit-button').hide();
            row.find('.view-mode').hide();
            row.find('.save-button').show();
            row.find('.edit-mode').show();
           
        }

        // Function to switch back to view mode
        function switchToViewMode(row) {
            row.removeClass('edit-mode-row');
            row.find('.edit-button').show();
            row.find('.view-mode').show();
            row.find('.save-button').hide();
            row.find('.edit-mode').hide();
            
        }

        // Handle edit button click
        $('.edit-button').on('click', function (e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            switchToEditMode(row);
        });

        // Handle save button click
        $('.save-button').on('click', function (e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            var updatedData = {};
            row.find('.edit-mode-cell').each(function () {
                var cell = $(this);
                var columnName = cell.data('column-name');
                var value = cell.find('input').val();
                updatedData[columnName] = value;
            });

            // Send updatedData to the server using AJAX
            // On success, switch back to view mode
            switchToViewMode(row);
        });
    });
</script>
@endpush