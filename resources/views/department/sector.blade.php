@extends('layouts.admin')

@section('title')
    Sector
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/select2/css/select2.min.css">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
    Sector
@endsection
@section('content')
    <div class="row mb-3">
        <div class="col-lg-12">
            <ul class="action_btn float-start">
                <li><a href="{{ route('sector.index') }}">Create New Sector</a></li>
                <li><a href="{{ route('sector.assign.tm') }}">Assign Team</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Sector</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('sector.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label text-primary" for="">Sector Name <span
                                        class="required">*</span></label>
                                <input type="text" name="sector_name" required class="form-control input-default"
                                    placeholder="Enter Sector Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Select Leader<span class="required">*</span></label>
                                <select id="emp-select" class="form-control" name="sector_leader">
                                    <option value="">Options...</option>
                                    @forelse ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @empty
                                        <option>No Employee Found</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-lg-8">
            <div class="card" id="bootstrap-table4">
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Sector List</h4>
                    </div>
                </div>

                <!-- /tab-content -->
                <div class="tab-content" id="myTabContent-3">
                    <div class="tab-pane fade show active" id="withoutBorder" role="tabpanel" aria-labelledby="home-tab-3">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-responsive-sm table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sector Name</th>
                                            <th>Sector Leader</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sectors as $key => $sector)
                                        <form action="{{route('sector.update', $sector->id)}}" id="updateForm{{ $key + 1 }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <tr class="view-mode-row">
                                            <td>{{ $key + 1 }}</td>
                                            <td class="view-mode">{{ $sector->sector_name }}</td>
                                            <td class="edit-mode" style="display: none;">
                                                <input type="text" name="sector_name"
                                                    value="{{ $sector->sector_name }}" class="form-control">
                                            </td>
                                            <td class="view-mode">
                                                @if ($sector->sector_leader)
                                                    {{ $sector->leader->name }}
                                                @else
                                                    Not Assigned
                                                @endif
                                            </td>
                                            <td class="edit-mode" style="display: none;">
                                                <select id="emp-select" class="form-control" name="sector_leader">
                                                    @if ($sector->sector_leader)
                                                    <option selected value="{{ $sector->sector_leader }}">
                                                        {{ $sector->leader->name }}</option>
                                                        <option style="color: #ff0000" value="">Remove</option>
                                                @endif
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="view-mode" data-column-name="isActive">
                                                <span
                                                    class="badge {{ $sector->isActive ? 'badge-success' : 'badge-danger' }} light">{{ $sector->isActive ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td class="edit-mode" style="display: none;">
                                                <input type="checkbox" name="isActive"
                                                    @if ($sector->isActive) checked @endif>
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
                                        </form>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Sector Found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{$sectors->links()}}
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
            $('#emp-select').select2();
        </script>
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
