@extends('layouts.admin')

@section('title')
    Work Shift
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('assets')}}/vendor/select2/css/select2.min.css">
<link href="{{asset('assets')}}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="{{asset('assets')}}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
    Work Shift
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('shift.add')}}" class="btn btn-primary float-end">Add New Shift</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Shift Name</th>
                                    <th>Shift Type</th>
                                    <th>Working Hours</th>
                                    <th>Time Range</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($shifts as $key => $shift)
                                <tr>
                                    <td>{{$key +1 }}</td>
                                    <td>{{$shift->name}}</td>
                                    <td>{{$shift->type}}</td>
                                    <td>{{$shift->duration}}</td>
                                    <td>{{date('h:ia', strtotime($shift->start_time)) .'-'. date('h:ia', strtotime($shift->end_time))}}</td>
                                    <td class="view-mode" data-column-name="isActive">
                                        <span
                                            class="badge {{ $shift->isActive ? 'badge-success' : 'badge-danger' }} light">{{ $shift->isActive ? 'Active' : 'Inactive' }}</span>
                                    </td>
                                    <td class="edit-mode" style="display: none;">
                                        <input type="checkbox" name="isActive"
                                            @if ($shift->isActive) checked @endif>
                                    </td>
                                    <td>
                                        <ul class="action_btn">
                                            <li>
                                                <a href="javascript:void(0);" class="edit-button">
                                                    <i class="fa-solid fa-pen-to-square fa-xl"
                                                        style="color: #347af4;"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="save-button"
                                                    onclick="document.getElementById('updateForm{{ $key + 1 }}').submit()"
                                                    style="display: none;">
                                                    <i class="fa-solid fa-check fa-xl"
                                                        style="color: #00ff00;"></i>
                                                </a>
                                            </li>
                                            <li class="view-mode"><a href="javascript:void(0);"
                                                    onclick="document.getElementById('delete-form{{ $key + 1 }}').submit()"><i
                                                        class="fa-solid fa-trash fa-xl"
                                                        style="color: #ff0000;"></i></a></li>
                                        </ul>
                                    </td>
                                </tr> 
                                @empty
                                    
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script src="{{asset('assets')}}/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('assets')}}/vendor/select2/js/select2.full.min.js"></script>
<script src="{{asset('assets')}}/js/plugins-init/select2-init.js"></script>
<script>
    $(document).ready(function() {
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
        $('.edit-button').on('click', function(e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            switchToEditMode(row);
        });

        // Handle save button click
        $('.save-button').on('click', function(e) {
            e.preventDefault();
            var row = $(this).closest('tr');
            var updatedData = {};
            row.find('.edit-mode-cell').each(function() {
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
