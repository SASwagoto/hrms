@extends('layouts.admin')

@section('title')
    Attendance
@endsection
@push('css')
    <link href="{{ asset('assets') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
@endpush
@section('header')
    Attendance
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive ">
					<table id="example" class="display table datatables" style="min-width: 845px">
						<thead>
							<tr>
								<th>Date</th>
								<th>Status</th>
								<th>Clock-In</th>
								<th>Clock-Out</th>
								<th>Hours</th>
								<th>Overtime</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>10th Octobor 2023</td>
								<td>Present</td>
								<td>11:00</td>
								<td>08:00</td>
								<td>9</td>
								<td>1</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Date</th>
								<th>Status</th>
								<th>Clock-In</th>
								<th>Clock-Out</th>
								<th>Hours</th>
								<th>Overtime</th>
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
