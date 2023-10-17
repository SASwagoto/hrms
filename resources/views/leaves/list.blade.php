@extends('layouts.admin')

@section('title')
    Leave
@endsection
@push('css')
<link href="{{ asset('assets') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
    Leave
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<a href="{{route('leave.add_req')}}" class="btn btn-primary">Add Leave Request</a>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example" class="display table datatables" style="min-width: 845px">
						<thead>
							<tr>
								<th>ID</th>
								<th>Leave Type</th>
								<th>From</th>
								<th>To</th>
								<th>Days</th>
								<th>Reason</th>
								<th>Applied On</th>
								<th>Status</th>
								<th class="text-end" >Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Sick Leave</td>
								<td>11/10/2023</td>
								<td>13/10/2023</td>
								<td>3</td>
								<td>Sick Leave</td>
								<td>10/10/2023</td>
								<td><span class="badge badge-success light">Approved</span></td>
								<td>
									<ul class="action_btn">
										<li><a href="/#"><i
													class="fa-solid fa-circle-info fa-beat"
													style="color: #12a561;"></i></a></li>
										<li><a href="#"><i class="fa-solid fa-pen-to-square"
													style="color: #347af4;"></i></a></li>
										<li><a href="#"><i class="fa-solid fa-trash"
													style="color: #ff0000;"></i></a></li>
									</ul>
								</td>
			
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>Leave Type</th>
								<th>From</th>
								<th>To</th>
								<th>Days</th>
								<th>Reason</th>
								<th>Applied On</th>
								<th>Status</th>
								<th>Action</th>
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