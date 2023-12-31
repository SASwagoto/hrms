@extends('layouts.admin')

@section('title')
    Zone
@endsection

@section('header')
    Zone
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-5 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Zone</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{route('zone.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label text-primary">Zone Name <span class="required">*</span></label>
                                <input type="text" required name="zone_name" class="form-control input-default"
                                    placeholder="Enter Zone Name">
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
                <div class="card-header d-flex justify-content-between flex-wrap border-0 px-3">
                    <div>
                        <h4 class="card-title">Zone List</h4>
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
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($zones as $key => $zone)
                                        <tr class="view-mode-row">
                                            <form action="{{route('zone.update', $zone->id)}}" method="POST" id="updateForm{{$key+1}}">
                                            @csrf
                                            @method('PUT')
                                            <td>{{$key + 1}}</td>
                                            <td class="view-mode">{{$zone->zone_name}}</td>
                                            <td class="edit-mode" style="display: none;">
                                                <input type="text" class="form-control" name="zone_name" id="" value="{{$zone->zone_name}}">
                                            </td>
                                            <td class="view-mode" data-column-name="isActive">
                                                <span class="badge {{ $zone->isActive ? 'badge-success' : 'badge-danger' }} light">{{ $zone->isActive ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td class="edit-mode" style="display: none;">
                                                <input type="checkbox" name="isActive" @if ($zone->isActive) checked @endif>
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
                                                    <li><a href="javascript:void(0);" onclick="document.getElementById('delete-form{{$key+1}}').submit()"><i class="fa-solid fa-trash fa-xl"
                                                        style="color: #ff0000;"></i></a></li>
                                                </ul>
                                            </td>
                                            </form>
                                            <form action="{{route('zone.delete', $zone->id)}}" method="POST" id="delete-form{{$key+1}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No Zone Found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{-- <table class="table-striped table-responsive-sm table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th style="text-align: end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($Zones as $key => $dept)
                                            <tr>
                                                <th>{{ $key + 1 }}</th>
                                                <td>{{ $dept->dept_name }}</td>
                                                <td><span
                                                        class="badge {{ $dept->isActive ? 'badge-success' : 'badge-danger' }} light">{{ $dept->isActive ? 'Active' : 'Inactive' }}</span>
                                                </td>
                                                <td>
                                                    <ul class="action_btn">
                                                        <li><a href="#"><i class="fa-solid fa-pen-to-square fa-xl"
                                                                    style="color: #347af4;"></i></a></li>
                                                        <li><a href="#"  ><i
                                                                    class="fa-solid fa-trash fa-xl"
                                                                    style="color: #ff0000;"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">No Zone Found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('js')
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
